<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
	if(isset($_POST['submit']))
		{
			if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
				{
					echo "please select image.";
				}
				else
				{
					$image = addslashes($_FILES['image']['tmp_name']);
					$name = addslashes($_FILES['image']['name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);
					saveimage($name,$image);
				}	

		  }
		  function saveimage($name, $image)
		  {
				$con = mysql_connect("localhost", "root", "");
				mysql_select_db("alisbo",$con);
				$qry="insert into images (name, image) value ('$name', '$image')";
				$result=mysql_query($qry,$con);
				if($result)
					{
					   echo "<br/> image uploaded";
			    	}
			    	else
			    	{
					   echo "<br/> image not uploaded";
				    }
		  }
?>
    <?php
if(ISSET($_POST['submit'])){
    $date = $_POST['date'];
    $controlNo = $_POST['controlNo'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
	$height = $_POST['height'];
	$skinType = $_POST['skinType'];
	$identification = $_POST['identification'];	

    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO unidentifiedCorpse (date, controlNo, gender, age, height, skinType, identification)
	VALUES ('$date', '$controlNo', '$gender', '$age', '$height', '$skinType', '$identification')") or die (mysqli_error());
    $conn->close();
	echo "<script>alert ('Successfully Added!!')</script>";
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
                        <li><a href="#">Transactions</a></li>
                        <li class="active">Unidentified Corpse</li>
                    </ul>
                    <!-- END BREADCRUMB -->

                    <!-- PAGE CONTENT WRAPPER -->
                    <div class="page-content-wrap">

                        <div class="row">

                            <div class="col-md-12">
                                <!-- START TABS -->
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li><a href="#tab-second" role="tab" data-toggle="tab"><span class="fa fa-user"> Unidentified Corpse</span></a></li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-second">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <span class="fa fa-search"></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Who are you looking for?" />
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-primary">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pull-left">
                                                        </div>
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <form class="form-horizontal">
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `unidentifiedcorpse` ORDER BY `date` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                                                                    <!-- CONTACT ITEM -->
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-body profile">
                                                                            <div class="profile-image">
                                                                                <?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db("alisbo",$con);
$qry="select * from images ";
$result=mysql_query($qry,$con);
				while ($row = mysql_fetch_array($result)) 
				{
					echo '<img src="data:image;base64, '.$row['image']. ' ">';
				}

?>


                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            <div class="contact-info">
                                                                                <tr>
                                                                                    <td>
                                                                                        <p>Date Added<small></br><?php echo $fetch['date']?></small></td>
                                                                                    <td>
                                                                                        <p>Gender<small></br><?php echo $fetch['gender']?></small></td>
                                                                                    <td>
                                                                                        <p>Age Range<small></br><?php echo $fetch['age']?></small></td>
                                                                                    <td>
                                                                                        <p>Height<small></br><?php echo $fetch['height']?></small></td>
                                                                                    <td>
                                                                                        <p>Skin<small></br><?php echo $fetch['skinType']?></small></td>
                                                                                    <td>
                                                                                        <p>Identification<small></br><?php echo $fetch['identification']?></small></td>
                                                                                    <td>
                                                                                        </br>
                                                                                        </br><button class="btn btn-success"><span class="fa fa-pencil-square-o"></span></button></td>
                                                                                </tr>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
}
$conn->close();

?>
                                                                    <!-- END CONTACT ITEM -->
                                                            </div>

                                                        </div>
                                                </div>
                                                </form>
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

            <!-- unidentified modal-->
            <div class="modal" id="modal_large2" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="largeModalHead">Add New</h4>
                        </div>
                        <div class="modal-body">
                            <div class="tab-pane active" id="tab-second">
                                <div class="row">
                                    <form action="UnidentifiedCorpse.php" id="corpse" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                            <h2 class="fa fa-group"> Corpse</h2>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="date" type="text" class="form-control datepicker" value="Date" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Control No.</label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-sort"></span></span>
                                                        <input name="controlNo" type="number" class="form-control" / placeholder="Control No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Gender</label>
                                                <div class="col-md-2">
                                                    <select name="gender" class="validate[required] select" id="formGender" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Age</label>
                                                <div class="col-md-3">
                                                    <select name="age" class="validate[required] select" id="formGender" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="3-10 yrs. old">3-10 yrs. old</option>
                                                          <option value="11-15 yrs.old">11-15 yrs.old</option>
                                                          <option value="16-20 yrs.old">16-20 yrs.old</option>
                                                          <option value="21-25 yrs.old">21-25 yrs.old</option>
                                                          <option value="26-30 yrs.old">26-30 yrs.old</option>
                                                          <option value="31-35 yrs.old">31-35 yrs.old</option>
                                                          <option value="36-40 yrs.old<">36-40 yrs.old</option>
                                                          <option value="41-45 yrs.old">41-45 yrs.old</option>
                                                          <option value="46-50 yrs.old">46-50 yrs.old</option> 
                                                          <option value="51-55 yrs.old">51-55 yrs.old</option> 
                                                         <option value="56-60 yrs.old<">56-60 yrs.old</option>  
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Height</label>
                                                <div class="col-md-5 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="height" type="text" class="form-control" / placeholder="Height in cm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Skin</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="skinType" type="text" class="form-control" / placeholder="Skin type">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Identification </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="identification" type="text" class="form-control" / placeholder="Identification">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="file" name="image" />
                                                </div>
                                            </div>

                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button form="corpse" name="submit" class="btn btn-success pull-right">Save</button>

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
