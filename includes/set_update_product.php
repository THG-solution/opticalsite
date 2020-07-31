<?php 

include "../database/db_controller.php";
include "../database/db_table.php";

$db = new DBController();
$customer = new Table($db);
$query = "SELECT * FROM products p, product_colors c where p.product_id=c.product_id AND p.product_id='{$_GET['pid']}'";
$resultSet = $customer->getProductById($query);

    // header("Location: ../admin/index.php?id=product");
    foreach ($resultSet as $result){
        $gen = '';
        if ($result['gender'] == 'unisex') {
            $gen = "<div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios1' value='unisex' checked /> Unisex </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='men' /> Men </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='women' /> Women </label>
            </div>
        </div>";
        }
        else if ($result['gender'] == 'men') {
            $gen = "<div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios1' value='unisex' /> Unisex </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='men' checked /> Men </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='women' /> Women </label>
            </div>
        </div>";
        }
        else if ($result['gender'] == 'women') {
            $gen = "<div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios1' value='unisex' /> Unisex </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='men' /> Men </label>
            </div>
        </div>
        <div class='col-sm-2 d-flex align-items-center'>
            <div class='form-check'>
                <label class='form-check-label'>
                    <input type='radio' class='' name='gender' id='membershipRadios2' value='women' checked /> Women </label>
            </div>
        </div>";
        }
        echo "
        <form method='POST' action='../includes/update_product.php?pid={$result['product_id']}&clr={$result['colour_name']}' enctype='multipart/form-data' class='needs-validation' novalidate >
                <div class='form-group'>
                    <label >Product Id</label>
                    <input id='id' class='form-control' name='id' type='text' required patter='[a-zA-Z]{3,}' value={$result['product_id']} />
                </div>
                <div class='form-group'>
                    <label >Brand</label>
                    <select name='brand' id='brand' class='form-control' required value={$result['brand']} >
                        <option value=''  disabled><i class='fa fa-angle-down'></i></option>
                        <option value='Ford'>Ford</option>
                        <option value='Police'>Police</option>
        
                    </select>
                </div>
                <div class='form-group'>
                    <label for='lastname'>Category</label>
                    <select name='cat' id='cat' class='form-control' required value={$result['category']}>
                        <option value=''  disabled><i class='fa fa-angle-down'></i></option>
                        <option value='frames'>Frames</option>
                        <option value='sunglasses'>Sunglasses</option>
                    </select>
                </div>
                <div class='form-group row'>
                    <label class='d-flex align-items-center'>Gender: </label>
                    {$gen}
                </div>
                <div class='form-group'>
                    <label for=''>Material</label>
                    <select name='material' id='material' class='form-control' required value={$result['material']}>
                        <option value=''  disabled><i class='fa fa-angle-down'></i></option>
                        <option value='metal'>Metal</option>
                        <option value='plastic'>Plastic</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for=''>Frame Type</label>
                    <select name='type' id='type' class='form-control' required value={$result['frame_type']}>
                        <option value='' disabled><i class='fa fa-angle-down'></i></option>
                        <option value='frame'>Frame</option>
                        <option value='full-rim'>Full-rim</option>
                        <option value='half-rim'>Half-rim</option>
        
                    </select>
                </div>
                <div class='form-group'>
                    <label for=''>Frame Shape</label>
                    <select name='shape' id='shape' class='form-control' required value={$result['frame_shape']}>
                        <option value='' disabled><i class='fa fa-angle-down'></i></option>
                        <option value='square'>Square</option>
                        <option value='round'>Round</option>
                        <option value='wayfarer'>Wayfarer</option>
        
                    </select>
                </div>
                <div class='form-group'>
                    <label for=''>Lens Size</label>
                    <input id='lensize' class='form-control' value={$result['lens_size']} name='lens' type='number' required patter='[0-9]+' />
                </div>
                <div class='form-group'>
                    <label for=''>Bridge Size</label>
                    <input id='bridgesize' class='form-control' value={$result['bridge_size']} name='bridge' type='number' required patter='[0-9]+' />
                </div>
                <div class='form-group'>
                    <label for=''>Temple Size</label>
                    <input id='templesize' class='form-control' value={$result['temple_size']} name='temple' type='number' required patter='[0-9]+' />
                </div>
                <div class='form-group'>
                    <label for=''>Color: </label>
                    <input id='color' class='form-control' value={$result['colour_name']}  name='color' type='text' required patter='[A-Za-z]{3,}' />
                </div>
                    <label>Upload Image1</label>
                    <input type='file' name='img1'  accept='image/*'  /><br>
                    <label>Upload Image2</label>
                    <input type='file' name='img2' accept='image/*'  /><br>
                    <label>Upload Image3</label>
                    <input type='file' name='img3' accept='image/*'  />
                <div class='form-group'>
                    <label for=''>Price</label>
                    <input id='price' class='form-control' name='price' value={$result['price']} type='number' />
                </div>
                <div>Image 01 <img src='../assests/images/{$result['img1']}' style='width: 100px !important; height: 100px !important' alt=''></div>
                <div>Image 02 <img src='../assests/images/{$result['img2']}' style='width: 100px !important; height: 100px !important' alt=''></div>
                <div>Image 03 <img src='../assests/images/{$result['img3']}' style='width: 100px !important; height: 100px !important' alt=''></div><br>
                <input class='btn btn-primary' type='submit' value='Submit' />
        </form>";
    }




?>