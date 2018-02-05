<?php  
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                        
                    if(isset($_POST['add_Stocks'])){
                        $id = $_POST['controlNo'];
                        $quantity = $_POST['qty1'];
                        $chemName1 = $_POST['chemName1'];
                        $sql = "INSERT INTO added_quantity (qty1, chemName1, date_time, in_out) VALUES ( '$quantity','$chemName1', NOW(), 'out')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE chemicalstockTrans SET qty1=(qty1 + '$quantity'), date = NOW() WHERE controlNo='$id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>alert("Succesfully Added!"); window.location.href="ChemicalsTrans.php"</script>';
                            } else {    
                                echo "Error updating record: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
    
    
                    
                    if(isset($_POST['dispense_Stocks'])){
                        $id = $_POST['controlNo'];
                        $quantity = $_POST['qty1'];
                        $chemName1 = $_POST['chemName1'];
                        $receiver = $_POST['receiver'];
                        $sql = "INSERT INTO added_quantity (qty1, chemName1, receiver ,date_time, in_out) VALUES ( '$quantity','$chemName1', '$receiver' , NOW(), 'out')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE chemicalstockTrans SET qty1=(qty1 - '$quantity'), date = NOW() WHERE controlNo='$id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>alert("Succesfully Added!"); window.location.href="ChemicalsTrans.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Chemicals Transaction</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="img/A.png" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php require 'require/sidebar.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-bell"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-bell"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali" />
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader" />
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
                <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                            <div class="mb-content">
                                <p>Are you sure you want to log out?</p>
                                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                            </div>
                            <div class="mb-footer">
                                <div class="pull-right">
                                    <a href="pages-login-website-light.html" class="btn btn-success btn-lg">Yes</a>
                                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Monitoring</a></li>
                <li class="active"><strong><mark>Chemicals</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab" class="fa fa-flask"> Chemicals Stock List</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">

                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable" id="chemStockList">
                                                <thead>
                                                    <tr>
                                                        <th>Chemical Name</th>
                                                        <th>Chemical Desciption</th>
                                                        <th>Qty.</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php

$query = $conn->query("SELECT * FROM `chemicalstocktrans` ORDER BY `controlNo` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $chemName1 = $fetch['chemName1'];
    $chemDesc1 = $fetch['chemDesc1'];
    $qty1 = $fetch['qty1'];
    $date = $fetch['date'];
    $controlNo = $fetch['controlNo'];
    
                                            echo "<tr>
                                                <td>$chemName1</td>
												<td>$chemDesc1</td>
												<td>$qty1</td>
                                                <td>$date</td>";
?>
    <td>
        <div class='btn-group' role='group' aria-label='...'>
            <a href="#plus<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button></a>
        </div>

        <a href="#minus<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span></button></a>
    </td>


    <!--Add Items Stocks -->
    <div id="plus<?php echo $controlNo; ?>" class="modal fade" role="dialog" data-backdrop="static">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title fa fa-plus"> Add Stocks</h4></center>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="chemName1">Chemical Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required readonly>
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Quantity:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" OnlyNumber="true" id="qty1" name="qty1"  maxlength="3" min="0" max="999"  value="<?php echo $qty1; ?>" placeholder="Quantity" required="" >
                               
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer"><Center>
                        <button type="submit" class="btn btn-info fa fa-plus" name="add_Stocks"> Add Stocks</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle" data-dismiss="modal"> Cancel</button></Center>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <!--dispense Items Stocks -->
    <div id="minus<?php echo $controlNo; ?>" class="modal fade" role="dialog" data-backdrop="static">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title fa fa-minus"> Dispense Stocks</h4></center>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="chemName1">Chemical Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required readonly>
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Quantity:</label>
                            <div class="col-sm-6">
                                <input type="number" oninput="maxLengthCheck(this)" type="number" maxlength="3" min="0" max="999" class="form-control" id="quantity" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required="autofocus" >

                            </div><br><br><br>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="qty1">Received By:</label>
                                <div class="col-sm-6">
                                    <input type="text" maxlength="10" class="form-control" id="receiver" name="receiver" value="" placeholder="Received by" required="autofocus" style="text-transform:capitalize">
                                </div>
                            </div>
                        </div><br><br>
                    </div>
                    <div class="modal-footer"><center>
                        <button type="submit" class="btn btn-info fa fa-check-square-o" name="dispense_Stocks"> Dispense Stock</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle" data-dismiss="modal"> Cancel</button></center>
                    </div>
                </div>

            </div>
        </form>
    </div>
                                                        <?php
}
$conn->close();
?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TABS -->
                </div>
            </div>
        </div>
    </div>




    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
