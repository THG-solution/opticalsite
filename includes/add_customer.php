<?php 
include "../database/db_controller.php";
include "../database/db_table.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['signemail'];
$password = $_POST['signpswd'];
$cnfrmpassword = $_POST['cnfrmpswd'];

echo $firstname . $lastname . $email . $password . $cnfrmpassword;

$db = new DBController();
$customer = new Table($db);
try {
    if ($password == $cnfrmpassword) {
        $result = $customer->insertCustomer("INSERT INTO customer (email,firstname, lastname, `password`) values ('$email', '$firstname', '$lastname', '$password' )");
        if ($result == 1) {}
        else {
            header('Location: ../index.php');
        }
    }
    else header('Location: ../index.php?q=pnc');
}
catch (Exception $e) {
    header('Location: ../index.php?q=er');
}
?>