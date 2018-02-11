<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "test") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `type` = 'Wood' && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `type` = 'Metal' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#casket_ctype").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Casket Types", 
            exportEnabled: true,
            title: { 
                text: "Alisbo Memorial Chapels",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Casket Summary by Type - Year <?php echo $year?>"
                }
            ],
            legend :{ 
                verticalAlign: "center", 
                horizontalAlign: "left" 
            }, 
            data: [ 
                { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { label: "Wood Caskets",  y: 
                         <?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['total'];
    }	
                         ?>, legendText: "Wood Caskets"},

                        { label: "Metal Caskets",  y: 
                         <?php 
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "Metal Caskets"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>