<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header card-header-primary">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Product Table</h3>

                        <span>
                            <img class="img-add d-none d-block" src="../assests/images/add.png" alt="">
                            <img class="img-close d-none" src="../assests/images/close.png" alt="">

                        </span>
                    </div>

                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                </div>
                <div id="add-form" class="row d-none ml-2">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title d-flex justify-content-center">Add Product Form</h4>
                                <form class="cmxform" id="signupForm" method="GET" action="#" class="needs-validation" novalidate >
                                    <!-- <fieldset> -->
                                        <div class="form-group">
                                            <label for="firstname">Product Id</label>
                                            <input id="firstname" class="form-control" name="firstname" type="text" required patter="[a-zA-Z]{3,}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Brand</label>
                                            <select name="brand" id="brand" class="form-control" required >
                                                <option value="" selected disabled><i class="fa fa-angle-down"></i></option>
                                                <option value="Ford">Ford</option>
                                                <option value="Police">Police</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Category</label>
                                            <select name="brand" id="brand" class="form-control">
                                                <option value="" selected disabled><i class="fa fa-angle-down"></i></option>
                                                <option value="frames">Frames</option>
                                                <option value="sunglasses">Sunglasses</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="d-flex align-items-center">Gender: </label>
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="" name="membershipRadios" id="membershipRadios1" value="" checked /> Unisex</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="" name="membershipRadios" id="membershipRadios2" value="option2" /> Men </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="" name="membershipRadios" id="membershipRadios2" value="option2" /> Women </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Material</label>
                                            <select name="brand" id="brand" class="form-control">
                                                <option value="" selected disabled><i class="fa fa-angle-down"></i></option>
                                                <option value="metal">Metal</option>
                                                <option value="plastic">Plastic</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Frame Type</label>
                                            <select name="brand" id="brand" class="form-control">
                                                <option value="" selected disabled><i class="fa fa-angle-down"></i></option>
                                                <option value="frame">Frame</option>
                                                <option value="full-rim">Full-rim</option>
                                                <option value="half-rim">Half-rim</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Frame Shape</label>
                                            <select name="brand" id="brand" class="form-control">
                                                <option value="" selected disabled><i class="fa fa-angle-down"></i></option>
                                                <option value="square">Square</option>
                                                <option value="round">Round</option>
                                                <option value="wayfarer">Wayfarer</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Lens Size</label>
                                            <input id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Bridge Size</label>
                                            <input id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Temple Size</label>
                                            <input id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Colors: </label>
                                            <input id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <div class="form-group">
                                            <label>Image upload</label>
                                            <input type="file" name="img[]" class="file-upload-default" />
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image" />
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-gradient-primary" type="button"> Upload </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Price</label>
                                            <input id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Submit" />
                                    <!-- </fieldset> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Brand
                                </th>
                                <th>
                                    Gender
                                </th>
                                <th>
                                    Material
                                </th>
                                <th>
                                    Category
                                </th>
                                <th>
                                    Frame Type 
                                </th>
                                <th>
                                    Frame Shape 
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Options
                                </th>
                            </thead>
                            <?php
                            $db = new DBController();
                            $product = new Table($db);
                            $resultSet = $product->getData("products");
                            ?>
                            <tbody>
                                <?php
                                foreach ($resultSet as $result) { ?>
                                    <tr>
                                        <td>
                                            <?php echo "{$result['product_id']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['brand']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['gender']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['material']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['category']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['frame_type']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['frame_shape']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "$ {$result['price']}" ?>
                                        </td>
                                        <td>
                                            <img id="" class="delete-icon table-icon" src="../assests/images/delete.png" alt="">
                                            <img id="" class="edit-icon table-icon" src="../assests/images/edit.png" alt=<?php echo "{$result['product_id']}" ?>>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header card-header-primary ">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Product Rating Table</h3>
                        <!-- <span> <img class="img-add" src="../assests/images/add.png" alt=""></span> -->
                    </div>

                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>
                                    Product ID
                                </th>
                                <th>
                                    Total Reviews
                                </th>
                                <th>
                                    Average Rating
                                </th>
                                <th>
                                    Options
                                </th>
                            </thead>
                            <?php
                            $db = new DBController();
                            $product = new Table($db);
                            $resultSet = $product->getData("products");
                            if (!is_array($resultSet))
                                $resultSet = array();

                            ?>
                            <tbody>
                                <?php
                                if (count($resultSet) == 4) {
                                    $result = $resultSet;
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo "{$result['product_id']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['total_review']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['avg_star']}" ?>
                                        </td>
                                        <td>
                                            <img class="table-icon" src="../assests/images/delete.png" alt="">
                                            <img class="table-icon" src="../assests/images/edit.png" alt="">
                                        </td>
                                    </tr>
                                    <?php
                                } elseif (count($resultSet) > 4) {
                                    foreach ($resultSet as $result) { ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$result['product_id']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['total_review']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['avg_star']}" ?>
                                            </td>
                                            <td>
                                                <img class="table-icon" src="../assests/images/delete.png" alt="">
                                                <img class="table-icon" src="../assests/images/edit.png" alt="">
                                            </td>
                                        </tr>
                                <?php }
                                } else {
                                    echo " </tbody></table> <p>No Data To Show</p> ";
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>