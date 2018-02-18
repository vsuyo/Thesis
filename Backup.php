<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php

require('import_func.php');

        $dbbackup = new db_backup;
		$dbbackup->connect("localhost","root","","alisbo");
		$dbbackup->backup();
		if(isset($_POST["submit"])){

			//Uploading The temporary database file start here
        		if ($_FILES['temp_file']['name']!=null && $_FILES['temp_file']['name']!="") {
        			$src=$_FILES['temp_file']['tmp_name'];
        			$destination='Alisbo_Backup_2018_02_06_16_38_02.'.pathinfo($_FILES['temp_file']['name'],PATHINFO_EXTENSION);
        			if (copy($src,$destination)) {
        				//Importing Uploaded File Start here
							if($dbbackup->db_import($destination)){
								echo '<script>alert("Succesfully Imported!"); window.location.href="Backup.php"</script>';
								//Deleting Temporary Database after importing
								if(is_file($destination)){
									unlink($destination);
								}
							}
        				//Importing Uploaded File End here
        			}
        		}
			//Uploading The temporary database file end here
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
                    <li class="active"><strong><mark>Backup</mark></strong></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->

              
<div class="page-content-wrap">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-3">
                    <form role="form" class="form-horizontal" method="post" action="exportBackup.php" enctype="multi-part/form-data">
                        
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                        
                        <button type="submit" name="submit" class="btn btn-lg btn btn-primary fa fa-cloud-download  " href = "Backup.php" data-box="#mb-signout"> Export Database</button>
                          
                       
                    </form>
                    </div>
                    <div class="col-md-3">
                    <form action="" method="POST" enctype="multipart/form-data">        
                                    <button class="btn btn-lg btn btn-danger fa fa-cloud-upload" type="submit" name="submit" value="Import" data-box="#mb-signout"> Import Database</button><br><br>
                                    <input  type="file" name="temp_file">
                    </form>
                    </div>
                    
                    
                <table class="table datatable" id="backuptable">
                    <thead>
                        <tr>
                            <th>Backup Date</th>
                            <th>Filename</th>
                        </tr>
                    </thead>
                   
                        <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
$query = $conn->query("SELECT * FROM `backup` ORDER BY `id` ASC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
$id = $fetch['id'];
$date = $fetch['date'];
$backupName = $fetch['backupName'];

    echo" 
    
                                                <tr>
                                                    <p><th>$date</th><p>
                                                    <p><th>Alisbo_Backup_$date.sql</th></p>
                                                </tr>
    ";
?>

                    <?php }
$conn->close();
?>
                </table>
                  </div>
            </div>
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
        <script type='text/javascript' src='js/plugins/noty/jquery.noty.js'></script>
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
        <script type='text/javascript' src='js/plugins/noty/themes/default.js'></script>


        <script type='text/javascript' src='js/plugins/noty/themes/default.js'></script>

        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
    </body>

</html>
