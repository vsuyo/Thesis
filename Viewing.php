<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
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
                <?php require 'require/vertical-navigation.php'?>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li class="active"><strong><mark>Viewing</mark></strong></li>
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
                                    <li class=""><a href="#tab-second" role="tab" data-toggle="tab"><span class="fa fa-cogs"> History Logs</span></a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Vigil</button>
                                                    </div>
                                                </h3>

                                            </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Transaction Date</th>
                                                            <th>Informant</th>
                                                            <th>Preference</th>
                                                            <th>Room Type</th>
                                                            <th>Chapel Name</th>
                                                            <th>Start Ddate</th>
                                                            <th>End Date</th>
                                                            <th>No. of Days</th>
                                                            <th>Materials</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("select * from `client`, `viewing` where client.client_id = viewing.client_id && `status` = 'Currently Used'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $fetch['date']?></td>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            <td><?php echo $fetch['preference']?></td>
                                                            <td><?php echo $fetch['roomtype']; ?></td>
                                                            <td><?php echo $fetch['chapelcode']?></td>
                                                            <td><?php echo $fetch['startdate']?></td>
                                                            <td><?php echo $fetch['enddate']?></td>
                                                            <td><?php echo $fetch['duration']?></td>
                                                            <td><?php echo $fetch['materials']?></td>
                                                            <td style="color:red"><?php echo $fetch['status']?></td>
                                                            <td> <a href="#update<?php echo $fetch['controlno']?>" data-target="#update<?php echo $fetch['controlno']?>" data-toggle="modal" class="btn btn-info btn-md"><span class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="Update Status"></span></a></td>
                                                        </tr>
                                                        <?php
            }
            $conn->close();
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                </h3>

                                            </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                            <th>Transaction Date</th>
                                                            <th>Informant</th>
                                                            <th>Preference</th>
                                                            <th>Room Type</th>
                                                            <th>Chapel Name</th>
                                                            <th>Start Ddate</th>
                                                            <th>End Date</th>
                                                            <th>No. of Days</th>
                                                            <th>Materials</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("select * from `client`, `viewing` where client.client_id = viewing.client_id && `status` = 'Available'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $fetch['date']?></td>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            <td><?php echo $fetch['preference']?></td>
                                                            <td><?php $fetch['roomtype'];?></td>
                                                            <td><?php echo $fetch['chapelcode']?></td>
                                                            <td><?php echo $fetch['startdate']?></td>
                                                            <td><?php echo $fetch['enddate']?></td>
                                                            <td><?php echo $fetch['duration']?></td>
                                                            <td><?php echo $fetch['materials']?></td>
                                                            <td><strong style="color:Green"><?php echo $fetch['status']?></strong></td>
                                                           
                                                        </tr>
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
                        <center>
                            <?php $dateF = date("y-d-m");?>
                            <h2 class="fa fa-home"> Vigil</h2>
                        </center>
                    </div>

                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-fourth">
                            <div class="row">
                                <form action="viewingAdd.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-5">
                                                <input type="text" name="date" class="form-control datepicker" value="<?php echo $dateF; ?>" placeholder="Date">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant</label>
                                            <div class="col-md-6">
                                                <select class="validate[required] select" name="informant" id="informant" data-live-search="true">											
                                                    <option value="pick">Choose Informant</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From client ");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['client_id'] ." '>" .$row['informant'] ."   </option>";
                                                    }
                                                    ?>
                                                </select>
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
                                            <label class="col-md-4 control-label">Preference</label>
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
                                                <label class="col-md-4 control-label">Room Type</label>
                                                <div class="col-md-6">
                                                    <select id="ddl" name="roomtype" class="validate [required] select" onchange="pick(this,document.getElementById('init'))">
                                                        <option>Choose</option>
                                                        <option name = "roomtype" value="Aircon">Aircon</option>
                                                        <option name = "roomtype" value="Non_Aircon">Non-Aircon</option>
                                                    </select>
                                                </div>
                                            </div><br><br><br>

                                            <div class="">
                                                <label class="col-md-4 control-label">Chapel Name</label>
                                                <div class="col-md-8">
                                                    <select id="init" name="chapelcode" class="">   
                                                        <option></option>
                                                        <option>Choose Chapel Name</option>
                                                    </select>
                                                </div>
                                            </div><br><br>


                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="startdate">Start Date</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="startdate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker1" data-date-start-date="0d">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="enddate">End Date</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="enddate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">No. of (Days)</label>
                                                <div class="col-md-3">
                                                    <input type="number" name="duration" class="form-control" onkeyup="compute()" placeholder="Days" id="days">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Materials</label>&nbsp;&nbsp;
                                                <div class="input-group">
                                                    <form name="materials1" id="materials">
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Carpet"> Carpet&nbsp;&nbsp;&nbsp;&nbsp;
                                                         <input class="icheckbox" type="checkbox" name="materials[]" value="Roller Stand"> Roller Stand &nbsp;
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Crucifix"> Crucifix<br><br>
                                                        <input class="icheckbox" aria-controls=""type="checkbox" name="materials[]" value="Curtains"> Curtains&nbsp;
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Candle Stand"> Candle Stand&nbsp;                                                        
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Lights"> Lights                                                       
                                                    </form>
                                                </div>
                                            </div>         
                                        </div>
                                        <div id="dvpreference2" style="display: none">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="address" class="form-control" / placeholder="Address" id='input' onkeyup="myFunction(this.id)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Date borrowed</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="dateBorrowed" class="form-control datepicker" value="Date" placeholder="Date" id="sd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Date Return</label>
                                                <div class="col-md-5">
                                                    <input type="text" name="datereturn" class="form-control datepicker" value="Date" placeholder="Date" id="date">
                                                </div>
                                            </div>
                                            <hr> <div class="form-group">
                                                <label class="col-md-4 control-label">Materials</label>&nbsp;&nbsp;
                                                <div class="input-group">
                                                    
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Carpet"> Carpet&nbsp;&nbsp;&nbsp;&nbsp;
                                                         <input class="icheckbox" type="checkbox" name="materials[]" value="Roller Stand"> Roller Stand &nbsp;
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Crucifix"> Crucifix<br><br>
                                                        <input class="icheckbox" aria-controls=""type="checkbox" name="materials[]" value="Curtains"> Curtains&nbsp;
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Candle Stand"> Candle Stand&nbsp;                                                        
                                                        <input class="icheckbox" type="checkbox" name="materials[]" value="Lights"> Lights                                                       
                                                 
                                                </div>
                                            </div>                              
                                        </div><br><br>                                         
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

        <?php 
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $query = $conn->query("select * from `viewing`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="update<?php echo $fetch['controlno']?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form" action="viewingAdd.php">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4>Do you want to update status??</h4>
                            </center>
                        </div>
                        <div class="modal-body">
                            <center><input type="hidden" name="controlno" value="<?php echo $fetch['controlno']?>">
                            
                            <input type="radio" class="iradio" name="update" value="yes" required> YES &nbsp;&nbsp;                       
                            <input type="radio" class="iradio" name="update" value="no" required> NO
                            </center>
                        </div><br>  
                        <div class="modal-footer">
                            <center>
                                <button type="submit" class="btn btn-info" name="update_viewing"><span class="glyphicon glyphicon-edit"></span> Save</button>
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
                    todayHighlight: 'TRUE',
                    autoclose: true,

                }).on('changeDate', function(date) {
                    $('#datepicker2').datepicker('setStartDate', $("#datepicker1").val());
                });
                $('#datepicker2').datepicker({
                    format: "dd-M-yyyy",
                    todayHighlight: 'TRUE',
                    autoclose: true,

                }).on('changeDate', function(date) {
                    var start = $("#datepicker1").val();
                    var startD = new Date(start);
                    var end = $("#datepicker2").val();
                    var endD = new Date(end);
                    var diff = parseInt((endD.getTime() - startD.getTime()) / (24 * 3600 * 1000));
                    $("#days").val(diff);
                });

            });

        </script>

        <!--For Aircon/Non-Aircon-->
        <script language="javascript" type="text/javascript">
            function dropdownlist(listindex) {

                document.select.subcategory.options.length = 0;
                switch (listindex) {

                    case "Aircon":
                        document.select.subcategory.options[0] = new Option("Emerald");
                        document.select.subcategory.options[1] = new Option("Garnet");
                        document.select.subcategory.options[2] = new Option("Ruby");

                        break;

                    case "Non-Aircon":
                        document.select.subcategory.options[0] = new Option("Chapel A");
                        document.select.subcategory.options[1] = new Option("Chapel B");
                        document.select.subcategory.options[2] = new Option("Chapel C");
                        document.select.subcategory.options[3] = new Option("Chapel D");
                        document.select.subcategory.options[4] = new Option("Chapel E");
                        break;


                }
                return true;
            }

        </script>

        <!--roomtype-->
        <script type="text/javascript">
            function pick(tugnaw, init) {
                var aircon = ['Choose Room', 'Emerald', 'Garnet', 'Ruby'];
                var non_aircon = ['Choose Chapel', 'Chapel A', 'Chapel B', 'Chapel C', 'Chapel D', 'Chapel E'];


                switch (tugnaw.value) {
                    case 'Aircon':
                        init.options.length = 0;
                        for (i = 0; i < aircon.length; i++) {
                            createOption(init, aircon[i], aircon[i]);
                        }
                        if (Aircon = Emerald) {
                            document.write(6000);
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
