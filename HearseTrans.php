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

if(isset($_POST['update_hearse'])){

        $hearseID = $_POST['hearsetrans_id'];
        $informant = $_POST['informant'];
        $DriverName = $_POST['DriverName'];
        $plateno = $_POST['plate'];
        $hearsedate = $_POST['hearsedate'];
        $purpose = $_POST['purpose'];
        $destinationto = $_POST['destinationto'];
        $destinationfrom = $_POST['destinationfrom'];

        $sql = "UPDATE hearsetrans SET client_id='$informant', hearse_id='$DriverName', car_id='$plateno', hearsedate='$hearsedate', purpose='$purpose', destinationto='$destinationto', destinationfrom='$destinationfrom' WHERE hearsetrans_id='$hearseID'";
        if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Updated Successfully"); window.location.href="HearseTrans.php"</script>';
        } else {
      echo "Error updating record: " . $conn->error;
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
                <? require 'require/vertical-navigation.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li class="active"><strong><mark>Hearse</mark></strong></li>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
    $query = $conn->query("SELECT * FROM hearsetrans 
    INNER JOIN client ON hearsetrans.client_id = client.client_id 
    INNER JOIN  hearse ON hearsetrans.hearse_id = hearse.hearse_id 
    INNER JOIN car ON hearsetrans.car_id = car.car_id WHERE client.client_id = hearsetrans.client_id") or die(mysqli_error());
            while($fetch = $query->fetch_array()){  
               // $informant = $fetch['informant'];
                $DriverName = $fetch['DriverName'];
                $plateno = $fetch['plateno'];
                $hearse_id = $fetch['hearse_id'];
                $purpose = $fetch['purpose'];
                $deliver = $fetch['deliver'];
                $to = $fetch['to'];
                $timeoutfrom = $fetch['timeoutfrom'];
                $timeoutto = $fetch['timeoutto'];
                $hearsedate = $fetch['hearsedate'];
                $time = $fetch['time'];
                $destinationfrom = $fetch['destinationfrom'];
                $destinationto = $fetch['destinationto'];
                $hearsetrans_id = $fetch['hearsetrans_id'];
                    
?>


               <tr>
                                                <td><?php echo $fetch['informant'] ?></td>
                 
                                                <td><?php echo $fetch['DriverName'] ?></td>
												<td><?php echo $fetch['plateno'] ?></td>

                                                  
<td>
    <div class='btn-group' role='group' aria-label='...'>
        <a href="#edit-<?php echo $fetch['hearsetrans_id']?>" data-toggle="modal">
            <button type='button' class='btn btn-info btn-sm' data-toggle="tooltip" title="Edit Details" data-placement="left" ><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
    </div>
</td>

<div id="edit-<?php echo  $fetch['hearsetrans_id'] ?>" class="modal fade" role="dialog">
    <form method="post" class="form-horizontal" role="form">
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h2 class="modal-title fa fa-edit"> Edit Details</h2>
                    </center>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="hearsetrans_id" value="<?php echo $hearsetrans_id; ?>">
 
                    <div class="form-group">
                        <label class="col-md-4 control-label">Informant</label>
                        <div class="col-md-6">
                            <select class="validate[required] select" id="informant" name="informant" data-live-search="true">							
                                
                                <option value="<?php echo $fetch['client_id'] ?>"><?php echo $fetch['informant']; ?></option>
                               
                            </select>
                           
                        </div>
                    </div><br><br>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Driver Name</label>
                        <div class="col-md-6 ">
                            <select class="validate[required] select" id="DriverName" name="DriverName" data-live-search="true">							
                                <option value="pick">Choose Driver</option>
                                <?php
                                $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                $sql = mysqli_query($conn, "SELECT * FROM hearse");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value=' ". $row['hearse_id'] ." '>" .$row['DriverName'] ."   </option>";
                                }
                                ?>
                               
                            </select>
                          
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Car Plate Number</label>
                        <div class="col-md-6 ">
                            <select class="validate[required] select" id="plate" name="plate" data-live-search="true">							
                                <option value="pick">Choose Plate Number</option>
                                <?php
                                $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                $sql = mysqli_query($conn, "SELECT * FROM car");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value=' ". $row['car_id'] ." '>" .$row['plateno'] ."   </option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Destination From:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="destinationfrom" name="destinationfrom" value="<?php echo $destinationfrom; ?>" placeholder="Time" required autofocus>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Destination To:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="destinationto" name="destinationto" value="<?php echo $destinationto; ?>" placeholder="Destination To" required autofocus>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Hearse Date:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="hearsedate" name="hearsedate" value="<?php echo $hearsedate; ?>" placeholder="ate" required autofocus>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Purpose:</label>
                        <div class="col-sm-6 row-sm-3">
                            <input type="text" class="form-control" id="purpose" name="purpose" value="<?php echo $purpose; ?>" placeholder="purpose" required autofocus>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="modal-footer">
                    <center>
                        <button type="submit" class="btn btn-info" name="update_hearse"><span class="glyphicon glyphicon-edit"></span> Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
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





        <!-- Hearse -->
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <h2 class="fa fa-truck"> Hearse</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-third">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant</label>
                                            <div class="col-md-8">
                                                <select class="validate[required] select" name="informant" id="informant" data-live-search="true">							
                                                    <option value="pick">Choose Informant</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From client");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['client_id'] ." '>" .$row['informant'] ."   </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Driver Name</label>
                                            <div class="col-md-8">
                                                <select class="validate[required] select" name="DriverName" id="DriverName">		
                                                    <option value="pick">Choose Driver</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From hearse");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['hearse_id'] ."'>" .$row['DriverName'] ."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Car Plate Number</label>
                                            <div class="col-md-8">
                                                <select class="validate[required] select" name="plateno" id="plateno">				
                                                    <option value="pick">Choose Plate Number</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From car");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['car_id'] ."'>" .$row['plateno'] ."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Note:</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" type="text" id='input' onkeyup="myFunction(this.id)" name="purpose" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Origin (From) </label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" / name="deliver" readonly value="Alisbo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">To </label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" name="to" id="place" data-style="btn-default">
                                                    <option value="">Choose option</option>
                                                    <option value="House">Residence</option>
                                                    <option value="Church to Cemetery">Church to Cemetery</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">From</label>
                                            <div class="col-md-3">
                                                <div class="input-group bootstrap-timepicker">
                                                    <input type="text" name="timeoutfrom" class="form-control timepicker" />
                                                </div>
                                            </div>
                                            <label class="col-md-1 control-label">To</label>
                                            <div class="col-md-3">
                                                <div class="input-group bootstrap-timepicker">
                                                    <input type="text" name="timeoutto" class="form-control timepicker" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Internment Date</label>
                                            <div class="col-md-4">
                                                <input type="name" name="hearsedate" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Time</label>
                                            <div class="col-md-6">
                                                <div class="input-group bootstrap-timepicker">
                                                    <input type="text" name="time" class="form-control timepicker" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Destination (From) </label>
                                            <div class="col-md-6">
                                                <input type="text" name="destinationfrom" class="form-control" id='input2' onkeyup="myFunction(this.id)" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">To </label>
                                            <div class="col-md-6">
                                                <input list="browsers" type="text" name="destinationto" class="form-control" id='input3' onkeyup="myFunction(this.id)" />
                                                 <datalist id="browsers">
                                                <option value="Burgos">
                                                <option value="Acropolis">
                                                <option value="Rolling Hills">
                                                <option value="Handumanan Cemetery">
                                                <option value="Roselawn">
                                            </datalist>
                                            </div>
                                        </div>
<br>


                                        <br>
                                        <div class="panel-footer">
                                            <center>
                                                <button class="btn btn-info fa fa-check-square-o" name="savetrans" href="Hearse.php"> Save</button>
                                                <button type="button" class="btn btn-danger fa fa-times" data-dismiss="modal"> Close</button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script>
            function myFunction(textboxid) {

                var input = document.getElementById(textboxid);
                var word = input.value.split(" ");
                for (var i = 0; i < word.length; i++) {
                    word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
                }
                input.value = word.join(" ");
            }
        </script>
        <!-- end -->
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