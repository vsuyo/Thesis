<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php
include ('hearseAdd.php');
?>

    <!-- update -->
    <?php

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    if(isset($_POST['save'])){
		
		
        
	$id = $_POST['hearseID'];
        if(!empty($id)){
		$hearseID = $_POST['hearseID'];
        $informant = $_POST['informant'];
		$DriverName = $_POST['DriverName'];
		$carplateno = $_POST['carplateno'];
		$hearsedate = $_POST['hearsedate'];
        $purpose = $_POST['purpose'];
        $deliver = $_POST['deliver'];
        $to = $_POST['to'];
        $timeoutfrom = $_POST['timeoutfrom'];
        $timeoutto = $_POST['timeoutto'];
        $time = $_POST['time'];
        $destinationto = $_POST['destinationto'];
        $destinationfrom = $_POST['destinationfrom'];
        $availability = $_POST['availability'];
            
		$sql = "UPDATE hearsetrans SET informant='$informant', DriverName='$DriverName', carplateno='$carplateno', hearsedate='$hearsedate', purpose='$purpose', deliver='$deliver', to='$to', timeoutfrom='$timeoutfrom', timeoutto='$timeoutto', time='$time', destinationto='$destinationto', destinationfrom='$destinationfrom', availability='$availability' WHERE hearseID='$hearseID' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="HearseTrans.php"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
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

                    <!-- START X-NAVIGATION VERTICAL --><?php require 'require/vertical-navigation.php'?>
                    <!-- END X-NAVIGATION VERTICAL -->

                    <!-- START BREADCRUMB -->
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li class="active">Hearse</li>
                    </ul>
                    <!-- END BREADCRUMB -->

                    <!-- PAGE CONTENT WRAPPER -->
                    <div class="page-content-wrap">

                        <div class="row">

                            <div class="col-md-12">
                                <!-- START TABS -->
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li><a href="#tab-third" role="tab" data-toggle="tab"><span class="fa fa-truck"> Hearse</span></a></li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-third">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        <div class="pull-right">
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Information</button>
                                                        </div>
                                                    </h3>

                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Informant</th>
                                                            <th>Driver Name</th>
                                                            <th>Car Plate Number</th>
                                                            <th>Availability</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
$query = $conn->query("SELECT * FROM `hearsetrans` ORDER BY `hearseID` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $informant = $fetch['informant'];
    $DriverName = $fetch['DriverName'];
    $carplateno = $fetch['carplateno'];
    $hearsedate = $fetch['hearsedate'];
    $hearseID = $fetch['hearseID'];
    $purpose = $fetch['purpose'];
    $deliver = $fetch['deliver'];
    $to = $fetch['to'];
    $timeoutfrom = $fetch['timeoutfrom'];
    $timeoutto = $fetch['timeoutto'];
    $hearsedate = $fetch['hearsedate'];
    $time = $fetch['time'];
    $destinationfrom = $fetch['destinationfrom'];
    $destinationto = $fetch['destinationto'];
    $availability = $fetch['availability'];
    

                                           echo "<tr>
                                                <td>$informant</td>
                                                <td>$DriverName</td>
												<td>$carplateno</td>
												<td>$availability</td>";
                       
    ?>
                                                            <td>
                                                                <div class='btn-group' role='group' aria-label='...'>
                                                                    <a href="#edit<?php echo $hearseID;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                                                                </div>
                                                            </td>
                        <!-- Upadte-->                                    
            <div id="edit<?php echo $hearseID; ?>" class="modal fade" role="dialog">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-dialog modal-md">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Item</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="hearseid" value="<?php echo $hearseID; ?>">
                                
                                <div class="form-group">
                                                <label class="col-sm-2   control-label">Informant</label>
                                                <div class="col-sm-9 col-xs-9">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <select class="validate[required] select" name="informant" id="informant">											
<option value="pick">Choose Informant</option>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = mysqli_query($conn, "SELECT informant, controlno From client");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value=' ". $row['informant'] ." '>" .$row['informant'] ."   </option>";
}
?>
</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br><br>
                                
                                
                                <div class="form-group">
                                                <label class="col-md-2 control-label">Driver Name</label>
                                                <div class="col-sm-9 col-xs-9">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <select class="validate[required] select" name="DriverName" id="DriverName">											
<option value="pick">Choose Driver</option>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = mysqli_query($conn, "SELECT DriverName From hearse");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value=' ". $row['DriverName'] ."'>" .$row['DriverName'] ."</option>";
}
?>
</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br><br>



                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="date">Deliver From:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="deliver" name="deliver" value="<?php echo $deliver; ?>" placeholder="Deliver From" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="date">Deliver To:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="to" name="to" value="<?php echo $to; ?>" placeholder="Deliver To" required autofocus>
                                    </div>

                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="date">Time Out From:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="timeoutfrom" name="timeoutfrom" value="<?php echo $timeoutfrom; ?>" placeholder="Time Out From" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="date">Time Out To:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="timeoutto" name="timeoutto" value="<?php echo $timeoutto; ?>" placeholder="Time Out To" required autofocus>
                                    </div>

                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="date">Destination From:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="time" name="time" value="<?php echo $time; ?>" placeholder="Time" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="date">Destination From:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="destinationfrom" name="destinationfrom" value="<?php echo $destinationfrom; ?>" placeholder="Destination From" required autofocus>
                                    </div>

                                </div>
                                <br><br>


                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="date">Hearse Date:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="hearsedate" name="hearsedate" value="<?php echo $hearsedate; ?>" placeholder="ate" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="date">Destination To:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="destinationto" name="destinationto" value="<?php echo $destinationto; ?>" placeholder="Destination To" required autofocus>
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="date">Purpose:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="purpose" name="purpose" value="<?php echo $purpose; ?>" placeholder="purpose" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="date">Car Plate Number:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="carplateno" name="carplateno" value="<?php echo $carplateno; ?>" placeholder="Car Plate No" required autofocus>
                                    </div>


                                </div>
                                
                                <div class="form-group">
                                                <label class="col-md-3 control-label">Availability </label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <select class="validate[required] select" name="availability" id="availability">
                                                          <option value="">Choose option</option>
                                                          <option value="Available" id="Available">Available</option>
                                                          <option value="Not Available" id="Not Available">Not Available</option>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>



                            </div>
                            <br><br><br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="update_hearse"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>


<?php 
    //update 
    if(isset($_POST['update_hearse'])){ 
	$id = $_POST['hearseid'];
        if(!empty($id)){
		$hearseid = $_POST['hearseid'];
		$informant = $_POST['informant'];
		$DriverName = $_POST['DriverName'];      
		$carplateno = $_POST['carplateno'];
		$purpose = $_POST['purpose'];
		$deliver = $_POST['deliver'];
		$to = $_POST['to'];
		$timeoutfrom = $_POST['timeoutfrom'];
		$timeoutto = $_POST['timeoutto'];
		$hearsedate = $_POST['hearsedate'];
		$time = $_POST['time'];
		$destinationfrom = $_POST['destinationfrom'];
		$destinationto = $_POST['destinationto'];
		$availability = $_POST['availability'];        
		
		$sql = "UPDATE hearsetrans SET informant='$informant', DriverName='$DriverName', carplateno='$carplateno', purpose='$purpose', deliver='$deliver', to='$to', timeoutfrom='$timeoutfrom', timeoutto='$timeoutto', hearsedate='$hearsedate', time='$time', destinationfrom='$destinationfrom', destinationto='$destinationto', availability='$availability' WHERE hearseID='$hearseid' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="HearseTrans.php"</script>';
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
                        <!-- END TABS -->
                    </div>

                </div>
            </div>





            <!-- Hearse -->
            <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                <div class="modal-dialog modal-def">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="largeModalHead">Add Information</h4>
                        </div>
                        <div class="modal-body">
                            <div class="tab-pane active" id="tab-third">
                                <div class="row">
                                    <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                        <div class="col-md-12">
                                            <center>
                                                <h2 class="fa fa-truck"> Hearse</h2>
                                            </center>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Informant</label>
                                                <div class="col-md-9 col-xs-10">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <select class="validate[required] select" name="informant" id="informant">											
<option value="pick">Choose Informant</option>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = mysqli_query($conn, "SELECT informant, controlno From client");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value=' ". $row['informant'] ." '>" .$row['informant'] ."   </option>";
}
?>
</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Driver Name</label>
                                                <div class="col-md-9 col-xs-10">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <select class="validate[required] select" name="DriverName" id="DriverName">											
<option value="pick">Choose Driver</option>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = mysqli_query($conn, "SELECT DriverName From hearse");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value=' ". $row['DriverName'] ."'>" .$row['DriverName'] ."</option>";
}
?>
</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Car Plate Number</label>
                                                <div class="col-md-9 col-xs-10">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <select class="validate[required] select" name="carplateno" id="carplateno">											
<option value="pick">Choose Plate Number</option>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = mysqli_query($conn, "SELECT plateno From car");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value=' ". $row['plateno'] ."'>" .$row['plateno'] ."</option>";
}
?>
</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Availability </label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <select class="validate[required] select" name="availability" id="availability">
                                                          <option value="">Choose option</option>
                                                          <option value="Available" id="Available">Available</option>
                                                          <option value="Not Available" id="Not Available">Not Available</option>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Purpose</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <textarea class="form-control" name="purpose" rows="2"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Optional</label>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Deliver (From) </label>
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control" / name="deliver" readonly value="Alisbo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">To </label>
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <select class="validate[required] select" name="to" id="place" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="House">Residence</option>
                                                          <option value="Church to Cemetery">Church to Cemetery</option>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">From</label>
                                                <div class="col-md-3">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" name="timeoutfrom" class="form-control timepicker" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                </div>
                                                <label class="col-md-1 control-label">To</label>
                                                <div class="col-md-3">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" name="timeoutto" class="form-control timepicker" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Hearse Date</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name="hearsedate" class="form-control datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Time</label>
                                                <div class="col-md-9">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" name="time" class="form-control timepicker" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Destination (From) </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" name="destinationfrom" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">To </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" name="destinationto" class="form-control" />
                                                    </div>
                                                </div>
                                            </div><br>


                                            <script>
                                                document.getElementById("Available").style.color = "green";
                                                document.getElementById("Not Available").style.color = "red"

                                            </script>
                                            <br>
                                            <div class="panel-footer">
                                                <button class="btn btn-warning" name="clear">Clear Form</button>
                                                <button class="btn btn-success pull-right" name="savetrans" href="Hearse.php">Save</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal-->
            <div id="edit<?php echo $hearseID; ?>" class="modal fade" role="dialog">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Information</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="edit_item_id" value="<?php echo $hearseID; ?>">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="item_name">Driver Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $DriverName; ?>" placeholder="Driver Name" required autofocus>
                                    </div>
                                    <label class="control-label col-sm-2" for="item_code">Car Plate No:</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $carplateno; ?>" placeholder="Car Plate No" required>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
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
