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
                <li><a href="#">Transactions</a></li>
                <li class="active">Client & Cadaver</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">

                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="p   anel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-users"> Client & Cadaver</span></a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
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
                                                        <th>Informant</th>
                                                        <th>Date</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `cadavertrans` ORDER BY `controlno` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $informant = $fetch['informant'];
    $date = $fetch['date'];
    $address = $fetch['address'];
    $controlno = $fetch['controlno'];
    $contactno = $fetch['contactno'];
    $insurance = $fetch['insurance'];
    $lifeplan = $fetch['lifeplan'];
    $dimension = $fetch['dimension'];
    $casktettype = $fetch['casktettype'];
    $qty = $fetch['qty'];
    $totalcost = $fetch['totalcost'];
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
    $placeofdeath= $fetch['placeofdeath'];
    $dateofdeath = $fetch['dateofdeath'];
    $timeofdeath = $fetch['timeofdeath'];
    $transferfrom = $fetch['transferfrom'];
    $datereceived = $fetch['datereceived'];
    $timereceived = $fetch['timereceived'];
    
    

                                           echo "<tr>
                                                <td>$informant</td>
												<td>$date</td>
												<td>$address</td>";
                       
    ?>
                                                        <td>
                                                            <div class='btn-group' role='group' aria-label='...'>
                                                                <a href="#edit<?php echo $controlno;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                                                            </div>
                                                        </td>

                                                        <!--Edit Item Modal -->
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
                                                                                <label class="control-label col-sm-2" for="informant">Informant:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="informant" name="informant" value="<?php echo $informant; ?>" placeholder="Informant" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="date">Date:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $date; ?>" placeholder="Date" required autofocus>
                                                                                </div>
                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="address">Address:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="address" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="contactno">Contact Number:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="contactno" name="contactno" value="<?php echo $contactno ?>" placeholder="Contact Number" required>
                                                                                </div>
                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="insurance">Insurance:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="insurance" name="insurance" value="<?php echo $insurance ?>" placeholder="insurance" required>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="lifeplan">Life Plan:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="lifeplan" name="lifeplan" value="<?php echo $lifeplan ?>" placeholder="lifeplan" required>
                                                                                </div>


                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for=" deceased">Deceased:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="deceased" name="deceased" value="<?php echo $deceased ?>" placeholder="deceased" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="width"> Width:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="width" name="width" value="<?php echo $width ?>" placeholder="width" required>
                                                                                </div>
                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="height">Height:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="height" name="height" value="<?php echo $height ?>" placeholder="height" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="casktettype">Casket Type:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="casktettype" name="casktettype" value="<?php echo $casktettype ?>" placeholder="Casket Type" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="qty">Quantity:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $qty  ?>" placeholder="Quantity" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="totalcost">Total Cost:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="totalcost" name="totalcost" value="<?php echo $totalcost ?>" placeholder="Total Cost" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="from-group">

                                                                                <label class="control-label col-sm-2" for="cadaverdeceased">Cadaver Deceased:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="cadaverdeceased" name="cadaverdeceased" value="<?php echo $cadaverdeceased ?>" placeholder="Deceased Name" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="age">Age:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age ?>" placeholder="age" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="gender">Gender:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender ?>" placeholder="Gender" required>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="mothersname">Mothers Name:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="mothersname" name="mothersname" value="<?php echo $mothersname ?>" placeholder="Mothers Name" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="fathersname">Fathers Name:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="fathersname" name="fathersname" value="<?php echo $fathersname ?>" placeholder="Fathers Name" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="birthdate">Birthdate:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo $birthdate ?>" placeholder="Birthdate" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="currentaddress">Current Address:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="currentaddress" name="currentaddress" value="<?php echo $currentaddress ?>" placeholder="currentaddress" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="deathcertificate">Death Certificate:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="deathcertificate" name="deathcertificate" value="<?php echo $deathcertificate ?>" placeholder="deathcertificate" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="deathcertno">Death Certificate Number:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="deathcertificate" name="deathcertificate" value="<?php echo $deathcertno ?>" placeholder="death certificate number" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="dateissued">Date Issued:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="dateissued" name="dateissued" value="<?php echo $dateissued ?>" placeholder="dateissued" required>
                                                                                </div>

                                                                            </div>

                                                                            <br><br>

                                                                            <div class="form-group">

                                                                                <label class="control-label col-sm-2" for="placeofdeath">Place of Death:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="placeofdeath" name="placeofdeath" value="<?php echo $placeofdeath ?>" placeholder="placeofdeath" required>
                                                                                </div>

                                                                                <label class="control-label col-sm-2" for="dateofdeath">Date of Death:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="dateofdeath" name="dateofdeath" value="<?php echo $dateofdeath ?>" placeholder="Date of Death" required>
                                                                                </div>

                                                                                <br><br><br>

                                                                                <div class="form-group">

                                                                                    <label class="control-label col-sm-2" for="timeofdeath">Time of Death</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="timeofdeath" name="timeofdeath" value="<?php echo $timeofdeath ?>" placeholder="timeofdeath" required>
                                                                                    </div>

                                                                                    <label class="control-label col-sm-2" for="transferfrom">Transfer From:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="transferfrom" name="transferfrom" value="<?php echo $transferfrom ?>" placeholder="transferfrom" required>
                                                                                    </div>

                                                                                </div>

                                                                                <br><br>

                                                                                <div class="form-group">

                                                                                    <label class="control-label col-sm-2" for="datereceived">Date Received:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="datereceived" name="datereceived" value="<?php echo $datereceived ?>" placeholder="datereceived" required>
                                                                                    </div>

                                                                                    <label class="control-label col-sm-2" for="timereceived">Time Received:</label>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" class="form-control" id="timereceived" name="timereceived" value="<?php echo $timereceived ?>" placeholder="timereceived" required>
                                                                                    </div>

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
    //Update Items   
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    if(isset($_POST['update'])){
    $informant = $_POST['informant'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $controlno = $_POST['controlno'];
    $contactno = $_POST['contactno'];
    $insurance = $_POST['insurance'];
    $lifeplan = $_POST['lifeplan'];
    $dimension = $_POST['dimension'];
    $casktettype = $_POST['casktettype'];
    $qty = $_POST['qty'];
    $totalcost = $_POST['totalcost'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mothersname = $_POST['mothersname'];
    $fathersname = $_POST['fathersname'];
    $birthdate = $_POST['birthdate'];
    $currentaddress = $_POST['currentaddress'];
    $deathcertificate = $_POST['deathcertificate'];
    $deathcertno = $_POST['deathcertno'];
    $dateissued = $_POST['dateissued'];
    $placeofdeath= $_POST['placeofdeath'];
    $dateofdeath = $_POST['dateofdeath'];
    $timeofdeath = $_POST['timeofdeath'];
    $transferfrom = $_POST['transferfrom'];
    $datereceived = $_POST['datereceived'];
    $timereceived = $_POST['timereceived'];
    $sql = "UPDATE  `client` SET `date`='$date',`informant`='$informant',`address`='$address',`controlno`='$controlno',`contactno`='$contactno',`insurance`='$insurance',`lifeplan`= '$lifeplan',`dimension`=$dimension,`casktettype`='$casktettype',`qty`='$qty',`totalcost`='$totalcost',`cadaverdeceased`='$cadaverdeceased',`age`='$age',`gender`='$gender',`mothersname`='$mothersname',`fathersname`='$fathersname',`birthdate`='$birthdate',`currentaddress`='$currentaddress',`deathcertificate`='$deathcertificate',`deathcertno`='$deathcertno',`dateissued`='$dateissued',`placeofdeath`='$placeofdeath',`dateofdeath`='$dateofdeath',`timeofdeath`='$timeofdeath',`transferfrom`='$transferfrom',`datereceived`='$datereceived',`timereceived`='$timereceived'
     WHERE controlno='$controlno' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="Client&CadaverTrans.php"</script>';
          } else {
               echo "Error updating record: " . $conn->error;
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
                    <!-- END TABS -->
                </div>

            </div>
        </div>
    </div>


    <!-- cadaver modal-->


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
