<?php

if(isset($_POST['Extendadd'])){
    
    $date = $_POST['date'];
    $informant = $_POST['informant'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $extend = implode (" , ", $_POST['extend']);
    $chapelname = $_POST['chapelname'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $nodays = $_POST['nodays'];
    $rate = $_POST['rate'];
    $totalembalm = $_POST['totalembalm'];
    $extendembalming = $_POST['extendembalming'];
    $rateembalm = $_POST['rateembalm'];  
    $totalembalm = $_POST['totalembalm'];  
    $milage = $_POST['milage'];  
    $ratemilage = $_POST['ratemilage'];
    $totalmilage = $_POST['totalmilage'];  
    $total = $_POST['total'];  
    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `extendservice`( `date`, `client_id`, `cadaverentry_id`, `extend`, `chapelName`, `startDate`, `endDate`, `nodays`, `rate_chapel`, `subtotal`, `extendembalming`, `rate_embalming`, `subtotal_embalming`, `milage`, `rate_milage`, `subtotal_milage`, `total`) VALUES ('$date','$informant','$cadaverdeceased','$extend','$chapelname','$startdate','$enddate','$nodays','$rate','$totalembalm','$extendembalming','$rateembalm','$totalembalm','$milage','$ratemilage','$totalmilage','$total')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Extendservice.php"</script>';

$conn -> close();

}
    


?>