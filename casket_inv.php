<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
    
}

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());

$q1 = $conn->query("SELECT `qty` FROM `casketinventory` WHERE `casketName` = 'Charity' && `year` = '$year'") or die(mysqli_error()); 
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT `qty` FROM `casketinventory` WHERE `casketName` = 'Pioneer' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT `qty` FROM `casketinventory` WHERE `casketName` = 'Junior Half Glass' && `year` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("SELECT `qty` FROM `casketinventory` WHERE `casketName` = 'Omb' && `year` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();
$q5 = $conn->query("SELECT `qty` FROM `casketinventory` WHERE `casketName` = 'Senior Half Glass' && `year` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#casket_inv").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Casket Inventory Report", 
            exportEnabled: true,
            title: { 
                text: "Casket Inventory Report - Year <?php echo $year?>",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Casket Stocks - Year <?php echo $year?>"
                }
            ],
            legend :{  
                horizontalAlign: "center" 
            }, 
            data: [ 
                { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { 
label: "Charity",  y: 
<?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['qty'];
    }	
?>, legendText: "Charity"},

{ label: "Pioneer",  y: 
<?php 
    if($f2 == ""){
        echo 0;
    }else{
echo $f2['qty'];
    }	
?>, legendText: "Pioneer"},
{ label: "Junior Half Glass",  y: 
<?php 
    if($f3 == ""){
        echo 0;
    }else{
echo $f3['qty'];
    }	
?>, legendText: "Junior Half Glass"},

{ label: "Omb",  y: 
<?php 
    if($f4 == ""){
        echo 0;
    }else{
echo $f4['qty'];
    }	
?>, legendText: "Omb"},

{ label: "Senior Half Glass",  y: 
<?php 
    if($f5 == ""){
        echo 0;
    }else{
echo $f5['qty'];
    }	
?>, legendText: "Senior Half Glass"}


                    ] 
                } 
            ] 
        }); 
    } 
</script>