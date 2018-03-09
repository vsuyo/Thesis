<?php
$conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
    
if(ISSET($_POST['add_insurance'])){
    $insuranceName = $_POST['insuranceName'];
    $description = $_POST['description'];
	
    $qry = $conn -> query("SELECT * FROM insurance where insuranceName='$insuranceName'") or die(mysqli_error());
    
    $f1 = $qry -> fetch_array();
    $check = $qry -> num_rows;
    if($check>0){
         echo '<script>alert("Sorry, existing Insurance Name in DB"); window.location.href= "DataEntry.php"</script>';    
        
    }else{ 
    $query = $conn -> query ("INSERT INTO insurance (insuranceName, description)
	VALUES ('$insuranceName','$description' )") or die (mysqli_error());
    $conn->close();
	echo '<script>alert("Succesfully Added!"); window.location.href="DataEntry.php"</script>';
    }
}


    //update 
    if(isset($_POST['update_insurance'])){ 
	$id = $_POST['controlNo'];
        if(!empty($id)){
		$controlNo = $_POST['controlNo'];
		$insuranceName = $_POST['insuranceName'];
		$description = $_POST['description'];
		
		$sql = "UPDATE insurance SET insuranceName='$insuranceName', description='$description' WHERE insurance_id='$controlNo' ";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Succesfully Updated!"); window.location.href="DataEntry.php"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
		}
       
        }
    
                    

?>