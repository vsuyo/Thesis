<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	
	
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO test (username, password, fname, lname, age)
VALUES ('$username', '$password', '$fname', '$lname', '$age')") or die (mysqli_error());
   // $fetch = $query -> fetch_array();
    //$valid = $query -> num_rows;
	
        echo "<script>alert ('Successfully Added!!')</script>";

      //  echo "<script>alert ('Invalid')</script>";

$conn->close(); 
    
}




?>

<?php

    $id = "";
	$username = "";
	$password = "";
	$fname = "";
	$lname = "";
	$age = "";
	
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    //$query = $conn -> query ("SELECT * FROM  `user` WHERE BINARY `username` = '$username' && BINARY `password` =  '$password' ") or die (mysqli_error());
   // $fetch = $query -> fetch_array();
   // $valid = $query -> num_rows;

	function getPosts(){
	
		$posts = array();
		$posts [0] = $_POST['id'];
		$posts [1] = $_POST['username'];
		$posts [2] = $_POST['password'];
		$posts [3] = $_POST['fname'];
		$posts [4] = $_POST['lname'];
		$posts [5] = $_POST['age'];
		return $posts;
		
	}
	

	if(isset($_POST['find'])){
	
	$data = getPosts();
	
	$search_Query = "SELECT * FROM test WHERE id = $data[0]";
	
	$search_Result = mysqli_query ($conn, $search_Query);
	
	if ($search_Result){
	
		if (mysqli_num_rows($search_Result)){
		
			while ($row = mysqli_fetch_array($search_Result)){
			
				$id = $row['id'];
				$username = $row['username'];
				$password = $row['password'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$age = $row['age'];
				
			}
		
		}else {
		
			echo "<script>alert ('No Data For This Id')</script>";
		
		}
		
		}else{
		
			echo "<script>alert ('Result Error')</script>";
		
		
	}
	
	}

$conn->close(); 
?>

<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>ALISBO MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="assets/images/users/A.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div><center><h2><strong>ALISBO</strong></h2></center></div>
                <div class="login-body">
                    <div class="login-title"><strong>Add Something!! Please gana na BESS!!</strong></div>
                    <form action="testadd.php" class="form-horizontal" method="post">
					<div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name = "id" placeholder="ID" value=<?php echo $id;?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"> 
							<input type="text" name="username" class="form-control"  placeholder="Username" value=<?php echo $username;?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="password" class="form-control"  placeholder="Password" value=<?php echo $password;?>>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fname" class="form-control"  placeholder="First Name" value=<?php echo $fname;?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="lname" class="form-control"  placeholder="Last Name" value=<?php echo $lname;?>>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="age" class="form-control"  placeholder="Age" value=<?php echo $age;?>>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-md-6">
                            <button class="btn btn-info btn-block" name = "submit">Add na Please!!</button>
                        </div>
						<div class="col-md-6">
                            <button class="btn btn-info btn-block" name = "find">Pangitaa na Please!!</button>
                        </div>
						
						<div class="col-md-6">
                            <button class="btn btn-info btn-block" name = "update">I Update na Please!!</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017-2018 ALISBO MIS
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>






