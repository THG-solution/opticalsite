<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Product Table</h3>
                        <span> <img class="img-add" src="../assests/images/add.png" alt=""></span>
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