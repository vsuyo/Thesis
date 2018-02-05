<?php
if(isset($_POST['add_insurance'])){
    $insuranceName = $_POST['insuranceName'];
    $description = $_POST['description'];
	
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO insurance (insuranceName, description)
	VALUES ('$insuranceName','$description' )") or die (mysqli_error());
    $conn->close();
	echo '<script>alert("Succesfully Added!"); window.location.href="Insurance.php"</script>';
}

?>