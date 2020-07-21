<?php

$conn = mysqli_connect("localhost", "root", "", "optics_ecommerce");
if(!$conn){
die("Database connection has failed" . mysqli_error());
}
?>
