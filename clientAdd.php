<?php

if(isset($_POST['save'] )){
    $date = $_POST['date'];
    $informant = $_POST['informant'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$qry = $conn -> query("SELECT * FROM client where informant='$informant '") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Insurance Name in DB"); window.location.href= "DataEntry.php"</script>';    
        
    }else{
    $query = $conn -> query ("INSERT INTO `client`(`date`, `informant`, `address`, `contactno`) VALUES ('$date', '$informant', '$address', '$contactno' )")or die (mysqli_error());

    
    echo '<script>alert("Succesfully Added!"); window.location.href="DataEntry.php"</script>';

    }
    

    
    

$conn -> close();

}

?>


<?php
if(isset($_POST['save_cadaver'] )){
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $informant = $_POST['informant'];
    $insurance = $_POST['insurance'];
    $lifeplan = $_POST['lifeplan'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mothersname = $_POST['mothersname'];
    $fathersname = $_POST['fathersname'];
    $birthdate = $_POST['birthdate'];
    $currentaddress = $_POST['currentaddress'];
    $deathcertificate = $_POST['deathcertificate'];
    $deathcertno = $_POST['deathcertno'];
    $dateissued = $_POST['dateissued'];
    $placeofdeath= $_POST['placeofdeath'];
    $dateofdeath = $_POST['dateofdeath'];
    $timeofdeath = $_POST['timeofdeath'];
    $transferfrom = $_POST['transferfrom'];
    $datereceived = $_POST['datereceived'];
    $timereceived = $_POST['timereceived'];
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$qry = $conn -> query("SELECT * FROM cadaverentry where cadaverdeceased='$cadaverdeceased '") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Informant in DB"); window.location.href= "DataEntry.php"</script>';    
        
    }else{
    $query = $conn -> query ("INSERT INTO `cadaverentry`(`cadaverdeceased`,`client_id`,`insurance`, `lifeplan`, `age`, `gender`, `mothersname`, `fathersname`, `birthdate`, `currentaddress`, `deathcertificate`, `deathcertno`, `dateissued`, `placeofdeath`, `dateofdeath`, `timeofdeath`, `transferfrom`, `datereceived`, `timereceived`, `month`, `year` ) VALUES ('$cadaverdeceased', '$informant', '$insurance', '$lifeplan', '$age', '$gender', '$mothersname', '$fathersname', '$birthdate', '$currentaddress', '$deathcertificate', '$deathcertno', '$dateissued', '$placeofdeath', '$dateofdeath', '$timeofdeath', '$transferfrom', '$datereceived', '$timereceived', '$month', '$year' )")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Casket.php"</script>';

}
}


?>

<?php 

if(isset($_POST['update_dataentry'] )){
    $date = $_POST['date'];
    $informant = $_POST['informant'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];

    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("UPDATE `client` SET `date`=['$date'],`client_id`=['client_id'],`informant`=['$informant'],`address`=['$address'],`contactno`=['$contactno'] WHERE   `client_id` = '$client_id'") or die(mysqli_error());
    echo "<script>alert(' Updated Successfully!')</script>";
    echo '<script>window.location.href="DataEntry.php"</script>';
}

?>
