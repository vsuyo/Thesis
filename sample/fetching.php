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
                        $query = mysql_query("select * from cadaver", $conn);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"fetching.php?id={$row['controlno']}\">{$row['informant']}</a ></b>";
                            echo "<br />";;
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from cadaver where controlno=$id", $conn);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                    



                            <div class="form"> 
                                <h2>---Details---</h2>
                                <hr/>
                                <br><br>
								<!-- Displaying Data Read From Database -->
                                <span>date</span> <?php echo $row1['date']; ?>
                                <br><br>		 
                                <span>informant</span> <?php echo $row1['informant']; ?>
                                <br><br>				
                                <span>address</span> <?php echo $row1['address']; ?>
                                <br><br>				
                                <span>contact number</span> <?php echo $row1['contactno']; ?>
                                <br><br>				
                                <span>insurance</span> <?php echo $row1['insurance']; ?>
                                <br><br>				
                                <span>life plan</span> <?php echo $row1['lifeplan']; ?>
                                <br><br>				
                                <span>deceased</span> <?php echo $row1['deceased']; ?>
                                <br><br>				
                                <span>width</span> <?php echo $row1['width']; ?>
                                <br><br>				
                                <span>height</span> <?php echo $row1['height']; ?>
                                <br><br>				
                                <span>casket type</span> <?php echo $row1['casktettype']; ?>
                                <br><br>				
                                <span>quantity</span> <?php echo $row1['qty']; ?>
                                <br><br>				
                                <span>total cost</span> <?php echo $row1['totalcost']; ?>
                                <br><br>				
                                <h2>Cadaver</h2>
                                <br><br>
                                <span>Deceased</span> <?php echo $row1['cadaverdeceased']; ?>
                                <br><br>				
                                <span>age</span> <?php echo $row1['age']; ?>
                                <br><br>				
                                <span>gender</span> <?php echo $row1['gender']; ?>
                                <br><br>				
                                <span>Mother's name</span> <?php echo $row1['mothersname']; ?>
                                <br><br>				
                                <span>father's name</span> <?php echo $row1['fathersname']; ?>
                                <br><br>				
                                <span>birthdate</span> <?php echo $row1['birthdate']; ?>
                                <br><br>				
                                <span>Current Address</span> <?php echo $row1['currentaddress']; ?>
                                <br><br>				
                                <span>death certificate</span> <?php echo $row1['deathcertificate']; ?>
                                <br><br>				
                                <span>death certificate number</span> <?php echo $row1['deathcertno']; ?>
                                <br><br>				
                                <span>date issued</span> <?php echo $row1['dateissued']; ?>
                                <br><br>				
                                <span>place of death</span> <?php echo $row1['placeofdeath'];  ?>
                                <br><br>
                                <span>date of death</span> <?php echo $row1['dateofdeath']; ?>
                                <br><br>				
                                <span>time of death</span> <?php echo $row1['timeofdeath']; ?>
                                <br><br>				
                                <span>transfer from</span> <?php echo $row1['transferfrom']; ?>
                                <br><br>				
                                <span>date recieved</span> <?php echo $row1['daterecieved']; ?>
                                <br><br>				
                                <span>time recieved</span> <?php echo $row1['timerecieved']; ?>
                                <br><br>			

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
            
        </div>
    </body>
</html>
<?php
//Closing Connection with Server
mysql_close($conn);
?>