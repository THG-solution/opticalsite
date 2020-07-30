<?php 
include "../database/db_controller.php";
include "../database/db_table.php";

$dir = '../assests/images/';
$id = $_POST['id'];
$brand = $_POST['brand'];
$cat = $_POST['cat'];
$gender = $_POST['gender'];
$mat = $_POST['material'];
$type = $_POST['type'];
$shape = $_POST['shape'];
$lens = $_POST['lens'];
$bridge = $_POST['bridge'];
$temple = $_POST['temple'];
$color = $_POST['color'];
$img1 = $dir . basename($_FILES['img1']['name']);
$img2 = $dir . basename($_FILES['img2']['name']);
$img3 = $dir . basename($_FILES['img3']['name']);
$im1 = basename($_FILES['img1']['name']);
$im2 = basename($_FILES['img2']['name']);
$im3 = basename($_FILES['img3']['name']);
$price = $_POST['price'];
print_r($_FILES['img1']);
echo $id
.$brand
.$cat
.$gender
.$mat
.$type
.$shape
.$lens
.$bridge
.$temple
.$color
.$img1
.$img2
.$img3
.$price;

$db = new DBController();
$customer = new Table($db);
$query = "INSERT INTO products 
(`product_id`, `lens_size`, `bridge_size`, `temple_size`, `brand`, `gender`, `category`, `material`, `frame_type`, `frame_shape`, `price`) VALUES 
('$id',$lens,$bridge,$temple,'$brand','$gender','$cat','$mat','$type','$shape',$price)";
$result = $customer->insertProduct($query);

$err = '';
if (!move_uploaded_file($_FILES['img1']['tmp_name'],$img1)){
    $err = 'err';
}
if (!move_uploaded_file($_FILES['img2']['tmp_name'],$img2)){
    $err = 'err';
}
if (!move_uploaded_file($_FILES['img3']['tmp_name'],$img3)){
    $err = 'err';
}

$result1 = '';
if ($err != 'err') {
    $query1 = "INSERT INTO `product_colors` (`product_id`, `colour_name`, `img1`, `img2`, `img3`) VALUES 
    ('$id','$color','$im1','$im2','$im3')";
    $result1 = $customer->insertProduct($query1);
}

header("Location: ../admin/index.php?id=product");


?>