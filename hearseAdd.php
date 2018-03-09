<?php

if(isset($_POST['save'] )){


    

    $DriverName = $_POST['DriverName'];
    $address = $_POST['address'];
    $driverlicense = $_POST['driverlicense'];
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `hearse`(`DriverName`, `address`,`driverlicense`, month, year) VALUES ('$DriverName', '$address', '$driverlicense', '$month','$year')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Hearse.php"</script>';

$conn -> close();

}

?>

    <?php


if(isset($_POST['savetrans'] )){


    
        $informant = $_POST['informant'];
		$DriverName = $_POST['DriverName'];
		$plateno = $_POST['plateno'];
		$hearsedate = $_POST['hearsedate'];
        $purpose = $_POST['purpose'];
        $deliver = $_POST['deliver'];
        $to = $_POST['to'];
        $timeoutfrom = $_POST['timeoutfrom'];
        $timeoutto = $_POST['timeoutto'];
        $time = $_POST['time'];
        $destinationto = $_POST['destinationto'];
        $destinationfrom = $_POST['destinationfrom'];
        $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	    $year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    
    



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `hearsetrans`(`client_id`, `hearse_id`, `car_id`, `purpose`, `deliver`, `to`, `timeoutfrom`, `timeoutto`, `hearsedate`, `time`, `destinationfrom`, `destinationto`, `month`, `year`) VALUES ('$informant','$DriverName', '$plateno', '$purpose', '$deliver', '$to', '$timeoutfrom', '$timeoutto', '$hearsedate', '$time', '$destinationfrom', '$destinationto', '$month', '$year' )")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="SummaryTransaction.php"</script>';

$conn -> close();

}


?>


<?php
if(isset($_POST['savecar'] )){


    
                $unit = $_POST['unit'];
                $plateno = $_POST['plateno'];
                $color = $_POST['color'];
    



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `car`(`unit`, `color`, `plateno`) VALUES ('$unit','$color', '$plateno')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Hearse.php"</script>';
$conn -> close();

}


?>