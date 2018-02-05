<?php  
session_start();//session starts here  
  
?>  
  
<?php

if(isset($_SESSION['username'])) {
     header("Location: home.php"); // redirects them to homepage
     exit; // for good measure
}

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("SELECT * FROM  `user` WHERE BINARY `username` = '$username' && BINARY `password` =  '$password' ") or die (mysqli_error());
    $fetch = $query -> fetch_array();
    $valid = $query -> num_rows;

    if($valid >0 ){
        echo '<meta http-equiv = "refresh" content= "1;url=home.php">';
			$_SESSION['username']=$username;

    }

    else {

        echo "<script>alert ('Invalid')</script>";
    }
$conn->close(); 
    
}


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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div><center><img src="img/ALISBOLOGO7.png"></center></div>
                <div class="login-body">
                    <div class="login-title" style="color:teal"><center><strong>Login</strong></center></div>
                    <form action="loading.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name = "username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name = "password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-md-6">
                            <button class="btn btn-info btn-block fa fa-lock" name = "submit"> Login</button>
                        </div>
                    </div>
                    </form>
                </div><center>
                <div class="login-footer">
                    <div class="" style="color:black">
                       <strong>&copy; Notorious Trio | 2017-2018 ALISBO MIS</strong>
                    </div>                   
                </div></center>
            </div>
            
        </div>
        
    </body>
</html>









