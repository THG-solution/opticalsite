<div class='product-list-container mx-5'>
<?php 
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php"; }
    else {
        include "database/db_controller.php";
        include "database/db_table.php";}
    $con = true;
    try {
        $req_url = 'https://v6.exchangerate-api.com/v6/7b1169dd93ff5a2c2b27eeff/latest/USD';
        $response_json = file_get_contents($req_url);
    }
    catch (Exception $e) {
        $con = false;
    }
    $db = new DBController();
    $product = new Table($db);
    $pgdata = ''; $gender = ''; $shape = ''; $material = ''; $colour = '';
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'meneye' ) $pgdata = " and gender IN ('men','unisex') and category = 'frames' ";
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'mensunglass' ) $pgdata = " and gender IN ('men','unisex') and category = 'sunglasses' ";
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'menall' ) $pgdata = " and gender IN ('men','unisex')";
    
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'womeneye' ) $pgdata = " and gender IN ('women','unisex') and category = 'frames' ";
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'womensunglass' ) $pgdata = " and gender IN ('women','unisex') and category = 'sunglasses' ";
    if (!empty($_GET['pgdata']) && $_GET['pgdata'] == 'womenall' ) $pgdata = " and gender IN ('women','unisex')";
    
    if (!empty($_GET['gender'])) $gender = " and gender IN ({$_GET['gender']}) ";
    if (!empty($_GET['gender']) && $_GET['gender'] == "'men'") $gender = " and gender IN ('unisex','men') ";
    if (!empty($_GET['gender']) && $_GET['gender'] == "'women'") $gender = " and gender IN ('unisex','women') ";
    if (!empty($_GET['gender']) && ($_GET['gender'] == "'men','women'" || $_GET['gender'] == "'women','men'")) $gender = " and gender IN ('unisex','men','women') ";
    if (!empty($_GET['shape'])) $shape = " and frame_shape IN ({$_GET['shape']}) ";
    if (!empty($_GET['material'])) $material = " and material IN ({$_GET['material']}) ";
    if (!empty($_GET['colour'])) $colour = " and colour_name IN ({$_GET['colour']}) ";
        $resultSet = $product->queryData("SELECT DISTINCT pd.product_id AS product_id, (SELECT c.img1 from product_colors c WHERE c.product_id=pd.product_id LIMIT 1) AS image, (SELECT  p.avg_star from products p where pd.product_id=p.product_id) AS avg_star,(SELECT  p.total_review from products p where pd.product_id=p.product_id) AS total_review, (SELECT  p.price from products p where pd.product_id=p.product_id) AS price FROM products pd, product_colors pc where pc.product_id=pd.product_id 
        {$pgdata}{$gender}{$shape}{$material}{$colour}");
           foreach ($resultSet as $result)
           {
            $con_price = '';
            $symbol = '';
            if(false !== $response_json) {
                try {
                    $response = json_decode($response_json);
                    if('success' === $response->result) {
                        $base_price = $result['price'];
                        if (empty($_GET['to'])){
                            // $ip = $_SERVER['REMOTE_ADDR'];
                            // $ip = '39.40.27.157';
                            // $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
                            // $v = $details->currency->code;
                            if ($con) $con_price = round(($base_price * $response->conversion_rates->$val), 2);
                            else $con_price = $result['price'];
                            $symbol = '$';
                        }
                        else {
                            $val = $_GET['to'];
                            if ($val == 'USD') $symbol = '$';
                            else if ($val == 'EUR') $symbol = '&euro;';
                            else if ($val == 'PKR') $symbol = 'Rs';
                            else if ($val == 'INR') $symbol = '&#x20B9;';
                            if ($con) $con_price = round(($base_price * $response->conversion_rates->$val), 2);
                            else $con_price = $result['price'];
                        }
                    }
                }
                catch(Exception $e) {
                    echo $e;
                }
            }
                echo "
                <div class='product-list-item'>
    <picture class='product-img'>
        <a href='/includes/product_desc.php?id={$result['product_id']}'>
        <img src='../assests/images/{$result['image']}' alt=''>  
        </a>
    </picture>
    <ul class='product-variation d-flex justify-content-center'>
        <li class='product-variation-list'>
            <span style='background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)' class='product-variation-list-item '></span>
        </li>
        <li class='product-variation-list'>
            <span style='background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)' class='product-variation-list-item '></span>
        </li>
        <li class='product-variation-list'>
            <span style='background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)' class='product-variation-list-item '></span>
        </li>
        <li class='product-variation-list'>
            <span style='background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)' class='product-variation-list-item '></span>
        </li>
    </ul>
    <div class='product-info d-flex align-items-center justify-content-between'>
        <div class='d-flex align-items-center'>
            <img src='../assests/images/trending.png' class='icon-ht' alt=''>
            <p>{$result['product_id']}</p>
        </div>
        <span class=''> 
            <span class='icon-heart-empty' style='color:#26ABFF;font-size:20px'></span>
        </span>
    </div>
    
        <div class='product-more-info d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
                <div class='d-flex align-items-center mb-1 mr-2'>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star empty'></span>
                </div>
                <p class='h-review-p mb-2'>{$result['total_review']} Reviews</p>
            </div>
            <div class='d-flex'>
            <p class='h-product-price mb-2'>
                {$symbol} {$con_price}
            </p>

            </div>
        </div>
    </div>   ";
            }
        ?>
</div>