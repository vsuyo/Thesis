<?php  
session_start();  
$session_username = $_SESSION['user_id'];
if(!$_SESSION['user_id'])  
{  
header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php
require('extenservice_add.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- META SECTION -->
<title>Alisbo ExtendService</title>
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
<li class="active"><strong><mark>Extend Service</mark></strong></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

<div class="row">

<div class="col-md-12">
<!-- START TABS -->
<div class="panel panel-default tabs">
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#tab-first" role="tab" data-toggle="tab" class="fa fa-book"> Extend Service</a></li>
</ul>
<div class="panel-body tab-content">
<div class="tab-pane active" id="tab-first">
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">
        <div class="pull-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span> Extend Service</button>
        </div>
    </h3>

</div>
<!-- insurance modal-->
<div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-def">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center>
                    <?php $dateF = date("y-d-m");?>
                    <h2 class="modal-title" id="largeModalHead"><span class="fa fa-book"> Extend Service</span></h2>
                </center>
            </div>
            <div class="modal-body">
                <div class="tab-pane active" id="tab-first">
                    <div class="row">
                        <form action="Extendservice.php" role="form" class="form-horizontal" method="post" enctype="multi-part/form-data" id="uinsure">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Date</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control datepicker" name="date" value="<?php echo $dateF; ?>" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Informant</label>
                                    <div class="col-md-5">
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
                                    <label class="col-md-4 control-label">Cadaver</label>
                                    <div class="col-md-5">
                                        <select class="validate[required] select" name="cadaverdeceased" id="cadaverdeceased" data-live-search ="true">							
                                            <option value="pick">Choose Cadaver</option>
                                            <?php
                                            $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                            $sql = mysqli_query($conn, "SELECT * From cadaverentry");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                                echo "<option value=' ". $row['cadaverentry_id'] ." '>" .$row['cadaverdeceased'] ."   </option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Materials</label>&nbsp;&nbsp;
                                    <div class="input-group">
                                        <form name="extend[]" id="materials">
                                    <input type="checkbox" value = "vigil" name="extend[]" checked onClick="toggle('vigil');" >&nbsp; Vigil
                                    &nbsp;&nbsp;&nbsp; 
                                    <input type="checkbox" value = "embalming" name="extend[]" checked onClick="toggle('embalming');"> Embalming &nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="extend[]" value = "milage" checked onClick="toggle('milage');"> Milage                                                     
                                                    </form>
                                                </div>
                                            </div>

                                
                                <!-- using underscore '_' for ease of use -->

                                <div id="_vigil_" >
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Chapel Name</label>
                                        <div class="col-md-5">
                                            <select class="validate[required] select" name="chapelname" id="chapel" data-style="btn-default">
                                                <option value="">Choose option</option>
                                                <option value="Emerald">Emerald</option>
                                                <option value="Garnet">Garnet</option>
                                                <option value="Ruby">Ruby</option>
                                                <option value="Chapel A">Chapel A</option>
                                                <option value="Chapel B">Chapel B</option>
                                                <option value="Chapel C">Chapel C</option>
                                                <option value="Chapel D">Chapel D</option>
                                                <option value="Chapel E">Chapel E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="startdate">Start Date</label>
                                        <div class="col-md-5">
                                            <input type="text" name="startdate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker1" data-date-start-date="0d">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="enddate">End Date</label>
                                        <div class="col-md-5">
                                            <input type="text" name="enddate" class="form-control datepicker" value="Date" placeholder="Date" id="datepicker2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">No. of (Days)</label>
                                        <div class="col-md-5">
                                            <input type="number" name="nodays" class="form-control days" onkeyup="compute()" placeholder="Days" id="days" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Rate</label>
                                        <div class="col-md-5">
                                            <input type="text" name="rate" class="form-control rate"  placeholder=""  id="num2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" style="color:red"><strong>SubTotal</strong></label>
                                        <div class="col-md-3">
                                            <input type="" name="totalembalm" class="form-control total"  placeholder="subtotal" id="product1" readonly  onkeyup="sum();">
                                            <input type="hidden" name="total" class="form-control result"   id="product1" onkeyup="sum();">

                                        </div>
                                    </div>
                                </div><br>
                                <div id="_embalming_">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Extend Embalming (Days)</label>
                                        <div class="col-md-5">
                                            <input type="number" name="extendembalming" id="extendembalming" class="form-control days" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Rate</label>
                                        <div class="col-md-5">
                                            <input type="" name="rateembalm" value="" id="num3" class="form-control rate"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" style="color:red"><strong>Subotal</strong></label>
                                        <div class="col-md-3">
                                            <input type="number" name="totalembalm" class="form-control total"  placeholder="subtotal" id="product2" readonly onkeyup="sum();">
                                            <input type="hidden" name="total" class="form-control result"   id="product2" onkeyup="sum();">
                                        </div>
                                    </div>
                                </div><br>

                                <div id="_milage_"> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Milage</label>
                                        <div class="col-md-5">
                                            <input type="" name="milage" id="milage" class="form-control days" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Rate</label>
                                        <div class="col-md-5">
                                            <input type="" name="ratemilage" id="num4" value="" class="form-control rate" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" style="color:red"><strong>Subotal</strong></label>
                                        <div class="col-md-3">
                                            <input type="number" name="totalmilage" class="form-control total"  placeholder="subtotal" id="product3" readonly  onchange="sum(); ">
                                             <input type="hidden" name="total" class="form-control result"   id="product3hid" onchange="sum();">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" style="color:red"><strong>Total</strong></label>                                                                                
                                    <div class="col-md-3">
                                        <input type="text" name="total" class="form-control result"   id="total" readonly>
                                       

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <center>
                                        <button type="submit" value="Save" class="btn btn-info fa fa-check-square-o " name="Extendadd" > Save</button>
                                        <button type="button" class="btn btn-danger fa fa-times-circle-o" data-dismiss="modal"> Close</button></center>
                                </div>
                            </div><br>


                            <br>


                        </form></div></div>

            </div>
        </div>
    </div>

</div>
</div>
</div>
                            <div class="panel-body">
                            <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Date 
                                        Added</th>
                                    <th>Informant</th>
                                    <th>Deceased</th>
                                    <th>Chapel Name
                                        (Extension)</th>
                                    <th>Amount
                                        (Chapel)</th>
                                    <th>Embalming
                                        (Extension)</th>
                                    <th>Amount
                                        (Embalming)</th>
                                    <th>Extra Milage</th>
                                    <th>Amount
                                        (Milage)</th>
                                    <th>Total (Overall)</th>
                                </tr>
                            </thead>
                            <tbody>
                                
<?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `extendservice` 
            INNER JOIN cadaverentry ON cadaverentry.cadaverentry_id = extendservice.cadaverentry_id
            INNER JOIN client ON client.client_id = extendservice.client_id" ) or die(mysqli_error());
            while($fetch = $query->fetch_array()){ ?>
                                                        <tr>
                                                            <td><?php echo $fetch['date']?></td>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            <td><?php echo $fetch['cadaverdeceased']?></td>
                                                            <td><?php echo $fetch['chapelName']?></td>
                                                            <td><?php echo $fetch['subtotal']?></td>
                                                            <td><?php echo $fetch['extendembalming']?></td>
                                                            <td><?php echo $fetch['subtotal_embalming']?></td>
                                                            <td><?php echo $fetch['milage']?></td>
                                                            <td><?php echo $fetch['subtotal_milage']?></td>
                                                            <td><?php echo $fetch['total']?></td>
                                                            
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
<script language="javascript">
function toggle(matchingAttribute) {
// optain all div elements in the page
var divArray = document.getElementsByTagName("div");
for(i=divArray.length-1; i>=0; i--) {  // for each div
if(divArray[i].id.match("_"+matchingAttribute+"_")) {
if(divArray[i].style.display != 'none') {
divArray[i].style.display = 'none';
}
else {
divArray[i].style.display = '';
}
}
}
}  // end function toggle()
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
<!--Date-->
<script type="text/javascript">
$(function() {

$('#datepicker1').datepicker({
format: "dd-M-yyyy",
todayHighlight: 'TRUE',
autoclose: true,

}).on('changeDate', function(date) {
$('#datepicker2').datepicker('setStartDate', $("#datepicker1").val());
});
$('#datepicker2').datepicker({
format: "dd-M-yyyy",
todayHighlight: 'TRUE',
autoclose: true,

}).on('changeDate', function(date) {
var start = $("#datepicker1").val();
var startD = new Date(start);
var end = $("#datepicker2").val();
var endD = new Date(end);
var diff = parseInt((endD.getTime() - startD.getTime()) / (24 * 3600 * 1000));
$("#days").val(diff);
});

});

</script>
<!--prod1-->
<script>
$(document).ready(function() {
//this calculates values automatically 
product1();
$("#days, #num2").on("keydown keyup", function() {
product1();
});
});

function product1() {
var num1 = document.getElementById('days').value;
var num2 = document.getElementById('num2').value;
var result = parseInt(num1) * parseInt(num2);
if (!isNaN(result)) {
document.getElementById('product1').value = result;
    
}
}
</script>
<!--prod2-->
<script>
$(document).ready(function() {
//this calculates values automatically 
product2();
$("#extendembalming, #num3").on("keydown keyup", function() {
product2();
});
});

function product2() {
var num3 = document.getElementById('extendembalming').value;
var num4 = document.getElementById('num3').value;
var result = parseInt(num3) * parseInt(num4);
if (!isNaN(result)) {
document.getElementById('product2').value = result;
}
}
</script>
<!--prod3-->
<script>
$(document).ready(function() {
//this calculates values automatically 
product3();
$("#milage, #num4").on("keydown keyup", function() {
product3();
});
});

function product3() {
var num5 = document.getElementById('milage').value;
var num6 = document.getElementById('num4').value;
var result = parseInt(num5) * parseInt(num6);
if (!isNaN(result)) {
document.getElementById('product3').value = result;
document.getElementById('product3hid').value = result;
   
}
}
</script>
<!--total-->
<script>
    $(document).ready(function() {
//this calculates values automatically 
sum();
$("#days, #num2,#extendembalming, #num3, #milage, #num4",).on("keydown keyup", function() {
sum();
});
});
    function sum()
{
   
  var w = document.getElementById('product1').value || 0;
  var x = document.getElementById('product2').value || 0;
  var y = document.getElementById('product3hid').value || 0;
  var wStr = w.toString();
  var xStr = x.toString();
  var yStr = y.toString();
  var z=parseInt(wStr)+parseInt(xStr)+parseInt(yStr);
    
  document.getElementById('total').value=z;
};   
</script>
</html>