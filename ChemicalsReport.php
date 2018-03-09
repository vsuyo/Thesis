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
    <title>Alisbo Chemicals Report</title>
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
                <li class="active">Chemicals</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab">Chemicals Report</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                   <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-right">
                                        <form method="post" action="exportchemicals.php">
                                            <input type="submit" name="export" class="btn btn-success"      value="Export To Excel" />
                                            <input type="submit" name="export2" class="btn btn-         success" value="Export To PDF" />
                                            
                                            
                                                 </form><br><br>
                                                     <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Chemical Name</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `chemicalstocktrans` ORDER BY `controlNo` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $qty1 = $fetch['qty1'];
    $chemName1 = $fetch['chemName1'];
    $chemDesc1 = $fetch['chemDesc1'];
    $date = $fetch['date'];
    

                                           echo "<tr>
                                                <td>$chemName1</td>
												<td>$chemDesc1</td>  
                                                <td>$qty1</td>
                                                <td>$date</td>";
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

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
