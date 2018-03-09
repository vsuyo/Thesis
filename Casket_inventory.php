<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<?php
include('casket_add.php');
include('Chemicaladd.php');
include('materialadd.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Casket Inventory</title>
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
        <?php require 'require/sidebar.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
                <?php require 'require/vertical-navigation.php'?>
             <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Data Entry</a></li>
                <li class="active"><strong><mark>Casket Inventory</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-archive">Casket Stock List</span></a></li>
                                <li class=""><a href="#tab-third" role="tab" data-toggle="tab"><span class="fa fa-cogs"> Chemicals Stock List</span></a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab"><span class="fa fa-archive">Material Stock List</span></a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <div class="pull-right">
                                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>New Stock</button>
                                                </div>
                                            </h3>                                        </div>
    <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <center>
                        <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-archive"> Add Casket</span></h4>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="tab-pane active" id="tab-first">
                        <div class="row">
                            <form id="chem1" action="Casket_inventory.php" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Casket Name</label>
                                        <div class="col-md-6">
                                            <input name="casketName" type="text" class="form-control" / placeholder="Name" id='input' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Dimension</label>
                                        <div class="col-md-6">
                                            <input name="dimension" type="text" class="form-control" / placeholder="Dimension" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Type</label>
                                        <div class="col-md-6">
                                            <input name="type" type="text" class="form-control" / placeholder="Type" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Color</label>
                                        <div class="col-md-6">
                                            <input name="color" type="text" class="form-control" / placeholder="Color" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Price</label>
                                        <div class="col-md-6">
                                            <input name="price" type="text" class="form-control" / placeholder="Price" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>



                                    <input type="hidden" name="dateCreated" />
                                    <input type="hidden" name="qty" />

                                </div>
                            </form>

                        </div>

                    </div><br>
                    <div class="modal-footer">
                        <center>
                            <button class="btn btn-info fa fa-check-square-o" name="submit1" form="chem1"> Save</button>
                            <button type="button" class="btn btn-danger fa fa-times" data-dismiss="modal"> Close</button></center>
                    </div>
                </div>

            </div>
        </div>
    </div>

                                        <div class="panel-body">
                                            <table class="table datatable" id="chemStockList">
                                                <thead>
                                                    <tr>
                                                        <th>Casket Name</th>
                                                        <th>Qty.</th>
                                                        <th>Date Created</th>
                                                        <th>Dimension</th>
                                                        <th>Type</th>
                                                        <th>Color</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
            
$query = $conn->query("SELECT * FROM `casketinventory` ORDER BY `casket_inv_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $fetch['casketName']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['qty']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['dateCreated']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['dimension']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['type']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['color']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['price']?>
                                                            </td>
                                                            <td>
                                                                <div class='btn-group' role='group' aria-label='...'>
                                                                    <a href="#plus<?php echo $fetch['casket_inv_id'];?>" data-toggle="modal"><button type='button' class='btn btn-info btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button></a>
                                                                    
                                                                </div>

                                                            </td>

                                                        </tr>
 <!--Add Casket Stocks -->
    <div id="plus<?php echo $fetch['casket_inv_id'];?>" class="modal fade" role="dialog" data-backdrop="static">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title fa fa-plus"> Add Stocks</h4></center>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="casket_inv_id" value="<?php echo $fetch['casket_inv_id'];?>">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="chemName1">Casket Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="chemName1" name="casketName" value="<?php echo $fetch['casketName']?>" placeholder="Casket Name" required readonly>
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Quantity:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" OnlyNumber="true" id="qty" name="qty"  maxlength="3" min="0" max="999"  value="<?php echo $fetch['qty']?>" placeholder="Quantity" required="" >
                               
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer"><Center>
                        <button type="submit" class="btn btn-info fa fa-plus" name="add_Stocks"> Add Stocks </button>
                        <button type="button" class="btn btn-danger fa fa-times-circle" data-dismiss="modal"> Cancel</button></Center>
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
                                
    <!--Second Tab-->                            
   <div class="tab-pane " id="tab-third">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
    <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium2"><span class="fa fa-plus"></span>New Stock</button>
    </div>
</h3>
</div>
    
             <!-- Chemical Stock List -->
    
            <div class="modal fade" id="modal_medium2" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <h2 class="fa fa-car"> Add Chemical</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-third">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <script type="text/javascript">
    function myFunction() {
  var input = document.getElementById("input1");
  var word = input.value.split(" ");
  for (var i = 0; i < word.length; i++) {
    word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
  }
  input.value = word.join(" ");
}
</script>
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">Chemical Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" / name="chemName1" placeholder="Chemical name" required="" id='input' onkeyup="myFunction(this.id)">
                                        </div>
                                            <input type="hidden" name="qty1" value="">
                                            <input type="hidden" name="dateCreated" value="">
                                    </div>
                                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Description </label>
                                            <div class="col-md-6">
                                                <input type="text" maxlength="7" class="form-control"  name="chemDesc1" placeholder="Description"  required>
                                            </div> 
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <center>
                                                <button type="submit" class="btn btn-info" name="submit2"><span class="fa fa-check-square-o"></span> Save</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<div class="panel-body">
<table class="table datatable" id="chemStockList">
    <thead>
        <tr>
            <th>Chemical Name</th>
            <th>Qty.</th>
            <th>Date Created</th>
        </tr>
    </thead>
    <tbody>
        <?php
    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
            
$query = $conn->query("SELECT * FROM chemicalstocklist as chemstock, chemicalstocktrans as chemtrans WHERE  chemstock.controlNo = chemtrans.controlNo ORDER BY chemstock.controlNo DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $fetch['chemName1']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['qty1']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['dateCreated']?>
                                                            </td>
                                                            
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
            
                                
<!--tab Third-->
 <div class="tab-pane" id="tab-second">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <div class="pull-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium3"><span class="fa fa-plus"></span>New Stock</button>
                    </div>
                </h3>
            </div>
            
            <!-- Material Stock List -->

    <div class="modal fade" id="modal_medium3" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-def">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <center>
                            <h2 class="fa fa-car"> Add Material</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab-second">
                            <div class="row">
                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                    <div class="col-md-12">
                                        <script type="text/javascript">
    function myFunction() {
  var input = document.getElementById("input1");
  var word = input.value.split(" ");
  for (var i = 0; i < word.length; i++) {
    word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
  }
  input.value = word.join(" ");
}
</script>
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">Material Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" / name="matName1" placeholder="Material name" required="" id='input' onkeyup="myFunction(this.id)">
                                        </div>
                                            <input type="hidden" name="qty1" value="">
                                            <input type="hidden" name="dateCreated" value="">
                                    </div>
                                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Description </label>
                                            <div class="col-md-6">
                                                <input type="text" maxlength="7" class="form-control"  name="matDesc1" placeholder="Description"  required>
                                            </div> 
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <center>
                                                <button type="submit" class="btn btn-info" name="submit4"><span class="fa fa-check-square-o"></span> Save</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <div class="panel-body">
                <table class="table datatable" id="chemStockList">
                    <thead>
                        <tr>
                            <th>Material Name</th>
                            <th>Qty.</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());

$query = $conn->query("SELECT * FROM materialstock as chemstock, materialstocktrans as chemtrans WHERE  chemstock.controlNo = chemtrans.controlNo ORDER BY chemstock.controlNo DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                            <tr>
                                <td>
                                    <?php echo $fetch['matName1']?>
                                </td>
                                <td>
                                    <?php echo $fetch['qty1']?>
                                </td>
                                <td>
                                    <?php echo $fetch['dateCreated']?>
                                </td>  
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
