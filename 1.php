<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<?php
include('sample.php');
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
                                                </div>
                                            </h3>

                                        </div>

                                        <div class="panel-body">
                                            <table class="table datatable" id="chemStockList">
                                                <thead>
                                                    <tr>
                                                        <th>Informant</th>
                                                        <th>Date</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
    //Update Items   
    if(isset($_POST['update'])){
    $informant = $_POST['informant'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $controlno = $_POST['controlno'];
    $contactno = $_POST['contactno'];
    $insurance = $_POST['insurance'];
    $lifeplan = $_POST['lifeplan'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $casktettype = $_POST['casktettype'];
    $qty = $_POST['qty'];
    $totalcost = $_POST['totalcost'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
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
    $sql = "UPDATE  `cadaver` SET `date`='$date',`informant`='$informant',`address`='$address',`controlno`='$controlno',`contactno`='$contactno',`insurance`='$insurance',`lifeplan`= '$lifeplan',`width`='$width',`height`=$height,`casktettype`='$casktettype',`qty`='$qty',`totalcost`='$totalcost',`cadaverdeceased`='$cadaverdeceased',`age`='$age',`gender`='$gender',`mothersname`='$mothersname',`fathersname`='$fathersname',`birthdate`='$birthdate',`currentaddress`='$currentaddress',`deathcertificate`='$deathcertificate',`deathcertno`='$deathcertno',`dateissued`='$dateissued',`placeofdeath`='$placeofdeath',`dateofdeath`='$dateofdeath',`timeofdeath`='$timeofdeath',`transferfrom`='$transferfrom',`datereceived`='$datereceived',`timereceived`='$timereceived'
     WHERE controlno='$controlno' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="DataEntry.php"</script>';
          } else {
               echo "Error updating record: " . $conn->error;
       }
 }           
                                
                                            
?>

                                                        <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `client` ORDER BY `client_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $informant = $fetch['informant'];
    $date = $fetch['date'];
    $address = $fetch['address'];
    $client_id = $fetch['client_id'];
    $contactno = $fetch['contactno'];
    $insurance = $fetch['insurance'];
    $lifeplan = $fetch['lifeplan'];
    $dimension = $fetch['dimension'];
    $caskettype = $fetch['caskettype'];
    $qty = $fetch['qty'];
    $totalcost = $fetch['totalcost'];
    
    
    

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
    <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-def">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <center>
                        <h2 class="fa fa-user"> Client</h2>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="tab-pane active" id="tab-first">
                        <div class="row">
                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control datepicker" name="date" value="Date" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Informant </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" / name="informant" placeholder="Name" required="" id='input' onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" / name="address" placeholder="Address" required="" id='input2' onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact No:</label>
                                        <div class="col-md-5">
                                            <input type="text" class=" form-control" name="contactno" value="" required="" maxlength="11" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Insurance (Life Plan)</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" / name="insurance" placeholder="Insurance" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Life Plan Policy</label>
                                        <div class="col-md-3">
                                            <input type="text" class="mask_percent form-control" name="lifeplan" value="" required="" />
                                        </div>
                                    </div>
                                    
                                        <hr><center>
                                            <h3>Casket Details</h3>
                                            </center>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Casket Name</label>
                                            <select class="validate [required] select" name='item' id='CasketName' onchange='change();'>
                                                <option value="">Choose option</option>
                                                <option value="Charity" name="charity">Charity</option>
                                                <option value="APioneer" name="apioneer">A Pioneer</option>
                                                <option value="JuniorHalfGlass" name="juniorhalfglass">Junior Half Glass</option>
                                                <option value="OMB" name="omb">OMB</option>
                                                <option value="SeniorHalfGlass" name="seniorhalfglass">Senior Half Glass</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Dimension</label>
                                            <select class="validate [required] select" name='dimension' id='dimension'>
                                                <option value="">Choose option</option>
                                                <option value="16 x 72" name="charity">16" x 72"</option>
                                                <option value="18 x 72" name="apioneer">18" x 72"</option>
                                                <option value="17 x 72" name="juniorhalfglass">17" x 72"</option>
                                                <option value="19 x 72" name="omb">19" x 72"</option>
                                                <option value="15 x 72" name="seniorhalfglass">15" x 72"</option>
                                            </select>
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Casket Type</label>
                                            <select class="validate [required] select" name='caskettype' id='Casket Type'>
                                                <option value="">Choose option</option>
                                                <option value="" name="wood">Wood</option>
                                                <option value="" name="Metal">Metal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Color</label>
                                            <select class="validate [required] select" name='color' id='Color'>
                                                <option value="">Choose option</option>
                                                <option value="" name="white">White</option>
                                                <option value="" name="silver">Silver</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">QTY</label>
                                            <div class="col-md-3">
                                                    <input class="form-control" type='number' id='qty' name='qty'/ value="Qty" placeholder="QTY" onKeyUp="multiply();" onchange='change();' maxlength="2" min="0" max="99"/>
                                            </div>
                                        </div>
                                                <div class="form-group">                        
                                                    <label class="col-md-3 control-label" >Price</label>     <div class="col-md-3">
                                                            <input class="form-control" type='text' id='price' name='price' value="price" placeholder="Price" onchange='change();'  readonly />
                                                    </div>
                                                </div>

                                        <div class="modal-footer">
                                            <center>
                                            <button class="btn btn-info fa fa-check-square-o" name="save" href="DataEntry.php"> Save</button>                  <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                            </center>
                                        </div><br> 
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
                                                <select class="validate[required] select" name="informant" id="informant">							
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
                                        <label class="col-md-3 control-label">Deceased </label>
                                        <div class="col-md-5">
                                                <input type="text" id="input3" onkeyup="myFunction(this.id)" class="form-control" / name="cadaverdeceased" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Birthdate</label>
                                        <div class="col-md-5">
                                                <input type="text" class="form-control datepicker" name="birthdate" id="tbday" value="Date" placeholder="Date" required="" data-date-end-date="0d">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Age</label>
                                        <div class="col-md-4">
                                                <input type="number" id="tage" class="form-control" / name="age" placeholder="Age" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender</label>
                                        <div class="col-md-3">
                                            <select class="validate[required] select" name="gender" id="formGender" data-style="btn-default">
                                                          <option value="">Choose option</option>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                      </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Current Address</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" / name="currentaddress" placeholder="Address" required="" id="input6" onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Death Certificate</label>
                                        <div class="col-md-8">
                                            <form>
                                                <label class="radio-inline">
                                                       <input type="radio"  name = "deathcertificate" value = "Yes">Yes
                                                     </label>
                                                <label class="radio-inline">
                                                       <input type="radio"  name = "deathcertificate" value = "No">No
                                                     </label>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Death Certificate No.</label>
                                        <div class="col-md-6">
                                                <input type="number" class="form-control" / name="deathcertno" placeholder="Control No." required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date Issued</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="dateissued" value="Date" placeholder="Date" required="" data-date-end-date="0d">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Place of Death</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" / name="placeofdeath" placeholder="Address" required="" id="input7" onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date of Death</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="dateofdeath" value="Date" placeholder="Date" required="" data-date-end-date="0d">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Time of Death</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control timepicker" name="timeofdeath" required="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Transfer From</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" / name="transferfrom" placeholder="Address" required="" id="input8" onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date of Received</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control datepicker" name="datereceived" value="Date" placeholder="Date" required="" data-date-end-date="0d">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Time of Received</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control timepicker" name="timereceived" required="" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Mothers Name </label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" / name="mothersname" placeholder="Name" required="" id="input4" onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fathers Name</label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" / name="fathersname" placeholder="Name" required="" id="input5" onkeyup="myFunction(this.id)">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="panel-footer"><center>
                                            <button class="btn btn-info fa fa-check-square-o" name="save_cadaver" href="DataEntry.php"> Save</button>                  <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
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
                                    <!-- casket details -->
    
                                        <script type="text/javascript">
                                            function change() {
                                                var values = ['Price', '30000', '70000','10000', '40000' , '25000'];
                                                document.getElementById('price').value = values[document.getElementById('CasketName').selectedIndex];
                                            }
                                        </script>
                                    
                                        <script type="text/javascript">
                                        
                                            function multiply() {
                                                var values = ['Price', '30000', '70000','10000', '40000' , '25000'];
                                                document.getElementById('price').value = values[document.getElementById('CasketName').selectedIndex];   
                                                var qty = Number(document.getElementById('qty').value);
                                                var price = Number(document.getElementById('price').value);
                                                var total = qty * price;
                                                document.getElementById('price').value = total;
                                            }
                                        </script>
                                    <!-- end -->
    
                                    <!-- count age -->
                                    <script>
                                        $("#tbday").change(function(){
                                           var tbday = new Date($(this).val());
                                           var today = new Date();
                                           var tage = Math.floor((today-tbday) / (365.25 * 24 * 60 * 60 * 1000));
                                        $('#tage').val(tage);
                                        });
                                    </script>
                                    <script>
                                         $("#bday").change(function(){
                                           var bday = new Date($(this).val());
                                           var today = new Date();
                                           var age = Math.floor((today-bday) / (365.25 * 24 * 60 * 60 * 1000));
                                        $('#age').val(age);
                                        });
                                    </script>
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
