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

    <?php include "includes/head.php" ?>

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
                <div id="group" class="presc-switch">
                    <div id="child1" class="lens-type">
                        <center>
                            <h2>Choose your lens type</h2>
                        </center>
                        <!-- <div class="d-flex"> -->
                        <div class="d-flex">
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Single Vision
                                    </div>
                                    <div class="ls-subtitle">
                                        A general use lens for seeing things close up or far away
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Single Vision
                                    </div>
                                    <div class="ls-subtitle">
                                        A general use lens for seeing things close up or far away
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Single Vision
                                    </div>
                                    <div class="ls-subtitle">
                                        A general use lens for seeing things close up or far away
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center  ls-select">
                                    SELECT
                                </div>
                            </div>
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">
                                <div>
                                    <div class="ls-title">
                                        Single Vision
                                    </div>
                                    <div class="ls-subtitle">
                                        A general use lens for seeing things close up or far away
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
                            <div id="ls-type-box-later" class="d-flex flex-column justify-content-between ls-type-box ls-border">
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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

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
                                    <div class="display-inline-block weight-bold">With promo:</div>
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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

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
                                    <div class="display-inline-block weight-bold">With promo:</div>
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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

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
                                    <div class="display-inline-block weight-bold">With promo:</div>
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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

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
                                    <div class="display-inline-block weight-bold">With promo:</div>
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
                            <h2>Choose Options</h2>
                        </center>
                        <div class="d-flex">

                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Standard
                                    </div>
                                </div>

                                <!-- VISION INFO START ++ -->
                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray px-3">Retail Price: $99.00</div>
                                    <div class="display-inline-block weight-bold pl-3">With promo:</div>
                                    <div class="price-with-promo text-success weight-bold display-inline-block pr-3"> $ 49.00</div>
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
                            <div id="ls-type-box" class="d-flex flex-column justify-content-between ls-type-box ls-border">

                                <div>
                                    <div class="ls-title">
                                        Premium
                                    </div>

                                </div>

                                <!-- VISION INFO START ++ -->
                                <div class="ls-promo-price">
                                    <div class="ls-starting weight-normal decoration-strike color-gray px-3">Retail Price: $129.00</div>
                                    <div class="display-inline-block weight-bold pl-3">With promo:</div>
                                    <div class="price-with-promo text-success weight-bold display-inline-block pr-3"> $ 64.50</div>
                                </div>
                                <div class="ls-compare justify-content-center pb-1 pt-2 px-3">
                                    Compare to other retailer's price:

                                    "$310
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
                                        <td class="width-10 weight-bold align-right">Right (OD):</td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlSphereR" id="ctl00_ContentPlaceHolderProductDisplay_ddlSphereR">
                                                    <option value="142">+15.00</option>
                                                    <option value="141">+14.75</option>
                                                    <option value="140">+14.50</option>
                                                    <option value="139">+14.25</option>
                                                    <option value="138">+14.00</option>
                                                    <option value="137">+13.75</option>
                                                    <option value="136">+13.50</option>
                                                    <option value="135">+13.25</option>
                                                    <option value="134">+13.00</option>
                                                    <option value="133">+12.75</option>
                                                    <option value="132">+12.50</option>
                                                    <option value="131">+12.25</option>
                                                    <option value="130">+12.00</option>
                                                    <option value="129">+11.75</option>
                                                    <option value="128">+11.50</option>
                                                    <option value="127">+11.25</option>
                                                    <option value="126">+11.00</option>
                                                    <option value="125">+10.75</option>
                                                    <option value="124">+10.50</option>
                                                    <option value="123">+10.25</option>
                                                    <option value="122">+10.00</option>
                                                    <option value="121">+9.75</option>
                                                    <option value="120">+9.50</option>
                                                    <option value="119">+9.25</option>
                                                    <option value="118">+9.00</option>
                                                    <option value="117">+8.75</option>
                                                    <option value="116">+8.50</option>
                                                    <option value="115">+8.25</option>
                                                    <option value="114">+8.00</option>
                                                    <option value="113">+7.75</option>
                                                    <option value="112">+7.50</option>
                                                    <option value="111">+7.25</option>
                                                    <option value="110">+7.00</option>
                                                    <option value="109">+6.75</option>
                                                    <option value="108">+6.50</option>
                                                    <option value="107">+6.25</option>
                                                    <option value="106">+6.00</option>
                                                    <option value="105">+5.75</option>
                                                    <option value="104">+5.50</option>
                                                    <option value="103">+5.25</option>
                                                    <option value="102">+5.00</option>
                                                    <option value="101">+4.75</option>
                                                    <option value="100">+4.50</option>
                                                    <option value="99">+4.25</option>
                                                    <option value="98">+4.00</option>
                                                    <option value="97">+3.75</option>
                                                    <option value="96">+3.50</option>
                                                    <option value="95">+3.25</option>
                                                    <option value="94">+3.00</option>
                                                    <option value="93">+2.75</option>
                                                    <option value="92">+2.50</option>
                                                    <option value="91">+2.25</option>
                                                    <option value="90">+2.00</option>
                                                    <option value="89">+1.75</option>
                                                    <option value="88">+1.50</option>
                                                    <option value="87">+1.25</option>
                                                    <option value="86">+1.00</option>
                                                    <option value="85">+0.75</option>
                                                    <option value="84">+0.50</option>
                                                    <option value="83">+0.25</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <option value="163"></option>
                                                    <option value="164">0.00</option>
                                                    <option value="2">Plano</option>
                                                    <option value="0">Sphere</option>
                                                    <option value="1">None</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <option value="3">-0.25</option>
                                                    <option value="4">-0.50</option>
                                                    <option value="5">-0.75</option>
                                                    <option value="6">-1.00</option>
                                                    <option value="7">-1.25</option>
                                                    <option value="8">-1.50</option>
                                                    <option value="9">-1.75</option>
                                                    <option value="10">-2.00</option>
                                                    <option value="11">-2.25</option>
                                                    <option value="12">-2.50</option>
                                                    <option value="13">-2.75</option>
                                                    <option value="14">-3.00</option>
                                                    <option value="15">-3.25</option>
                                                    <option value="16">-3.50</option>
                                                    <option value="17">-3.75</option>
                                                    <option value="18">-4.00</option>
                                                    <option value="19">-4.25</option>
                                                    <option value="20">-4.50</option>
                                                    <option value="21">-4.75</option>
                                                    <option value="22">-5.00</option>
                                                    <option value="23">-5.25</option>
                                                    <option value="24">-5.50</option>
                                                    <option value="25">-5.75</option>
                                                    <option value="26">-6.00</option>
                                                    <option value="27">-6.25</option>
                                                    <option value="28">-6.50</option>
                                                    <option value="29">-6.75</option>
                                                    <option value="30">-7.00</option>
                                                    <option value="31">-7.25</option>
                                                    <option value="32">-7.50</option>
                                                    <option value="33">-7.75</option>
                                                    <option value="34">-8.00</option>
                                                    <option value="35">-8.25</option>
                                                    <option value="36">-8.50</option>
                                                    <option value="37">-8.75</option>
                                                    <option value="38">-9.00</option>
                                                    <option value="39">-9.25</option>
                                                    <option value="40">-9.50</option>
                                                    <option value="41">-9.75</option>
                                                    <option value="42">-10.00</option>
                                                    <option value="43">-10.25</option>
                                                    <option value="44">-10.50</option>
                                                    <option value="45">-10.75</option>
                                                    <option value="46">-11.00</option>
                                                    <option value="47">-11.25</option>
                                                    <option value="48">-11.50</option>
                                                    <option value="49">-11.75</option>
                                                    <option value="50">-12.00</option>
                                                    <option value="51">-12.25</option>
                                                    <option value="52">-12.50</option>
                                                    <option value="53">-12.75</option>
                                                    <option value="54">-13.00</option>
                                                    <option value="55">-13.25</option>
                                                    <option value="56">-13.50</option>
                                                    <option value="57">-13.75</option>
                                                    <option value="58">-14.00</option>
                                                    <option value="59">-14.25</option>
                                                    <option value="60">-14.50</option>
                                                    <option value="61">-14.75</option>
                                                    <option value="62">-15.00</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlCylinderR" id="ctl00_ContentPlaceHolderProductDisplay_ddlCylinderR">
                                                    <option value="66">+8.00</option>
                                                    <option value="65">+7.75</option>
                                                    <option value="64">+7.50</option>
                                                    <option value="63">+7.25</option>
                                                    <option value="62">+7.00</option>
                                                    <option value="61">+6.75</option>
                                                    <option value="60">+6.50</option>
                                                    <option value="59">+6.25</option>
                                                    <option value="58">+6.00</option>
                                                    <option value="57">+5.75</option>
                                                    <option value="56">+5.50</option>
                                                    <option value="55">+5.25</option>
                                                    <option value="54">+5.00</option>
                                                    <option value="53">+4.75</option>
                                                    <option value="52">+4.50</option>
                                                    <option value="51">+4.25</option>
                                                    <option value="50">+4.00</option>
                                                    <option value="49">+3.75</option>
                                                    <option value="47">+3.50</option>
                                                    <option value="46">+3.25</option>
                                                    <option value="45">+3.00</option>
                                                    <option value="44">+2.75</option>
                                                    <option value="43">+2.50</option>
                                                    <option value="42">+2.25</option>
                                                    <option value="41">+2.00</option>
                                                    <option value="40">+1.75</option>
                                                    <option value="39">+1.50</option>
                                                    <option value="38">+1.25</option>
                                                    <option value="37">+1.00</option>
                                                    <option value="36">+0.75</option>
                                                    <option value="35">+0.50</option>
                                                    <option value="34">+0.25</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="164"></option>
                                                    <option value="165">0.00</option>
                                                    <option value="67">Plano</option>
                                                    <option value="0">Cylinder</option>
                                                    <option value="167">Sphere</option>
                                                    <option value="1">None</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="2">-0.25</option>
                                                    <option value="3">-0.50</option>
                                                    <option value="4">-0.75</option>
                                                    <option value="5">-1.00</option>
                                                    <option value="6">-1.25</option>
                                                    <option value="7">-1.50</option>
                                                    <option value="8">-1.75</option>
                                                    <option value="9">-2.00</option>
                                                    <option value="10">-2.25</option>
                                                    <option value="11">-2.50</option>
                                                    <option value="12">-2.75</option>
                                                    <option value="13">-3.00</option>
                                                    <option value="14">-3.25</option>
                                                    <option value="15">-3.50</option>
                                                    <option value="16">-3.75</option>
                                                    <option value="17">-4.00</option>
                                                    <option value="18">-4.25</option>
                                                    <option value="19">-4.50</option>
                                                    <option value="20">-4.75</option>
                                                    <option value="21">-5.00</option>
                                                    <option value="22">-5.25</option>
                                                    <option value="23">-5.50</option>
                                                    <option value="24">-5.75</option>
                                                    <option value="25">-6.00</option>
                                                    <option value="26">-6.25</option>
                                                    <option value="27">-6.50</option>
                                                    <option value="28">-6.75</option>
                                                    <option value="29">-7.00</option>
                                                    <option value="30">-7.25</option>
                                                    <option value="31">-7.50</option>
                                                    <option value="32">-7.75</option>
                                                    <option value="33">-8.00</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlAxisR" id="ctl00_ContentPlaceHolderProductDisplay_ddlAxisR">
                                                    <option value="183"></option>
                                                    <option value="200">Axis</option>
                                                    <option value="190">None</option>
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
                                        <td id="ctl00_ContentPlaceHolderProductDisplay_AddRowR">
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlAddR" id="ctl00_ContentPlaceHolderProductDisplay_ddlAddR">
                                                    <option selected="selected" value="0">Add</option>
                                                    <option value="1">None</option>
                                                    <option value="2">+0.75</option>
                                                    <option value="3">+1.00</option>
                                                    <option value="4">+1.25</option>
                                                    <option value="5">+1.50</option>
                                                    <option value="6">+1.75</option>
                                                    <option value="7">+2.00</option>
                                                    <option value="8">+2.25</option>
                                                    <option value="9">+2.50</option>
                                                    <option value="10">+2.75</option>
                                                    <option value="11">+3.00</option>
                                                    <option value="12">+3.25</option>
                                                    <option value="14">+3.50</option>
                                                    <option value="15">+3.75</option>
                                                    <option value="16">+4.00</option>

                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="weight-bold align-right">Left (OS):</td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlSphereL" id="ctl00_ContentPlaceHolderProductDisplay_ddlSphereL">
                                                    <option value="142">+15.00</option>
                                                    <option value="141">+14.75</option>
                                                    <option value="140">+14.50</option>
                                                    <option value="139">+14.25</option>
                                                    <option value="138">+14.00</option>
                                                    <option value="137">+13.75</option>
                                                    <option value="136">+13.50</option>
                                                    <option value="135">+13.25</option>
                                                    <option value="134">+13.00</option>
                                                    <option value="133">+12.75</option>
                                                    <option value="132">+12.50</option>
                                                    <option value="131">+12.25</option>
                                                    <option value="130">+12.00</option>
                                                    <option value="129">+11.75</option>
                                                    <option value="128">+11.50</option>
                                                    <option value="127">+11.25</option>
                                                    <option value="126">+11.00</option>
                                                    <option value="125">+10.75</option>
                                                    <option value="124">+10.50</option>
                                                    <option value="123">+10.25</option>
                                                    <option value="122">+10.00</option>
                                                    <option value="121">+9.75</option>
                                                    <option value="120">+9.50</option>
                                                    <option value="119">+9.25</option>
                                                    <option value="118">+9.00</option>
                                                    <option value="117">+8.75</option>
                                                    <option value="116">+8.50</option>
                                                    <option value="115">+8.25</option>
                                                    <option value="114">+8.00</option>
                                                    <option value="113">+7.75</option>
                                                    <option value="112">+7.50</option>
                                                    <option value="111">+7.25</option>
                                                    <option value="110">+7.00</option>
                                                    <option value="109">+6.75</option>
                                                    <option value="108">+6.50</option>
                                                    <option value="107">+6.25</option>
                                                    <option value="106">+6.00</option>
                                                    <option value="105">+5.75</option>
                                                    <option value="104">+5.50</option>
                                                    <option value="103">+5.25</option>
                                                    <option value="102">+5.00</option>
                                                    <option value="101">+4.75</option>
                                                    <option value="100">+4.50</option>
                                                    <option value="99">+4.25</option>
                                                    <option value="98">+4.00</option>
                                                    <option value="97">+3.75</option>
                                                    <option value="96">+3.50</option>
                                                    <option value="95">+3.25</option>
                                                    <option value="94">+3.00</option>
                                                    <option value="93">+2.75</option>
                                                    <option value="92">+2.50</option>
                                                    <option value="91">+2.25</option>
                                                    <option value="90">+2.00</option>
                                                    <option value="89">+1.75</option>
                                                    <option value="88">+1.50</option>
                                                    <option value="87">+1.25</option>
                                                    <option value="86">+1.00</option>
                                                    <option value="85">+0.75</option>
                                                    <option value="84">+0.50</option>
                                                    <option value="83">+0.25</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <option value="163"></option>
                                                    <option value="164">0.00</option>
                                                    <option value="2">Plano</option>
                                                    <option value="0">Sphere</option>
                                                    <option value="1">None</option>
                                                    <option value="165" disabled="true">------</option>
                                                    <option value="3">-0.25</option>
                                                    <option value="4">-0.50</option>
                                                    <option value="5">-0.75</option>
                                                    <option value="6">-1.00</option>
                                                    <option value="7">-1.25</option>
                                                    <option value="8">-1.50</option>
                                                    <option value="9">-1.75</option>
                                                    <option value="10">-2.00</option>
                                                    <option value="11">-2.25</option>
                                                    <option value="12">-2.50</option>
                                                    <option value="13">-2.75</option>
                                                    <option value="14">-3.00</option>
                                                    <option value="15">-3.25</option>
                                                    <option value="16">-3.50</option>
                                                    <option value="17">-3.75</option>
                                                    <option value="18">-4.00</option>
                                                    <option value="19">-4.25</option>
                                                    <option value="20">-4.50</option>
                                                    <option value="21">-4.75</option>
                                                    <option value="22">-5.00</option>
                                                    <option value="23">-5.25</option>
                                                    <option value="24">-5.50</option>
                                                    <option value="25">-5.75</option>
                                                    <option value="26">-6.00</option>
                                                    <option value="27">-6.25</option>
                                                    <option value="28">-6.50</option>
                                                    <option value="29">-6.75</option>
                                                    <option value="30">-7.00</option>
                                                    <option value="31">-7.25</option>
                                                    <option value="32">-7.50</option>
                                                    <option value="33">-7.75</option>
                                                    <option value="34">-8.00</option>
                                                    <option value="35">-8.25</option>
                                                    <option value="36">-8.50</option>
                                                    <option value="37">-8.75</option>
                                                    <option value="38">-9.00</option>
                                                    <option value="39">-9.25</option>
                                                    <option value="40">-9.50</option>
                                                    <option value="41">-9.75</option>
                                                    <option value="42">-10.00</option>
                                                    <option value="43">-10.25</option>
                                                    <option value="44">-10.50</option>
                                                    <option value="45">-10.75</option>
                                                    <option value="46">-11.00</option>
                                                    <option value="47">-11.25</option>
                                                    <option value="48">-11.50</option>
                                                    <option value="49">-11.75</option>
                                                    <option value="50">-12.00</option>
                                                    <option value="51">-12.25</option>
                                                    <option value="52">-12.50</option>
                                                    <option value="53">-12.75</option>
                                                    <option value="54">-13.00</option>
                                                    <option value="55">-13.25</option>
                                                    <option value="56">-13.50</option>
                                                    <option value="57">-13.75</option>
                                                    <option value="58">-14.00</option>
                                                    <option value="59">-14.25</option>
                                                    <option value="60">-14.50</option>
                                                    <option value="61">-14.75</option>
                                                    <option value="62">-15.00</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlCylinderL" id="ctl00_ContentPlaceHolderProductDisplay_ddlCylinderL">
                                                    <option value="66">+8.00</option>
                                                    <option value="65">+7.75</option>
                                                    <option value="64">+7.50</option>
                                                    <option value="63">+7.25</option>
                                                    <option value="62">+7.00</option>
                                                    <option value="61">+6.75</option>
                                                    <option value="60">+6.50</option>
                                                    <option value="59">+6.25</option>
                                                    <option value="58">+6.00</option>
                                                    <option value="57">+5.75</option>
                                                    <option value="56">+5.50</option>
                                                    <option value="55">+5.25</option>
                                                    <option value="54">+5.00</option>
                                                    <option value="53">+4.75</option>
                                                    <option value="52">+4.50</option>
                                                    <option value="51">+4.25</option>
                                                    <option value="50">+4.00</option>
                                                    <option value="49">+3.75</option>
                                                    <option value="47">+3.50</option>
                                                    <option value="46">+3.25</option>
                                                    <option value="45">+3.00</option>
                                                    <option value="44">+2.75</option>
                                                    <option value="43">+2.50</option>
                                                    <option value="42">+2.25</option>
                                                    <option value="41">+2.00</option>
                                                    <option value="40">+1.75</option>
                                                    <option value="39">+1.50</option>
                                                    <option value="38">+1.25</option>
                                                    <option value="37">+1.00</option>
                                                    <option value="36">+0.75</option>
                                                    <option value="35">+0.50</option>
                                                    <option value="34">+0.25</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="164"></option>
                                                    <option value="165">0.00</option>
                                                    <option value="67">Plano</option>
                                                    <option value="0">Cylinder</option>
                                                    <option value="167">Sphere</option>
                                                    <option value="1">None</option>
                                                    <option value="166" disabled="true">------</option>
                                                    <option value="2">-0.25</option>
                                                    <option value="3">-0.50</option>
                                                    <option value="4">-0.75</option>
                                                    <option value="5">-1.00</option>
                                                    <option value="6">-1.25</option>
                                                    <option value="7">-1.50</option>
                                                    <option value="8">-1.75</option>
                                                    <option value="9">-2.00</option>
                                                    <option value="10">-2.25</option>
                                                    <option value="11">-2.50</option>
                                                    <option value="12">-2.75</option>
                                                    <option value="13">-3.00</option>
                                                    <option value="14">-3.25</option>
                                                    <option value="15">-3.50</option>
                                                    <option value="16">-3.75</option>
                                                    <option value="17">-4.00</option>
                                                    <option value="18">-4.25</option>
                                                    <option value="19">-4.50</option>
                                                    <option value="20">-4.75</option>
                                                    <option value="21">-5.00</option>
                                                    <option value="22">-5.25</option>
                                                    <option value="23">-5.50</option>
                                                    <option value="24">-5.75</option>
                                                    <option value="25">-6.00</option>
                                                    <option value="26">-6.25</option>
                                                    <option value="27">-6.50</option>
                                                    <option value="28">-6.75</option>
                                                    <option value="29">-7.00</option>
                                                    <option value="30">-7.25</option>
                                                    <option value="31">-7.50</option>
                                                    <option value="32">-7.75</option>
                                                    <option value="33">-8.00</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlAxisL" id="ctl00_ContentPlaceHolderProductDisplay_ddlAxisL">
                                                    <option value="183"></option>
                                                    <option value="200">Axis</option>
                                                    <option value="190">None</option>
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
                                        <td id="ctl00_ContentPlaceHolderProductDisplay_AddRowL">
                                            <div class="lbl-ui select width-100">
                                                <select name="ctl00$ContentPlaceHolderProductDisplay$ddlAddL" id="ctl00_ContentPlaceHolderProductDisplay_ddlAddL">
                                                    <option selected="selected" value="0">Add</option>
                                                    <option value="1">None</option>
                                                    <option value="2">+0.75</option>
                                                    <option value="3">+1.00</option>
                                                    <option value="4">+1.25</option>
                                                    <option value="5">+1.50</option>
                                                    <option value="6">+1.75</option>
                                                    <option value="7">+2.00</option>
                                                    <option value="8">+2.25</option>
                                                    <option value="9">+2.50</option>
                                                    <option value="10">+2.75</option>
                                                    <option value="11">+3.00</option>
                                                    <option value="12">+3.25</option>
                                                    <option value="14">+3.50</option>
                                                    <option value="15">+3.75</option>
                                                    <option value="16">+4.00</option>

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
                                        <select name="" id="" class="width-150 ml-5" onclick="func_ddl_selected_pd_far_click(this.options[this.selectedIndex].text)" onchange="func_reset_pd_ddl(this.value;this.options[this.selectedIndex].text,&#32;&#39;ddlPD1&#39;,&#32;&#39;ddlPD2&#39;);">
                                            <option selected="selected" value="0">PD-R</option>
                                            <option value="1">None</option>

                                            <?php
                                            for ($x = 1; $x < 120; $x++) {
                                                $y = 54;
                                                $z = 19.5;
                                                $x1 = $x / 2;
                                                $val1 = $y + $x;
                                                $val2 = $z + $x1;
                                            ?><option value=<?php echo "{$val1}" ?>><?php echo "{$val2}" ?></option>
                                            <?php
                                            } ?>

                                        </select>
                                        <input type="hidden" name="" id="" />
                                    </div>
                                    <div id="pd-l" class="" style="display:none">
                                        <select name="" class="width-150 ml-2" id="select-pd" onchange="">
                                            <option selected="selected"  value="0">PD-L</option>
                                            <option value="1">None</option>
                                            <?php
                                            for ($x = 1; $x < 120; $x++) {
                                                $y = 54;
                                                $z = 19.5;
                                                $x1 = $x / 2;
                                                $val1 = $x + 1;
                                                $val2 = $z + $x1;
                                            ?><option value=<?php echo "{$val1}" ?>><?php echo "{$val2}" ?></option>
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
                            <h3 class="jsx-761701937 pc-lens-bar-title">#S0169(C12)</h3>
                        </a>
                        <div style="width:100%" class="jsx-1467848752 pc-extend-button undefined"><span class="icon iconfont icon-empty-heart " style="font-size:20px;margin-left:15px;font-weight:800;color:#333"></span></div>
                    </div>
                    <picture class="jsx-2643774471 imgBox ">
                        <img src="assests/images/562N-black-1.jpg" class="w-100" alt="">
                    </picture>
                    <div class="jsx-761701937 pc-lens-change-frame"><a class="jsx-761701937" href="/eyeglasses-p-6415.html?color=15758">&lt; Change Frame</a></div>
                    <p class="jsx-761701937 pc-lens-bar-price-item">Frame Price: <b class="jsx-761701937">$23.99 </b></p>
                    <p class="jsx-761701937 pc-lens-bar-price-item pc-lens-price-detail-container">Lens Price: <b class="jsx-761701937">$0.00 </b></p>
                    <p class="jsx-761701937 pc-lens-bar-price"><span class="jsx-761701937">Total: </span><span class="jsx-761701937 pc-lens-bar-total">$23.99 </span></p><button class="jsx-761701937 pc-lens-bar-add-cart text-center lens-bar-add-cart-disable">ADD TO CART</button>
                    <div class="pres-lens-foot">
                        <p style="margin-bottom:0">Free Standard Shipping:</p>
                        <p style="margin-bottom:0"><b>Total Price
                                <!-- -->≥
                                <!-- -->$69.00
                                <!-- --> (US only)</b></p>
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
        $(document).ready(function() {

        });
    </script>


    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery_func.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/ajax_calls.js"></script>
</body>

</html>