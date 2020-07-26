<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container col-12">
        <?php include "includes/head.php" ?>
        <div class="row col-12">
            <!-- <div class="col-8 offset-2"> -->
                <img class="col-10 offset-1" src="assests/images/men_all.png" alt="">
            <!-- </div> -->
        </div>
        <?php include "includes/filter_bar.php" ?>
        <div id="product-list-item">
      <?php include "includes/filt_product.php" ?>
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