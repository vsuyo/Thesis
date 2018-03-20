<?php  
session_start();  
$session_username = $_SESSION['user_id'];
if(!$_SESSION['user_id'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Summary Transaction</title>
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
                <li><a href="#">Transaction</a></li>
                <li class="active">Summary Transaction</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab">Summary Transaction</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                   <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-right">
                                                     <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                        <th>Informant</th>
                                                        <th>Deceased</th>
                                                        <th>Preference</th>
                                                        <th>Hearse Date</th>
                                                        <th>Casket Name</th>
                                                        <th>Qty.</th>
                                                        <th>Total</th>
                                                        <th>Print</th>
                                                
                                                
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
  

<?php
  
    
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT client.informant, client.client_id, cadaverentry.cadaverdeceased, viewing.preference, hearsetrans.hearsedate, casket.casket_inv_id, casketinventory.casketName, casket.qty, casket.total FROM client
INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id
INNER JOIN viewing ON client.client_id = viewing.client_id
INNER JOIN hearsetrans ON client.client_id = hearsetrans.client_id
INNER JOIN casket ON client.client_id = casket.client_id
INNER JOIN casketinventory ON casket.casket_inv_id = casketinventory.casket_inv_id
" ) or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        

                                                        ?>
                                                        <tr>
                                                            <td><?php echo $fetch['informant']?></td>
                                                            <td><?php echo $fetch['cadaverdeceased']?></td>
                                                            <td><?php echo $fetch['preference']?></td>
                                                            <td><?php echo $fetch['hearsedate']?></td>
                                                            <td><?php echo $fetch['casketName']?></td>
                                                            <td><?php echo $fetch['qty']?></td>
                                                            <td><?php echo $fetch['total']?></td>
                                                            
                                                            <td><a href="printIndividualTrans.php?id=<?php echo $fetch['client_id'];?>"  ><span class="btn btn-info btn-md fa fa-print" data-toggle="tooltip" data-placement="left" title="Print Details"> Print</span></a></td>
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
                        </div>
                    </div>
                    <!-- END TABS -->
                </div>
            </div>
        </div>
    </div>



<script>
            function oGender() {
                myWindow = window.open("PrintSumTrans.php?id=<?php echo $client_id?>", "", "width=1350, height=650");
            }
        </script>
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
