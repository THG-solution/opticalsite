<?php 
include "../database/db_controller.php";
include "../database/db_table.php";

$db = new DBController();
$customer = new Table($db);

$query = "DELETE FROM `products` WHERE product_id='{$_GET['id']}'";
$query2 = "DELETE FROM product_colors WHERE product_id='{$_GET['id']}'";
$query3 = "DELETE FROM product_review WHERE product_id='{$_GET['id']}'";

$result = $customer->deleteProduct($query);
$result = $customer->deleteProduct($query2);
$result = $customer->deleteProduct($query3);

header("Location: ../admin/index.php?id=product")
?>