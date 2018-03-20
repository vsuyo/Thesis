<?php

if(isset($_POST['save_client&cadaver'] )){
    $dateadded = $_POST['dateadded'];
    $informant = $_POST['informant'];
    $address_client = $_POST['address_client'];
    $contactno = $_POST['contactno'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
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
    $insuranceName = $_POST['insuranceName'];
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    
    


        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$qry = $conn -> query("SELECT * FROM client where informant='$informant '") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Insurance Name in DB"); window.location.href= "DataEntry.php"</script>';    
        
    }else{
        $query = $conn -> query ("INSERT INTO `client_cadaver`(`informant`, `address_client`, `contactno`, `cadaverdeceased`, `age`, `gender`, `mothersname`, `dateadded` , `fathersname`, `birthdate`, `currentaddress`, `deathcertificate`, `deathcertno`, `dateissued`, `placeofdeath`, `dateofdeath`, `timeofdeath`, `transferfrom`, `datereceived`, `timereceived`, `insurance`) VALUES ('$informant', '$address_client', '$contactno', '$cadaverdeceased', '$age', '$gender', '$mothersname', '$dateadded' , '$fathersname', '$birthdate', '$currentaddress', '$deathcertificate', '$deathcertno', '$dateissued', '$placeofdeath', '$dateofdeath', '$timeofdeath', '$transferfrom', '$datereceived', '$timereceived' , '$insuranceName')")or die (mysqli_error());

    echo '<script>alert("Successfuly Added!"); window.location.href= "DataEntryFinal.php"</script>';   


    }
    

    
    

$conn -> close();

}

?>




<?php 

if(isset($_POST['update_dataentry'] )){

    
    

    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    
                    $informant = $_POST['informant'];
                    $address = $_POST['address'];
                    $contactno = $_POST['contactno'];
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
                    $No = $_POST['id'];
    
                    mysqli_query ($conn, "UPDATE client SET informant='$informant' , address='$address', contactno='$contactno' WHERE client_id= '$No' ") or die(mysqli_error());
    
     mysqli_query ($conn, "UPDATE cadaverentry SET cadaverdeceased='$cadaverdeceased', insurance='$insurance', lifeplan='$lifeplan', age='$age', gender='$gender', mothersname='$mothersname', fathersname='$fathersname', birthdate='$birthdate', currentaddress='$currentaddress', deathcertificate='$deathcertificate', dateissued='$dateissued', placeofdeath='$placeofdeath', dateofdeath='$dateofdeath', timeofdeath='$timeofdeath', transferfrom='$transferfrom', datereceived='$datereceived', timereceived='$timereceived'  WHERE client_id='$No' ") or die(mysqli_error());
                    
                         echo '<script>alert("Successfully Updated Details!"); window.location.href="dataEntry.php"</script>';
                    
    
    
    
    //echo "<script>alert(' Updated Successfully!')</script>";
    //echo '<script>window.location.href="DataEntry.php"</script>';
}

?>
