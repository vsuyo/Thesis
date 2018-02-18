<?php
if(isset($_POST['save_cadaver'] )){
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mothersname = $_POST['mothersname'];
    $dateadded = $_POST['dateadded'];
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
    $insuranceName = $_POST['insuranceName'];
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

    $query = $conn -> query ("INSERT INTO `cadaverentry`(`cadaverdeceased`, `age`, `gender`, `mothersname`, `dateadded` , `fathersname`, `birthdate`, `currentaddress`, `deathcertificate`, `deathcertno`, `dateissued`, `placeofdeath`, `dateofdeath`, `timeofdeath`, `transferfrom`, `datereceived`, `timereceived`, `insuranceName`) VALUES ('$cadaverdeceased', '$age', '$gender', '$mothersname', '$dateadded' , '$fathersname', '$birthdate', '$currentaddress', '$deathcertificate', '$deathcertno', '$dateissued', '$placeofdeath', '$dateofdeath', '$timeofdeath', '$transferfrom', '$datereceived', '$timereceived' , '$insuranceName')")or die (mysqli_error());

            echo '<script>window.location.href="DataEntry.php"</script>';

}


?>
