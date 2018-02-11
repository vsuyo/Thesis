<?php  
session_start();  
$session_username = $_SESSION['username'];
if(!$_SESSION['username'])  
{  
    header("Location: login2.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<?php
if(ISSET($_POST['submit'])){

    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    //$status = $_POST['status'];
	$height = $_POST['height'];
	$skinType = $_POST['skinType'];
	$identification = $_POST['identification'];
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$image = addslashes($_FILES['fileToUpload']['tmp_name']);
	$name = addslashes($_FILES['fileToUpload']['name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);
	
    $conn = new mysqli("localhost", "root", "", "alisbomemchap") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO unidentifiedCorpse (date, gender, age, height, skinType, identification, month, year, name, image)
	VALUES ('$date', '$gender', '$age', '$height', '$skinType', '$identification','$month', '$year','$name', '$image' )") or die (mysqli_error());
    $conn->close();
	echo "<script>alert ('Successfully Added!!')</script>";
    
    
	
}

?>

<?php
if(isset($_FILES['fileToUpload'])){
   // echo $_FILES['im']['tmp_name'];

$target_dir = 'corpseimg/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		
    } else {
		echo "<script>alert ('File is not an image.')</script>";
        $uploadOk = 0;
    }
}

// Check if file already exists
//if (file_exists($target_file)) {
//	echo "<script>alert ('Sorry, file already exists.')</script>";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>"; 
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
		echo "<script>alert ('Sorry, there was an error uploading your file.')</script>";
    }
}
}

?>
<!-- END CONTACT ITEM -->
 <?php
 
//if(isset($_FILES['image'])){
   // echo $_FILES['image']['tmp_name'];
