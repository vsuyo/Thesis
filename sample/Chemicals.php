
<?php
//Add Item        
if(isset($_POST['submit1'])){
    $chemName1 = $_POST['chemName1'];
    $chemDesc1 = $_POST['chemDesc1'];
    
    
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$sql = "INSERT INTO `chemicalstocklist` (chemName1, chemDesc1, dateCreated)
	VALUES ('$chemName1', '$chemDesc1', NOW())";
    
    
    //insert to table Chemicals
    if ($conn->query($sql) === TRUE) {
        $add_chemicals_query = "INSERT INTO `chemicals`(`chemName1`, `chemDesc1`, `qty1`, `dateCreated`) VALUES ($chemName1', '$chemDesc1', 0, NOW())";
        $last_id = mysqli_insert_id($conn);
        echo "The last is" . $last_id;

    if ($conn->query($add_chemicals_query) === TRUE) {
    echo '<script>window.location.href="Chemicals.php"</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
    }


    


?>

 
<?php
if(ISSET($_POST['submit3'])){
    $chemName3 = $_POST['chemName3'];
    $qty2 = $_POST['qty2'];
    $dateRel = $_POST['dateRel'];
    $recBy = $_POST['recBy'];
	
    $query = $conn -> query ("INSERT INTO chemdis (chemName3, qty2, dateRel, recBy)
	VALUES ('$chemName3', '$qty2', '$dateRel', '$recBy')") or die (mysqli_error());
    $conn->close();
	echo "<script>alert ('Successfully Added!!')</script>";
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
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Chemicals</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Chemicals Dispensation</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-second">
                                      <div class="row">
                                       <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"> 
                                        <div class="pull-right">
                                         
                                    </div></h3>
                                                                    
                                </div>
                                <div class="panel-body" >
                                    <table class="table datatable"id="chemicals">
                                        <thead>
                                            <tr>
                                                <th>Chemical Name</th>
                                                <th>Quantity</th>                                           <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `chemicals` ORDER BY `controlNo` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $chemName1 = $fetch['chemName1'];
    $qty1 = $fetch['qty1'];
    $controlNo = $fetch['controlNo'];
    $chemDesc1 = $fetch['chemDesc1'];
	
                                            echo "<tr>
                                                
												<td>$chemName1</td>
												<td>$qty1</td>
                                                <td>$chemDesc1</td>";
    

    ?>	
                                            
                                            <td>
                                <div class='btn-group' role='group' aria-label='...'>
                                <a href="#edit<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button></a>
                                </div>
                                
                                <a href="#  out<?php echo $controlNo;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span></button></a>    
                                            
                                            </td>
                                            
        
                                            
        <!--Add Items Stocks -->
        <div id="edit<?php echo $controlNo; ?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Stocks</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="controlNo" value="<?php echo $controlNo; ?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="chemName1">Chemical Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="chemName1" name="chemName1" value="<?php echo $chemName1; ?>" placeholder="Chemical Name" required readonly>
                                </div>
                                <label class="control-label col-sm-2" for="qty1">Quantity:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="qty1" name="qty1" value="<?php echo $qty1; ?>" placeholder="Quantity" required autofocus>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <br><br><br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="add_Stocks"><span class="glyphicon glyphicon-edit"></span> Add Stocks</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
              
                </div>
                </form>
            </div>
                                            
        
                                            
                                            
                                            
            
<?php
                                            
                                            
                                            
//add ChemicalStocks
if(isset($_POST['add_Stocks'])){
    
    $quantity = $_POST['qty1'];
    $chemName1 = $_POST['chemName1'];
    
    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    //insert to table added quantity
    $sql = "INSERT INTO `added_quantity`(`qty1`, `chemName1`, `date`,`in_out`) VALUES ('$quantity', '$chemName1', NOW(), 'in')";
    
    // update chemicals           
    if ($conn->query($sql) === TRUE) {
    $add_stock = "UPDATE chemicals SET qty1=(qty1 + '$quantity') WHERE controlNo='$controlNo' ";
    if ($conn->query($add_stock) === TRUE) {
         echo '<script>window.location.href="Chemicals.php"</script>';
    } else {
         echo "Error updating record: " . $conn->error;
        }
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
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
                                <div class="tab-pane" id="tab-third">
                                      <div class="row">
                                       <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"> 
                                        <div class="pull-right">
                                         <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium3"><span class="fa fa-minus"></span>Release</button>
                                    </div></h3>                                                         
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Chemical Name</th>
                                                <th>Qty</th>
                                                <th>Date Released</th>
												<th>Received By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `chemdis` ORDER BY `controlNo` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>		
                                            <tr>
                                                <td><?php echo $fetch['chemName3']?></td>
												<td><?php echo $fetch['qty2']?></td>
												<td><?php echo $fetch['dateRel']?></td>
												<td><?php echo $fetch['recBy']?></td>
                                                <td><button class="btn btn-success"><span class="fa fa-pencil-square-o"></span></button></td>
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
                        </div>                                                   
                            <!-- END TABS -->                        
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
                                                <label class="col-md-3 control-label">Qty</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="qty2" type="number" class="form-control"/ placeholder="Qty" required="">
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
        <script type="text/javas  cript" src="js/plugins/jquery/jquery-ui.min.js"></script>
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




