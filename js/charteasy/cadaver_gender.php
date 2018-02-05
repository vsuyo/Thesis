<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `cadaverentry` WHERE `gender` = 'Male' && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `cadaverentry` WHERE `gender` = 'Female' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#cadaverGender").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Bacteriological Status", 
            exportEnabled: true,
            title: { 
                text: "Alisbo Memorial Chapels",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Cadaver Summary by Gender - Year <?php echo $year?>"
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
                        { label: "Male Cadavers",  y: 
                         <?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['total'];
    }	
                         ?>, legendText: "Male Cadavers"},

                        { label: "Female Cadavers",  y: 
                         <?php 
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "Female Cadavers"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>