<?php

$conn = new mysqli("localhost","root","", "alisbo")or die (mysqli_error());


if(isset($_POST['submit'] )){


    
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    
    



    $query = $conn -> query ("INSERT INTO `registrationos`(`uname`, `email`, `pass`, `cpass`, `fname`, `lname`, `contact`, `address`, `city`, `state`, `zip`) VALUES ('$uname', '$email', '$pass', '$cpass', '$fname', '$lname', '$contact', '$address', '$city', '$state', '$zip')")or die (mysqli_error());

            echo '<script>window.location.href="index.php"</script>';

$conn -> close();

}


?>


<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:550px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
        
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
	</style>

</head>

<body>
	<form method = "post" action = "index.php">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" placeholder ="User Name"  /><br />
		<label></label> <input type="text" name="email" placeholder= "Email" /><br />
		<label></label> <input type="password" name="pass"  placeholder= "Password"/><br />
		<label></label> <input type="password" name="cpass" placeholder= "Change Pass"/>
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" placeholder= "Fname" required/><br />
		<label></label> <input type="text" name="lname" placeholder= "Lname"/ required><br />
		<label></label> <input type="text" name="contact" placeholder= "Contact Number" required/><br />
		<label></label> <textarea rows="2" cols="20" name="address" placeholder= "Address" required></textarea><br />
		<label></label> <input type="text" name="city" placeholder= "City" required /><br />
		<label></label> <input type="text" name="state" placeholder= "State" required/><br />
		<label></label> <input type="text" name="zip" placeholder= "Zip Code" required/>
	</fieldset>
	<input type="submit" value="Register" name = "submit" /><br><br>
              <div class="panel-body">
                                                <table style="width=100%"  >
                                                    <thead>
                                                        <tr>
                                                            <th>Fname</th>
                                                            <th>Lname</th>
                                                            <th>Contact</th>
                                                            <th>Address</th>
                                                            <th>City</th>
                                                            <th>State</th>
                                                            <th>Zip Code</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

    <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `registrationos` ORDER BY `reg_id` DESC") or die(mysqli_error());  while($fetch = $query->fetch_array()){
    $fname = $fetch['fname'];
    $lname = $fetch['lname'];
    $contact = $fetch['contact'];
    $address = $fetch['address'];
    $city = $fetch['city'];
    $state = $fetch['state'];
    $zip = $fetch['zip'];


                                                            echo "<tr>
                                                <td>$fname</td>
												<td>$lname</td>
												<td>$contact</td>
                                                <td>$address</td>
                                                <td>$city</td>
                                                <td>$state</td>
                                                <td>$zip</td>";

                                                        ?>
                                    


                                                     

                                                        <?php
                                                        }
                                                        $conn->close();
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
        
       
	</form>
    
                                   

	

</body>

</html>