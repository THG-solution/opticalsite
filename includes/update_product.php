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

echo $_GET['pid'] . $id
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
$query = "UPDATE `products` SET `product_id`='$id',`lens_size`='$lens',`bridge_size`='$bridge',
`temple_size`='$temple',`brand`='$brand',`gender`='$gender',`category`='$cat',`material`='$mat',
`frame_type`='$type',`frame_shape`='$shape',`price`='$price'
WHERE product_id='{$_GET['pid']}'";
$result = $customer->updateProduct($query);

$err = '';
if (!move_uploaded_file($_FILES['img1']['tmp_name'],$img1)){
    // $err = 'err';
}
if (!move_uploaded_file($_FILES['img2']['tmp_name'],$img2)){
    // $err = 'err';
}
if (!move_uploaded_file($_FILES['img3']['tmp_name'],$img3)){
    // $err = 'err';
}

$qim1 = ''; $qim2 = ''; $qim3 = '';

if (empty($im1) != 1) {
    $qim1 = ",`img1`='$im1'";
}
if (empty($im2) != 1) {
    $qim2 = ",`img2`='$im2'";
}
if (empty($im3) != 1) {
    $qim3 = ",`img3`='$im3'";
}
echo $qim1 .$qim2 .$qim3;
$result1 = '';
if ($err != 'err') {
    $query1 = "UPDATE `product_colors` SET `product_id`='$id',`colour_name`='$color'
    {$qim1}{$qim2}{$qim3}
    WHERE product_id='{$_GET['pid']}' AND colour_name='{$_GET['clr']}'";
    $result1 = $customer->updateProduct($query1);
}

header("Location: ../admin/index.php?id=product");


?>