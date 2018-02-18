<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '36-40 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '41-45 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '46-50 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '51-55 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();
$q11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '56-60 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '61-65 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();
$q13 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '66-70 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f13 = $q13->fetch_array();
$q14 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '71-75 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f14 = $q14->fetch_array();
$q15 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '76-80 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f15 = $q15->fetch_array();
$q16 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '81-85 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f16 = $q16->fetch_array();
$q17 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '86-90 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f17 = $q17->fetch_array();
$q18 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '91-95 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f18 = $q18->fetch_array();
$q19 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '96-100 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f19 = $q19->fetch_array();
$q20 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '101-105 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f20 = $q20->fetch_array();
$q21 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '106-110 yrs.old' && `year` = '$year'") or die(mysqli_error());
$f21 = $q21->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#corpse_ageRange").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Unidentifed_Corpse ", 
            exportEnabled: true,
            title: { 
                text: "Alisbo Memorial Chapels",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Unidentified Corpse Summary by Age Range - Year <?php echo $year?>"
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
                        { label: "3-10 Years Old",  y: 
                         <?php
                        if($f1 == ""){
                            echo 0;
                        }else{
                            echo $f1['total'];
                        }	
                         ?>, legendText: "3-10 Years Old"},

                        { label: "11-15 yrs. old",  y: 
                         <?php 
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "11-15 Years Old"},
                        
                         { label: "16-20 yrs. old",  y: 
                         <?php 
                         if($f3 == ""){
                             echo 0;
                         }else{
                             echo $f3['total'];
                         }	
                         ?>, legendText: "16-20 Years Old"},
                        
                         { label: "21-25 yrs. old",  y: 
                         <?php 
                         if($f4 == ""){
                             echo 0;
                         }else{
                             echo $f4['total'];
                         }	
                         ?>, legendText: "21-25 Years Old"},
                        
                         { label: "26-30 yrs. old",  y: 
                         <?php 
                         if($f5 == ""){
                             echo 0;
                         }else{
                             echo $f5['total'];
                         }	
                         ?>, legendText: "26-30 Years Old"},
                        
                        { label: "31-35 yrs. old",  y: 
                         <?php 
                         if($f6 == ""){
                             echo 0;
                         }else{
                             echo $f6['total'];
                         }	
                         ?>, legendText: "31-35 Years Old"},
                        
                        { label: "36-40 yrs. old",  y: 
                         <?php 
                         if($f7 == ""){
                             echo 0;
                         }else{
                             echo $f7['total'];
                         }	
                         ?>, legendText: "36-40 Years Old"},
                        
                        { label: "41-45 yrs. old",  y: 
                         <?php 
                         if($f8 == ""){
                             echo 0;
                         }else{
                             echo $f8['total'];
                         }	
                         ?>, legendText: "41-45 Years Old"},
                        
                        { label: "46-50 yrs. old",  y: 
                         <?php 
                         if($f9 == ""){
                             echo 0;
                         }else{
                             echo $f9['total'];
                         }	
                         ?>, legendText: "46-50 Years Old"},
                        
                        { label: "51-55 yrs. old",  y: 
                         <?php 
                         if($f10 == ""){
                             echo 0;
                         }else{
                             echo $f10['total'];
                         }	
                         ?>, legendText: "51-55 Years Old"},
                        
                        { label: "56-60 yrs. old",  y: 
                         <?php 
                         if($f11 == ""){
                             echo 0;
                         }else{
                             echo $f11['total'];
                         }	
                         ?>, legendText: "56-60 Years Old"},
                        
                        { label: "61-65 yrs. old",  y: 
                         <?php 
                         if($f12 == ""){
                             echo 0;
                         }else{
                             echo $f12['total'];
                         }	
                         ?>, legendText: "61-65 Years Old"},
                        
                        { label: "66-70 yrs. old",  y: 
                         <?php 
                         if($f13 == ""){
                             echo 0;
                         }else{
                             echo $f13['total'];
                         }	
                         ?>, legendText: "66-70 Years Old"},
                        
                        { label: "71-75 yrs. old",  y: 
                         <?php 
                         if($f14 == ""){
                             echo 0;
                         }else{
                             echo $f14['total'];
                         }	
                         ?>, legendText: "71-75 Years Old"},
                        
                        { label: "76-80 yrs. old",  y: 
                         <?php 
                         if($f15 == ""){
                             echo 0;
                         }else{ 
                             echo $f15['total'];
                         }	
                         ?>, legendText: "76-80 Years Old"},
                        
                        { label: "81-85 yrs. old",  y: 
                         <?php 
                         if($f16 == ""){
                             echo 0;
                         }else{
                             echo $f16['total'];
                         }	
                         ?>, legendText: "81-85 Years Old"},
                        
                        { label: "86-90 yrs. old",  y: 
                         <?php 
                         if($f17 == ""){
                             echo 0;
                         }else{
                             echo $f17['total'];
                         }	
                         ?>, legendText: "86-90 Years Old"},
                        
                        { label: "91-95 yrs. old",  y: 
                         <?php 
                         if($f18 == ""){
                             echo 0;
                         }else{
                             echo $f18['total'];
                         }	
                         ?>, legendText: "91-95 Years Old"},
                        
                        { label: "96-100 yrs. old",  y: 
                         <?php 
                         if($f19 == ""){
                             echo 0;
                         }else{
                             echo $f19['total'];
                         }	
                         ?>, legendText: "96-100 Years Old"},
                        
                        { label: "101-105 yrs. old",  y: 
                         <?php 
                         if($f20 == ""){
                             echo 0;
                         }else{
                             echo $f20['total'];
                         }	
                         ?>, legendText: "101-105 Years Old"},
                        
                        { label: "106-110 yrs. old",  y: 
                         <?php 
                         if($f21 == ""){
                             echo 0;
                         }else{
                             echo $f21['total'];
                         }	
                         ?>, legendText: "106-110 Years Old"}
                        
                    ] 
                } 
            ] 
        }); 
    } 
</script>