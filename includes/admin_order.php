<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Order Table</h3>
                        <!-- <span> <img class="img-add" src="../assests/images/add.png" alt=""></span> -->
                    </div>

                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>
                                    Order ID
                                </th>
                                <th>
                                    Product ID
                                </th>
                                <th>
                                    Order Person
                                </th>
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    Total Price
                                </th>
                                <th>
                                    Payment Status
                                </th>
                                <th>
                                    Options
                                </th>
                            </thead>
                            <?php
                            $db = new DBController();
                            $product = new Table($db);
                            $resultSet = $product->getData("orders");

                            ?>
                            <tbody>
                               <?php
                                if(count($resultSet)==6)
                                {
                                    $result = $resultSet;
                                    ?>
                                  <tr>
                                        <td>
                                            <?php echo "{$result['order_id']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['product_id']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['person']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['quantity']}" ?>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo "{$result['total_price']}" ?>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo "{$result['payment_status']}" ?>
                                        </td>
                                        <td>
                                            <img class="table-icon" src="../assests/images/delete.png" alt="">
                                            <img class="table-icon" src="../assests/images/edit.png" alt="">
                                        </td>
                                    </tr>
                                <?php
                                 }
                                elseif (count($resultSet)>6)
                                {
                                    foreach ($resultSet as $result) 
                                    { ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$result['order_id']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['product_id']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['person']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['quantity']}" ?>
                                            </td>
                                            <td class="text-primary">
                                                <?php echo "{$result['total_price']}" ?>
                                            </td>
                                            <td class="text-primary">
                                                <?php echo "{$result['payment_status']}" ?>
                                            </td>
                                            <td>
                                                <img class="table-icon" src="../assests/images/delete.png" alt="">
                                                <img class="table-icon" src="../assests/images/edit.png" alt="">
                                            </td>
                                        </tr>
                                    <?php }
                                }
                                else
                                {
                                    echo "<p>No Data To Show</p>";
                                } ?>
                                                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>