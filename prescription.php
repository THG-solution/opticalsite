<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Prescription</title>
</head>

<body>
    <?php
    $id = null;
    $id = $_GET['id'];
    $colour = $_GET['color'];
    if ($id == null || $colour == null) {
        header('Location: index.php');
    }
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    $resultSet = $product->getProductData("$id");


    $price =  $resultSet['price'];

    include "includes/head.php" ?>


    <div class="container px-0 mt-5">
        <div class="row">
            <div class="col-lg-9">
                <div style="overflow:hidden" class="jsx-1172698186">
                    <div class="jsx-1172698186 d-flex justify-content-center  top-lensctr-wrapper">
                        <div class="  pc-lensCtr-container-container">
                            <div class="jsx-1143445451  pc-lensCtr-container ">
                                <div class="d-flex align-items-center pc-lens-ctr-item-contaner">
                                    <div class="jsx-950874956 pc-lens-ctr-title-content pc-can-click-lens-title pc-active-lens-title p-l-n">Type</div><span class="jsx-950874956 pc-lens-ctr-line pc-lens-ctr-line-active"></span>
                                </div>
                                <div class="d-flex align-items-center pc-lens-ctr-item-contaner">
                                    <div class="jsx-950874956 pc-lens-ctr-title-content">Prescription</div><span class="jsx-950874956 pc-lens-ctr-line"></span>
                                </div>
                                <div class="d-flex align-items-center pc-lens-ctr-item-contaner">
                                    <div class="jsx-950874956 pc-lens-ctr-title-content">Lens</div><span class="jsx-950874956 pc-lens-ctr-line"></span>
                                </div>
                                <div class="d-flex align-items-center pc-lens-ctr-item-contaner">
                                    <div class="jsx-950874956 pc-lens-ctr-title-content p-r-n">Options</div><span class="jsx-950874956 "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jsx-1172698186 top-ctr-container">
                        <div style="padding-right:48px" class="jsx-578059889 pc-lens-bar-back-pre">
                            <div id="back" class="jsx-578059889 pc-lens-bar-item-btn active">&lt; Back</div>
                            <div id="next" class="jsx-578059889 pc-lens-bar-item-btn">Next &gt;</div>
                        </div>
                    </div>
                </div>
                <div id="group" class="presc-switch mb-5">
                    <div id="child1" class="lens-type">
                        <center>
                            <h2>Choose your lens type</h2>
                        </center>
                        <!-- <div class="d-flex"> -->
                        <div class="d-flex">
                            <div id="Single Vision" class="d-flex flex-column justify-content-between ls-type-box ls-border ls-type-box-focus">
                                <div>
                                    <div class="ls-title">
                                        Single Vision
                                    </div>
                                    <div class="ls-subtitle">
                                        A general use lens for seeing things close up or far away
                                        <!-- <ul class="mt-2 mr-2 ml-n4">
                                            <li>
                                                Used by the majority of glasses wearers
                                            </li>
                                            <li>
                                                Only for nearsighted or farsighted vision
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Progressive No Line" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Progressive No Line
                                    </div>
                                    <div class="ls-subtitle">
                                        Smooth, continuous vision at every distance
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Bifocals" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Bifocals
                                    </div>
                                    <div class="ls-subtitle">
                                        Lens for near and far viewing with visible line.
                                        <!-- <ul class="mt-2 mr-1 ml-n5">
                                         Bifocals With Visible Line <br>
                                             Visible line separates near and far distance viewing areas <br>
                                             Bottom area is used for near vision (like reading) <br>
                                             Top area is used for distance vision <br>
                                             Typically prescribed for people over forty 

                                        </ul> -->
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Readers" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Readers
                                    </div>
                                    <div class="ls-subtitle">
                                        Lens for reading. No prscription needed.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Non-prescription" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Non-Prescription
                                    </div>
                                    <div class="ls-subtitle">
                                        High'quality, fashion lenses with eye protection.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="child2" class="lens-prescription ">
                        <center>
                            <h2>Do You Have Your Prescription Available?</h2>
                        </center>
                        <div class="d-flex">
                            <div id="ls-type-box-later" class="d-flex flex-column justify-content-between ls-type-box ls-border ls-type-box-focus">
                                <div>
                                    <div class="ls-title">
                                        I'll send it later
                                    </div>
                                    <div class="ls-subtitle">
                                        Don't worry, we'll get your prescription after the order placed.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="ls-type-box-already" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        You already have it
                                    </div>
                                    <div class="ls-subtitle">
                                        If yor're a returning customer, we will check your previous order(s) for your prescription.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="ls-type-box-yes" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Yes
                                    </div>
                                    <div class="ls-subtitle">
                                        I would like to enter it now.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="child3" class="lens-prescription ">
                        <center>
                            <h2>Select Your Lens</h2>
                        </center>
                        <div class="d-flex">
                            <div id="Plastic" class="d-flex flex-column justify-content-between ls-type-box ls-border ls-type-box-focus">

                                <div>
                                    <div class="ls-title">
                                        Plastic CR-39
                                    </div>
                                    <div class="ls-subtitle">
                                    </div>
                                </div>
                                <!-- IMAGE START ++ -->
                                <div class='d-flex justify-content-center'>
                                    <img src="assests/images/plastic.jpg" class="ls-image img-15" alt="">
                                </div>
                                <!-- IMAGE END xx -->

                                <!-- VISION INFO START ++ -->

                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray">Retail Price: $69.00</div>
                                    <div class="display-inline-block weight-bold">With promo: <span class="text-success"> $ <span class='lns-price'>16</span> </span></div>
                                    <div class="price-with-promo color-green weight-bold display-inline-block"></div>
                                </div>
                                <div class="ls-compare justify-content-center pb-5 pt-2 px-3">
                                    Compare to other retailer's price:

                                    "$170
                                </div>

                                <!-- VISION INFO END xx -->

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Polycarbonte" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Polycarbonte
                                    </div>
                                    <div class="ls-subtitle">
                                        High-Impact Resistant
                                    </div>
                                </div>
                                <!-- IMAGE START ++ -->
                                <div class='d-flex justify-content-center'>
                                    <img src="assests/images/polycarbonate.jpg" class="ls-image img-15" alt="">
                                </div>
                                <!-- IMAGE END xx -->

                                <!-- VISION INFO START ++ -->

                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray">Retail Price: $115.00</div>
                                    <div class="display-inline-block weight-bold">With promo: <span class="text-success">$ <span class='lns-price'>70</span> </span></div>
                                    <div class="price-with-promo color-green weight-bold display-inline-block"></div>
                                </div>
                                <div class="ls-compare justify-content-center pb-5 pt-2 px-3">
                                    Compare to other retailer's price:

                                    $210
                                </div>

                                <!-- VISION INFO END xx -->

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Thinner" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Thinner
                                    </div>
                                    <div class="ls-subtitle">
                                        For Strong Prescriptions
                                    </div>
                                </div>
                                <!-- IMAGE START ++ -->
                                <div class='d-flex justify-content-center'>
                                    <img src="assests/images/ThinnerHiIndex167.jpg" class="ls-image img-15" alt="">
                                </div>
                                <!-- IMAGE END xx -->

                                <!-- VISION INFO START ++ -->

                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray">Retail Price: $159.00</div>
                                    <div class="display-inline-block weight-bold">With promo: <span class="text-success">$ <span class='lns-price'>95</span> </span></div>
                                    <div class="price-with-promo color-green weight-bold display-inline-block"></div>
                                </div>
                                <div class="ls-compare justify-content-center pb-5 pt-2 px-3">
                                    Compare to other retailer's price:

                                    $290
                                </div>

                                <!-- VISION INFO END xx -->

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Thinnest" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Thinnest
                                    </div>
                                    <div class="ls-subtitle">
                                        For Extra Storng Prescriptions
                                    </div>
                                </div>
                                <!-- IMAGE START ++ -->
                                <div class='d-flex justify-content-center'>
                                    <img src="assests/images/ThinnestHiIndex174.jpg" class="ls-image img-15" alt="">
                                </div>
                                <!-- IMAGE END xx -->

                                <!-- VISION INFO START ++ -->

                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray">Retail Price: $199.00</div>
                                    <div class="display-inline-block weight-bold">With promo: <span class="text-success"> $ <span class='lns-price'>175</span> </span></div>
                                    <div class="price-with-promo color-green weight-bold display-inline-block"></div>
                                </div>
                                <div class="ls-compare justify-content-center pb-5 pt-2 px-3">
                                    Compare to other retailer's price:

                                    "$310
                                </div>

                                <!-- VISION INFO END xx -->

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="child4" class="lens-prescription ">
                        <center>
                            <h2>Choose Coating Options</h2>
                        </center>
                        <div class="d-flex">

                            <div id="Basic" class="d-flex flex-column justify-content-between ls-type-box ls-border ls-type-box-focus">

                                <div>
                                    <div class="ls-title">
                                        Basic
                                    </div>
                                </div>

                                <!-- VISION INFO START ++ -->

                                <div class="ls-promo-price">
                                    <!-- <div class="ls-starting weight-normal decoration-strike color-gray">Retail Price: $115.00</div> -->
                                    <div class="display-inline-block weight-bold px-3">Included No Additional Charges</div>
                                    <!-- <div class="price-with-promo color-green weight-bold display-inline-block"></div> -->
                                    <span class="option_price d-none">0</span>

                                </div>
                                <div class="ls-compare justify-content-center pb-1 pt-2 px-3">
                                    Compare to other retailer's price:

                                    $210
                                </div>

                                <!-- VISION INFO END xx -->

                                <div class="px-4 pb-4">
                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        UV Protection
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Edge Polish
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Scrathc-resistant Coating
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Standard" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Standard
                                    </div>
                                </div>

                                <!-- VISION INFO START ++ -->
                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray px-3">Retail Price: $99.00</div>
                                    <div class="display-inline-block weight-bold pl-3">With promo:</div>
                                    <div class="price-with-promo text-success weight-bold display-inline-block pr-3"> $ <span class="option_price">49</span>
                                    </div>
                                </div>
                                <div class="ls-compare justify-content-center pb-1 pt-2 px-3">
                                    Compare to other retailer's price:

                                    $290
                                </div>
                                <!-- VISION INFO END xx -->

                                <div class="px-4 pb-4">
                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        UV Protection
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Edge Polish
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Scrathc-resistant Coating
                                    </div>
                                    <div class="ls-ul-select">
                                        <i class="fa fa-plus"></i>
                                        Premium Anti Reflective
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="Premium" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Premium
                                    </div>

                                </div>

                                <!-- VISION INFO START ++ -->
                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray px-3">Retail Price: $129.00</div>
                                    <div class="display-inline-block weight-bold pl-3">With promo:</div>
                                    <div class="price-with-promo text-success weight-bold display-inline-block pr-3"> $<span class="option_price">64.5</span>
                                    </div>
                                </div>
                                <div class="ls-compare justify-content-center pb-1 pt-2 px-3">
                                    Compare to other retailer's price:

                                    $310
                                </div>
                                <!-- VISION INFO END xx -->

                                <div class="px-4 pb-4">
                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        UV Protection
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Edge Polish
                                    </div>

                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Scrathc-resistant Coating
                                    </div>
                                    <div class="ls-ul-select">
                                        <i class="fa fa-check"></i>
                                        Premium Anti Reflective
                                    </div>
                                    <div class="ls-ul-select">
                                        <i class="fa fa-plus"></i>
                                        Digital light Protection
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="choose_pd" class="mb-3  justify-content-center" style="display:none ">
                    <div class="form-rx">
                        <div class="form-container mt-5 mb-0">
                            <table id="table-01" class="table-minimal-small marg-topbot-0 stacktable large-only" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Sphere</th>
                                        <th>Cylinder</th>
                                        <th>Axis</th>
                                        <th id="ctl00_ContentPlaceHolderProductDisplay_AddHeader">Add</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="right" class="width-10 weight-bold align-right">Right (OD):</td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="sphereR" id="sphereR" class="presc-select">
                                                    <?php
                                                    $a = 15.00;
                                                    while ($a > 0.00) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a - 0.25;
                                                    } ?>

                                                    <option value="165" disabled="true">------</option>
                                                    <option value="163"></option>
                                                    <option value="164">0.00</option>
                                                    <option value="2">Plano</option>
                                                    <option value="0">Sphere</option>
                                                    <option value="1">None</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <?php
                                                    $a = 0.25;
                                                    while ($a < 15.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "-{$a}" ?>><?php echo "-{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="cylinderR" id="cylinderR" class="presc-select">
                                                    <?php
                                                    $a = 8.00;
                                                    while ($a > 0.00) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a - 0.25;
                                                    } ?>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="164"></option>
                                                    <option value="0.00">0.00</option>
                                                    <option value="plano">Plano</option>
                                                    <option value="cylinder">Cylinder</option>
                                                    <option value="sphere">Sphere</option>
                                                    <option value="none">None</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <?php
                                                    $a = 0.25;
                                                    while ($a < 8.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "-{$a}" ?>><?php echo "-{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="axisR" id="axisR" class="presc-select">
                                                    <option value="183"></option>
                                                    <option value="Axis">Axis</option>
                                                    <option selected="selected" value="none">None</option>
                                                    <option value="184" disabled="true">------</option>
                                                    <?php
                                                    for ($x = 0; $x <= 180; $x++) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        $val1 =  $x;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "{$val1}" ?>><?php echo "{$val1}" ?></option>
                                                    <?php
                                                    } ?>

                                                </select>
                                            </div>
                                        </td>
                                        <td id="">
                                            <div class="lbl-ui select width-100">
                                                <select name="addR" id="addR" class="presc-select">
                                                    <option value="add">Add</option>
                                                    <option selected="selected" value="none">None</option>
                                                    <?php
                                                    $a = 0.75;
                                                    while ($a < 4.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold align-right">Left (OS):</td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="sphereL" id="sphereL" class="presc-select">
                                                    <?php
                                                    $a = 15.00;
                                                    while ($a > 0.00) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a - 0.25;
                                                    } ?>
                                                    <option value="165" disabled="true">------</option>
                                                    <option value="163"></option>
                                                    <option value="0.00">0.00</option>
                                                    <option value="plano">Plano</option>
                                                    <option value="sphere">Sphere</option>
                                                    <option value="none">None</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <?php
                                                    $a = 0.25;
                                                    while ($a < 15.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "-{$a}" ?>><?php echo "-{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="cylinderL" id="cylinderL" class="presc-select">
                                                    <?php
                                                    $a = 8.00;
                                                    while ($a > 0.00) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a - 0.25;
                                                    } ?>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="164"></option>
                                                    <option value="0.00">0.00</option>
                                                    <option value="plano">Plano</option>
                                                    <option value="cylinder">Cylinder</option>
                                                    <option value="sphere">Sphere</option>
                                                    <option value="none">None</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <?php
                                                    $a = 0.25;
                                                    while ($a < 8.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "-{$a}" ?>><?php echo "-{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="axisL" id="axisL" class="presc-select">
                                                    <option value="183"></option>
                                                    <option value="axis">Axis</option>
                                                    <option selected="selected" value="none">None</option>
                                                    <option value="184" disabled="true">------</option>
                                                    <?php
                                                    for ($x = 0; $x <= 180; $x++) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        $val1 =  $x;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "{$val1}" ?>><?php echo "{$val1}" ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td id="">
                                            <div class="lbl-ui select width-100">
                                                <select name="addL" id="addL" class="presc-select">
                                                    <option value="add">Add</option>
                                                    <option selected="selected" value="none">None</option>
                                                    <?php
                                                    $a = 0.75;
                                                    while ($a < 4.25) {
                                                        // $y = 54;
                                                        // $z = 19.5;
                                                        // $x1 = $x / 2;
                                                        // $val2 = $z + $x1;
                                                    ?><option value=<?php echo "+{$a}" ?>><?php echo "+{$a}" ?></option>
                                                    <?php
                                                        $a =  $a + 0.25;
                                                    } ?>

                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                            <div id="ctl00_ContentPlaceHolderProductDisplay_AddRowPD d-flex justify-content-center" class="mt-3 pad-10 align-center">
                                <p class="size-14 weight-bold">Enter the PD number(s) from your prescription: <span class="weight-normal size-11">(<a href="javascript:shadowboxPop(750,500,'/theme/fd-steel/popup/pd-combined.html');">What is PD?</a>)</span></p>

                                <div class="d-flex justify-content-center">
                                    <label class="options">
                                        <input type="radio" name="howManyPDs" id="noPD" value="checked" />
                                        <span class="radio"></span>
                                    </label>
                                    <label for="option2"><span id="no-pd" class="size-15 ml-2">No PD</span></label>

                                    <label class="options">
                                        <input type="radio" class="ml-3" name="howManyPDs" id="onePD" value="checked" />
                                        <span class="radio"></span>
                                    </label>
                                    <label for="option2"><span class="size-15 ml-2">One</span></label>

                                    <label class="options">
                                        <input type="radio" class="ml-3" name="howManyPDs" id="twoPDs" value="checked" />
                                        <span class="radio"></span>
                                    </label>
                                    <label for="option2"><span class="size-15 ml-2">Two</span></label>
                                </div>

                                <div class="spacer-10"></div>

                                <div class="form-group d-flex justify-content-center">
                                    <div id="pd-r" class="" style="display:none">
                                        <select name="pd-r" id="select-pd-r" class="width-150 ml-5 p-2 select-pd presc-select">
                                            <option selected="selected" value="0">PD-R</option>
                                            <option value="1">None</option>

                                            <?php
                                            for ($x = 1; $x < 120; $x++) {
                                                $y = 54;
                                                $z = 19.5;
                                                $x1 = $x / 2;
                                                // $val1 = $y + $x;
                                                $val2 = $z + $x1;
                                            ?><option value=<?php echo "{$val2}" ?>><?php echo "{$val2}" ?></option>
                                            <?php
                                            } ?>

                                        </select>
                                        <input type="hidden" name="" id="" />
                                    </div>
                                    <div id="pd-l" class="" style="display:none">
                                        <select name="pd-l" id="select-pd-l" class="width-150 ml-2 p-2 presc-select">
                                            <option selected="selected" value="0">PD-L</option>
                                            <option value="1">None</option>
                                            <?php
                                            for ($x = 1; $x < 120; $x++) {
                                                $y = 54;
                                                $z = 19.5;
                                                $x1 = $x / 2;
                                                // $val1 = $x + 1;
                                                $val2 = $z + $x1;
                                            ?><option value=<?php echo "{$val2}" ?>><?php echo "{$val2}" ?></option>
                                            <?php
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div id="ctl00_ContentPlaceHolderProductDisplay_dontworry" class="width-75 mobile-100 m-auto" style="display: none;">
                            <p class="weight-bold">How to find your PD:</p>
                            <ul>
                                <li>First, look on your prescription. It may be included there.</li>
                                <li>If not there, call your eye doctor and ask them for your PD.</li>
                                <li>One of our trained opticians can even call your eye doctor.</li>
                            </ul>
                            <p>Call us for assistance at any time&#151;1-800-248-9427.</p>
                        </div> -->

                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="jsx-761701937 pc-lens-bar-container">
                    <div class="jsx-761701937 pc-lens-bar-title-line"><a class="jsx-761701937 pc-lens-bar-title-container" href="/eyeglasses-p-6415.html?color=15758">
                            <h3 class="jsx-761701937 text-dark">#<?php echo "{$resultSet['product_id']}"; ?></h3>
                            <p class='text-dark'>Color : <span style='text-transform: capitalize;'> <?php echo $colour ?> </span></p>
                        </a>
                    </div>
                    <?php
                    $db = new DBController();
                    $product = new Table($db);
                    $result = $product->queryData("SELECT c.img1 as image, p.avg_star, p.total_review FROM products p, product_colors c WHERE c.product_id = p.product_id and p.product_id = '{$id}' and c.colour_name = '{$colour}'LIMIT 1");
                    $db = null;

                    ?>
                    <picture class="jsx-2643774471 imgBox">
                        <img src=<?php echo "assests/images/{$result['image']}" ?> class="presc-img" alt="">
                    </picture>
                    <div class="pc-lens-change-frame"><a class="jsx-761701937" href=<?php echo "includes/product_desc.php?id={$_GET['id']}" ?>>&lt; Change Frame</a></div>
                    <p class=" pc-lens-bar-price-item">Frame Price: <b class="jsx-761701937">$ <?php echo "{$resultSet['price']}"; ?></b></p>
                    <p class=" pc-lens-bar-price-item pc-lens-price-detail-container">Lens Price: <b id="lens-price" class="">$ 0.00 </b></p>
                    <p class=" pc-lens-bar-price-item pc-lens-price-detail-container">Coating Price: <b id="coating-price" class="">$ 0.00 </b></p>
                    <p class=" pc-lens-bar-price"><span class="jsx-761701937">Total: </span><span id='total-price' class="jsx-761701937 pc-lens-bar-total">$<?php echo "{$resultSet['price']}"; ?> </span></p>
                    <button id="add-cart-btn" class="pc-lens-bar-add-cart text-center lens-bar-add-cart-disable">ADD TO CART</button>

                    <div class="pres-lens-foot">
                    <p id='rs' style="margin-bottom:0">Free Standard Shipping:</p>
                    <p id='rs2' style="margin-bottom:0">Free Standard Shipping: 2</p>
                        <!-- <p style="margin-bottom:0"><b>Total Price ≥
                                $69.00
                                (US only)</b></p> -->
                    </div>
                </div>
                <!-- <div style="color:#333" class="jsx-3236201328 help-tips">
                    <div class="jsx-3236201328"><span class="icon iconfont icon-chat icon-items" style="padding-right:10px"></span>Need Help?<span style="color:#26ABFF;margin-left:10px;cursor:pointer" class="jsx-3236201328">Start a Live Chat</span></div>
                    <div class="jsx-3236201328"><span class="icon iconfont icon-exchange icon-items" style="padding-right:10px"></span>30-Day Exchange &amp; Return</div>
                    <div class="jsx-3236201328"><span class="icon iconfont iconwarranty icon-items" style="padding-right:10px"></span>3-month Warranty</div>
                </div> -->

            </div>
        </div>
    </div>
    <script>
        var prd_price = <?php echo "{$price}" ?>;
        var p_color_name = <?php echo "'{$colour}'" ?>;
        var prd_id = <?php echo "'{$id}'" ?>;

        // alert(color_name);
        // // alert(prd_id);
    </script>
    <script>
        var session_email = 'empty';
        <?php
        if(isset($_SESSION['email']))
        {
            $email = "'{$_SESSION['email']}'";?>
            session_email= <?php echo "$email";?>      
        <?php 
        } ?>
        // 
    </script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery_func.js"></script>
    <script>
       
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/ajax_calls.js"></script>
    <?php include "./footer.html" ?>
</body>

</html>