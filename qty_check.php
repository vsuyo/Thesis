<?php

error_reporting(E_ALL );
ini_set('display_errors', 1);

//Start the Session
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 

include_once("../../config.php");
require __DIR__."../../dbutil.php";

if(!empty($_POST['txtQuantity'])){$qty =  $_POST['txtQuantity'];}
if(!empty($_POST['listItemName'])){$item =  $_POST['listItemName'];}

$results = mysqli_query($connection, "SELECT * FROM purchase_items WHERE item_id= ".$_GET['listItemName']"");

$row = mysqli_fetch_assoc($results);
{
    $tb_qty=$row["avail_qty"];
}
// echo out some json to send to the front end
echo json_encode(['available' => $tb_qty < $qty]);
?>