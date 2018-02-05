<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>


<?php  
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                        
                    if(isset($_POST['add_Stocks'])){
                        $id = $_POST['controlNo'];
                        $quantity = $_POST['qty1'];
                        $chemName1 = $_POST['chemName1'];
                        $sql = "INSERT INTO added_quantity (qty1, chemName1, date_time, in_out) VALUES ( '$quantity', '$chemName1', NOW(), 'in')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE chemicalstockTrans SET qty1=(qty1 + '$quantity') WHERE controlNo='$id' ";
                            if ($conn->query($add_inv) === TRUE) {
                            echo '<script>window.location.href="ChemicalsTrans.php"</script>';
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
                        $sql = "INSERT INTO added_quantity (qty1, chemName1, date_time, in_out) VALUES ( '$quantity','$chemName1', NOW(), 'out')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE chemicalstockTrans SET qty1=(qty1 - '$quantity') WHERE controlNo='$id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>window.location.href="ChemicalsTrans.php"</script>';
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
    <title>Alisbo Cadaver</title>
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
            <?php require 'require/vertical-navigation.php'?>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Monitoring</a></li>
                <li class="active">Chemicals</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab">Chemicals Stock List</a></li>
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
                                                        <th>Chemical Desc</th>
                                                        <th>Qty.</th>
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
    $controlNo = $fetch['controlNo'];
    
                                            echo "<tr>
                                                <td>$chemName1</td>
												<td>$chemDesc1</td>
												<td>$qty1</td>";
?>
                                                        <td>
                                                            <div class='btn-group' role='group' aria-label='...'>
                                                                <a href="#plus<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button></a>
                                                            </div>

                                                            <a href="#minus<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span></button></a>
                                                        </td>


                                            <!--Add Items Stocks -->
                                            <div id="plus<?php echo $controlNo; ?>" class="modal fade" role="dialog">
                                            <form method="post" class="form-horizontal" role="form">
                                                <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Add Stocks</h4>
                                                </div>
                                                <div class="modal-body">
                                                <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                                                    <div class="form-group">
                                                    <label class="control-label col-sm-2" for="chemName1">Chemical Name:</label>
                                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required readonly>
                                                </div>
                                                    <label class="control-label col-sm-2" for="qty1">Quantity:</label>
                                                    <div class="col-sm-4">
                                                <input type="text" class="form-control" id="qty1" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required autofocus>
                                                        </div>
                                                        </div>
                                                        <br><br>
                                                            </div>
                                                        <br><br><br>
                                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" name="add_Stocks"><span class="glyphicon glyphicon-edit"></span> Add Stocks</button>
                                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>

                                    <!--dispense Items Stocks -->
                                <div id="minus<?php echo $controlNo; ?>" class="modal fade" role="dialog">
                                    <form method="post" class="form-horizontal" role="form">
                                        <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Dispense Stocks</h4>
                                        </div>
                                        <div class="modal-body">
                                        <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="chemName1">Chemical Name:</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required readonly>
                                        </div>
                                        <label class="control-label col-sm-2" for="qty1">Quantity:</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="quantity" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required autofocus>
                                        </div><br><br><br>
                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="qty1">Received By:</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="receiver" name="receiver" value="" placeholder="Received by" required autofocus>
                                        </div>
                                                </div>
                                        </div><br><br>
                                            <br><br>
                                    </div>
                                        <br><br><br>
                                    <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="dispense_Stocks"><span class="glyphicon glyphicon-edit"></span> Dispense Stock</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
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
