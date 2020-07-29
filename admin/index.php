<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
    <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <?php
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }
    ?>
    <div class="wrapper">

        <!-- Sidebar Holder -->
        <?php include "../includes/admin_sidebar.php" ?>

        <!-- Page Content Holder -->
        <div id="content">

            <?php include "../includes/admin_navbar.html" ?>

            <div class="content">
                <!--  Page Content file -->

                <?php

                // Checking if id is set or not, if it is set then display that specific id page
                if (isset($_GET['id'])) {
                    switch ($_GET['id']) {
                        case 'product':
                            include "../includes/admin_product.php";
                            break;
                        case 'order':
                            include "../includes/admin_order.php";
                            break;
                        case 'category':
                            include "../includes/admin_category.php";
                            break;
                        case 'admin':
                            include "../includes/admin_admin.php";
                            break;
                        case 'customer':
                            include "../includes/admin_customer.php";
                            break;
                        default:
                            include "../includes/admin_dashboard.php";
                            break;
                    }
                }
                // Otherwise display the dashboard page
                else {
                    include "../includes/admin_dashboard.php";
                }
                ?>

            </div>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').toggleClass('active');
                        $(this).toggleClass('active');
                    });

                    $(".img-add").on("click", function() {
                        $('#add-form').addClass('current');
                        $(".img-close").addClass('d-block');
                        $('.img-add').removeClass('d-block');
                    });
                    $(".img-close").on("click", function() {
                        $('#add-form').removeClass('current');
                        $(".img-close").removeClass('d-block');
                        $('.img-add').addClass('d-block');
                    });
                    $('.edit-icon').on('click', function(){
                        var imageId =  $(this).attr('alt');
                        alert(imageId);
                    
                    })
                    
                });
            </script>
</body>

</html>