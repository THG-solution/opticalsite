<?php 
include "../database/db_controller.php";
include "../database/db_table.php";

$db = new DBController();
$customer = new Table($db);

$query = "DELETE FROM `cart` WHERE cart_id= {$_GET['id']} and email = '{$_GET['email']}'";
$result = $customer->deleteProduct($query);
echo "{$result}";


?>