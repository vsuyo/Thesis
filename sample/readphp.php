<!DOCTYPE HTML>
<html>
    <title>Read Data From Database Using PHP - Demo Preview</title>
	<meta name="robots" content="noindex, nofollow" />
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Read Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>
                        <hr/>
                        <?php
						//Establishing Connection with Server
                        $conn = mysql_connect("localhost", "root", "");
						
						//Selecting Database
                        $db = mysql_select_db("alisbo", $conn);
						
    						//MySQL Query to read data
                        $query = mysql_query("select * from employee", $conn);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"readphp.php?id={$row['employee_id']}\">{$row['employee_name']}</a></b>";
                            echo "<br />";
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from employee where employee_id=$id", $conn);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                    



                            <div class="form"> 
                                <h2>---Details---</h2>
                                <hr/>
                                <br><br>
								<!-- Displaying Data Read From Database -->
                                <span>Name:</span> <?php echo $row1['employee_name']; ?>
                                <br><br>		 
                                <span>E-mail:</span> <?php echo $row1['employee_email']; ?>
                                <br><br>				
                                <span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
                                <br><br>				
                                <span>Address:</span> <?php echo $row1['employee_address']; ?>

                            </div>

        <?php
    }
}
?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
	            </div>  
<!-- Right Side Advertisement Div---->				
            <div class="formget"><a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
            </div>
        </div>
    </body>
</html>
<?php
//Closing Connection with Server
mysql_close($conn);
?>