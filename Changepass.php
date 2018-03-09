<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>



<?php



if(isset($_POST['save'])){
    
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

                            $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                            $sql = "SELECT password FROM user WHERE username='$session_username'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row['password'] != $current_password){
                                        echo "<script>window.alert('Invalid Password');</script>";
                                        $passwordErr = '<div class="alert alert-warning">
                        <strong>Password!</strong> Invalid.
                        </div>';
                                    } elseif($new_password != $confirm_password) {
                                        echo "<script>window.alert('Password Not Match!');</script>";
                                        $passwordErr = '<div class="alert alert-warning">
                        <strong>Password!</strong> Not Match.
                        </div>';
                                    } else{
                                        $sql = "UPDATE user SET password='$new_password' WHERE username='$session_username'";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "<script>window.alert('Password Successfully Updated');</script>";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    }    
                                }
                            } else {
                                $usernameErr = '<div class="alert alert-danger">
                              <strong>Username</strong> Not Found.
                              </div>';
                                $username = "";
                            }
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
            <?php require 'require/sidebar.php'?>
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <?php require 'require/vertical-navigation.php'?>
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Maintenance</a></li>
                    <li class="active"><strong><mark>Change Password</mark></strong></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           <h3 class="panel-title"><span class="fa fa-lock"> <strong>Change Password</strong></span></h3>
                        </div>
                        <div class="panel-body">
                            <center>
                                <form role="form" class="form-horizontal" method="post" action="Changepass.php" enctype="multi-part/form-data">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Current Password</label>
                                        <div class="col-md-4">
                                                <input type="password" class="form-control" / name="current_password" placeholder="Password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">New Password</label>
                                        <div class="col-md-4">
                                                <input type="password" class="form-control" / name="new_password" placeholder="New Password" required="" max="15">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Confirm Password</label>
                                        <div class="col-md-4">
                                                <input type="password" class="form-control" / name="confirm_password" placeholder="Confirm Password" required="" max="15">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="panel-footer">
                                        <button class="btn btn-info fa fa-check-square-o" name="save" href="Changepass.php"> Save</button>
                                        <button class="btn btn-danger fa fa-times-circle-o" name="clear"> Cancel</button>
                                        

                                    </div>
                                </form>
                            </center>
                        </div>

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
