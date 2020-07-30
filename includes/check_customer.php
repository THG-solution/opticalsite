<?php
include "../database/db_controller.php";
include "../database/db_table.php";
$email = $_POST['email'];
$password = $_POST['pswd'];

$db = new DBController();
$customer = new Table($db);
$result = $customer->login($email, $password);
if ($result) {
    session_start();
    if (!empty($_POST['remember']) && $_POST['remember'] == 'on'){
        $_COOKIE['email'] = $email;
        $_COOKIE['password'] = $password;
    }
    $_SESSION["isLogin"] = "OK";
    $_SESSION['username'] = $result['firstname'];
    $_SESSION['email'] = $email;
    header("Location: ../index.php");
}
else if ($result == false) {
    echo header("Location: ../index.php?q=err");;
}
?>