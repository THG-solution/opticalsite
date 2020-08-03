<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class='cart-body'>

    <?php include "includes/head.php" ?>
    <div class="container mt-5">
        <center>
            <h2 class='text-primary'>SHOPPING CART</h2>
        </center>
        <div class="row">
            <div class="col-lg-8">
                <?php
                if (!file_exists("database/db_controller.php")) {
                    include "../database/db_controller.php";
                    include "../database/db_table.php";
                } else {
                    include "database/db_controller.php";
                    include "database/db_table.php";
                }
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                }
                $db = new DBController();
                $product = new Table($db);
                $resultSet = $product->queryData("SELECT * FROM cart WHERE email = '$email' ");
                if (count($resultSet, 1) == 11) {
                    $result = $resultSet; ?>

                    <div class='cart-box box-color'>
                        <div class='row'>
                            <div class="col-lg-4">
                                <div class='imgBox' '>
                                    <?php
                                    $imgResult = $product->queryData("SELECT c.img1, p.price FROM products p, product_colors c WHERE c.product_id = p.product_id and p.product_id = '{$result['product_id']}' and c.colour_name = '{$result['colour_name']}' LIMIT 1");
                                    ?>
                                <img src= <?php echo "assests/images/{$imgResult['img1']}" ?> style=' height:100%;' class='imgBox' alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 mt-4 cart-text">
                                <div class="d-flex justify-content-between pr-4 mb-3">
                                    <div>
                                        <b> Product ID:</b> #<span id=''> <?php echo "{$result['product_id']}" ?> </span>
                                    </div>
                                    <div>
                                        $ <span> <?php echo "{$imgResult['price']}" ?></span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pr-4 mb-3">
                                    <div>
                                        <b> Color:</b> <span id='' class='cart-text'><?php echo "{$result['colour_name']}" ?></span>
                                    </div>
                                    <!-- <div>
                                    $ <span> 350 </span>
                                </div> -->
                                </div>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        <b> Lens Details: </b> <span id=''></span>
                                    </div>
                                    <div class=''>
                                        <?php
                                        $cp = $result['coating_price'];
                                        $lp = $result['lens_price'];
                                        $tp = $cp + $lp;
                                        ?>
                                        Total: $ <span> <?php echo $tp ?> </span>
                                    </div>
                                </div>
                                <div class='pc-lens-bar-price-item ml-2'>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            <b> Lens Type: </b> <span id='' class='cart-text'><?php echo "{$result['lens_type']}" ?></span>
                                        </div>
                                        <!-- <div>
                                        $ <span>  </span>
                                    </div> -->
                                    </div>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            <b> Prescription Available: </b> <span id='' class='cart-text'><?php echo "{$result['prescription']}" ?></span>
                                        </div>
                                        <!-- <div>
                                    $ <span> 350 </span>
                                </div> -->
                                    </div>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            <b> Lens : </b> <span id=''><?php echo "{$result['lens']}" ?></span>
                                        </div>
                                        <div class=''>
                                            $ <span> <?php echo "{$result['lens_price']}" ?></span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            <b> Coating : </b> <span id=''><?php echo "{$result['coating']}" ?></span>
                                        </div>
                                        <div class=''>
                                            $ <span> <?php echo "{$result['coating_price']}" ?></span>
                                        </div>
                                    </div>

                                </div>
                                <div class='d-flex justify-content-between mt-4'>
                                    <div>
                                        QTY:
                                    </div>
                                    <input type="number" name="quantity" min="1" max="10" class='h-25 pl-2 mr-3 quantity'>
                                </div>
                                <hr class='mx-3'>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        Total Price
                                    </div>
                                    <div class=''>
                                        <?php
                                        $gtp = $tp + $imgResult['price'];
                                        ?>
                                        $ <span class='gtp'> <?php echo $gtp ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                } elseif (count($resultSet, 1) > 11) {
                    foreach ($resultSet as $result) {
                    ?>
                        <div class='cart-box box-color my-2'>
                            <div class='row'>
                                <div class="col-lg-4">
                                    <div class='imgBox' '>
                                    <?php
                                    $imgResult = $product->queryData("SELECT c.img1, p.price FROM products p, product_colors c WHERE c.product_id = p.product_id and p.product_id = '{$result['product_id']}' and c.colour_name = '{$result['colour_name']}' LIMIT 1");
                                    ?>
                                <img src= <?php echo "assests/images/{$imgResult['img1']}" ?> style=' height:100%;' class='imgBox' alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-4 cart-text">
                                    <div class="d-flex justify-content-between pr-4 mb-3">
                                        <div>
                                            <b> Product ID:</b> #<span id=''> <?php echo "{$result['product_id']}" ?> </span>
                                        </div>
                                        <div>
                                            $ <span> <?php echo "{$imgResult['price']}" ?></span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pr-4 mb-3">
                                        <div>
                                            <b> Color:</b> <span id='' class='cart-text'><?php echo "{$result['colour_name']}" ?></span>
                                        </div>
                                        <!-- <div>
                                    $ <span> 350 </span>
                                </div> -->
                                    </div>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            <b> Lens Details: </b> <span id=''></span>
                                        </div>
                                        <div class=''>
                                            <?php
                                            $cp = $result['coating_price'];
                                            $lp = $result['lens_price'];
                                            $tp = $cp + $lp;
                                            ?>
                                            Total: $ <span> <?php echo $tp ?> </span>
                                        </div>
                                    </div>
                                    <div class='pc-lens-bar-price-item ml-2'>
                                        <div class="d-flex justify-content-between pr-4 mb-2">
                                            <div>
                                                <b> Lens Type: </b> <span id='' class='cart-text'><?php echo "{$result['lens_type']}" ?></span>
                                            </div>
                                            <!-- <div>
                                        $ <span>  </span>
                                    </div> -->
                                        </div>
                                        <div class="d-flex justify-content-between pr-4 mb-2">
                                            <div>
                                                <b> Prescription Available: </b> <span id='' class='cart-text'><?php echo "{$result['prescription']}" ?></span>
                                            </div>
                                            <!-- <div>
                                    $ <span> 350 </span>
                                </div> -->
                                        </div>
                                        <div class="d-flex justify-content-between pr-4 mb-2">
                                            <div>
                                                <b> Lens : </b> <span id=''><?php echo "{$result['lens']}" ?></span>
                                            </div>
                                            <div class=''>
                                                $ <span> <?php echo "{$result['lens_price']}" ?></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pr-4 mb-2">
                                            <div>
                                                <b> Coating : </b> <span id=''><?php echo "{$result['coating']}" ?></span>
                                            </div>
                                            <div class=''>
                                                $ <span> <?php echo "{$result['coating_price']}" ?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='d-flex justify-content-between mt-4'>
                                        <div>
                                            QTY:
                                        </div>
                                        <input type="number" name="quantity" min="1" max="10" class='h-25 pl-2 mr-3 quantity'>
                                    </div>
                                    <hr class='mx-3'>
                                    <div class="d-flex justify-content-between pr-4 mb-2">
                                        <div>
                                            Total Price
                                        </div>
                                        <div class=''>
                                            <?php
                                            $gtp = $tp + $imgResult['price'];
                                            ?>
                                            $ <span class='gtp'> <?php echo $gtp ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                };
                ?>
            </div>

            <div class="col-lg-4">
                <div class='proceed-box d-flex flex-column align-items-center box-color'>
                    <div class="my-3">
                        Total Items: 1
                    </div>
                    <div class="my-3">
                        Total Price: $ 450
                    </div>
                    <div class="my-4">
                        <button class="btn btn-primary">
                            PROCEED TO CHECKOUT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gtp = <?php echo $gtp ?>
    </script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery_func.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/ajax_calls.js"></script>
</body>

</html>