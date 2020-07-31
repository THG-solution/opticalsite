<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title">Customer Table</h3>
                        <!-- <span> <img class="img-add" src="../assests/images/add.png" alt=""></span> -->
                    </div>

                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>
                                    Customer Email
                                </th>
                                <th>
                                   Customer Name
                                </th>
                                <th>
                                    Options
                                </th>
                            </thead>
                            <?php
                            $db = new DBController();
                            $product = new Table($db);
                            $resultSet = $product->getData("customer");
                            if(!is_array($resultSet))
                                $resultSet = array();
                            
                            ?>
                            <tbody>
                               <?php
                                if(count($resultSet)==1)
                                {
                                    $result = $resultSet;
                                    ?>
                                  <tr>
                                        <td>
                                            <?php echo "{$result['email']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "{$result['firstname']}" ?>
                                        </td>
                                        <td>
                                            <?php echo "<img class='table-icon' id='{$result['email']}' src='../assests/images/delete.png' alt=''>" ?>
                                            <img class="table-icon" src="../assests/images/edit.png" alt="">
                                        </td>
                                    </tr>
                                <?php
                                 }
                                elseif (count($resultSet)>1)
                                {
                                    foreach ($resultSet as $result) 
                                    { ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$result['email']}" ?>
                                            </td>
                                            <td>
                                                <?php echo "{$result['firstname']}" ?>
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