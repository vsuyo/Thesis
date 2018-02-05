<?php
include('cadaverAdd.php');
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
                                        <a href="login2.php" class="btn btn-success btn-lg">Yes</a>
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
                    <li><a href="#">Data Entry</a></li>
                    <li class="active">Client & Cadaver</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-user"> Cadaver</span></a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Cadaver</button>
                                                    </div>
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Cadaver Name</th>
                                                            <th>Age</th>
                                                            <th>Gender</th>
                                                            <th>Birthdate</th>
                                                            <th>Time Of Death</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

    <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `cadaverentry` ORDER BY `controlno` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
    $cadaverdeceased = $fetch['cadaverdeceased'];
    $age = $fetch['age'];
    $gender = $fetch['gender'];
    $mothersname = $fetch['mothersname'];
    $fathersname = $fetch['fathersname'];
    $birthdate = $fetch['birthdate'];
    $currentaddress = $fetch['currentaddress'];
    $deathcertificate = $fetch['deathcertificate'];
    $deathcertno = $fetch['deathcertno'];
    $dateissued = $fetch['dateissued'];
    $placeofdeath = $fetch['placeofdeath'];
    $dateofdeath = $fetch['dateofdeath'];
    $timeofdeath = $fetch['timeofdeath'];
    $transferfrom = $fetch['transferfrom'];
    $datereceived = $fetch['datereceived'];
    $timereceived = $fetch['timereceived'];


                                                            echo "<tr>
                                                <td>$cadaverdeceased</td>
												<td>$age</td>
												<td>$gender</td>
                                                <td>$birthdate</td>
                                                <td>$timeofdeath</td>";

                                                        ?>
                                    <td>
                                    <div class='btn-group' role='group' aria-label='...'>
                                    <a href="#edit<?php echo $informant;?>" data-toggle="modal"><button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-minus"></span></button></a>&nbsp;
                                    </div>
                                    </td>



                                                     

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


        <!-- client modal-->
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title fa fa-plus" id="defModalHead"> Add Cadaver</h4>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <center>
                                            <h2 class="fa fa-group"> Cadaver</h2>
                                        </center>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Deceased Name</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control " name="cadaverdeceased" value="name" placeholder="Name" required="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Age </label>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="age" placeholder="Age" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Gender</label>
                                            <div class="col-md-3 ">
                                                <div class="input-group">
                                                    
                                                    <select class = "calidate[required] select" name = "gender" id = "formgender" data-style = "btn-default">
                                                        <option value = "">Choose Option</option>
                                                        <option value = "Male">Male</option>
                                                        <option value = "female">Female</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mother's Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class=" form-control" name="mothersname" value="" required="" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Father's Name</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="fathersname" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label class="col-md-3 control-label">Birthdate </label>
                                            <div class="col-md-6">
                                                <div class = "input-group">
                                                    <span class = "input-group-addon"><span class = "fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="birthdate" value="Date" required="" />
                                            </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Current Address</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="currentaddress" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Death Certificate</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="deathcertificate" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Death Certificate Number</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="deathcertno" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date Issued </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="dateissued" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Place Of Death</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" / name="placeofdeath" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Time of Death</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group bootstrap-timepicker">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control timepicker" / name="timeofdeath" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Transfer From</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group bootstrap-timepicker">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control timepicker" / name="transferfrom" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date Received </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="datereceived" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Time of Received</label>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="input-group bootstrap-timepicker">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control timepicker" / name="timereceived" placeholder="Insurance" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-footer"><center>
                                            <button class="btn btn-info fa fa-check" name="save" href="DataEntry.php"> Save</button>
                                            <button class="btn btn-warning" name="clear">Clear Form</button> 
                                            </center>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
