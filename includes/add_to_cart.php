<?php
if(isset($_GET['email']))
{
    $email = $_GET['email'];
    $id = $_GET['id'];
    $colour = $_GET['colour'];
    $lens_type = $_GET['lens_type'];
    $lens = $_GET['lens'];
    $coating = $_GET['coating'];
    $coating_price = $_GET['coating_price'];
    $lens_price = $_GET['lens_price'];
    $prescription = $_GET['prescription'];
    $presc_id = $_GET['presc_id'];

    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    $result=  $product->insertCustomer("INSERT INTO `cart`(`email`, `product_id`, `colour_name`, `lens_type`, `lens`, `coating`, `prescription`, `coating_price`, `lens_price`, `presc_id`)
                                                    VALUES ( '$email', '$id', '$colour', '$lens_type', '$lens', '$coating', '$prescription', '$coating_price', '$lens_price', '$presc_id')");
    echo '{$result}';
    

}