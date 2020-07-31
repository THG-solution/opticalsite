<?php
if(isset($_GET['lp']))
{
    $lens_price=$_GET['lp'];
    echo "$ {$lens_price}";    
}

if(isset($_GET['tp']))
{
    $total_price=$_GET['tp'];
    echo "$ {$total_price}";    
}

if(isset($_GET['cp']))
{
    $coating_price=$_GET['cp'];
    echo "$ {$coating_price}";    
}


?>