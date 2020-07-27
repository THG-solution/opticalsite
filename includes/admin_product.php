<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Product Table</h3>

                        <span>
                            <img class="img-add" src="../assests/images/add.png" data-toggle="modal" data-target="#addModal" alt="">
                        </span>

                        <!-- The Modal -->
                        <div class="modal fade" id="addModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header bg-danger">
                                        <h4 class="modal-title">Sign In</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                    </div>

                                    <!-- Sign In Modal body -->
                                    <div class="modal-body">
                                        <h2>Member Login</h2>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="">Username :</label>
                                                <input class="" type="text" name="username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="">password :</label>
                                                <input class="" type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input class="btn btn-outline-success signin-btn" type="submit" value="Sign in">
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <p> <a href="" class="text-dark"> Forget your password?</a></p>
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
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
                                    Total Reviews
                                </th>
                                <th>
                                    Average Stars
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
                                        <td class="text-primary">
                                            <?php echo "{$result['total_review']}" ?>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo "{$result['avg_star']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "$ {$result['price']}" ?>
                                        </td>
                                        <td>
                                            <img class="table-icon" src="../assests/images/delete.png" alt="">
                                            <img class="table-icon" src="../assests/images/edit.png" alt="">
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>