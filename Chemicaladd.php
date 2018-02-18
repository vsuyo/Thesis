<?php


if(isset($_POST['submit1'] )){
    $chemName1 = $_POST['chemName1'];
    $chemDesc1 = $_POST['chemDesc1'];
    $qty1 = $_POST['qty1'];
    $dateCreated = $_POST['dateCreated'];



    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
    // insert to table viewing
    $sql = "INSERT INTO `chemicalstocklist`(`chemName1`, `chemDesc1`, `qty1`, `dateCreated`) VALUES ('$chemName1', '$chemDesc1','0', NOW())";

    // insert into table viewing trans
    if ($conn->query($sql) === TRUE) {
        $add_viewing_query = "INSERT INTO `chemicalstocktrans`(`chemName1`, `chemDesc1`, `qty1`) VALUES ('$chemName1', '$chemDesc1','$qty1')";

           


            if ($conn->query($add_viewing_query) === TRUE) {
                echo '<script>alert("Succesfully Added!");window.location.href="ChemicalsTrans.php"</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        $conn -> close();
    }
    
?>
