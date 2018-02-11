<?php  
//session_start();  
//$session_username = $_SESSION['username'];
//if(!$_SESSION['username'])  
//{  
//    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
//}  
?>


<?php

if(ISSET($_POST['add_insurance'])){
    $insuranceName = $_POST['insuranceName'];
    $description = $_POST['description'];
	
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $qry = $conn -> query("SELECT * FROM insurance where insuranceName='$insuranceName'") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Insurance Name in DB"); window.location.href= "Insurance.php"</script>';    
        
    }else{ 
    $query = $conn -> query ("INSERT INTO insurance (insuranceName, description)
	VALUES ('$insuranceName','$description' )") or die (mysqli_error());
    $conn->close();
	echo '<script>alert("Succesfully Added!"); window.location.href="Insurance.php"</script>';
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
                <?// require 'require/vertical-navigation.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->                   

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Data Entry</a></li>
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
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab" class="fa fa-file-text"> Insurance Details</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">                                
                                                <h3 class="panel-title"> 
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span> Add Insurance</button>
                                                    </div></h3>

                                            </div>
 <!-- insurance modal-->
        <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><center>
                        <h2 class="modal-title" id="largeModalHead"><span class="fa fa-file-text"> Insurance</span></h2></center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form action="Insurance.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data" id="uinsure">
                                    <center><div class="col-md-12">
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Insurance</label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control"/ placeholder="Insurance" name="insuranceName" id ='input' required = ""/>
                                            </div>
                                        </div>                                                      
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Description</label>
                                            <div class="col-md-6 ">
                                                    <input type="text" class="form-control"/ placeholder="Description" onkeyup="myFunction(this.id)" name="description" id ='input2 ' required = ""/>
                                            </div>
                                        </div><br>

                                    </div></center>
                                </form>
                            </div>                                   
                        </div>
                    </div><div class="modal-footer">
                    <center>
                        <button type="submit" value="Save" class="btn btn-info fa fa-check-square-o " name="add_insurance" form="uinsure"> Save</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button></center>
                    </div>
                </div>
            </div>
        </div>
                                            <div class="panel-body">
                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Insurance Name</th>
                                                            <th>Description</th>
															<th>Action</th>
                                                        </tr>
                                                    </thead>
<tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `insurance` ORDER BY `insurance_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
	$insurance_id = $fetch['insurance_id'];
    $insuranceName = $fetch['insuranceName'];
    $description = $fetch['description'];

                                           echo "<tr>
                                                <td>$insuranceName</td>
												<td>$description</td>";												
    ?>
                    <td>
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#update<?php echo $insurance_id;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                        </div>
                    </td>
					
                            <!-- insurance update modal-->
                           <div id="update<?php echo $insurance_id; ?>" class="modal fade" role="dialog">
                            <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Item</h4>
                                </div>
                                    <div class="modal-body">
                                    <input type="hidden" name="controlNo" value="<?php echo $insurance_id; ?>">

                                    <div class="form-group">

                                     <label class="control-label col-sm-2" for="date">Insurance Name:</label>
                                    <div class="col-sm-4">
                                <input type="text" class="form-control" id="date" name="insuranceName" value="<?php echo $insuranceName; ?>"  required autofocus>
                            </div>

                            <label class="control-label col-sm-2" for="date">Description:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>"  required autofocus>
                            </div>

                        </div>
                        
                        <br><br>
                    </div>
                                
                    <br><br><br>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="update_insurance"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

    
      <?php 
    //update 
    if(isset($_POST['update_insurance'])){ 
	$id = $_POST['controlNo'];
        if(!empty($id)){
		$controlNo = $_POST['controlNo'];
		$insuranceName = $_POST['insuranceName'];
		$description = $_POST['description'];
		
		$sql = "UPDATE insurance SET insuranceName='$insuranceName', description='$description' WHERE insurance_id='$controlNo' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="Insurance.php"</script>';
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






