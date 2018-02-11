<?php

if(isset($_POST['submit1'] )){


    
    $casketName = $_POST['casketName'];
    $dimension = $_POST['dimension'];
    $dateCreated = $_POST['dateCreated'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $price = $_POST['price'];


    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $qry = $conn -> query("SELECT * FROM casketinventory where casketName='$casketName '") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Casket Name Name in DB"); window.location.href= "Casket_inventory.php"</script>';    
        
    }else{
    $query = $conn -> query ("INSERT INTO `casketinventory`(`casketName`, `dimension`, `qty`, `dateCreated`, `type`, `color`, `price`) VALUES ('$casketName','$dimension', '0', NOW(),'$type','$color','$price')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Casket_inventory.php"</script>';

$conn -> close();

}
}

?>


<?php

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                        
                    if(isset($_POST['add_Stocks'])){
                        $id = $_POST['casket_inv_id'];
                        $quantity = $_POST['qty'];
                        $casketName = $_POST['casketName'];
                        $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	                    $year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    
                        $sql = "INSERT INTO added_casket (qty, casketName, date_time, in_out, month, year) VALUES ( '$quantity','$casketName', NOW(), 'in','$month', '$year')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE casketinventory SET qty=(qty + '$quantity') WHERE casket_inv_id='$id' "; 
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>alert("Succesfully Added!"); window.location.href="Casket_inventory.php"</script>';
                            } else {    
                                echo "Error updating record: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }else if(isset($_POST['dispense_Stocks'])){
    $id = $_POST['casket_inv_id'];
    $quantity= $_POST['qty'];
    $casketName = $_POST['casketName'];
    $receiver = $_POST['receiver'];
    $month = date("M", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
	$year = date("Y", strtotime("+8 HOURS")); // for reports no need to add input type field in the form
    

    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn->query("select * from `casketinventory` where `casketName` = '$casketName'") or die (mysqli_error());
    $fetch = $query->fetch_array();
    $qty = $fetch['qty'];
    if ($quantity > $qty){
        echo "<script>alert('Need more stocks in order to dispense!')</script>";
         echo '<script>window.location.href="Casket_inventory.php"</script>';
    }
    else {
        $sql = "INSERT INTO added_casket (qty, casketName, receiver ,date_time, in_out, month, year) VALUES ( '$quantity','$casketName', '$receiver' , NOW(), 'out', '$month', '$year')";

        if ($conn->query($sql) === TRUE) {
            $add_inv = "UPDATE casketinventory SET   `qty` = `qty` - '$quantity' WHERE `casketName` = '$casketName' ";
            if ($conn->query($add_inv) === TRUE) {
                echo "<script>alert('Dispense Succesful!')</script>";
                echo '<script>window.location.href="Casket_inventory.php"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>