<?php

echo "<form method='POST' action='../includes/add_product.php' enctype='multipart/form-data' class='needs-validation' novalidate >
<div class='form-group'>
    <label >Product Id</label>
    <input id='id' class='form-control' name='id' type='text' required patter='[a-zA-Z]{3,}' />
</div>
<div class='form-group'>
    <label >Brand</label>
    <select name='brand' id='brand' class='form-control' required >
        <option value='' selected disabled><i class='fa fa-angle-down'></i></option>
        <option value='Baveria Optics'>Baveria Optics</option>

    </select>
</div>
<div class='form-group'>
    <label for='lastname'>Category</label>
    <select name='cat' id='cat' class='form-control' required>
        <option value='' selected disabled><i class='fa fa-angle-down'></i></option>
        <option value='frames'>Frames</option>
        <option value='sunglasses'>Sunglasses</option>
    </select>
</div>
<div class='form-group row'>
    <label class='d-flex align-items-center'>Gender: </label>
    <div class='col-sm-2 d-flex align-items-center'>
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
    </div>
</div>
<div class='form-group'>
    <label for=''>Material</label>
    <select name='material' id='material' class='form-control' required>
        <option value='' selected disabled><i class='fa fa-angle-down'></i></option>
        <option value='metal'>Metal</option>
        <option value='plastic'>Plastic</option>
        <option value='acetate'>Acetate</option>
        
    </select>
</div>
<div class='form-group'>
    <label for=''>Frame Type</label>
    <select name='type' id='type' class='form-control' required>
        <option value='' selected disabled><i class='fa fa-angle-down'></i></option>
        <option value='frame'>Frame</option>
        <option value='full-rim'>Full-rim</option>
        <option value='half-rim'>Half-rim</option>

    </select>
</div>
<div class='form-group'>
    <label for=''>Frame Shape</label>
    <select name='shape' id='shape' class='form-control' required>
        <option value='' selected disabled><i class='fa fa-angle-down'></i></option>
        <option value='square'>Square</option>
        <option value='round'>Round</option>
        <option value='wayfarer'>Wayfarer</option>
        <option value='rectangle'>Rectangle</option>
    </select>
</div>
<div class='form-group'>
    <label for=''>Lens Size</label>
    <input id='lensize' class='form-control' name='lens' type='number' required patter='[0-9]+' />
</div>
<div class='form-group'>
    <label for=''>Bridge Size</label>
    <input id='bridgesize' class='form-control' name='bridge' type='number' required patter='[0-9]+' />
</div>
<div class='form-group'>
    <label for=''>Temple Size</label>
    <input id='templesize' class='form-control' name='temple' type='number' required patter='[0-9]+' />
</div>
<div class='form-group'>
    <label for=''>Color: </label>
    <input id='color' class='form-control' name='color' type='text' required patter='[A-Za-z]{3,    }' />
</div>
    <label>Upload Image1</label>
    <input type='file' name='img1' required accept='image/*'  /><br>
    <label>Upload Image2</label>
    <input type='file' name='img2' accept='image/*'  /><br>
    <label>Upload Image3</label>
    <input type='file' name='img3' accept='image/*'  />
<div class='form-group'>
    <label for=''>Price</label>
    <input id='price' class='form-control' name='price' type='number' />
</div>
<input class='btn btn-primary' type='submit' value='Submit' />
</form>";

?>