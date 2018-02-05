<?php
if(ISSET($_POST['submit1'])){
    $chemName1 = $_POST['chemName1'];
    $chemDesc1 = $_POST['chemDesc1'];
    $qty1 = $_POST['qty1'];
    $dateCreated = $_POST['dateCreated'];


    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO chemicalStockList (chemName1, chemDesc1, qty1, dateCreated)
	VALUES ('$chemName1', '$chemDesc1', '$qty1', '$dateCreated')") or die (mysqli_error());
    $conn->close();
    echo "<script>alert ('Successfully Added!!')</script>";
}
?>

    <?php
if(ISSET($_POST['submit2'])){
    $chemName2 = $_POST['chemName2'];
    $chemDesc2 = $_POST['chemDesc2'];
    $runBal = $_POST['runBal'];

    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO chemicals (chemName2, chemDesc2, runBal)
	VALUES ('$chemName2', '$chemDesc2', '$runBal')") or die (mysqli_error());
    $conn->close();
    echo "<script>alert ('Successfully Added!!')</script>";
}
?>

        <?php
if(ISSET($_POST['submit3'])){
    $chemName3 = $_POST['chemName3'];
    $qty2 = $_POST['qty2'];
    $dateRel = $_POST['dateRel'];
    $recBy = $_POST['recBy'];

    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO chemdis (chemName3, qty2, dateRel, recBy)
	VALUES ('$chemName3', '$qty2', '$dateRel', '$recBy')") or die (mysqli_error());
    $conn->close();
    echo "<script>alert ('Successfully Added!!')</script>";
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
                    <?php require 'require/sidebar.php'?>
                    <!-- PAGE CONTENT -->
                    <div class="page-content">

                        <!-- START X-NAVIGATION VERTICAL -->
                        <?php require 'require/vertical navigation.php'?>
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
                                                        <h3 class="panel-title">
                                                            <div class="pull-right">
                                                                <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>New Stock</button>
                                                            </div>
                                                        </h3>

                                                    </div>
                                                    <div class="panel-body">
                                                        <table class="table datatable" id="chemStockList">
                                                            <thead>
                                                                <tr>
                                                                    <th>Chemical Name</th>
                                                                    <th>Qty.</th>
                                                                    <th>Date Created</th>
                                                                    <th>Chemical Description</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `chemicalstocklist` ORDER BY `controlNo` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $chemName1 = $fetch['chemName1'];
                $qty1 = $fetch['qty1'];
                $dateCreated = $fetch['dateCreated'];
                $controlNo = $fetch['controlNo'];
                $chemDesc1 = $fetch['chemDesc1'];



                echo "<tr>

												<td>$chemName1</td>
												<td>$qty1</td>
												<td>$dateCreated</td>
                                                <td>$chemDesc1</td>";

                                                        ?>
                                                                    <td>
                                                                        <div class='btn-group' role='group' aria-label='...'>
                                                                            <a href="#edit<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                                                                            <a href="#view<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='fa fa-search' aria-hidden='true'></span></button></a>
                                                                        </div>
                                                                    </td>

                                                                    <!--Edit Item Modal -->
                                                                    <div id="edit<?php echo $controlNo; ?>" class="modal fade" role="dialog">
                                                                        <form method="post" class="form-horizontal" role="form">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        <h4 class="modal-title">Edit Item</h4>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-sm-2" for="chemName1">Chemical Name:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required autofocus>
                                                                                            </div>
                                                                                            <label class="control-label col-sm-2" for="qty1">Quantity:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="qty1" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required autofocus>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br><br>
                                                                                        <div class="form-group">

                                                                                            <label class="control-label col-sm-2" for="dateCreated">Date Created:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="dateCreated" name="dateCreated" value="<?php echo $dateCreated; ?>" placeholder="Date " required>
                                                                                            </div>

                                                                                            <label class="control-label col-sm-2" for="chemName1">Chemical Description  :</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="chemDesc1" name="chemDesc1" value="<?php echo $chemDesc1; ?>" placeholder="Chemical Description" required autofocus>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <br><br><br>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-primary" name="update"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                    <!--View Item Modal -->
                                                                    <div id="view<?php echo $controlNo; ?>" class="modal fade" role="dialog">
                                                                        <form method="post" class="form-horizontal" role="form">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        <h4 class="modal-title">Edit Item</h4>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-sm-2" for="chemName1">Chemical Name:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required autofocus>
                                                                                            </div>
                                                                                            <label class="control-label col-sm-2" for="qty1">Quantity:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="qty1" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required autofocus>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br><br>
                                                                                        <div class="form-group">

                                                                                            <label class="control-label col-sm-2" for="dateCreated">Date Created:</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="dateCreated" name="dateCreated" value="<?php echo $dateCreated; ?>" placeholder="Date " required>
                                                                                            </div>

                                                                                            <label class="control-label col-sm-2" for="chemName1">Chemical Description  :</label>
                                                                                            <div class="col-sm-4">
                                                                                                <input type="text" class="form-control" id="chemDesc1" name="chemDesc1" value="<?php echo $chemDesc1; ?>" placeholder="Chemical Description" required autofocus>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <br><br><br>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-primary" name="update"><span class="glyphicon glyphicon-edit"></span> Edit</button>
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

                <!-- Chemical Stock List -->

                <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-flask"> Chemicals Stock List</span></h4>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <form id="chem1" action="Chemicals.php" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Chemical Name</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="chemName1" type="text" class="form-control" / placeholder="Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Decription</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                            <input name="chemDesc1" type="text" class="form-control" / placeholder="Description" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Qty.</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa"></span></span>
                                                            <input name="qty1" type="number" class="form-control" / placeholder="Qty." />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Date Created</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input name="dateCreated" type="text" class="form-control datepicker" value="Date" placeholder="Date" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success pull-right" name="submit1" form="chem1">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chemicals -->
                <div class="modal" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-flask"> New Chemical</span></h4>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane active" id="tab-second">
                                    <div class="row">
                                        <form action="Chemicals.php" id="chem2" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Chemical Name</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="chemName2" type="text" class="form-control" / placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Description</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="chemDesc2" type="text" class="form-control" / placeholder="Description">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Running Balance</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="runBal" type="number" class="form-control" / placeholder="Balance">
                                                        </div>
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button class="btn btn-success pull-right" form="chem2" name="submit2">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chemical Dispensation -->
                <div class="modal" id="modal_medium3" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-bookmark"> Release</span></h4>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane active" id="tab-third">
                                    <div class="row">
                                        <form id="chem3" action="Chemicals.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Chemical Name</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="chemName3" type="text" class="form-control" / placeholder="Chemical Name" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Qty</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="qty2" type="number" class="form-control" / placeholder="Qty" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Date Released</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input name="dateRel" type="text" class="form-control datepicker" value="Date" placeholder="Date" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Recevied By</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input name="recBy" type="text" class="form-control" / placeholder=" Name" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button class="btn btn-success pull-right" name="submit3" form="chem3">Save</button>
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
