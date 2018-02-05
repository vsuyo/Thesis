<div class="panel panel-default">


    <?php
// Create connection
$conn = new mysqli("localhost", "root", "", "alisbo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hearse";
$result = $conn->query($sql);
$conn->close();



?>
        <div class="panel-body">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>Drivers Name</th>
                        <th>Car plate no</th>
                        <th>Hearse ID</th>

                    </tr>
                </thead>
                <?php  
									while($row = mysqli_fetch_array($result))  {  
                                        
									echo '  
									<tbody>
									<tr>  
									<td>'.$row["DriverName"].'</td>
									<td>'.$row["carplateno"].'</td>
									<td>'.$row["hearseID"].'</td>
                                    
									</body>
									
									
                               </tr>  
                               ';  
                          }  
                          ?>




        </div>


</div>
<html lang="en">

<body>
    <!-- Edit Modal-->
    <div id="edit<?php echo $hearseID; ?>" class="modal fade" role="dialog">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-footer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Information</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="edit_item_id" value="<?php echo $hearseID; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="DriverName">Driver Name:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="DriverName" name="DriverName" value="<?php echo $row[" hearsedate "]; ?>" placeholder="Driver Name" required autofocus>
                            </div>
                            <label class="control-label col-sm-2" for="carplateno">Car Plate No:</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control" id="carplateno" name="carplateno" value="<?php echo $carplateno; ?>" placeholder="Car Plate No" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="updateItem"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <?php

// Create connection
$conn = new mysqli("localhost", "root", "", "alisbo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['updateItem'])){
    $DriverName = $_POST['DriverName'];
    $hearseID = $_POST['hearseID'];
    $carplateno = $_POST['carplateno'];
    
        
    $sql = "UPDATE hearse SET `DriverName`='$DriverName, `carplateno`='$carplateno'  WHERE `hearseID`='$hearseID' ";
                            
    if ($conn->query($sql) === TRUE) {                       
        echo '<script>window.location.href="update-edit.php"</script>';                   
    } else {                     
        echo "Error updating record: " . $conn->error;                   
    }             
}
         
?>
        </table>
</body>

</html>
