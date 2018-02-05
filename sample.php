<?php

if(isset($_POST['save'] )){
    $date = $_POST['date'];
    $informant = $_POST['informant'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $insurance = $_POST['insurance'];
    $lifeplan = $_POST['lifeplan'];
    $dimension = $_POST['dimension'];
    $caskettype = $_POST['caskettype'];
    $qty = $_POST['qty'];
    $totalcost = $_POST['totalcost'];
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    $query = $conn -> query ("INSERT INTO `client`(`date`, `informant`, `address`, `contactno`, `insurance`, `lifeplan`, `dimension`, `caskettype`, `qty`, `totalcost`) VALUES ('$date', '$informant', '$address', '$contactno', '$insurance', '$lifeplan', '$dimension', '$caskettype', '$qty', '$totalcost')")or die (mysqli_error());

    
    echo '<script>window.location.href="DataEntry.php"</script>';

       
    

    
    

$conn -> close();

}

?>


<?php
if(isset($_POST['save_cadaver'] )){
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $informant = $_POST['informant'];
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
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    $query = $conn -> query ("INSERT INTO `cadaverentry`(`cadaverdeceased`,`client_id`, `age`, `gender`, `mothersname`, `fathersname`, `birthdate`, `currentaddress`, `deathcertificate`, `deathcertno`, `dateissued`, `placeofdeath`, `dateofdeath`, `timeofdeath`, `transferfrom`, `datereceived`, `timereceived`) VALUES ('$cadaverdeceased', '$informant','$age', '$gender', '$mothersname', '$fathersname', '$birthdate', '$currentaddress', '$deathcertificate', '$deathcertno', '$dateissued', '$placeofdeath', '$dateofdeath', '$timeofdeath', '$transferfrom', '$datereceived', '$timereceived')")or die (mysqli_error());

            //echo '<script>window.location.href="DataEntry.php"</script>';
    print_r($_POST);

}


?>
