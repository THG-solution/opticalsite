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
                <div class='cart-box box-color'>
                    <div class='row'>
                        <div class="col-lg-4">
                            <div class='imgBox' '>
                                <img src="assests/images/800-black-1.jpg" style=' height:100%;' class='imgBox' alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 mt-4">
                            <div class="d-flex justify-content-between pr-4 mb-3">
                                <div>
                                    <b> Product ID:</b> #<span id=''>800</span>
                                </div>
                                <div>
                                    $ <span> 350 </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pr-4 mb-3">
                                <div>
                                    <b> Color:</b> <span id=''>Green</span>
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
                                    Total: $ <span> 350 </span>
                                </div>
                            </div>
                            <div class='pc-lens-bar-price-item ml-2'>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        <b> Lens Type: </b> <span id=''>Single Vision</span>
                                    </div>
                                    <!-- <div>
                                        $ <span>  </span>
                                    </div> -->
                                </div>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        <b> Prescription Available: </b> <span id=''>Will send later</span>
                                    </div>
                                    <!-- <div>
                                    $ <span> 350 </span>
                                </div> -->
                                </div>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        <b> Lens : </b> <span id=''>Thinner</span>
                                    </div>
                                    <div class=''>
                                        $ <span> 350 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pr-4 mb-2">
                                    <div>
                                        <b> Coating : </b> <span id=''>Standard</span>
                                    </div>
                                    <div class=''>
                                        $ <span> 350 </span>
                                    </div>
                                </div>

                            </div>
                            <div class='d-flex justify-content-between mt-4'>
                                <div>
                                    QTY:
                                </div>
                                <input type="number" id="quantity" name="quantity" min="1" max="10" class='h-25 pl-2 mr-3'>
                            </div>
                            <hr class='mx-3'>
                            <div class="d-flex justify-content-between pr-4 mb-2">
                                <div>
                                    Total Price
                                </div>
                                <div class=''>
                                    $ <span> 350 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery_func.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/ajax_calls.js"></script>
</body>

</html>