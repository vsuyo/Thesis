<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
    
}

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `hearsetrans` WHERE `hearse_id` = 'DriverName' && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `hearsetrans` WHERE `hearse_id` = 'Dexter Manalo' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `hearsetrans` WHERE `hearse_id` = 'Emmanuel Torpe' && `year` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#hearseChartPie").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Hearse Report", 
            exportEnabled: true,
            title: { 
                text: "Hearse Driver Report - Year <?php echo $year?>",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Hearse Driver Performance - Year <?php echo $year?>"
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
label: "Dean Lustre",  y: 
<?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['total'];
    }	
?>, legendText: "Dean Lustre"},

{ label: "Dexter Manalo",  y: 
<?php 
    if($f2 == ""){
        echo 0;
    }else{
echo $f2['total'];
    }	
?>, legendText: "Dexter Manalo"},
{ label: "Emmanuel Torpe",  y: 
<?php 
    if($f3 == ""){
        echo 0;
    }else{
echo $f3['total'];
    }	
?>, legendText: "Emmanuel Torpe"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>