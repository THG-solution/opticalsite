<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img class="img w-50" src="../assests/images/administrator-icon-9.jpg.png" alt="">
                <h3>Admin Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome Admin !</p>
                <li class="active">
                     <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Admin</a>
                    <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
                    <ul class="collapse list-unstyled" id="categorySubmenu">
                        <li>
                            <a href="#">Category 1</a>
                        </li>
                        <li>
                            <a href="#">Category 2</a>
                        </li>
                        <li>
                            <a href="#">Category 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Order</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li>
                    <a href="#">Brand</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                
                <li>
                    <a href="../index.php" class="article">Back to E-commerce Website</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.php">Log Out</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            
            <h1>Admin Panel</h1>
            <table class="product-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Images</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Samsung Galaxy S8</td>
                        <td></td>
                        <td>900</td>
                        <td>10</td>
                        <td>Mobiles</td>
                        <td>Samsung</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S8</td>
                        <td></td>
                        <td>900</td>
                        <td>10</td>
                        <td>Mobiles</td>
                        <td>Samsung</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S8</td>
                        <td></td>
                        <td>900</td>
                        <td>10</td>
                        <td>Mobiles</td>
                        <td>Samsung</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S8</td>
                        <td></td>
                        <td>900</td>
                        <td>10</td>
                        <td>Mobiles</td>
                        <td>Samsung</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S8</td>
                        <td></td>
                        <td>900</td>
                        <td>10</td>
                        <td>Mobiles</td>
                        <td>Samsung</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h1>Admin List</h1>
                <table class="admin-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Hasnain</td>
                        <td>hasnainshoaib45@gmail.com</td>
                        <td>223123</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hasnain</td>
                        <td>hasnainshoaib45@gmail.com</td>
                        <td>223123</td>
                        <td></td>
                     </tr>
                    <tr>
                        <td>Hasnain</td>
                        <td>hasnainshoaib45@gmail.com</td>
                        <td>223123</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hasnain</td>
                        <td>hasnainshoaib45@gmail.com</td>
                        <td>223123</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hasnain</td>
                        <td>hasnainshoaib45@gmail.com</td>
                        <td>223123</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h1>Customer List</h1>
                <table class="customer-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Musaab</td>
                        <td>musaab.98@gmail.com</td>
                        <td>031341323</td>
                        <td>Dastagir</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Musaab</td>
                        <td>musaab.98@gmail.com</td>
                        <td>031341323</td>
                        <td>Dastagir</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Musaab</td>
                        <td>musaab.98@gmail.com</td>
                        <td>031341323</td>
                        <td>Dastagir</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Musaab</td>
                        <td>musaab.98@gmail.com</td>
                        <td>031341323</td>
                        <td>Dastagir</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h1>Order List</h1>
                <table class="order-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Trx id</th>
                        <th>Payment Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Samsung Galaxy S8</td>
                        <td>1</td>
                        <td>398v271x897m290a7</td>
                        <td>Complete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Samsung Galaxy S8</td>
                        <td>1</td>
                        <td>398v271x897m290a7</td>
                        <td>Complete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Samsung Galaxy S8</td>
                        <td>1</td>
                        <td>398v271x897m290a7</td>
                        <td>Complete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Samsung Galaxy S8</td>
                        <td>1</td>
                        <td>398v271x897m290a7</td>
                        <td>Complete</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h1>Brand List</h1>
                <table class="brand-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>HP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HP</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h1>Category List</h1>
                <table class="category-table cmn-tables-css">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Notebook</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>