//}
    if(isset($_POST['update_corpse'])){
	
	$id = $_POST['CID'];
        if(!empty($id)){
		$CID = $_POST['CID'];
		$uDate = $_POST['uDate'];
		//$uControlNo = $_POST['uControlNo'];
		$uGender = $_POST['uGender'];
		$uAge = $_POST['uAge'];
		$uHeight = $_POST['uHeight'];
		$uSkinType = $_POST['uSkinType'];
		$uIdentification = $_POST['uIdentification'];
	//	if(isset($_FILES['fileToUploadAgain'] ['name']) && ($_FILES ['fileToUploadAgain'] ['name']! = "")){ , name='$name', image='$image'
		
	//	}
		
		//$image = $_FILES['fileToUploadAgain']['tmp_name'];
		//$name = $_FILES['fileToUploadAgain']['name'];
		//$image = file_get_contents($image);
		//$image = base64_encode($image);
        
        $conn = new mysqli("localhost", "root", "", "alisbomemchap") or die (mysqli_error());
        $query = $conn -> query ("UPDATE unidentifiedCorpse SET (date, gender, age, height, skinType, identification)
	    VALUES ('$uDate', '$uGender', '$uAge', '$uHeight', '$uSkinType', '$uIdentification' WHERE cid='$CID')") or die (mysqli_error());
        echo "<script>alert ('Successfully Updated!!')</script>";
        $conn->close();
        }
    }
?>
	

<?php
//<!--
//if(isset($_FILES[''])){
   // echo $_FILES['im']['tmp_name'];

//$target_dir = 'corpseimg/';
//$target_file = $target_dir . basename($_FILES["fileToUploadAgain"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST['u'])) {
//    $check = getimagesize($_FILES["fileToUploadAgain"]["tmp_name"]);
//    if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
		
//    } else {
//		echo "<script>alert ('File is not an image.')</script>";
//        $uploadOk = 0;
//    }
//}

// Check if file already exists
//if (file_exists($target_file)) {
//	echo "<script>alert ('Sorry, file already exists.')</script>";
//    $uploadOk = 0;
//}
// Check file size
//if ($_FILES["fileToUploadAgain"]["size"] > 500000) {
//	echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
//	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>"; 
//    $uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES["fileToUploadAgain"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["fileToUploadAgain"]["name"]). " has been uploaded.";
//    } else {
//		echo "<script>alert ('Sorry, there was an error uploading your file.')</script>";
//    }
//}
//}
//-->
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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
		<link rel="stylesheet" type="text/css" href="wrapper.css">
        <!-- EOF CSS INCLUDE -->                
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <?php require 'require/sidebar.php'?>
               
            </div>
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

                                <div class="pull-left">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add New</button>
                                </div></h3>                           
                                </div>

                        
                                        <div><!-- unidentified modal-->
        <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true">
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
<?php  
$dateF = date("y-m-d");
?>
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-5">
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="date" type="text" class="form-control datepicker" value="<?php echo $dateF ?>" placeholder="Date" required>
                                                         
                                                    </div>
                                                </div>
                                            </div> 
                                         <div class="form-group">
                                                 <label class="col-md-3 control-label">Gender</label>
                                                     <div class="col-md-2">
                                                      <select name="gender" class="validate[required] select" id="formGender" data-style="btn-success" required>
                                                          <option value="">Choose option</option>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>
                                            <div class="form-group">
                                                 <label class="col-md-3 control-label">Age</label>
                                                     <div class="col-md-3">
                                                      <select name="age" class="validate[required] select" id="formGender" data-style="btn-success" required>
                                                          <option value="">Choose option</option>
                                                          <option value="3-10 yrs. old">3-10 yrs. old</option>
                                                          <option value="11-15 yrs.old">11-15 yrs.old</option>
                                                          <option value="16-20 yrs.old">16-20 yrs.old</option>
                                                          <option value="21-25 yrs.old">21-25 yrs.old</option>
                                                          <option value="26-30 yrs.old">26-30 yrs.old</option>
                                                          <option value="31-35 yrs.old">31-35 yrs.old</option>
                                                          <option value="36-40 yrs.old">36-40 yrs.old</option>
                                                          <option value="41-45 yrs.old">41-45 yrs.old</option>
                                                          <option value="46-50 yrs.old">46-50 yrs.old</option> 
                                                          <option value="51-55 yrs.old">51-55 yrs.old</option> 
                                                         <option value="56-60 yrs.old">56-60 yrs.old</option>  
                                                      </select>                           
                                                     </div>                        
                                            </div>                                                      
                                           <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Height</label>
                                                <div class="col-md-5 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="height" type="number"  class="form-control"/ placeholder="Height in cm" required>
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Skin</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="skinType" type="text" class="form-control"/ placeholder="Skin type" required>
                                                    </div>            
                                                </div>
                                            </div> 
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Identification </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="identification" type="text" class="form-control"/ placeholder="Identification" required>
                                                    </div>            
                                                </div>		
                                            </div>
											<div class="col-md-5">
                                            <div class="input-group"> 										
											<input type="file" name="fileToUpload" id="fileToUpload"/> 
                                           </div>            
                                                </div>
                                        </div>
                                        <div class="col-md-5">
                                            <center><h6>Current Corpse Image<h6><br>
                                           <img src="img/User.jpg" height="250" width="250"></a>        
								            </center>
										</div>
                                        </form>
                                        </div>                                   
                                     </div>
                                       
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												
                        <input type="submit" form="corpse" name="submit" class="btn btn-success pull-right"></input>						
                    </div>
                </div>
            </div>
        </div>	</div>
                                        
				        <tbody>
                                <div class="panel-body">
                        <form class="form-horizontal" >
                         <div class="row" class="wrapper">
                             
                             <table class="table datatable" id="corpse">
                            <thead>
                                    <tr>
                                        <th>Image Preview</th>
                                        <th>Date Added</th>
                                        <th>Gender</th>
                                        <th>Age Range</th>
                                        <th>Height</th>
                                        <th>Skin</th>
                                        <th>Identification</th>
                                        <th>Action</th>
                                                            
                                                        </tr> 
                                                    </thead>
<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `unidentifiedcorpse` ORDER BY `cid` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
$cid = $fetch['cid'];
$date = $fetch['date'];
//$controlNo = $fetch['controlNo'];
$gender = $fetch['gender'];
$age = $fetch['age'];
//$status = $fetch['status'];
$height = $fetch['height'];
$skinType = $fetch['skinType'];
$identification = $fetch['identification'];
//$name = $fetch['name'];
//$image = $fetch['image'];
//$dateF = date("m-d-Y");
        

?>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default" hidden="">
                                <div class="panel-body profile" hidden="">
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                            <tr>
                                                <td><?php echo '<img src="data:image;base64, '.$fetch['image']. '" height="50" width="100">';?>
                                                </td>												
                                                <td><?php echo $date;?></small></td>
												<td><?php echo $gender;?></small></td>
												<td><?php echo $age?></small></td>
												<td><?php echo $height?></small></td>
												<td><?php echo $skinType;?></small></td>
												<td><?php echo $identification;?></small></td>
												<td><a href="#update_corpse<?php echo $cid;?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'>
												<span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
												</td>	
                                                		<div id="update_corpse<?php echo $cid;?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Edit Details</h4>
                    </div>
                    <div class="modal-body">
					<input type="hidden" name="CID" value="<?php echo $cid; ?>">
                       <div class="tab-pane active" id="tab-second">
                                        <div class="row">
                                            <form action="UnidentifiedCorpse.php" id="uCorpse" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                  <div class="col-md-6">
                                            <h2 class="fa fa-group"> Corpse</h2>
                                             <div class="form-group">       										
                                                <label class="col-md-3 control-label" for="uDate">Date</label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="uDate" id="date" type="text" class="form-control datepicker"  placeholder="Date" required value="<?php echo $date;?>">                                            
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="form-group">
                                                 <label class="col-md-3 control-label" for="gender">Gender</label>
                                                     <div class="col-md-2">
                                                      <select name="uGender" class="validate[required] select" id="gender" data-style="btn-success" required >
                                                          <?php echo"<option value='" . $gender."'>". $gender."</option>"?>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>
                                            <div class="form-group">
                                                 <label class="col-md-3 control-label" for="age">Age</label>
                                                     <div class="col-md-3">
                                                      <select name="uAge" class="validate[required] select" id="age" data-style="btn-success" required>
														  <?php echo"<option value='" . $age."'>". $age."</option>";?>
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
                                                <label class="col-md-3 control-label" for="height">Length</label>
                                                <div class="col-md-5 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input id="height" name="uHeight" type="text" class="form-control"/ placeholder="Height in cm" required value="<?php echo $height;?>">
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label" for="skinType">Skin</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input name="uSkinType" type="text" class="form-control"/ placeholder="Skin type" required value="<?php echo $skinType;?>">
                                                    </div>            
                                                </div>
                                            </div> 
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label" for="identification">Identification </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input id="identification" name="uIdentification" type="text" class="form-control"/ placeholder="Identification" required value="<?php echo $identification;?>">
                                                    </div>  													
                                                </div>
												<div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
														<?php //<input type="file" name="fileToUploadAgain" id="fileToUploadAgain" />?>	
													</div>  													
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-5">
                                        <h6><center>Current Corpse Image<h6><br>
										<?php echo '<img src="data:image;base64, '.$fetch['image']. '" height="250" width="250">';?></center>
										</div>
                                        </form>
                                        </div>                                   
                                     </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>												
						<button type="submit" class="btn btn-success pull-right" name="update_corpse"><span class="glyphicon glyphicon-edit" form="uCorpse"></span> Edit</button>						
                    </div>
                </div>
            </div>
                </form>
        </div>
                                    </div>
                                </div>                                          
                            </div>


                            <!-- END CONTACT ITEM -->
							</form>
                        </div>
						
<?php
} $conn->close();
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