<?php

if(isset($_POST['save_casket'] )){


    
    $informant = $_POST['informant'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $date = $_POST['date'];
    $casketName = $_POST['casketName'];
    $dimension = $_POST['dimension'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];   
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `casket`(`client_id`,`cadaverentry_id`, `date`, `casket_inv_id`,`dimension`, `type`, `color`, `qty`, `price`, `total`, `month`, `year`) VALUES ('$informant','$cadaverdeceased', '$date', '$casketName', '$dimension', '$type', '$color', '$qty', '$price', '$total', '$month', '$year')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Viewing.php"</script>';

$conn -> close();

}
?>
