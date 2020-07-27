
<nav id="sidebar">
    <div class="sidebar-header">
        <img class="img w-50" src="../assests/images/administrator-icon-9.jpg.png" alt="" />
        <h3>Admin Sidebar</h3>
    </div>

    <ul class="list-unstyled components">
        <p class="m-3">Welcome Admin !</p>
        <li id="dashboard" class="active m-3">
            <a href="/admin/index.php">Dashboard</a>
        </li>
        <li id="admin"  class="m-3">
            <a href="/admin/index.php?id=admin">Admin</a>
        </li>
        <!-- <li id="category" class="m-3">
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
        </li> -->

        <li id="order" class="m-3">
            <a href="/admin/index.php?id=order">Order</a>
        </li>
        <li id="customer" class="m-3">
            <a href="/admin/index.php?id=customer">Customer</a>
        </li>
        <li id="product" class="m-3">
            <a href="/admin/index.php?id=product">Product</a>
        </li>
        <li id="category" class="m-3">
            <a href="/admin/index.php?id=category">Category</a>
        </li>
    </ul>
    
    <ul class="list-unstyled CTAs">
        <li>
            <a href="../index.php" class="article">Back to E-commerce Website</a>
        </li>
    </ul>
</nav>
<?php
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        ?> 
        <script type="text/javascript">
            $(document).ready(function(){
                $('#<?php echo "{$id}"?>').addClass('active');
                $('#dashboard').removeClass('active');
            }
            )
        </script>
    
    <?php } ?>
