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
    $material = $_POST['materials'];
    $new = "";

    foreach ($materials as $value){

        $new .= $value . ",";
    }

    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("select * FROM `viewing` where `chapelcode` = '$chapelcode' && `status` = 'Currently Used'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $check = $query->num_rows;
    if ($check > 0){
        echo "<script>alert('Room Currently Used')</script>";
        echo '<script>window.location.href="HearseTrans.php"</script>';
    }
    else {
        $conn->query ("INSERT INTO `viewing` VALUES ('$informant', '$date', '', '$preference', '$chapelcode', '$startdate', '$enddate', '$roomtype', '$duration', '$address', '$dateBorrowed', '$datereturn', '$new', 'Currently Used' )")or die (mysqli_error());
        echo "<script>alert('Added Successfully!')</script>";
        echo '<script>window.location.href="HearseTrans.php"</script>';
        
        
       
        
        
    }
}



if(isset($_POST['update_viewing'] )){
    $controlno = $_POST['controlno'];
    $update = $_POST['update'];

    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("UPDATE `viewing` SET `status` = 'Available' where `controlno` = '$controlno'") or die(mysqli_error());
    echo "<script>alert('Successfully updated!')</script>";
    echo '<script>window.location.href="Viewing.php"</script>';
}


?>
