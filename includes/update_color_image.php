<?php
if (isset($_GET['div'])) 
{
    $id=$_GET['id'];
    $color=$_GET['color'];
    if (!file_exists("database/db_controller.php")) {
        include "../database/db_controller.php";
        include "../database/db_table.php";
    } else {
        include "database/db_controller.php";
        include "database/db_table.php";
    }

    $db = new DBController();
    $product = new Table($db);
    if ($_GET['div'] == 'banner') 
    {

        $result = $product->queryData("SELECT img1, img2 , img3  FROM  product_colors  WHERE product_id = '{$id}' and colour_name = '{$color}'");
        ob_start();
        ?>
        <div class="pd-product-control-item">
            <picture class="imgBox">
                <img src=<?php echo "'../assests/images/{$result['img1']}'" ?> class="w-100 im" alt="">
            </picture>
        </div>
        <div class="pd-product-control-item">
            <picture class="imgBox">
                <img src=<?php echo "'../assests/images/{$result['img2']}'" ?> class="w-100 im" alt="">
            </picture>
        </div>
        <div class="pd-product-control-item">
            <picture class="imgBox">
                <img src=<?php echo "'../assests/images/{$result['img3']}'" ?> class="w-100 im" alt="">
            </picture>
        </div>
        <?php
        $content = ob_get_clean();
        echo $content;
    }
    elseif ($_GET['div'] == 'main')
    {
        $result = $product->queryData("SELECT c.img1, p.avg_star, p.total_review FROM products p, product_colors c WHERE c.product_id = p.product_id and p.product_id = '{$id}' and c.colour_name = '{$color}' LIMIT 1");
        ob_start();
        ?>
        <img class='pd-img' id='main-image' src=<?php echo "'../assests/images/{$result['img1']}'" ?> alt=''>
        
        <?php
        $content = ob_get_clean(); 
        echo $content;
    }
}