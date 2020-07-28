<?php
include "../database/db_controller.php";
include "../database/db_table.php";
$email = $_POST['email'];
$password = $_POST['pswd'];

echo $email . $password;

$db = new DBController();
$customer = new Table($db);
$result = $customer->login($email, $password);
if ($result) {
    session_start();
    $_COOKIE['email'] = $email;
    $_COOKIE['password'] = $password;
    $_SESSION["isLogin"] = "OK";
    $_SESSION['username'] = $result['firstname'];
    header("Location: ../index.php");
}
else if ($result == false) {
    echo 'Error';
}
?>