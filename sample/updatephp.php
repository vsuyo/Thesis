<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Update Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php                        
                        $conn = mysql_connect("localhost", "root", "");
                        $db = mysql_select_db("company", $conn);
						
						if (isset($_GET['submit'])) {
                        $id = $_GET['did'];
                        $name = $_GET['dname'];
                        $email = $_GET['demail'];
                        $mobile = $_GET['dmobile'];
                        $address = $_GET['daddress'];
                        $query = mysql_query("update employee set
  employee_name='$name', employee_email='$email', employee_contact='$mobile', 
   employee_address='$address' where employee_id='$id'", $conn);
                    }
						
						
						
                        $query = mysql_query("select * from employee", $conn);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"updatephp.php?update={$row['employee_id']}\">{$row['employee_name']}</a></b>";
                            echo "<br />";
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['update'])) {
                        $update = $_GET['update'];
                        $query1 = mysql_query("select * from employee where employee_id=$update", $conn);
                        while ($row1 = mysql_fetch_array($query1)) {

                            echo "<form class=\"form\" method=\"get\">";
							echo "<h2>Update Form</h2>";
							echo "<hr/>";
                            echo"<input class=\"input\" type=\"hidden\" name=\"did\" value=\"{$row1['employee_id']}\" />";
                            echo "<br />";
                            echo "<label>" . "Name:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"dname\" value=\"{$row1['employee_name']}\" />";
                            echo "<br />";
                            echo "<label>" . "Email:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"demail\" value=\"{$row1['employee_email']}\" />";
                            echo "<br />";
                            echo "<label>" . "Mobile:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"dmobile\" value=\"{$row1['employee_contact']}\" />";
                            echo "<br />";
                            echo "<label>" . "Address:" . "</label>" . "<br />";
                            echo "<textarea rows=\"15\" cols=\"15\" name=\"daddress\">{$row1['employee_address']}";
                            echo "</textarea>";
                            echo "<br />";
                            echo "<input class=\"submit\" type=\"submit\" name=\"submit\" value=\"update\" />";
                            echo "</form>";
                        }
                    }                    
                   if (isset($_GET['submit'])) {
				   echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data Updated Successfuly......!!</span></div>';
				   }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>        
        <div class="formget"><a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
        </div>
    </div>
</body>
</html>
<?php
mysql_close($conn);
?>