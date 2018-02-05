
<?php
if(isset($_POST['save_insurance'])){
	$informant = $_POST['informant'];
    $insuranceName = $_POST['insuranceName'];
	$percentage = $_POST['percentage'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
    
	
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO tinsurance (client_id, insurance_id, percentage, amount, date)
	VALUES ('$informant', '$insuranceName', '$percentage', '$amount', '$date')") or die (mysqli_error());
    $conn->close();
	echo '<script>alert("Succesfully Added!"); window.location.href="TInsurance.php"</script>';	
}
?>