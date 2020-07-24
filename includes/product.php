
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
    $resultSet = $product->getData('products');
           foreach ($resultSet as $result)
           {
            $con_price = '';
            $GLOBALS['symbol'] = '';
            if(false !== $response_json) {
                try {
                    $response = json_decode($response_json);
                    if('success' === $response->result) {
                        $base_price = $result['p_prize'];
                        if (empty($_GET['to'])){
                            // $ip = $_SERVER['REMOTE_ADDR'];
                            $ip = '11.11.11.11';
                            $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
                            $v = $details->currency->code;
                            $con_price = round(($base_price * $response->conversion_rates->$v), 2);
                            $GLOBALS['symbol'] = '$';
                        }
                        else {
                            $val = $_GET['to'];
                            if ($val == 'USD') $GLOBALS['symbol'] = '$';
                            else if ($val == 'EUR') $GLOBALS['symbol'] = '&euro;';
                            else if ($val == 'PKR') $GLOBALS['symbol'] = 'Rs';
                            $con_price = round(($base_price * $response->conversion_rates->$val), 2);}
                    }
                }
                catch(Exception $e) {
                    echo $e;
                }
            }
                echo "
                <div class='product-list-item'>
    <picture class='product-img'>
        <a href='/includes/product_desc.php'>
        <img src=". base64_encode($result['image'])." alt=''>  
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
            <img src='../assests/images/icon_hot.png' class='icon-ht' alt=''>
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
            <p class='h-review-p mb-2'>182 Reviews</p>
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
<div class="product-list-container">
<div class="product-list-item">
    <picture class="product-img">
        <a href="/includes/product_desc.php">
        <img src="../assests/images/gls.txt" alt="">  
        </a>
    </picture>
    <ul class="product-variation d-flex justify-content-center">
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
    </ul>
    <div class="product-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="../assests/images/icon_hot.png" class="icon-ht" alt="">
            <p>ST947</p>
        </div>
        <span class=""> 
            <span class="icon-heart-empty" style="color:#26ABFF;font-size:20px"></span>
        </span>
    </div>
    <div class="product-more-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center mb-1 mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star empty"></span>
            </div>
            <p class="h-review-p mb-2">182 Reviews</p>
        </div>
        <div class="d-flex">
            <p class="h-product-price mb-2">
                $ 3.94
            </p>

        </div>
    </div>
</div>    

<div class="product-list-item">
    <picture class="product-img">
        <img src="../assests/images/gls.txt" alt="">  
    </picture>
    <ul class="product-variation d-flex justify-content-center">
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
    </ul>
    <div class="product-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
             <img src="../assests/images/icon_hot.png" class="icon-ht" alt="">
            <p>ST947</p>
        </div>
        <span class=""> 
            <span class="icon-heart-empty" style="color:#26ABFF;font-size:20px"></span>
        </span>
    </div>
    <div class="product-more-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center mb-1 mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star empty"></span>
            </div>
            <p class="h-review-p mb-2">182 Reviews</p>
        </div>
        <div class="d-flex">
            <p class="h-product-price mb-2">
                $ 3.94
            </p>

        </div>
    </div>
</div>    

<div class="product-list-item">
    <picture class="product-img">
        <img src="../assests/images/gls.txt" alt="">  
    </picture>
    <ul class="product-variation d-flex justify-content-center">
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
        <li class="product-variation-list">
            <span style="background-size:100% 100%;background:linear-gradient(#000,#9a7a3f)" class="product-variation-list-item "></span>
        </li>
    </ul>
    <div class="product-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="assests/images/icon_hot.png" class="icon-ht" alt="">
            <p>ST947</p>
        </div>
        <span class=""> 
            <span class="icon-heart-empty" style="color:#26ABFF;font-size:20px"></span>
        </span>
    </div>
    <div class="product-more-info d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center mb-1 mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star empty"></span>
            </div>
            <p class="h-review-p mb-2">182 Reviews</p>
        </div>
        <div class="d-flex">
            <p class="h-product-price mb-2">
                $ 3.94
            </p>

        </div>
    </div>
</div>    





</div>
