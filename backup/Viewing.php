<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->    

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">       
            <?php require 'require/sidebar.php'?>        
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <?php require 'require/vertical-navigation.php'?>
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
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-home"> Vigil</span></a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">                                
                                                <h3 class="panel-title"> 
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Vigil</button>

                                                    </div></h3>

                                            </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Informant</th>
                                                            <th>Preference</th>
                                                            <th>Address</th>
                                                            <th>Date Borrowed</th>
                                                            <th>Date Return</th>
                                                            <th>Materials</th>
                                                            <th>Action</th></tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("SELECT client.informant, viewing.date, viewing.preference,  viewing.chapelcode, viewing.roomtype, viewing.startdate, viewing.enddate, viewing.controlno, viewing.duration, viewing.address, viewing.dateBorrowed, viewing.datereturn, viewing.materials FROM client INNER JOIN viewing ON client.client_id = viewing.client_id") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $date = $fetch['date'];
                $informant = $fetch['informant'];
                $preference = $fetch['preference'];
                $chapelcode = $fetch['chapelcode'];
                $roomtype = $fetch['roomtype'];
                $startdate = $fetch['startdate'];
                $enddate = $fetch['enddate'];
                $controlno = $fetch['controlno'];
                $duration = $fetch['duration'];
                $address = $fetch['address'];
                $dateBorrowed = $fetch['dateBorrowed'];
                $datereturn = $fetch['datereturn'];
                $materials = $fetch['materials'];
                
        

                echo "<tr>
                                                <td>$informant</td>
                                                <td>$preference</td>
												<td>$address</td>
												<td>$dateBorrowed</td>
                                                <td>$datereturn</td>
                                                <td>$materials</td>";

                                                        ?>
                                                        <td>
                                                            <div class='btn-group' role='group' aria-label='...'>
                                                                <a href="#update<?php echo $controlno; ?>" data-toggle="modal"><button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-edit"></span></button></a>&nbsp;
                                                            </div>
                                                        </td>

                                                        <!-- insurance update modal-->
                                                        <div id="update<?php echo $controlno; ?>" class="modal fade" role="dialog">
                                                            <form method="post" class="form-horizontal" role="form">
                                                                <div class="modal-dialog modal-md">
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
                                                                                <label class="control-label col-sm-2" for="preference">Preference:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="preference" name="preference" value="<?php echo $preference; ?>" placeholder="Preference" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="chapelcode">Chapel Name:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="chapelcode" name="chapelcode" value="<?php echo $chapelcode; ?>" placeholder="Chapel Name" required autofocus>
                                                                                </div>

                                                                            </div>
                                                                            <br><br>

                                                                            <div class="form-group">
                                                                                <label class="control-label col-sm-2" for="roomtype">Room Type:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="roomtype" name="roomtype" value="<?php echo $roomtype; ?>" placeholder="Room Type" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="startdate">Start Date:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="startdate" name="startdate" value="<?php echo $startdate; ?>" placeholder="Start Date" required autofocus>
                                                                                </div>

                                                                            </div>
                                                                            <br><br>

                                                                            <div class="form-group">
                                                                                <label class="control-label col-sm-2" for="enddate">End Date:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="enddate" name="enddate" value="<?php echo $enddate; ?>" placeholder="End Date" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="duration">Duration:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $duration; ?>" placeholder="Duration" required autofocus>
                                                                                </div>

                                                                            </div>
                                                                            <br><br>

                                                                            <div class="form-group">
                                                                                <label class="control-label col-sm-2" for="address">Address:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="Address" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="dateBorrowed">Date Borrowed:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="dateBorrowed" name="dateBorrowed" value="<?php echo $dateBorrowed; ?>" placeholder="Date Borrowed" required autofocus>
                                                                                </div>

                                                                            </div>
                                                                            <br><br>

                                                                            <div class="form-group">
                                                                                <label class="control-label col-sm-2" for="datereturn">Date Return:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="datereturn" name="datereturn" value="<?php echo $datereturn; ?>" placeholder="datereturn" required autofocus>
                                                                                </div>
                                                                                <label class="control-label col-sm-2" for="materials">Materials:</label>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control" id="materials" name="materials" value="<?php echo $materials; ?>" placeholder="Materials" required autofocus>
                                                                                </div>

                                                                            </div>
                                                                            <br><br>



                                                                        </div>
                                                                        <br><br><br>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="update_viewing"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>

                                                        <?php 
                //update 
                if(isset($_POST['update_viewing'])){ 
                    $id = $_POST['controlNo'];
                    if(!empty($id)){
                        $controlNo = $_POST['controlNo'];
                        $informant = $_POST['informant'];
                        $date = $_POST['date'];
                        $preference = $_POST['preference'];
                        $chapelcode = $_POST['chapelcode'];
                        $roomtype = $_POST['roomtype'];
                        $startdate = $_POST['startdate'];
                        $enddate = $_POST['enddate'];
                        $duration = $_POST['duration'];
                        $address = $_POST['address'];
                        $dateBorrowed = $_POST['dateBorrowed'];
                        $datereturn = $_POST['datereturn']; 
                        $materials = $_POST['materials']; 

                        //print_r($_POST);
                        $sql = "UPDATE viewing SET `informant`='$informant',`date`='$date', `preference`='$preference',`chapelcode`='$chapelcode',`roomtype`='$roomtype',`startdate`='$startdate',`enddate`='$enddate',`duration`='$duration',`address`='$address',`dateBorrowed`='$dateBorrowed',`datereturn`='$datereturn',`materials`='$materials' WHERE `controlno`='$controlNo'";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>window.location.href="Viewing.php"</script>';
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
        </div>

        <!-- vigil modal-->
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center><h2 class="fa fa-bookmark"> Vigil</h2>                                 </center>
                    </div>

                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-fourth">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Informant</label>
                                            <div class="col-md-6">
                                                        <select class="validate[required] select" name="informant" id="informant">											
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
                                            <label class="col-md-3 control-label">Date</label>
                                            <div class="col-md-5">
                                                    <input type="text" name="date" class="form-control datepicker" value="Date" placeholder="Date">
                                            </div>
                                        </div>

                                        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
                                        <script type="text/javascript">
                                            $(function() {
                                                $("#ddlPreference").change(function() {
                                                    if ($(this).val() == "A") {
                                                        $("#dvpreference").show();
                                                    } else {
                                                        $("#dvpreference").hide();
                                                    }
                                                    if ($(this).val() == "H") {
                                                        $("#dvpreference2").show();
                                                    } else {
                                                        $("#dvpreference2").hide();
                                                    }
                                                });
                                            });

                                        </script>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Preference</label>
                                            <div class="col-md-6">
                                                <select class="validate[required] select" id="ddlPreference" name="preference">
                                                    <option value="">Choose preference</option>
                                                    <option value="A">Alisbo</option>
                                                    <option value="H">House</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group" id="dvpreference" style="display: none">

                                           <div class="from-group">
                                            <label class="col-md-3 control-label">Room Type</label>
                                            <div class="col-md-6">
                                                <select id="ddl" name = "roomtype" class="validate [required] select" onchange="pick(this,document.getElementById('init'))">
                                                    <option value="">Choose</option>
                                                    <option name = "roomtype" value="Aircon">Aircon</option>
                                                    <option name = "roomtype" value="Non_Aircon">Non-Aircon</option>
                                                </select>
                                            </div>
                                        </div><br><br><br>

                                        <div class="">
                                            <label class="col-md-3 control-label">Chapel Name</label>
                                            <div class="col-md-6">
                                                <select id="init" name = "chapelcode" class="" >   
                                                   <option>Choose Chapel Name</option>
                                                </select>
                                            </div>
                                        </div><br><br>


                                            <div class="form-group" >
                                                <label class="col-md-3 control-label" for = "startdate">Start Date</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="startdate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker1" data-date-start-date="0d">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for = "enddate">End Date</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="enddate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker2">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No. of (Days)</label>
                                                <div class="col-md-3">
                                                    <input type="number" name="duration" class="form-control" / placeholder="Days" id="days">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div id="dvpreference2" style="display: none">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Address</label>
                                                <div class="col-md-5">
                                                        <input type="text" name="address" class="form-control" / placeholder="Address" id = 'input' onkeyup="myFunction(this.id)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date borrowed</label>
                                                <div class="col-md-5">
                                                        <input type="text" name="dateBorrowed" class="form-control datepicker" value="Date" placeholder="Date" id="sd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date Return</label>
                                                <div class="col-md-5">
                                                        <input type="text" name="datereturn" class="form-control datepicker" value="Date" placeholder="Date" id="date">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Materials</label>
                                                <div class="input-group">
                                                    <form name = "materials" id = "materials" method="post">
                                                        <input type="checkbox"  name = "materials" value="Carpet"><label>Carpet</label>&nbsp;
                                                        <input type="checkbox" name = "materials" value="Lights"><label>Lights</label> &nbsp;
                                                        <input type="checkbox" name = "materials" value="Crucifix"><label>Crucifix</label>&nbsp;
                                                        <input type="checkbox" name = "materials" value="Curtains"><label>Curtains</label>&nbsp;
                                                        <input type="checkbox" name = "materials" value="Candle Stand"><label>Candle Stand</label>&nbsp;
                                                        <input type="checkbox" name = "materials"  value="Roller Stand"><label>Roller Stand</label>&nbsp;
                                                    </form>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <center>
                                                <button type="submit" class="btn btn-info" name="save_vigil"><span class="glyphicon glyphicon-check"></span> Save</button>
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


<!--uppercase-->
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
<!--countdays-->
        <script type="text/javascript">
            $(function() {

                $('#datepicker1').datepicker({
                    format: "dd-M-yyyy",
                    todayHighlight:'TRUE',
                    autoclose: true,
                    
                }).on('changeDate', function (date) {
                    $('#datepicker2').datepicker('setStartDate', $("#datepicker1").val());
                });
                $('#datepicker2').datepicker({
                    format: "dd-M-yyyy",
                    todayHighlight:'TRUE',
                    autoclose: true,
                   
                }).on('changeDate', function (date) {
                    var start = $("#datepicker1").val();
                    var startD = new Date(start);
                    var end = $("#datepicker2").val();
                    var endD = new Date(end);
                    var diff = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
                    $("#days").val(diff);
                });

            });
        </script>


<script language="javascript" type="text/javascript">
 function dropdownlist(listindex)
 {
 
document.select.subcategory.options.length = 0;
 switch (listindex)
 {
 
 case "Aircon" :
 document.select.subcategory.options[0]=new Option("Room1");
 document.select.subcategory.options[1]=new Option("Room2");
 document.select.subcategory.options[2]=new Option("Room3");
 
 break;
 
 case "Non-Aircon" :
 document.select.subcategory.options[0]=new Option("Chapel 1");
 document.select.subcategory.options[1]=new Option("Chape 2");
 document.select.subcategory.options[2]=new Option("Chapel 3");
 break;
 
 
 }
 return true;
 }
 </script>
        
        <!--roomtype-->
    <script type="text/javascript">
            function pick(tugnaw,init) {
                var aircon = ['Choose Room', 'Room 1', 'Room 2', 'Room 3'];
                var non_aircon = ['Choose Chapel', 'Chapel A', 'Chapel B', 'Chapel C'];


                switch (tugnaw.value) {
                    case 'Aircon':
                        init.options.length = 0;
                        for (i = 0; i < aircon.length; i++) {
                            createOption(init, aircon[i], aircon[i]);
                        }
                        break;
                    case 'Non_Aircon':
                        init.options.length = 0; 
                        for (i = 0; i < non_aircon.length; i++) {
                            createOption(init, non_aircon[i], non_aircon[i]);
                        }
                        break;

                    default:
                        init.options.length = 0;
                        break;
                }

            }

            function createOption(ddl, text, value) {
                var opt = document.createElement('option');
                opt.value = value;
                opt.text = text;
                ddl.options.add(opt);
            }
        </script>

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
