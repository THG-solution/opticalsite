<?php
if(isset($_GET['email']))
{
    $email = $_GET['email'];
    $rate = $_GET['rate'];
    $rateTA = $_GET['rateTA'];
    $id = $_GET['id'];

    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    $result=  $product->insertCustomer("INSERT INTO `product_review`(`product_id`, `review_person`, `review_star`, `review_comment`) 
                                                            VALUES ('{$id}', '{$email}', {$rate}, '{$rateTA}')");
    echo print_r($result);
      


}