<?php

if(isset($_POST['save'] )){
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
    
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    $query = $conn -> query ("INSERT INTO `viewing`(`client_id`, `date`, `preference`, `chapelcode`, `roomtype`, `startdate`, `enddate`, `duration`, `address`, `dateBorrowed`, `datereturn`, `materials`) VALUES ('$informant', '$date', '$preference', '$chapelcode', '$roomtype', '$startdate', '$enddate', '$duration', '$address', '$dateBorrowed', '$datereturn', '$materials' )")or die (mysqli_error());

    
    echo '<script>window.location.href="Viewing.php"</script>';

       
    

    
    

$conn -> close();

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
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
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
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
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
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-users"> Client & Cadaver</span></a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"> 
                                        <div class="pull-right">
                                         <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Client</button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span>Add Cadaver</button>
                                    </div></h3>
                                                                    
                                </div>
                                
                                <div class="panel-body">
                                    <table class="table datatable" id="chemStockList">
                                        <thead>
                                            <tr>
                                                <th>Informant</th>
                                                <th>Date</th>
                                                <th>Address</th>
                                                <th>Action</th></tr>
                                        </thead>
                                        <tbody>
    
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `viewing` ORDER BY `controlno` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $informant = $fetch['informant'];
    $date = $fetch['date'];
    $preference = $fetch['preference'];
    $chapelcode = $fetch['chapelcode'];
    $roomtype = $fetch['roomtype'];
    $startdate = $fetch['startdate'];
    $enddate = $fetch['enddate'];
    $duration = $fetch['duration'];
    $address = $fetch['address'];
    $dateBorrowed = $fetch['dateBorrowed'];
    $datereturn = $fetch['datereturn'];
    $materials = $fetch['materials'];
    
    

                                           echo "<tr>
                                                <td>$informant</td>
												<td>$date</td>
												<td>$address</td>";
                       
    ?>
                    <td>
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#edit" data-toggle="modal"><button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span></button></a>&nbsp;
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
                        <h4 class="modal-title fa fa-plus" id="defModalHead"> Add Client</h4>
                    </div>
                    
                <div class="modal-body">
                    <div class="tab-pane active" id="tab-fourth">
                        <div class="row">
                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <div class="col-md-12">
                                    <center>
                                        <h2 class="fa fa-bookmark"> Vigil</h2>
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
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" name="date" class="form-control datepicker" value="Date" placeholder="Date">
                                            </div>
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
                                        <div class="col-md-9">
                                            <select class="validate[required] select" id="ddlPreference" name="preference">
                                                    <option value="c">Choose preference</option>
                                                    <option value="A">Alsibo</option>
                                                    <option value="H">House</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div id="dvpreference" style="display: none">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Room Type</label>
                                            <div class="col-md-9">
                                                <select class="validate[required] select" name="roomtype" id="formGender">
                                                        <option value="">Choose option</option>
                                                        <option value="Aircon" name = "aircon">Aircon</option>
                                                        <option value="Non-Aircon" name = "nonaircon">Non-Aircon</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Chapel Code</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" name="chapelcode" class="form-control" / placeholder="Chapel Code">
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <script type="text/javascript">
                                                $(function() {

                                                    $('#datepicker1').datepicker({
                                                        format: "dd-M-yy",
                                                        todayHighlight:'TRUE',
                                                        autoclose: true,
                                                        minDate: 0,
                                                        maxDate: '+1Y+6M'
                                                    }).on('changeDate', function (date) {
                                                        $('#datepicker2').datepicker('setStartDate', $("#datepicker1").val());
                                                    });
                                                    $('#datepicker2').datepicker({
                                                        format: "dd-M-yy",
                                                        todayHighlight:'TRUE',
                                                        autoclose: true,
                                                        minDate: '0',
                                                        maxDate: '+1Y+6M'
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
                                            <div class="form-group" >
                                                <label class="col-md-3 control-label">Start Date</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="startdate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker1" data-date-start-date="0d">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">End Date</label>
                                                <div class="col-md-4">
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
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" name="address" class="form-control" / placeholder="Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date borrowed</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" name="dateBorrowed" class="form-control datepicker" value="Date" placeholder="Date" id="sd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date Return</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" name="datereturn" class="form-control datepicker" value="Date" placeholder="Date" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Materials</label>
                                            <div class="input-group">
                                                <form action="#" name = "materials" method="post">
                                                    <input type="checkbox" name="materials" value="Carpet"><label>Carpet</label>&nbsp;
                                                    <input type="checkbox" name="materials" value="Lights"><label>Lights</label> &nbsp;
                                                    <input type="checkbox" name="materials" value="Crucifix"><label>Crucifix</label>&nbsp;
                                                    <input type="checkbox" name="materials" value="Curtains"><label>Curtains</label>&nbsp;
                                                    <input type="checkbox" name="materials" value="Candle Stand"><label>Candle Stand</label>&nbsp;
                                                    <input type="checkbox" name="materials" value="Roller Stand"><label>Roller Stand</label>&nbsp;
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="modal-footer">
                    <center>
                        <button type="submit" class="btn btn-success" name="save"><span class="glyphicon glyphicon-check"></span> Save</button>
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






