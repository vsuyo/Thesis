<?php
if(isset($_POST['save_casket'] )){
    
    $informant = $_POST['informant'];
    $cadaverdeceased = $_POST['cadaverdeceased'];
    $date = $_POST['date'];
    $casket = $_POST['casketName'];
    $dimension = $_POST['dimension'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $quantity = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];   
    $id = $_POST['casket_inv_id']; 
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    

    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    mysqli_query ($conn,"INSERT INTO `casket`(`client_id`,`cadaverentry_id`, `date`, `casket_inv_id`,`dimension`, `type`, `color`, `qty`, `price`, `total`, `month`, `year`) VALUES ('$informant','$cadaverdeceased', '$date', '$casket', '$dimension', '$type', '$color', '$quantity', '$price', '$total', '$month', '$year')")or die (mysqli_error());
        echo "<script>alert('Added Successfully!')</script>";
                echo '<script>window.location.href="Viewing.php"</script>';
    
    
    $sql = "INSERT INTO dispense_casket (qty, casketName, date_time, in_out) VALUES ( '$quantity','$casket' , NOW(), 'out')";

        if ($conn->query($sql) === TRUE) {
            $add_inv = "UPDATE casketinventory AS caskin, casket AS cask SET caskin.qty = caskin.qty - '$quantity' WHERE caskin.casket_inv_id = cask.casket_inv_id AND cask.price = '$price' ";
            if ($conn->query($add_inv) === TRUE) {
                echo "<script>alert('Successfully Updated!')</script>";
                echo '<script>window.location.href="Viewing.php"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


}
?>


