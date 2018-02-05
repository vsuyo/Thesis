<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php

include('casketAdd.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Casket</title>
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

            <?php require 'require/vertical-navigation.php'?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Transaction</a></li>
                <li class="active">
                    <strong><mark>Casket</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="panel-body">
                <div class="col-md-12">
                    <!-- START TABS -->
                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-archive"> Casket</span></a></li>
                        </ul>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab-first">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <div class="pull-right">
                                                <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Assign Casket</button>
                                            </div>
                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <table class="table datatable" id="chemStockList">
                                            <thead>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <th>Cadaver Name</th>
                                                    <th>Casket Chosen</th>
                                                    <th>Dimension</th>
                                                    <th>Qty.</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("SELECT cadaverentry.cadaverdeceased, casketinventory.casketName, casket.qty, client.informant, casket.dimension, casket.type, casket.color, casket.qty, casket.price, casket.total FROM casket INNER JOIN cadaverentry ON cadaverentry.cadaverentry_id = casket.cadaverentry_id INNER JOIN client ON client.client_id = casket.client_id INNER JOIN casketinventory ON casketinventory.casket_inv_id = casket.casket_inv_id") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $cadaverdeceased = $fetch['cadaverdeceased'];
                $informant = $fetch['informant'];
                $dimension = $fetch['dimension'];
                $casketName = $fetch['casketName'];
                $total = $fetch['total'];  
                $qty = $fetch['qty'];  
                


                echo "<tr>
                                                <td>$informant</td>
                                                <td>$cadaverdeceased</td>
                                                <td>$casketName</td>
                                                <td>$dimension</td>
												<td>$qty</td>
                                                <td>$total</td>";

                                                    ?>
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
                <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-def">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <center>
                                    <h3>Casket Details</h3>
                                </center>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                            <div class="col-md-12">
                                                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>


                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Date</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control datepicker" name="date" value="Date" placeholder="Date" required="" data-date-start-date="0d" data-date-end-date="0d">
                                                    </div>
                                                </div>
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
                                                    <label class="col-md-3 control-label">Cadaver</label>
                                                    <div class="col-md-9 col-xs-10">
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
                                                    <label class="col-md-3 control-label">Casket</label>
                                                    <div class="col-md-9 col-xs-10">
                                                        <select class="validate[required] select" name="casketName" id="casketName" data-live-search ="true">							
                                                    <option value="default">Choose Casket</option>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                                    $sql = mysqli_query($conn, "SELECT * From casketinventory");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value='".$row['casket_inv_id']."'>" .$row['casketName'] ."   </option>";
                                                    }
                                                    ?>
                                                </select>
                                                    </div>
                                                </div>
                                                

                                                <div>

                                                    <center><img id="img1" alt="image" width="250" height="150" align="middle" /></center><br><br>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Dimension:</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text" id="dimension" name="dimension" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Type:</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text" id="type" name="type" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Color:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text" id="color" name="color" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">QTY:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="number" min="0" name="qty" id="qty" onkeyup="compute()">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Price:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" name="price" id="price" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Total:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" name="total" id="total" value="" readonly>
                                                        </div>
                                                    </div>
                                                </div><br><br>



                                                <div class="modal-footer">
                                                    <center>
                                                        <button class="btn btn-info fa fa-check-square-o" name="save_casket" href="Casket.php"> Save</button> <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
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


                <!-- END CONTENT FRAME BODY -->

            </div>

            <?php require 'require/footer.php' ?>
        </div>
    </div>



    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
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
    $('#casketName').change(
        function() {
            var p = $('#casketName').val();
            var sam = 'try';
            var dimension = ['16" x 72"', '16" x 72"', '17" x 72"', '18" x 72"', '19" x 72"'];
            var type = ["Wood", "Metal"];
            var color = ["White", "Silver"];
            var price = [25000, 30000, 40000, 50000, 70000];
            var qty = $('#qty').val();


            switch (p) {
                case '1':
                    $("#img1").attr("src", "assets/images/gallery/casket-1.jpg");
                    $('#dimension').val(dimension[0]);
                    $('#type').val(type[0]);
                    $('#color').val(color[0]);
                    $('#price').val(price[0]);
                    break;
                case '2':
                    $("#img1").attr("src", "assets/images/gallery/casket-2.jpg");
                    $('#dimension').val(dimension[1]);
                    $('#type').val(type[0]);
                    $('#color').val(color[1]);
                    $('#price').val(price[1]);
                    break;
                case '3':
                    $("#img1").attr("src", "assets/images/gallery/casket-3.jpg");
                    $('#dimension').val(dimension[2]);
                    $('#type').val(type[0]);
                    $('#color').val(color[0]);
                    $('#price').val(price[2]);
                    break;
                case '4':
                    $("#img1").attr("src", "assets/images/gallery/casket-4.jpg");
                    $('#dimension').val(dimension[3]);
                    $('#type').val(type[1]);
                    $('#color').val(color[1]);
                    $('#price').val(price[3]);
                    break;
                case '5':
                    $("#img1").attr("src", "assets/images/gallery/casket-5.jpg");
                    $('#dimension').val(dimension[4]);
                    $('#type').val(type[1]);
                    $('#color').val(color[0]);
                    $('#price').val(price[4]);
                    break;
                default:
                    $('#dimension').val("what the Heck!");
                    $('#type').val("");
                    $('#color').val("");
                    $('#price').val(0);
                    break;
            }
        });

    function compute() {
        var qty = $('#qty').val();
        var price = $('#price').val();
        var cost = qty * price;
        $('#total').val(cost);
    }
    });

</script>

</html>
