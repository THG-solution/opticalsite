<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?php

        if (!file_exists("database/db_controller.php")) {
            include "../database/db_controller.php";
            include "../database/db_table.php";
        } else {
            include "database/db_controller.php";
            include "database/db_table.php";
        }
        $id = $_GET['id'];
        $db = new DBController();
        $product = new Table($db);
        $resultSet = $product->getProductData("{$id}");

        echo "{$resultSet['product_id']}";
        $db = null;

        ?>
    </title>
</head>
<style>

</style>

<body>

    <div class="container col-12">
        <?php include "head.php" ?>
        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">
                        <div class="pd-product-banner col-lg-1 px-0">
                            <div id="banner" style="transform:translateY(0px);transition:all 0.3s">
                                <?php
                                $db = new DBController();
                                $product = new Table($db);
                                $fcolor = $product->queryData("SELECT colour_name from product_colors where product_id = {$id} LIMIT 1");
                                $color = $fcolor['colour_name']; 
                                                           
                                $result = $product->queryData("SELECT img1, img2 , img3  FROM  product_colors  WHERE product_id = '{$id}' and colour_name = '{$color}'");
                                $db = null;
                                ?>
                                <div class="pd-product-control-item">
                                    <picture class="imgBox">
                                        <img src=<?php echo "'../assests/images/{$result['img1']}'" ?> class="w-100 im" alt="">
                                    </picture>
                                </div>
                                <div class="pd-product-control-item">
                                    <picture class="imgBox">
                                        <img src=<?php echo "'../assests/images/{$result['img2']}'" ?> class="w-100 im" alt="">
                                    </picture>
                                </div>
                                <div class="pd-product-control-item">
                                    <picture class="imgBox">
                                        <img src=<?php echo "'../assests/images/{$result['img3']}'" ?> class="w-100 im" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <?php
                        $db = new DBController();
                        $product = new Table($db);
                        $result = $product->queryData("SELECT c.img1, p.avg_star, p.total_review FROM products p, product_colors c WHERE c.product_id = p.product_id and p.product_id = '{$id}' and c.colour_name = '{$color}' LIMIT 1");
                        $db = null;

                        ?>
                        <div class='pd-pic-div d-flex flex-row align-items-center justify-content-center w-100 col-lg-11'>
                            <picture id="main_img" class='d-flex  justify-content-center'>
                                <img class='pd-img' id='main-image' src=<?php echo "'../assests/images/{$result['img1']}'" ?> alt=''>
                            </picture>
                        </div>
                    </div>

                    <div class='d-flex flex-column  w-100 col-lg-11'>
                        <div class='row'>
                            <div class='pd-product-list-title d-flex ml-5 col-lg-12 pl-0'>
                                <h2>Customer Reviews ( <span id='pd-reviewNo'> <?php echo "{$result['total_review']}" ?></span> )</h2>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='pd-rating-body  ml-5 pt-5 pb-5 w-100'>
                                <div class='d-flex flex-column pl-5'>
                                    <p>
                                        Average Rating ( <?php echo "{$result['avg_star']}" ?>)
                                    </p>
                                    <div class='d-flex align-items-center'>
                                        <div class='d-flex align-items-center mb-1 mr-2'>
                                            <?php
                                            $stars = $result['avg_star'];
                                            switch ($stars) {
                                                case (1):
                                                    echo "
                                                                    <span class='fa fa-star checked'></span>
                                                                    <span class='fa fa-star empty'></span>
                                                                    <span class='fa fa-star empty'></span>
                                                                    <span class='fa fa-star empty'></span>
                                                                    <span class='fa fa-star empty'></span>
                                                                </div>";
                                                    break;
                                                case (2):
                                                    echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                    break;
                                                case (3):
                                                    echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                    break;
                                                case (4):
                                                    echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                    break;
                                                case (5):
                                                    echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                    </div>";
                                                    break;

                                                default: ?>

                                                    <span class='fa fa-star empty'></span>
                                                    <span class='fa fa-star empty'></span>
                                                    <span class='fa fa-star empty'></span>
                                                    <span class='fa fa-star empty'></span>
                                                    <span class='fa fa-star empty'></span>
                                        </div>
                                <?php } ?>

                                <p class='h-review-p mb-2'><?php echo "{$result['total_review']}" ?> Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='mt-5 ml-5'>
                        <ul class='nav nav-tabs' id='myTab' role='tablist'>
                            <li class='nav-item'>
                                <a class='nav-link active' id='home-tab' data-toggle='tab' href='#all-reviews' role='tab' aria-controls='home' aria-selected='true'>All Reviews</a>
                            </li>
                            <li class='nav-item'>
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#images" role="tab" aria-controls="profile" aria-selected="false">Images</a>
                            </li>
                        </ul>
                        <?php

                        $db = new DBController();
                        $product = new Table($db);
                        $resultSet = $product->queryData("SELECT * FROM product_review where product_id = '$id'");
                        if (!is_array($resultSet)) {
                            $resultSet = array();
                        }
                        ?>
                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-reviews" role="tabpanel" aria-labelledby="home-tab">
                                <?php
                                if (!empty($resultSet) && count($resultSet) == 4) { ?>
                                    <div class="row my-3">
                                        <div class="col-lg-3">
                                            <div class="pd-review-name">
                                                <h5 style="text-transform: capitalize"> <?php echo "{$resultSet['review_person']}" ?> </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="pd-review-comment">

                                                <div class="d-flex align-items-center mb-1 mr-2">
                                                    <?php $stars = $resultSet['review_star'];

                                                    switch ($stars) {
                                                        case (1):
                                                            echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                            break;
                                                        case (2):
                                                            echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                            break;
                                                        case (3):
                                                            echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                            break;
                                                        case (4):
                                                            echo "
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star empty'></span>
                                                                    </div>";
                                                            break;
                                                        case (5):
                                                            echo "
                                                                       <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                        <span class='fa fa-star checked'></span>
                                                                    </div>";
                                                            break;

                                                        default: ?>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                </div>
                                        <?php }
                                                    echo "{$resultSet['review_comment']}" ?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <?php
                                } elseif (count($resultSet) > 4) {
                                    foreach ($resultSet as $result) {  ?>
                                <div class="row my-3">
                                    <div class="col-lg-3">
                                        <div class="pd-review-name">
                                            <h5 style="text-transform: capitalize"> <?php echo "{$result['review_person']}" ?> </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="pd-review-comment">
                                            <div class="d-flex align-items-center mb-1 mr-2">
                                                <?php $stars = $result['review_star'];
                                                switch ($stars) {
                                                    case (1):
                                                        echo "
                                                            <span class='fa fa-star checked'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                            <span class='fa fa-star empty'></span>
                                                        </div>";
                                                        break;
                                                    case (2):
                                                        echo "
                                                        <span class='fa fa-star checked'></span>
                                                        <span class='fa fa-star checked'></span>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                                    </div>";
                                                        break;
                                                    case (3):
                                                        echo "
                                                    <span class='fa fa-star checked'></span>
                                                    <span class='fa fa-star checked'></span>
                                                    <span class='fa fa-star checked'></span>
                                                    <span class='fa fa-star empty'></span>
                                                    <span class='fa fa-star empty'></span>
                                                </div>";
                                                        break;
                                                    case (4):
                                                        echo "
                                                <span class='fa fa-star checked'></span>
                                                <span class='fa fa-star checked'></span>
                                                <span class='fa fa-star checked'></span>
                                                <span class='fa fa-star checked'></span>
                                                <span class='fa fa-star empty'></span>
                                            </div>";
                                                        break;
                                                    case (5):
                                                        echo "
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                    </div>";
                                                        break;

                                                    default:
                                                ?>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                                        <span class='fa fa-star empty'></span>
                                            </div><?php
                                                }
                                                echo "{$result['review_comment']}" ?>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                                } else {
                                    echo "No Reviews </div>";
                                }
                        ?>
                        </div>
                    </div>
                </div>
                <?php
                $db = new DBController();
                $product = new Table($db);
                $resultSet = $product->getProductData("{$id}");
                ?>
                <div class='col-lg-4'>
                    <div class='pd-product-info d-flex align-items-center justify-content-between'>
                        <div class='d-flex align-items-center'>
                            <img src='../assests/images/trending.png' class='icon-ht' alt=''>
                            <p><?php echo "{$resultSet['product_id']}"; ?></p>
                        </div>
                        <span class=''>
                            <span class='icon-heart-empty' style='color:#26ABFF;font-size:20px'></span>
                        </span>
                    </div>
                    <div>
                        <span class='pd-product-price'>
                            <?php echo "$ {$resultSet['price']}" ?>
                        </span>
                    </div>
                    <div>
                        <div class='pd-size-title'>
                            <span> Size</span>
                        </div>
                        <div class='d-flex' style='cursor: pointer'>
                            <div class='pd-product-size-icon'>L</div>
                            <span> Frame size guide</span>
                        </div>
                    </div>
                    <div class='pd-color-container'>
                        <div class='pd-color-text'>
                            <span> Select Color :</span>
                        </div>
                        <div class='d-flex align-items-center py-2 mt-2'>
                            <ul class='product-variation d-flex justify-content-center'>

                                <?php
                                $colourSet = $product->queryData("SELECT * FROM `product_colors` AS pc, `color_name` AS cn WHERE pc.colour_name=cn.colour_name AND product_id='{$id}'");
                                // print_r($colourSet);
                                if(!is_array($colourSet)){
                                    $colourSet = array();
                                }
                                // print_r(count($colourSet));
                                if (count($colourSet) == 6) { 
                                    $colour = $colourSet;?>
                                    <li class='pd-color-list'>
                                        <span id=<?php echo "{$colour['colour_name']}"?> class='c-list product-variation-list-item' style=<?php echo "background-size:100%;background:radial-gradient({$colour['code']},{$colour['code']},#000)" ?>></span>
                                    </li>
                                    <?php
                                } elseif (count($colourSet) < 6) {
                                    foreach ($colourSet as $colour) { ?>
                                        
                                        <li class='pd-color-list'>
                                            <span id=<?php echo "{$colour['colour_name']}"?>  class='c-list product-variation-list-item' style=<?php echo "background-size:100%;background:radial-gradient({$colour['code']},{$colour['code']},#000)" ?>></span>
                                        </li>
                                <?php
                                    }
                                }else{

                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class='pd-select-btn-container'>
                        <div class='d-flex align-items-center justify-content-between' style='height:52px;'>
                            <div class='pd-select-btn'>
                                <a href=<?php echo "../prescription.php?id={$_GET['id']}"; ?> class="text-white"> Select Lenses</a>
                            </div>
                        </div>
                    </div>
                    <div class='pd-spec-container'>
                        <span>Specifications</span>
                    </div>
                    <div class='pd-spec-details'>
                        <span class='py-5'></span>
                        <ul class='py-4'>
                            <li class='pb-2'><?php echo " Brand: {$resultSet['brand']}" ?></li>
                            <li class='pb-2'><?php echo " Total Width: {$resultSet['temple_size']}" ?> mm</li>
                            <li class='pb-2'><?php echo " Lens Diagonal Size: {$resultSet['lens_size']}" ?> mm</li>
                            <li class='pb-2'><?php echo " Bridge Size: {$resultSet['bridge_size']}" ?> mm</li>
                            <li class='pb-2'> <?php echo "Frame Shape: {$resultSet['frame_shape']}" ?></li>
                            <li class='pb-2'><?php echo " Frame Type : {$resultSet['frame_type']}" ?> </li>
                            <li class='pb-2'><?php echo " Material: {$resultSet['material']}" ?></li>
                            <li class='pb-2'><?php echo " Category: {$resultSet['category']}" ?></li>
                            <li class='pb-2'><?php echo " Gender: {$resultSet['gender']}" ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="pd-product-list-title ml-5">
                    <h2>Similar Frames</h2>
                </div>
                <div class="pd-product-list d-flex justify-content-start w-100 mb-5">

                    <?php
                    $db = new DBController();
                    $product = new Table($db);
                    $resultSet = $product->queryData("SELECT DISTINCT pd.product_id AS product_id, (SELECT c.img1 from product_colors c WHERE c.product_id=pd.product_id LIMIT 1) AS image, (SELECT  p.avg_star from products p where pd.product_id=p.product_id) AS avg_star,(SELECT  p.total_review from products p where pd.product_id=p.product_id) AS total_review, (SELECT  p.price from products p where pd.product_id=p.product_id) AS price  FROM products pd WHERE product_id > {$id} LIMIT 3");
                    if (!is_array($resultSet)) {
                        $resultSet = array();
                    }
                    if (count($resultSet) > 5)
                        foreach ($resultSet as $result) { ?>
                        <div class="pd-product-list-item">
                            <a <?php echo "href='product_desc.php?id={$result['product_id']}'" ?>>
                                <picture class="imgBox">
                                    <img src=<?php echo "../assests/images/{$result['image']}" ?> class="w-100" alt="">
                                </picture>
                                <div class="d-flex justify-content-center">
                                    <span> <?php echo "{$result['product_id']}" ?></span>
                                </div>
                            </a>
                        </div>
                    <?php }
                    elseif (count($resultSet) == 5) {
                        $result = $resultSet;
                    ?>
                        <div class="pd-product-list-item">
                            <a <?php echo "href='product_desc.php?id={$result['product_id']}'" ?>>
                                <picture class="imgBox">
                                    <img src=<?php echo "../assests/images/{$result['image']}" ?> class="w-100" alt="">
                                </picture>
                                <div class="d-flex justify-content-center">
                                    <span> <?php echo "{$result['product_id']}" ?></span>
                                </div>
                            </a>
                        </div>
                    <?php } else {
                    }
                    ?>
                </div>

            </div>
        </div>
        <script>
           var prd_id = <?php echo $id ?>; 
           
        </script>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/jquery_func.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>