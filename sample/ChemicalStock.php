




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
                    <li><a href="#">Monitoring</a></li>
                    <li class="active">Chemicals</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                   <div class="row">
                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#tab-first" role="tab" data-toggle="tab">Chemicals Stock List</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"> 
                                        <div class="pull-right">
                                         <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>New Stock</button>
                                    </div></h3>
                                                                    
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable" id="chemStockList">
                                        <thead>
                                            <tr>
                                                <th>Chemical Name</th>
                                                <th>Qty.</th>
                                                <th>Date Created</th>
                                                <th>Chemical Description</th>
                                        </thead>
                                        <tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM chemicalstocklist as chemstock , chemicals as chem WHERE chemstock.controlNo=chem.controlNo ORDER BY chemstock.controlNo DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $chemName1 = $fetch['chemName1'];   
    $qty1 = $fetch['qty1'];
    $dateCreated = $fetch['dateCreated'];
    $controlNo = $fetch['controlNo'];
    $chemDesc1 = $fetch['chemDesc1'];
    
    

                                           echo "<tr>
                                                
												<td>$chemName1</td>
												<td>$qty1</td>
												<td>$dateCreated</td>
                                                <td>$chemDesc1</td>";
    //print_r($fetch);
                       
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
        
        <!-- Chemical Stock List -->

        <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-flask"> Chemicals Stock List</span></h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-first">
                                        <div class="row">						
                                            <form id="chem1" action="Chemicals.php"class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Chemical Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="chemName1" type="text" class="form-control"/ placeholder="Name"/>
                                                    </div>                                            
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Decription</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input name="chemDesc1" type="text" class="form-control"/ placeholder="Description"/>
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <!--<div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date Created</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="dateCreated" type="text" class="form-control datepicker" value="Date" placeholder="Date"/>
                                                    </div>
                                                </div>
                                           </div> -->             
                                         </div>
                                        </form>
                                        </div>                                   
                                     </div>
                    </div>
                    <div class="modal-footer" >
						  <button class="btn btn-success pull-right" name="submit1"  form="chem1" >Save</button> 
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>     
                    </div>
                </div>
            </div>
        </div>
        <!-- Chemicals -->
        <div class="modal" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-flask"> New Chemical</span></h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-second">
                                        <div class="row">
                                            <form action="Chemicals.php" id="chem2" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Chemical Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="chemName2" type="text" class="form-control"/ placeholder="Name">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="chemDesc2" type="text" class="form-control"/ placeholder="Description">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Running Balance</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="runBal" type="number" class="form-control"/ placeholder="Balance">
                                                    </div>                                            
                                                </div>
                                            </div>                     <br>
                                        </div>
                                        </form>
                                        </div>                                   
                                     </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-success pull-right" form="chem2" name="submit2">Save</button>
                    </div> 
                </div>  
            </div>
        </div>
        <!-- Chemical Dispensation -->
        <div class="modal" id="modal_medium3" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-bookmark"> Release</span></h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-third">
                                        <div class="row">                                           
                                            <form id="chem3" action="Chemicals.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                                      
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Chemical Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="chemName3" type="text" class="form-control"/ placeholder="Chemical Name" required="">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date Released</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="dateRel" type="text" class="form-control datepicker" value="Date" placeholder="Date" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Recevied By</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="recBy" type="text" class="form-control"/ placeholder=" Name" required="">
                                                    </div>                                            
                                                </div>
                                            </div>                 
                                            <br>
                                        </div>
                                        </form>
                                        </div>                                   
                                     </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-success pull-right" name="submit3" form="chem3">Save</button>                  
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




