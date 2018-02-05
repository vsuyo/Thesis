<?php
if(isset($_POST['savecar'] )){


    
                $unit = $_POST['unit'];
                $plateno = $_POST['plateno'];
                $color = $_POST['color'];
    



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `car`(`unit`, `color`, `plateno`) VALUES ('$unit','$color', '$plateno')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Car.php"</script>';
$conn -> close();

}


?>