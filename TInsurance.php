<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
include('Tinsuranceadd.php');
?>
<?php
    if(isset($_POST['update_tinsurance'])){
			
	$id = $_POST['id'];
        if(!empty($id)){
		$id = $_POST['id'];
		$uinformant = $_POST['uinformant'];
		$uinsuranceName = $_POST['uinsuranceName'];
		$upercentage = $_POST['upercentage'];
		$uamount = $_POST['uamount'];
		$udate = $_POST['udate'];
		
		$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
		$sql = "UPDATE tinsurance SET informant= '$uinformant', insuranceName='$uinsuranceName', percentage = '$upercentage', amount = '$uamount', WHERE `tinsurance_id`='$id' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Succesfully Added!"); window.location.href="TInsurance.php"</script>';
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
        <title>Alisbo Insurance</title>            
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
            <?php require 'require/sidebar.php' ?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->                
                <?php require 'require/vertical-navigation.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->                   

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transaction</a></li>
                    <li class="active">Insurance</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Insurance</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">                                
                                                <h3 class="panel-title"> 
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Insurance</button>
                                                    </div></h3>

                                            </div>
                                            <div class="panel-body">
                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
															<th>Informant</th>
                                                            <th>Insurance</th>
                                                            <th>Percent Cover</th>
															<th>Amount</th>
                                                            <th>Date</th>
															<th>Action</th>
                                                        </tr>
                                                        
                                                    </thead>
<tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT client.informant, tinsurance.tinsurance_id, insurance.insuranceName, tinsurance.percentage, tinsurance.amount, tinsurance.date FROM client  INNER JOIN tinsurance ON client.client_id = tinsurance.client_id INNER JOIN insurance ON insurance.insurance_id = tinsurance.insurance_id") or die(mysqli_error());
while($fetch = $query->fetch_array()){
	$informant = $fetch['informant'];  
    $insuranceName = $fetch['insuranceName'];
	$percentage = $fetch['percentage'];
	$amount = $fetch['amount'];
	$date = $fetch['date'];
    $tinsurance_id = $fetch['tinsurance_id'];
    
                                           echo "<tr>
                                                <td>$informant</td>
												<td>$insuranceName</td>
												<td>$percentage</td>
												<td>$amount</td>
												<td>$date</td>";												
    ?>
                    <td>
                            <a href="#update<?php echo $tinsurance_id; ?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                    </td>
    
    
					
        <!-- update insurance modal-->
        <div id="update<?php echo $tinsurance_id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-plus"> Update Insurance</span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form action = "TInsurance.php" id="tInsure" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <center><div class="col-md-12">
									  <input type="hidden" name="id" value="<?php echo $tinsurance_id; ?>">
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Informant</label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                      <select name="uinformant" class="validate[required] select" id="informant" required>
														  <option value="Sample">Choose Informant</option>
														  <?php echo"<option value='" . $informant."'>". $informant."</option>";?>  
                                                      </select>  
                                                </div>            
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Insurance</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control"/ placeholder="Insurance" name="uinsuranceName" value="<?php echo $insuranceName;?>">
                                                </div>            
                                            </div>
                                        </div>                                        
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Percent covered</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="mask_percent form-control"  placeholder="Percentage" name="upercentage" value="<?php echo $percentage;?>">
                                                </div>            
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Amount</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-ruble"></span></span>
                                                    <input type="number" class="form-control"  placeholder="Amount" name="uamount" value="<?php echo $amount;?>">
                                                </div>            
                                            </div>
                                        </div>                                        
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                              <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                              <input name="udate" type="text" class="form-control datepicker" placeholder="Date" value="<?php echo $date;?>">
                                            </div>
                                        </div>
                                    </div>
											<br>
                                    </div></center>
                                </form>
                            </div>                                   
                        </div>
                    </div>
					<div class="modal-footer">
                    <center>
                        <button type="submit" class="btn btn-info" name="update_tinsurance" form="tInsure"><span class="glyphicon glyphicon-check"></span>Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                    </div>
                </div>
            </div>
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
        </div>
        <!-- insurance modal-->
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-def">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <center>
                                        <h2 class="fa fa-user"> Cadaver</h2>
                                    </center>
                </div>
                <div class="modal-body">
                    <div class="tab-pane active" id="tab-first">
                        <div class="row">
                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Informant</label>
                                            <div class="col-md-9 col-xs-10">
                                                <select class="validate[required] select" name="informant" id="informant" data-live-search ="true">							
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
                                            <label class="col-md-3 control-label">Insurance</label>
                                            <div class="col-md-9 col-xs-10">
                                                <select class="validate[required] select" name="insuranceName" id="informant" data-live-search ="true">							
                                                    <option value="pick">Choose Insurance</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From insurance");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['insurance_id'] ." '>" .$row['insuranceName'] ."   </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div> &nbsp;
                                
                                        
                                    
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Percent covered</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="mask_percent form-control"  placeholder="Percentage" name="percentage">
                                                </div>            
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Amount</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-ruble"></span></span>
                                                    <input type="number" class="form-control"  placeholder="Amount" name="amount">
                                                </div>            
                                            </div>
                                        </div>                                        
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                              <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                              <input name="date" type="text" class="form-control datepicker" value="Date" placeholder="Date" required>
                                            </div>
                                        </div>
                                    </div>
									<br>

                                    <div class="panel-footer"><center>
                                            <button class="btn btn-info fa fa-check-square-o" name="save_insurance" href="TInsurance.php"> Save</button>                  <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
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






