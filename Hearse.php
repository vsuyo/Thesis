<?php  
session_start();  
$session_username = $_SESSION['user_id'];
if(!$_SESSION['user_id'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>


<?php
include ('hearseAdd.php');
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- META SECTION -->
        <title>Alisbo Hearse Driver</title>
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
                    <li><a href="#">Data Entry</a></li>
                    <li class="active">Hearse Driver</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-truck"> Hearse Driver</span></a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab"><span class="fa fa-car"> Hearse Car</span></a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Information</button>
                                                    </div>
                                                </h3>

                                            </div>
                                            

                                            <div class="panel-body">
                                                <table class="table datatable" id="driver">
                                                    <thead>
                                                        <tr>
                                                            <th>Driver Name</th>
                                                            <th>Address</th>
                                                            <th>Driver License</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `hearse` ORDER BY `hearse_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $DriverName = $fetch['DriverName'];
    $address = $fetch['address'];
    $driverlicense = $fetch['driverlicense'];
    $hearse_id = $fetch['hearse_id'];
    

                                           echo "<tr>
                                                <td>$DriverName</td>
												<td>$address</td>
                                                <td>$driverlicense</td>";
                       
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
                                    
                                    <!--tab second-->
                                    
                                             <div class="tab-pane" id="tab-second">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span>Add Car</button>
                                                    </div>
                                                </h3>

                                            </div>
                                                                                        <!-- Car -->
        <div class="modal fade" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <h2 class="fa fa-car"> Hearse Car</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-third">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <script type="text/javascript">
    function myFunction() {
  var input = document.getElementById("input1");
  var word = input.value.split(" ");
  for (var i = 0; i < word.length; i++) {
    word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
  }
  input.value = word.join(" ");
}
</script>
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">Unit </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" / name="unit" placeholder="Unit" required="" id='input' onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Plate No</label>
                                            <div class="col-md-6">
                                                <input type="text" maxlength="7" class="form-control"  name="plateno" placeholder="Plate No."  required>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Color</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  maxlength="10" name="color" placeholder="Color" onkeyup="myFunction(this.id)" id='input2' required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <center>
                                                <button type="submit" class="btn btn-info" name="savecar"><span class="fa fa-check-square-o"></span> Save</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Unit</th>
                                                            <th>Plate No.</th>
                                                            <th>Color</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `car` ORDER BY `car_id") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $unit = $fetch['unit'];
                $plateno = $fetch['plateno'];
                $color = $fetch['color'];

                echo "<tr>
                                                <td>$unit</td>
												<td>$plateno</td>
												<td>$color</td>";

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
        <!-- Hearse -->
        <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center><h2 class="fa fa-truck"> Hearse Driver</h2></center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Drivers Name</label>
                                            <div class="col-md-6">
                                                    <input type="text" id="input" onkeyup="myFunction(this.id)" class="form-control" / name="DriverName" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Address</label>
                                            <div class="col-md-6">
                                                    <input type="text" id="input2" onkeyup="myFunction(this.id)" class="form-control" / name="address" placeholder="Address" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Driver's License</label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" / name="driverlicense" placeholder="Driver's License" required="">
                                            </div>
                                        </div>

      `                                  <br>

                                    <div class="panel-footer"><center>
                                            <button class="btn btn-info fa fa-check-square-o" name="save" href="Hearse.php"> Save</button>                  <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
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

                                <!--uppercase --->
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
