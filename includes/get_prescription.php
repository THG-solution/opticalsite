<?php

if(isset($_GET['email']))
{
    $email = $_GET['email'];
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    $result = $product->queryData("SELECT MAX(presc_id) as id from prescription where email = '$email'");
    echo $result['id'];
}