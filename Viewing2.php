<?php
include('viewingAdd.php');
?>
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
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">Alisbo Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="img/A.png" alt="Admin"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/A.png" alt="Admin"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Admin</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>                    
                    <li>
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                              
                    <li class="xn-title">Components</li>   
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Data Entry</span></a>
                        <ul>
                             <li><a href="DataEntry.php"><span class="fa fa-users"></span>Client & Cadaver</a></li>
                             <li><a href="Unidentified Corpse.php"><span class="fa fa-user"></span>Unidentified Corpse</a></li>
                             <li><a href="Hearse.php"><span class="fa fa-truck"></span>Hearse</a></li>
                             <li><a href="Viewing.php"><span class="fa fa-bookmark"></span>Viewing</a></li>
                             <li><a href="Casket.php"><span class="fa fa-archive"></span>Casket</a></li>
                             <li><a href="Insurance.php"><span class="fa fa-file-text-o"></span>Insurance</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href=""><span class="fa fa-briefcase"></span> <span class="xn-text">Services</span></a>
                        <ul>                            
                            <li><a href="table-datatables.html"><span class="fa fa-archive"></span> Casket</a></li>
                            <li><a href="Schedule.html"><span class="fa fa-calendar"></span> Schedule</a></li>                            
                        </ul>
                    </li>                       
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Monitoring</span></a>
                        <ul>                            
                            <li><a href="Chemicals.html"><span class="fa fa-flask"></span>Chemicals</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-wrench"></span>Equipment</a></li>
                        </ul>
                    </li>
                      <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-clipboard"></span> <span class="xn-text">Reports</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-male"></span>No. of Cadaver Served</a></li>
                            <li><a href="table-datatables.html"><span class="fa  fa-archive"></span>No of Casket Sold </a></li>
                            <li><a href="table-export.html"><span class="fa fa-male"></span>No. of Unclaimed Cadaver</a></li>                            
                        </ul>
                    </li>   
                      <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-cloud-download"></span>System Backup</a></li>                         
                        </ul>
                    </li>        
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
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
                    <li><a href="#">Data Entry</a></li>
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
                                         <button class="btn btn-success" data-toggle="modal" data-target="#modal_large4"><span class="fa fa-plus"></span>Add Viewing</button>
                                    </div></h3>
                                    </div>

                                    <div class="panel-body">
                                    <table class="table datatable" >
                                              <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Viewing Date</h2></div>
                <div class="divB">
                    <div class="divD">
                        <hr/>
                                    <?php
                        //Establishing Connection with Server
                        $conn = mysql_connect("localhost", "root", "");
                        
                        //Selecting Database
                        $db = mysql_select_db("alisbo", $conn);
                        
                            //MySQL Query to read data
                        $query = mysql_query("select * from viewing", $conn);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"Viewing.php?id={$row['controlno']}\">{$row['date']}</a ></b>";
                            echo "<br />";
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from viewing where controlno=$id", $conn);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                  

                            <hr>  

                            <br>
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Viewing Details</h3>
                                </div>
                                <div class="panel-body">
                
                                <span><b>Date:</b></span> <?php echo $row1['date']; ?>
                                <br><br>                
                                <span><b>Preference:</b></span> <?php echo $row1['preference']; ?>
                                <br><br>                
                                <span><b>Chapel Code:</b></span> <?php echo $row1['chapelcode']; ?>
                                <br><br>                
                                <span><b>Room Type:</b></span> <?php echo $row1['roomtype']; ?>
                                <br><br>                
                                <span><b>Vigil Date:</b></span> <?php echo $row1['vigildate']; ?>
                                <br><br>                
                                <span><b>Duration:</b></span> <?php echo $row1['duration'];  ?>
                                <br><br>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Back</button>
                                    <button class="btn btn-primary pull-right" ><a href = "updatephp.php">Update</a></button>
                                </div>


                                </div>                            
                            </div>
                                
                                
                                
                        </div>

        <?php
    }
}
?>
                                    </table>
                                </div>
                            </div>

                                                                    
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
        
        
        <!-- Viewing -->
        <div class="modal" id="modal_large4" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Add Schdule</h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-fourth">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                            <h2 class="fa fa-bookmark"> Vigil</h2>
                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name = "date" class="form-control datepicker" value="Date" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                 <label class="col-md-3 control-label">Preference</label>
                                                     <div class="col-md-9">
                                                      <select class="validate[required] select" name = "preference" id="formGender">
                                                          <option value="" >Choose option</option>
                                                          <option value="Alisbo Memorial Chapel" name = "alisbomemorialchapel">Alisbo Memorial Chapel</option>
                                                          <option value="House" name = "house">House</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Chapel Code</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name = "chapelcode" class="form-control"/ placeholder="Chapel Code">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label class="col-md-3 control-label">Room Type</label>
                                                     <div class="col-md-9">
                                                      <select class="validate[required] select" name = "roomtype" id="formGender">
                                                          <option value="">Choose option</option>
                                                          <option value="Aircon" name = "aircon">Aircon</option>
                                                          <option value="Non-Aircon" name = "nonaircon">Non-Aircon</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Vigil Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name = "vigildate" class="form-control datepicker" value="Date" placeholder="Date">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Duration (Days)</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name = "duration" class="form-control"/ placeholder="Duration">
                                                    </div>                                            
                                                </div>
                                            </div><br>
                                            <div class="panel-footer">
                                                 <button class="btn btn-warning" name = "clear">Clear Form</button>                                    
                                                 <button class="btn btn-success pull-right" name = "save" href = "Viewing.php" >Save</button>

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






