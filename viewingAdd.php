<?php

if(isset($_POST['save_vigil'] )){
    $informant = $_POST['informant'];
    $date = $_POST['date'];
    $preference = $_POST['preference'];
    $chapelcode = $_POST['chapelcode'];
    $roomtype = $_POST['roomtype'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $duration = $_POST['duration'];
    $address = $_POST['address'];
    $dateBorrowed = $_POST['dateBorrowed'];
    $datereturn = $_POST['datereturn'];
    $materials = implode (",",  $_POST['materials']);




    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    $query = $conn -> query ("INSERT INTO `viewing`(`client_id`, `date`, `preference`, `chapelcode`, `roomtype`, `startdate`, `enddate`, `duration`, `address`, `dateBorrowed`, `datereturn`, `materials`) VALUES ('$informant', '$date', '$preference', '$chapelcode', '$roomtype', '$startdate', '$enddate', '$duration', '$address', '$dateBorrowed', '$datereturn', '$materials' )")or die (mysqli_error());


    echo '<script>alert("Succesfully Added!"); window.location.href="HearseTrans.php"</script>';







    $conn -> close();

}

?>