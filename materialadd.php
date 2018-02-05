<?php


if(isset($_POST['submit1'] )){
    $matName1 = $_POST['matName1'];
    $matDesc1 = $_POST['matDesc1'];
    $qty1 = $_POST['qty1'];
    $dateCreated = $_POST['dateCreated'];



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    // insert to table viewing
    $sql = "INSERT INTO `materialstock`(`matName1`, `matDesc1`, `qty1`, `dateCreated`) VALUES ('$matName1', '$matDesc1','0', NOW())";
    
        // insert into table viewing trans
        if ($conn->query($sql) === TRUE) {
        $add_viewing_query = "INSERT INTO `materialstocktrans`(`matName1`, `matDesc1`, `qty1`) VALUES ('$matName1', '$matDesc1','0')";


        if ($conn->query($add_viewing_query) === TRUE) {
        echo '<script>alert("Succesfully Added!"); window.location.href="MaterialsTrans.php"</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }   
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }



    
$conn -> close();
    }

?>
