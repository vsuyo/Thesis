    <?php
include('viewingAdd.php');


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
                                <span class="contacts-title">Nadia Ali</span> w
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
                <li><a href="#">Transactions</a></li>
                <li class="active">Viewing</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">

                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-fourth" role="tab" data-toggle="tab"><span class="fa fa-bookmark"> Viewing</span></a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-fourth">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">

                                                    </div>
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Preference</th>
                                                            <th>Chapel Code</th>
                                                            <th>Room Type</th>
                                                            <th>Vigil Date</th>
                                                            <th>Duration</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());   
$query = $conn->query("SELECT * FROM `viewingtrans` ORDER BY `controlno` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $date = $fetch['date'];
    $controlno = $fetch['controlno'];
    $preference = $fetch['preference'];
    $chapelcode = $fetch['chapelcode'];
    $roomtype = $fetch['roomtype'];
    $vigildate = $fetch['vigildate'];
    $duration = $fetch['duration'];
    

                                           echo "<tr>
                                                <td>$date</td>
												<td>$preference</td>
												<td>$chapelcode</td>
                                                <td>$roomtype</td>
                                                <td>$vigildate</td>
                                                <td>$duration</td>";
                       
    ?>
                                                            <td>
                                                                <div class='btn-group' role='group' aria-label='...'>
                                                                    <a href="#edit<?php echo $controlno;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                                                                </div>
                                                            </td>


                        <div id="edit<?php echo $controlno; ?>" class="modal fade" role="dialog">
                            <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Item</h4>
                                                                            </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="controlNo" value="<?php echo $controlno; ?>">

                                                                                <div class="form-group">

                                     <label class="control-label col-sm-2" for="date">Date:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="date" name="date" value="<?php echo $date; ?>" placeholder="Date" required autofocus>
                                                                                    </div>

                         <label class="control-label col-sm-2" for="date">Preference:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="preference" name="preference" value="<?php echo $preference; ?>" placeholder="preference" required readonly>
                                                                                    </div>

                                                                                </div>

                                                                                <br><br>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2" for="date">Chapel Code:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="chapelcode" name="chapelcode" value="<?php echo $chapelcode; ?>" placeholder="Chapel Code" required autofocus>
                                                                                    </div>

                                                                                    <label class="control-label col-sm-2" for="date">Room Type:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="roomtype" name="roomtype" value="<?php echo $roomtype; ?>" placeholder="Room Type" required autofocus>
                                                                                    </div>
                                                                                </div>

                                                                                <br><br>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2" for="date">Vigil Date:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="vigildate" name="vigildate" value="<?php echo $vigildate; ?>" placeholder="Vigil Date" required autofocus>
                                                                                    </div>

                                                                                    <label class="control-label col-sm-2" for="date">Duration:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $duration; ?>" placeholder="Duration" required autofocus>
                                                                                    </div>
                                                                                </div>




                                                                                <br><br>



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
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    if(isset($_POST['update'])){
		
		
	$id = $_POST['controlNo'];
        if(!empty($id)){
		$controlNo = $_POST['controlNo'];
		$date = $_POST['date'];
		$preference = $_POST['preference'];
		$chapelcode = $_POST['chapelcode'];
		$roomtype = $_POST['roomtype'];
		$vigildate = $_POST['vigildate'];
		$duration = $_POST['duration'];
		
		$sql = "UPDATE viewingtrans SET date='$date', preference='$preference', chapelcode='$chapelcode', roomtype='$roomtype', vigildate = '$vigildate', duration = '$duration' WHERE controlno='$controlNo' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="Viewingtrans.php"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
		}
       
        }
    
    ?>

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
