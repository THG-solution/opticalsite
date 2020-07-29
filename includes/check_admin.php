<?php
include "../database/db_controller.php";
include "../database/db_table.php";
$email = $_POST['email'];
$password = $_POST['pswd'];

$db = new DBController();
$customer = new Table($db);
$result = $customer->loginAdmin($email, $password);
if ($result) {
    session_start();
    $_SESSION["isLogin"] = "OK";
    $_SESSION['username'] = $result['firstname'];
    header("Location: ../admin/index.php");
}
else if ($result == false) {
    header("Location: ../admin/login.php?q=err");
}
?>