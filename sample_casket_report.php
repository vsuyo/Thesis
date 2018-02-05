<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
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
                <li><a href="#">Report</a></li>
                <li class="active">Casket</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab">Casket Report</a></li>
                            </ul>

                            <div class="panel-body tab-content">
                                <div class="col-md-2">
                                                    <input type="text" name="from" class="form-control datepicker" value="Date" placeholder="Date" id="from">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="to" class="form-control datepicker" id="to"  placeholder="To Date" b  />
                                </div>
                                <div class="col-md-8">
                                    <input type="button" name="range" id="range" value="Range" class="btn btn-success" />
                                </div>
                                <div class="clearfix"></div>
                                <br/>
                                <div id="purchase_order">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Cadaver Name</th>
                                            <th>Casket Chosen</th>
                                            <th>Dimension</th>
                                            <th>Total</th>
                                            <th>Date Added</th>

                                        </tr>
                                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("SELECT cadaverentry.cadaverdeceased, client.informant, casket.choosecasket, casket.dimension, casket.type, casket.color, casket.qty, casket.price, casket.date, casket.total FROM casket INNER JOIN cadaverentry ON cadaverentry.cadaverentry_id = casket.cadaverentry_id INNER JOIN client ON client.client_id = casket.client_id ") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $cadaverdeceased = $fetch['cadaverdeceased'];
                $choosecasket = $fetch['choosecasket'];
                $informant = $fetch['informant'];
                $dimension = $fetch['dimension'];
                $total = $fetch['total']; 
                $date = $fetch['date']; 
                


                echo "<tr>
                                                <td>$informant</td>
                                                <td>$cadaverdeceased</td>   
                                                <td>$choosecasket</td>
                                                <td>$dimension</td>
												<td>$total</td>
                                                <td>$date</td>";
}
$conn->close();
?>
                                    </table>
                                </div>
                            </div>
                            <!-- Script -->
                            <script>
                                $(document).ready(function() {
                                    $.datepicker.setDefaults({
                                        dateFormat: 'yy-mm-dd'
                                    });
                                    $(function() {
                                        $("#From").datepicker();
                                        $("#to").datepicker();
                                    });
                                    $('#range').click(function() {
                                        var From = $('#From').val();
                                        var to = $('#to').val();
                                        if (From != '' && to != '') {
                                            $.ajax({
                                                url: "range.php",
                                                method: "POST",
                                                data: {
                                                    From: From,
                                                    to: to
                                                },
                                                success: function(data) {
                                                    $('#casket_report').html(data);
                                                }
                                            });
                                        } else {
                                            alert("Please Select the Date");
                                        }
                                    });
                                });

                            </script>

                        </div>
                    </div>
                    <!-- END TABS -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
