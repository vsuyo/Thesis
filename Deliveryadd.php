<?php

if(isset($_POST['Deliveryadd'] )){


    $suppliername = $_POST['suppliername'];
    $casketname = $_POST['casketname'];
    $caskettype = $_POST['caskettype'];
    $color = $_POST['color'];
    $qty = $_POST['qty'];
    $daterequested = $_POST['daterequested'];
    $datedelivery = $_POST['datedelivery'];



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `delivery`(`suppliername`, `casketname`, `caskettype`,`color`,`qty`, `daterequested`, `datedelivery`) VALUES ('$suppliername','$casketname', '$caskettype', '$color', '$qty', '$daterequested', '$datedelivery')")or die (mysqli_error());

            echo '<script>alert("Delivery Added!"); window.location.href="Delivery.php"</script>';

$conn -> close();

}

?>
   