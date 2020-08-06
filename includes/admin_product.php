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
                                <div id="adform" >
                                    
                                </div>
                               
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
                                            <?php echo "AED {$result['price']}" ?>
                                        </td>
                                        <td>
                                        <?php echo "<img id='{$result['product_id']}' class='delete-icon table-icon' src='../assests/images/delete.png' alt=''>" ?>
                                        <?php echo "<img id='{$result['product_id']}' class='edit-icon table-icon' src='../assests/images/edit.png' alt={$result['product_id']}>" ?>
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