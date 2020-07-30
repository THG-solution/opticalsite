<?php 
include "../database/db_controller.php";
include "../database/db_table.php";

$db = new DBController();
$customer = new Table($db);

$query = "DELETE FROM `products` WHERE product_id='{$_GET['id']}'";
$result = $customer->deleteProduct($query);
header("Location: ../admin/index.php?id=product")
?>