<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php 
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

$sql = "SELECT * FROM user ORDER BY user_id";
$query = $conn->query($sql);
$countUser = $query->num_rows;



$sql = "SELECT * FROM client ORDER BY client_id";
$query = $conn->query($sql);
$countClient = $query->num_rows;


$sql = "SELECT * FROM cadaverentry ORDER BY cadaverentry_id";
$query = $conn->query($sql);
$countCadaver = $query->num_rows;

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>ALISBO MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/clientChart.php'?>

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
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->

                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="pages-login-website-light.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <!-- END MESSAGES -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <!-- START WIDGETS -->
                <div class="row">


                    <div class="col-md-12">

                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-warning widget-item-icon" onclick="location.href='pages-address-book.html';">
                            <div class="widget-item-left">

                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">
                                    <?php echo $countUser; ?>
                                </div>
                                <div class="widget-title">Registered User</div>
                                <div class="widget-subtitle">On your website</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                    </div>

                    <div class="col-md-6">

                        <!-- START WIDGET SLIDER -->
                        <div class="widget widget-primary widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>
                                    <div class="widget-title">Total Cadaver Served</div>
                                    <div class="widget-subtitle">Cadaver</div>
                                    <div class="widget-int">
                                        <?php echo $countCadaver; ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="widget-title">Total Registered Clients</div>
                                    <div class="widget-subtitle">Clients</div>
                                    <div class="widget-int">
                                        <?php echo $countClient; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET SLIDER -->


                    </div>
                    
                    <div class = "col-md-12"> 
        </div>
        
                        
                        
                    </div>
                    
                    <div class="col-md-12">

                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Casket Stock Alert </h3>
                                </div>
                                <div>
                                    <table class="table table-bordered table-hover table-striped" id = "id3">
                                        <thead>
                                            <tr>
                                                <th>Stock Number</th>
                                                <th>Casket Name</th>
                                                <th>Available Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                    $query = $conn->query("SELECT casketname, qty FROM casketinventory WHERE qty <= '20' AND qty >= '1'") or die(mysqli_error());
                    $list = 1;    
                    while($fetch = $query->fetch_array()){
                    $chemName1 = $fetch['casketname'];
                    $qty1 = $fetch['qty'];
                        ?>

                                                <tr>
                                                    <td>
                                                        <mark><?php echo $list;?></mark>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['casketname'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['qty'];?>
                                                    </td>
                                                </tr>

                                                <?php
                    $list++;
                    }
                    $conn->close();
                    ?>
                                        </tbody>
                                        <script>
                                    document.getElementById('id3').style.color='Red';
                                    </script>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>
                    
                    <div class="col-md-12">

                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Material Stock Alert </h3>
                                </div>
                                <div>
                                    <table class="table table-bordered table-hover table-striped" id = "id2">
                                        <thead>
                                            <tr>
                                                <th>Stock Number</th>
                                                <th>Material Name</th>
                                                <th>Available Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                    $query = $conn->query("SELECT matName1, qty1 FROM materialstocktrans WHERE qty1 <= '20'  AND qty1 >= '1' ") or die(mysqli_error());
                    $list = 1;    
                    while($fetch = $query->fetch_array()){
                    $chemName1 = $fetch['matName1'];
                    $qty1 = $fetch['qty1'];
                        ?>

                                                <tr>
                                                    <td>
                                                        <mark><?php echo $list;?></mark>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['matName1'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['qty1'];?>
                                                    </td>
                                                </tr>

                                                <?php
                    $list++;
                    }
                    $conn->close();
                    ?>
                                        </tbody>
                                        <script>
                                    document.getElementById('id2').style.color='Red';
                                    </script>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Chemical Stock Alert</h3>
                                </div>
                                <div>
                                    <table class="table table-bordered table-hover table-striped" id="id1">
                                        <thead>
                                            <tr>
                                                <th>Stock Number</th>
                                                <th>Chemical Name</th>
                                                <th>Available Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                    $query = $conn->query("SELECT chemName1, qty1 FROM chemicalstocktrans WHERE qty1 <= '20'  AND qty1 >= '1' ") or die(mysqli_error());
                    $list = 1;    
                    while($fetch = $query->fetch_array()){
                    $chemName1 = $fetch['chemName1'];
                    $qty1 = $fetch['qty1'];
                        ?>

                                                <tr>
                                                    <td>
                                                        <mark><?php echo $list;?></mark>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['chemName1'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $fetch['qty1'];?>
                                                    </td>
                                                </tr>

                                                <?php
                    $list++;
                    }
                    $conn->close();
                    ?>
                                        </tbody>
                                    </table>
                                    <script>
                                    document.getElementById('id1').style.color='Red';
                                    </script>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->



        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
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
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->


    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <script type="text/javascript" src="js/demo_dashboard.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

</body>

</html>
