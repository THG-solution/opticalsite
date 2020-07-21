<?php include "includes/conn.php" ?>
<?php 
        $query = 'Select * from products';
        $run = mysqli_query($conn, $query);
        if($run == true){
            while($result = mysqli_fetch_array($run)){
                echo "
                <div class='product-list-item'>
    <picture class='product-img'>
        <a href='/includes/product_desc.php'>
        <img src='../assests/images/gls.txt' alt=''>  
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
                $ {$result['p_prize']}
            </p>

        </div>
    </div>
</div>    ";
            }
        }
        else
            echo "Error";
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
