    <?php  
session_start();  
$session_username = $_SESSION['user_id'];
if(!$_SESSION['user_id'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>


<?php require ('Deliveryadd.php')?>


   
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Alisbo Deliver</title>            
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
                <? require 'require/vertical-navigation.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->                   

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li class="active"><strong><mark>Delivery</mark></strong></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab" class="fa fa-truck"> Delivery</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">                                
                                                <h3 class="panel-title"> 
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span> Add Delivery</button>
                                                    </div></h3>

                                            </div>
 <!-- insurance modal-->
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><center>
                        <h2 class="modal-title" id="largeModalHead"><span class="fa fa-truck"> Delivery</span></h2></center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form action="Delivery.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data" id="uinsure">
                                    <center><div class="col-md-12">
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Supplier Name</label>
                                            <div class="col-md-5">
                                                    
                                        <select id="choices" name="suppliername" class="validate [required] select">
                                            <option value="">Choose Supplier</option>
                                            <option value="Supplier1">SUPPLIER 1</option>
                                            <option value="Supplier2">SUPPLIER 2</option>
                                            <option value="Supplier3">SUPPLIER 3</option>
                                        </select>
                                            </div>
                                        </div> 
                                         <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Address</label>
                                            <div class="col-md-5 ">
                                                    <input type="text" class="form-control"/ placeholder="Address"  name="address" id ="add" required = ""/>
                                            </div>
                                        </div>
                                         <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Contact No.</label>
                                            <div class="col-md-5 ">
                                                    <input type="number" class="form-control"/ placeholder="Contact No."  name="contactno" id ="contact" required = ""/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Casket Name</label>
                                            <div class="col-md-5">
                                                <select id="choosecasket" name = "casketname" class="validate [required] select">
                                                    <option value="">Choose Casket</option>
                                                    <option value="Charity">Charity</option>
                                                    <option value="Pioneer">A Pioneer</option>
                                                    <option value="Junior Half Glass">Junior Half Glass</option>
                                                    <option value="Omb">OMB</option>
                                                    <option value="Senior Half Glass">Senior Half Glass</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Casket Type</label>
                                            <div class="col-md-5 ">
                                                   <select id="typee" name = "caskettype" class="validate [required] select">
                                                    <option value="">Choose Type</option>
                                                    <option value="Wood">Wood</option>
                                                    <option value="Metal">Metal</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Color</label>
                                            <div class="col-md-5 ">
                                                   <select id="typee" name = "color" class="validate [required] select">
                                                    <option value="">Choose Color</option>
                                                    <option value="White">White</option>
                                                    <option value="Silver">Silver</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Quantity</label>
                                            <div class="col-md-5 ">
                                                    <input type="number" class="form-control"/ placeholder="QTY"  name="qty" id ='' required = ""/>
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Date Requested </label>
                                            <div class="col-md-5 ">
                                                    <input type="text" class="form-control datepicker"/ placeholder="Date Requested" name="daterequested" id ='' required = ""/>
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-4 control-label">Date Delivery</label>
                                            <div class="col-md-5 ">
                                                    <input type="text" class="form-control datepicker"/ placeholder="Date Delivery"  name="datedelivery" id ='' required = ""/>
                                            </div>
                                        </div><br>

                                    </div></center>
                                </form>
                            </div>                                   
                        </div>
                    </div><div class="modal-footer">
                    <center>
                        <button type="submit" value="Save" class="btn btn-info fa fa-check-square-o " name="Deliveryadd" form="uinsure"> Save</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button></center>
                    </div>
                </div>
            </div>
        </div>
                                            <div class="panel-body">
                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Supplier Name</th>
                                                            <th>Casket Name</th>
															<th>Casket Type</th>
                                                            <th>Color</th>
                                                            <th>Qty</th>
                                                            <th>Date Requested</th>
                                                            <th>Date Delivery</th>
                                                        </tr>
                                                    </thead>

                                                    <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `delivery` ORDER BY `delivery_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){

    $suppliername = $fetch['suppliername'];
    $casketname = $fetch['casketname'];
    $caskettype = $fetch['caskettype'];
    $color = $fetch['color'];
    $qty = $fetch['qty'];
    $daterequested = $fetch['daterequested'];
    $datedelivery = $fetch['datedelivery'];


                                                            echo "<tr>
                                                <td>$suppliername</td>
												<td>$casketname</td>
												<td>$caskettype</td>
                                                <td>$color</td>
                                                <td>$qty</td>
                                                <td>$daterequested</td>
                                                <td>$datedelivery</td>
                                                ";

                                                        ?>
                                                    
                                                    
                                                        <?php
                                                        }
                                                        $conn->close();
                                                        ?>
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
    
<script type="text/javascript">
    $(document).ready(function(){
    $('#choices').change(
			function(){
				var pick = $('#choices').val();
                var add = ["15th St. Lacson Bacolod City", "Brgy.Tangub Bacolod City", "Brgy.35 Bacolod City"];
                var contact = ["09105123412", "09221234123", "09099912341"];
                //var qty = $('#qty').val();
				
				switch(pick){
					case 'Supplier1':
						
							$('#add').val(add[0]);
							$('#contact').val(contact[0]);
                            break;
                    case 'Supplier2':
							
							$('#add').val(add[1]);
							$('#contact').val(contact[1]);
							break;
                    case 'Supplier3':
		
							$('#add').val(add[2]);
							$('#contact').val(contact[2]);
							break;
                   
                    default:
                            $('#dimension').val("");
							$('#type').val("");
							$('#color').val("");
                            $('#price').val(0);
                            break;
					}
			});
    /*
            function compute() {
                    var qty = $('#qty').val();
                    var price = $('#price').val();
                    var cost = qty*price;
                    $('#total').val(cost);
            }*/
                });
</script>
</html>






