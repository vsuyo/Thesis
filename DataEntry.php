<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<?php
require('clientadd.php');
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
                    <li class="active">Client & Deceased</li>
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
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-right">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add Client</button>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span>Add Deceased</button>
                                                    </div>
                                                </h3>

                                            </div>

                                            <div class="panel-body">
                                                <table class="table datatable" id="chemStockList">
                                                    <thead>
                                                        <tr>
                                                        <th>Informant</th>
                                                        <th>Date Added(Client)</th>
                                                        <th>Deceased</th>
                                                        <th>Date Added(Deceased)</th>
                                                        <th>Deceased Age</th>
                                                        <th>Deceased Gender</th>
                                                        <th>Deceased Birthdate</th>
                                                        <th>Date Issued</th>
                                                        <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("SELECT client.informant, client.client_id, client.date, cadaverentry.cadaverdeceased, cadaverentry.age, cadaverentry.gender,cadaverentry.date_added, cadaverentry.dateissued, cadaverentry.birthdate FROM client  INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id ORDER BY `date` DESC" ) or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            <td><?php echo $fetch['date']?></td>
                                                            <td><?php echo $fetch['cadaverdeceased']?></td>
                                                            <td><?php echo $fetch['date_added']?></td>
                                                            <td><?php echo $fetch['age']?></td>
                                                            <td><?php echo $fetch['gender']?></td>
                                                            <td><?php echo $fetch['birthdate']?></td>
                                                            <td><?php echo $fetch['dateissued']?></td>
                                                            
                                                            <td><a href="#update<?php echo $fetch['client_id']?>" data-target="#update<?php echo $fetch['client_id']?>" data-toggle="modal" class="btn btn-info btn-md fa fa-edit"><span  data-toggle="tooltip" data-placement="left" title="Edit Details"></span></a></td>
                                                        </tr>
                                                        <?php
            }
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
        <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <?php $dateF = date("y-d-m");?>
                            <h2 class="fa fa-user"> Client</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-5">
                                                <input name="date" type="text" class="form-control datepicker" value="<?php echo $dateF ?>" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" / name="informant" placeholder="Name" required="" id='input' onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Address</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" / name="address" placeholder="Address" required="" id='input2' onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Contact No:</label>
                                            <div class="col-md-5">
                                                <input type="text" class=" form-control" name="contactno" value="" placeholder="Contact no." required="" maxlength="11" />
                                            </div>
                                        </div>
                                        <input type="hidden" class=" form-control" name="month" value="" required="" maxlength="11" />
                                        <input type="hidden" class=" form-control" name="year" value="" required="" maxlength="11" />
                                        <div class="modal-footer">
                                            <center>
                                                <button class="btn btn-info fa fa-check-square-o" name="save" href="DataEntry.php"> Save</button> <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button>
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


        <!-- cadaver modal-->
        <div class="modal fade" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <?php $dateF = date("y-d-m");?>
                            <h2 class="fa fa-user"> Deceased</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-5">
                                                <input name="date_added" type="text" class="form-control datepicker" value="<?php echo $dateF ?>" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant</label>
                                            <div class="col-md-8">
                                                <select class="validate[required] select" name="informant" id="informant" data-live-search="true">							
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
                                            <label class="col-md-4 control-label">Deceased </label>
                                            <div class="col-md-5">
                                                <input type="text" id="input3" onkeyup="myFunction(this.id)" class="form-control" / name="cadaverdeceased" placeholder="Name" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Insurance (Life Plan)</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" / name="insurance" placeholder="Insurance" required="">
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
                                                        <input type="radio" id="Yes"  name = "deathcertificate" value = "Yes" onclick="ShowHideDiv()">Yes
                                                    </label>
                                                    <label for="No" class="radio-inline">
                                                        <input type="radio" id="No"  name = "deathcertificate" value = "No" onclick="ShowHideDiv()">No
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
                                                <label class="col-md-4 control-label">Time of Received</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control timepicker" name="timereceived" />
                                                </div>
                                            </div>

                                            <br>
                                        </div>
                                        <div class="panel-footer">
                                            <center>
                                                <button class="btn btn-info fa fa-check-square-o" name="save_cadaver" href="DataEntry.php"> Save</button> <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button>
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
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center><h4 class="modal-title" id="largeModalHead"><span class="fa fa-edit"> Edit Details</span></h4></center>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form action="DataEntry.php" id="tInsure" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <center>                                     
                                    <div class="col-md-4">
                                        <input type="hidden" name="id" value="<?php echo $fetch['client_id'] ?>">
                                        <h4 class="fa fa-user"> Informant</h4>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="date"  placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d" value="<?php echo $fetch['date'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Informant </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="informant" placeholder="Name" required="" id='input' onkeyup="myFunction(this.id)" value="<?php echo $fetch['informant'] ?>">
                                            </div>                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Address</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="address" placeholder="Address" required="" id='input2' onkeyup="myFunction(this.id)" value="<?php echo $fetch['address'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Contact No:</label>
                                            <div class="col-md-8">
                                                <input type="text" class=" form-control" name="contactno" value="<?php echo $fetch['contactno'] ?>" placeholder="Contact no." required="" maxlength="11" />
                                            </div>
                                        </div>                                        
                                        <br>
                                    </div>
                                    <h4 class="fa fa-user col-md-8"> Deceased</h4>
                                    <div class="col-md-4">                                       
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="date" value="<?php echo $fetch['date'] ?>" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Deceased </label>
                                            <div class="col-md-8">
                                                <input type="text" id="input3" onkeyup="myFunction(this.id)" class="form-control" / name="cadaverdeceased" placeholder="Name" value="<?php echo $fetch['cadaverdeceased'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Insurance (Life Plan)</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="insurance" placeholder="Insurance" required="" value="<?php echo $fetch['insurance'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Life Plan Policy Coverage</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="lifeplan" value="<?php echo $fetch['lifeplan'] ?>" required="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Birthdate</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="birthdate" id="BDATE" value="<?php echo $fetch['birthdate'] ?>" placeholder="Date" required="" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Age</label>
                                            <div class="col-md-8">
                                                <input type="text" id="AGE" class="form-control" name="age" value="<?php echo $fetch['age'] ?>" placeholder="Age" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>
                                            <div class="col-md-8">
                                                <input type="text" id="formGender" class="form-control" name="gender" value="<?php echo $fetch['gender'] ?>" placeholder="Age" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Current Address</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="currentaddress" value="<?php echo $fetch['currentaddress'] ?>" placeholder="Address" required="" id="input6" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mothers Name </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="mothersname" placeholder="Name" value="<?php echo $fetch['mothersname'] ?>" required="" id="input4" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Fathers Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" / name="fathersname" placeholder="Name" value="<?php echo $fetch['fathersname'] ?>" required="" id="input5" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Death Certificate</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="dc" name="deathcertificate" value="<?php echo $fetch['deathcertificate'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Death Certificate No.</label>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control"  name="deathcertno" value="<?php echo $fetch['deathcertno'] ?>" placeholder="Control No.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date Issued</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="dateissued" value="<?php echo $fetch['dateissued'] ?>" placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Place of Death</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control"  name="placeofdeath" value="<?php echo $fetch['placeofdeath'] ?>" placeholder="Address" id="input7" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date of Death</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="dateofdeath" value="<?php echo $fetch['dateofdeath'] ?>" placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Time of Death</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control timepicker" name="timeofdeath" value="<?php echo $fetch['timeofdeath'] ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Transfer From</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="<?php echo $fetch['transferfrom'] ?>" name="transferfrom" placeholder="Address" id="input8" onkeyup="myFunction(this.id)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date of Received</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control datepicker" name="datereceived" value="<?php echo $fetch['datereceived'] ?>"placeholder="Date" data-date-end-date="0d">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Time of Received</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control timepicker" name="timereceived"  value="<?php echo $fetch['timereceived'] ?>"/>
                                            </div>
                                        </div>

                                    </div>
                                </center>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <center>
                            <button type="submit" class="btn btn-info" name="update_dataentry" form="DataEntry"><span class="glyphicon glyphicon-check"></span>Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                    </div>  
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
        }
        ?>



        <!-- casket details -->

        <!--<script type="text/javascript">
function change() {
var values = ['Total Cost', '30000', '70000', '10000', '40000', '25000'];
document.getElementById('totalcost').value = values[document.getElementById('CasketName').selectedIndex];
}

</script>

<script type="text/javascript">
function multiply() {
var values = ['Total Cost', '30000', '70000', '10000', '40000', '25000'];
document.getElementById('totalcost').value = values[document.getElementById('CasketName').selectedIndex];
var qty = Number(document.getElementById('qty').value);
var price = Number(document.getElementById('totalcost').value);
var total = qty * price;
document.getElementById('totalcost').value = total;
}

</script>-->
        <!-- end -->


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
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

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
