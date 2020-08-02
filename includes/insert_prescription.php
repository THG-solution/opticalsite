<?php
if(isset($_GET['email']))
{
    $email = $_GET['email'];
    $pr_s = $_GET['pr_s'];
    $pr_c = $_GET['pr_c'];
    $pr_ax = $_GET['pr_ax'];
    $pr_ad = $_GET['pr_ad'];
    $pl_s = $_GET['pl_s'];
    $pl_c = $_GET['pl_c'];
    $pl_ax = $_GET['pl_ax'];
    $pl_ad = $_GET['pl_ad'];
    $pd_r = $_GET['pd_r'];
    $pd_l = $_GET['pd_l'];

    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    $result=  $product->insertCustomer("INSERT INTO `prescription`(`email`, `r_sphere`, `l_sphere`, `r_cylinder`, `l_cylinder`, `r_axis`, `l_axis`, `r_add`, `l_add`, `pd_r`, `pd_l`)
                                                                    VALUES ('$email','$pr_s','$pl_s','$pr_c','$pl_c','$pr_ax','$pl_ax','$pr_ad','$pl_ad','$pd_r','$pd_l')");
    echo '{$result}';
      


}