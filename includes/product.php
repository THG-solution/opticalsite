
<div class='product-list-container mx-5 w-80'>
<?php 
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php"; }
    else {
        include "database/db_controller.php";
        include "database/db_table.php";}
    $req_url = 'https://v6.exchangerate-api.com/v6/7b1169dd93ff5a2c2b27eeff/latest/USD';
    $response_json = file_get_contents($req_url);
    $db = new DBController();
    $product = new Table($db);
    $resultSet = $product->queryData("SELECT DISTINCT pd.product_id AS product_id, (SELECT c.image from product_colors c WHERE c.product_id=pd.product_id LIMIT 1) AS image, (SELECT  p.avg_star from products p where pd.product_id=p.product_id) AS avg_star,(SELECT  p.total_review from products p where pd.product_id=p.product_id) AS total_review, (SELECT  p.price from products p where pd.product_id=p.product_id) AS price  FROM products pd");
           foreach ($resultSet as $result)
           {
            $con_price = '';
            $GLOBALS['symbol'] = '';
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
                            $con_price = round(($base_price * $response->conversion_rates->USD), 2);
                            // $GLOBALS['symbol'] = '$';
                        }
                        else {
                            $val = $_GET['to'];
                            if ($val == 'USD') $GLOBALS['symbol'] = '$';
                            else if ($val == 'EUR') $GLOBALS['symbol'] = '&euro;';
                            else if ($val == 'PKR') $GLOBALS['symbol'] = 'Rs';
                            else if ($val == 'INR') $GLOBALS['symbol'] = '&#x20B9;';
                            $con_price = round(($base_price * $response->conversion_rates->$val), 2);}
                    }
                }
                catch(Exception $e) {
                    echo $e;
                }
            }
                echo "
                <div class='product-list-item my-4'>
    <picture class='product-img my-5'>
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
            <img src='../assests/images/trending.png' class='icon-ht mb-2 mr-3' alt=''>
            <p>{$result['product_id']}</p>
        </div>
        <span class=''> 
            <span class='icon-heart-empty' style='color:#26ABFF;font-size:20px'></span>
        </span>
    </div>
    
        <div class='product-more-info d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
                <div class='d-flex align-items-center mb-1 mr-2'>";
                $stars = $result['avg_star'];

                switch ($stars) {
                    case  (1):
                    echo "
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                </div>";
                    break;
                    case  (2):
                        echo "
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star empty'></span>
                        <span class='fa fa-star empty'></span>
                        <span class='fa fa-star empty'></span>
                    </div>";
                    break;
                    case  (3):
                        echo "
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star empty'></span>
                        <span class='fa fa-star empty'></span>
                    </div>";
                    break;
                    case  (4):
                        echo "
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star empty'></span>
                    </div>";
                    break;
                    case  (5):
                        echo "
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                    </div>";
                    break;
                            
                    default:
                    echo "<div class='d-flex align-items-center mb-1 mr-2'>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    <span class='fa fa-star empty'></span>
                    </div>";
            }
            echo "
            <p class='h-review-p mb-2'>{$result['total_review']} Reviews</p>
            </div>
            <div class='d-flex'>
            <p class='h-product-price mb-2'>
                {$symbol} {$con_price}
            </p>

            </div>
        </div>
    </div>
   ";
            }
        ?>
</div>
