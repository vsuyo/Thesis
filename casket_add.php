<?php

if(isset($_POST['submit1'] )){


    
    $casketName = $_POST['casketName'];
    $dimension = $_POST['dimension'];
    $dateCreated = $_POST['dateCreated'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $price = $_POST['price'];


    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    $query = $conn -> query ("INSERT INTO `casketinventory`(`casketName`, `dimension`, `qty`, `dateCreated`, `type`, `color`, `price`) VALUES ('$casketName','$dimension', '0', NOW(),'$type','$color','$price')")or die (mysqli_error());

            echo '<script>alert("Succesfully Added!"); window.location.href="Casket_inventory.php"</script>';

$conn -> close();

}

?>


<?php

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                        
                    if(isset($_POST['add_Stocks'])){
                        $id = $_POST['casket_inv_id'];
                        $quantity = $_POST['qty'];
                        $casketName = $_POST['casketName'];
                        $sql = "INSERT INTO added_casket (qty, casketName, date_time, in_out) VALUES ( '$quantity','$casketName', NOW(), 'in')";
                        
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
                    }


?>