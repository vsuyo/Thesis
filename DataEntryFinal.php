<?php 
session_start();  
$session_username = $_SESSION['user_id'];
if(!$_SESSION['user_id'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<?php
require('client&cadaver_add.php');
require('insurance_entry.php');
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
                    <li><a href="#">Data Entry</a></li>
                    <li class="active"><strong><mark>Client & Deceased</mark></strong></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-users"> Client & Deceased</span></a></li>
                                    <li class=""><a href="#tab-second" role="tab" data-toggle="tab"><span class="fa fa-cogs"> Insurance</span></a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span>Add Client & Deceased</button>
                                                    </div>
                                                </h3>

                                            </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>                                                            
                                                            <th>Informant</th>
                                                            
                                                            <th>Deceased</th>                                                            
                                                            <th>Date Added(Deceased)</th>
                                                            <th>Deceased Age</th>
                                                            <th>Deceased Gender</th>
                                                            <th>Deceased Birthdate</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("select * from `client_cadaver` ORDER BY 'client_cadaver_id' ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            
                                                            <td><?php echo $fetch['cadaverdeceased']?></td>
                                                            <td><?php echo $fetch['dateadded']?></td>
                                                            <td><?php echo $fetch['age']?></td>
                                                            <td><?php echo $fetch['gender']?></td>
                                                            <td><?php echo $fetch['birthdate']?></td>
                                                            <td><a href="#update<?php echo $fetch['client_id']?>" data-target="#update<?php echo $fetch['client_id']?>" data-toggle="modal" class="btn btn-info btn-md"><span class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="Update Status"></span></a></td>
                                                        </tr>
                                                        <?php
            }
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
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium3"><span class="fa fa-plus"></span> Add Insurance</button>
                                                    </div></h3>

                                            </div>
 <!-- insurance modal-->
        <div class="modal" id="modal_medium3" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><center>
                        <h2 class="modal-title" id="largeModalHead"><span class="fa fa-file-text"> Insurance</span></h2></center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form action="DataEntry.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data" id="uinsure">
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

        

        <!-- cadaver modal-->
        <div class="modal fade" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <?php $dateF = date("y-d-m");?>
                            <h2 class="fa fa-user"> Client & Deceased</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                         <center><h4 class="fa fa-user"> Informant</h4></center>
                                        
                                        <div class="form-group">
                                            
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control datepicker" name="dateadded" value="<?php echo $dateF; ?>" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" / name="informant" placeholder="Name" required="" id='input' onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Address (Client)</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" / name="address_client" placeholder="Address" required="" id='input2' onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Contact No:</label>
                                            <div class="col-md-5">
                                                <input type="text" class=" form-control" name="contactno" value="" placeholder="Contact no." required="" maxlength="11" />
                                            </div>
                                        </div>
                                        
                                        <center><h4 class="fa fa-user"> Deceased</h4></center>
                                        

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Deceased </label>
                                            <div class="col-md-5">
                                                <input type="text" id="input3" onkeyup="myFunction(this.id)" class="form-control" / name="cadaverdeceased" placeholder="Name" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Insurance</label>
                                            <div class="col-md-8">
                                                <select class="validate[required] select" name="insuranceName" id="insurance" data-live-search="true">							
                                                    <option value="pick">Choose Insurance</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From insurance ");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value=' ". $row['insurance_id'] ." '>" .$row['insuranceName'] ."   </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Life Plan Policy Coverage</label>
                                            <div class="col-md-3">
                                                <input type="text" class="mask_percent form-control" name="lifeplan" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Birthdate</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control datepicker" name="birthdate" id="BDATE" value="Date" placeholder="Date" required="" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Age</label>
                                            <div class="col-md-4">
                                                <input type="text" id="AGE" class="form-control" name="age" placeholder="Age" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" name="gender" id="formGender" data-style="btn-default">
                                                    <option value="">Choose option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Current Address</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="currentaddress" placeholder="Address" required="" id="input6" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mothers Name </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="mothersname" placeholder="Name" required="" id="input4" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Fathers Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="fathersname" placeholder="Name" required="" id="input5" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            function ShowHideDiv() {
                                                var Yes = document.getElementById("Yes");
                                                var DC = document.getElementById("dcn");
                                                dcn.style.display = Yes.checked ? "block" : "none";
                                            }

                                        </script>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Death Certificate</label>
                                            <div class="col-md-8">
                                                <form>
                                                    <label for="Yes" class="radio-inline">
                                                        <input class="iradio" type="radio" id="Yes"  name = "deathcertificate" value = "Yes" onclick="ShowHideDiv()">Yes
                                                    </label>
                                                    <label for="No" class="radio-inline">
                                                        <input class="iradio" type="radio" id="No"  name = "deathcertificate" value = "No" onclick="ShowHideDiv()">No
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="dcn" style="display:none">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Death Certificate No.</label>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" / name="deathcertno" placeholder="Control No.">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Date Issued</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" name="dateissued" value="Date" placeholder="Date" data-date-end-date="0d">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Place of Death</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" / name="placeofdeath" placeholder="Address" id="input7" onkeyup="myFunction(this.id)">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Date of Death</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" name="dateofdeath" value="Date" placeholder="Date" data-date-end-date="0d">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Time of Death</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control timepicker" name="timeofdeath" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Transfer From</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" / name="transferfrom" placeholder="Address" id="input8" onkeyup="myFunction(this.id)">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Date of Received</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" name="datereceived" value="Date" placeholder="Date" data-date-end-date="0d">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Time Received</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control timepicker" name="timereceived" />
                                                </div>
                                            </div>

                                            <br>
                                        </div>
                                        <div class="panel-footer">
                                            <center>
                                                <button class="btn btn-info fa fa-check-square-o" name="save_client&cadaver" href="DataEntryFinal.php"> Save</button> <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button>
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


        <?php
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $query = $conn->query("select * from `client`, `cadaverentry` where client.client_id = cadaverentry.client_id" ) or die(mysqli_error());
        while($fetch = $query->fetch_array()){

        ?>
        
        <div id="update<?php echo $fetch['client_id']?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center><h4 class="modal-title" id="largeModalHead"><span class="fa fa-edit"> Edit Details</span></h4></center>
                    </div>
                    <div class="modal-body">
                        <form  role="form" action="clientAdd.php" class="form-horizontal" method="post" enctype="multi-part/form-data">   
                        <div class="row">
                                                             
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo $fetch['client_id'] ?>">
                                       <center><h4 class="fa fa-user"> Informant</h4></center>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="date"  placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d" value="<?php echo $fetch['date'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="informant" placeholder="Name" required="" id='input' onkeyup="myFunction(this.id)" value="<?php echo $fetch['informant'] ?>">
                                            </div>                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Address</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="address" placeholder="Address" required="" id='input2' onkeyup="myFunction(this.id)" value="<?php echo $fetch['address'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Contact No:</label>
                                            <div class="col-md-6">
                                                <input type="text" class=" form-control" name="contactno" value="<?php echo $fetch['contactno'] ?>" placeholder="Contact no." required="" maxlength="11" />
                                            </div>
                                        </div><br> 
                                    <center><h4 class="fa fa-user "> Deceased</h4>  </center>                                  
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="date" value="<?php echo $fetch['date'] ?>" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                            </div>
                                        </div>
                                         <label class="col-md-4 control-label">Deceased </label>
                                        <div class="form-group">                                           
                                            <div class="col-md-6">
                                                <input type="text" id="input3" onkeyup="myFunction(this.id)" class="form-control" / name="cadaverdeceased" placeholder="Name" value="<?php echo $fetch['cadaverdeceased'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Insurance (Life Plan)</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="insuranceName" placeholder="Insurance" required="" value="<?php echo $fetch['insurance'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Life Plan Policy Coverage</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="lifeplan" value="<?php echo $fetch['lifeplan'] ?>" required="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Birthdate</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="birthdate" id="BDATE" value="<?php echo $fetch['birthdate'] ?>" placeholder="Date" required="" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Age</label>
                                            <div class="col-md-6">
                                                <input type="text" id="AGE" class="form-control" name="age" value="<?php echo $fetch['age'] ?>" placeholder="Age" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>
                                            <div class="col-md-6">
                                                <input type="text" id="formGender" class="form-control" name="gender" value="<?php echo $fetch['gender'] ?>" placeholder="Age" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Current Address</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="currentaddress" value="<?php echo $fetch['currentaddress'] ?>" placeholder="Address" required="" id="input6" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mothers Name </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="mothersname" placeholder="Name" value="<?php echo $fetch['mothersname'] ?>" required="" id="input4" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Fathers Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" / name="fathersname" placeholder="Name" value="<?php echo $fetch['fathersname'] ?>" required="" id="input5" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>                                    
                                    
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Death Certificate</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="dc" name="deathcertificate" value="<?php echo $fetch['deathcertificate'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Death Certificate No.</label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control"  name="deathcertno" value="<?php echo $fetch['deathcertno'] ?>" placeholder="Control No.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date Issued</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="dateissued" value="<?php echo $fetch['dateissued'] ?>" placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Place of Death</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  name="placeofdeath" value="<?php echo $fetch['placeofdeath'] ?>" placeholder="Address" id="input7" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date of Death</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="dateofdeath" value="<?php echo $fetch['dateofdeath'] ?>" placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Time of Death</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control timepicker" name="timeofdeath" value="<?php echo $fetch['timeofdeath'] ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Transfer From</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="<?php echo $fetch['transferfrom'] ?>" name="transferfrom" placeholder="Address" id="input8" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date of Received</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="datereceived" value="<?php echo $fetch['datereceived'] ?>"placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Time of Received</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control timepicker" name="timereceived"  value="<?php echo $fetch['timereceived'] ?>"/>
                                            </div>
                                        </div>
                                        </div>
                           
                        </div><br>
                             
                        <div class="modal-footer">
                            <center>
                                <button type="submit" class="btn btn-info" name="update_dataentry"><span class="glyphicon glyphicon-check"></span>Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                            
                        </div>  
                            </form>
                    </div>

                </div>
            </div>
        </div>
        <?php 
            //update 
            if(isset($_POST['update_dataentry'])){ 
                $id = $_POST['No'];
                if(!empty($id)){
                    $No = $_POST['No'];
                    $informant = $_POST['informant'];
                    $address = $_POST['address'];
                    $contactno = $_POST['contactno'];
                    $cadaverdeceased = $_POST['cadaverdeceased'];
                    $informant = $_POST['informant'];
                    $insurance = $_POST['insurance'];
                    $lifeplan = $_POST['lifeplan'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $mothersname = $_POST['mothersname'];
                    $fathersname = $_POST['fathersname'];
                    $birthdate = $_POST['birthdate'];
                    $currentaddress = $_POST['currentaddress'];
                    $deathcertificate = $_POST['deathcertificate'];
                    $deathcertno = $_POST['deathcertno'];
                    $dateissued = $_POST['dateissued'];
                    $placeofdeath= $_POST['placeofdeath'];
                    $dateofdeath = $_POST['dateofdeath'];
                    $timeofdeath = $_POST['timeofdeath'];
                    $transferfrom = $_POST['transferfrom'];
                    $datereceived = $_POST['datereceived'];
                    $timereceived = $_POST['timereceived'];
                    $sql = "UPDATE client, cadaverentry SET informant='$ininformant', address='$address', contanctno='$contactno', cadaverdeceased='$cadaverdeceased', informant='$ininformant', insurance=$'insurance', lifeplan='$lifeplan', age='$age', gender='$gender', mothersname='$mothersname', fathersname='$fathersname', birthdate='$birthdate', currentaddress='$currentaddress', deathcertificate='$deathcertificate', dateissued='$dateissued', placeofdeath='$placeofdeath', dateofdeath='$dateofdeath', timeofdeath='$timeofdeath', transferfrom='$transferfrom', datereceived='$datereceived', timereceived='$timereceived'  WHERE client_id='$No' ";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Successfully Updated Details!"); window.location.href="Insurance.php"</script>';
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

        <!-- count age -->



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

        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
    </body>
    <script type="text/javascript">
        $("#BDATE").change(function(){
            var date_of_birth = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today-date_of_birth) / (365.25 * 24 * 60 * 60 * 1000));
            $('#AGE').val(age);

        });
    </script>
</html>
