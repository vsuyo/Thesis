
<!DOCTYPE html>
<html lang="en">

    <head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
        <title>Unidentified Corpe Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/corpse_ageRange.php'?>
        <!-- META SECTION -->   
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="img/A.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css" />
        <!-- EOF CSS INCLUDE -->
        <style>
            @media print{
                @page{
                  size: letter;  
                } 
            }
            #print{
                width:100%;
                height:500px;
                overflow:hidden;
                margin:auto;
                border: 0.5px solid #fff;
            }
        
        </style>
    </head>
    <body>
        <div class = "btn-group pull-right">
                        <div class = "pull-left">
                            <button class = "btn btn-default btn-sm" onclick = "printContent('print')">Print</button>
                        </div>
                        
                        </div>
            
        
        <div id = "print">
            
        <div class="panel-body">
                        
            <div class="col-md-6">
                <div id="corpse_ageRange" style="width: 100%; height: 400px"></div>
                
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <?php
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $threetoten1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten1 = $threetoten1->fetch_array();
        $threetoten2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten2 = $threetoten2->fetch_array();
        $threetoten3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten3 = $threetoten3->fetch_array();
        $threetoten4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten4 = $threetoten4->fetch_array();
        $threetoten5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten5 = $threetoten5->fetch_array();
        $threetoten6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten6 = $threetoten6->fetch_array();
        $threetoten7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten7 = $threetoten7->fetch_array();
        $threetoten8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten8 = $threetoten8->fetch_array();
        $threetoten9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten9 = $threetoten9->fetch_array();
        $threetoten10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten10 = $threetoten10->fetch_array();
        $threetoten11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten11 = $threetoten11->fetch_array();
        $threetoten12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fthreetoten12 = $threetoten12->fetch_array();
        
        $ageRangeTwo1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo1 = $ageRangeTwo1->fetch_array();
        $ageRangeTwo2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo2 = $ageRangeTwo2->fetch_array();
        $ageRangeTwo3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo3 = $ageRangeTwo3->fetch_array();
        $ageRangeTwo4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo4 = $ageRangeTwo4->fetch_array();
        $ageRangeTwo5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo5 = $ageRangeTwo5->fetch_array();
        $ageRangeTwo6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo6 = $ageRangeTwo6->fetch_array();
        $ageRangeTwo7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo7 = $ageRangeTwo7->fetch_array();
        $ageRangeTwo8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo8 = $ageRangeTwo8->fetch_array();
        $ageRangeTwo9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo9 = $ageRangeTwo9->fetch_array();
        $ageRangeTwo10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo10 = $ageRangeTwo10->fetch_array();
        $ageRangeTwo11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo11 = $ageRangeTwo11->fetch_array();
        $ageRangeTwo12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fageRangeTwo12 = $ageRangeTwo12->fetch_array();
        
        $ageRangeThree1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree1 = $ageRangeThree1->fetch_array();
        $ageRangeThree2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree2 = $ageRangeThree2->fetch_array();
        $ageRangeThree3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree3 = $ageRangeThree3->fetch_array();
        $ageRangeThree4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree4 = $ageRangeThree4->fetch_array();
        $ageRangeThree5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree5 = $ageRangeThree5->fetch_array();
        $ageRangeThree6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree6 = $ageRangeThree6->fetch_array();
        $ageRangeThree7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree7 = $ageRangeThree7->fetch_array();
        $ageRangeThree8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree8 = $ageRangeThree8->fetch_array();
        $ageRangeThree9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree9 = $ageRangeThree9->fetch_array();
        $ageRangeThree10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree10 = $ageRangeThree10->fetch_array();
        $ageRangeThree11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree11 = $ageRangeThree11->fetch_array();
        $ageRangeThree12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fageRangeThree12 = $ageRangeThree12->fetch_array();
        
        $ageRangeFour1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour1 = $ageRangeFour1->fetch_array();
        $ageRangeFour2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour2 = $ageRangeFour2->fetch_array();
        $ageRangeFour3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour3 = $ageRangeFour3->fetch_array();
        $ageRangeFour4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour4 = $ageRangeFour4->fetch_array();
        $ageRangeFour5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour5 = $ageRangeFour5->fetch_array();
        $ageRangeFour6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour6 = $ageRangeFour6->fetch_array();
        $ageRangeFour7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour7 = $ageRangeFour7->fetch_array();
        $ageRangeFour8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour8 = $ageRangeFour8->fetch_array();
        $ageRangeFour9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour9 = $ageRangeFour9->fetch_array();
        $ageRangeFour10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour10 = $ageRangeFour10->fetch_array();
        $ageRangeFour11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour11 = $ageRangeFour11->fetch_array();
        $ageRangeFour12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFour12 = $ageRangeFour12->fetch_array();
        
        $ageRangeFive1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive1 = $ageRangeFive1->fetch_array();
        $ageRangeFive2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive2 = $ageRangeFive2->fetch_array();
        $ageRangeFive3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive3 = $ageRangeFive3->fetch_array();
        $ageRangeFive4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive4 = $ageRangeFive4->fetch_array();
        $ageRangeFive5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive5 = $ageRangeFive5->fetch_array();
        $ageRangeFive6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive6 = $ageRangeFive6->fetch_array();
        $ageRangeFive7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive7 = $ageRangeFive7->fetch_array();
        $ageRangeFive8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive8 = $ageRangeFive8->fetch_array();
        $ageRangeFive9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive9 = $ageRangeFive9->fetch_array();
        $ageRangeFive10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive10 = $ageRangeFive10->fetch_array();
        $ageRangeFive11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive11 = $ageRangeFive11->fetch_array();
        $ageRangeFive12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fageRangeFive12 = $ageRangeFive12->fetch_array();
        
        $ageRangeSix1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix1 = $ageRangeSix1->fetch_array();
        $ageRangeSix2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix2 = $ageRangeSix2->fetch_array();
        $ageRangeSix3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix3 = $ageRangeSix3->fetch_array();
        $ageRangeSix4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix4 = $ageRangeSix4->fetch_array();
        $ageRangeSix5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix5 = $ageRangeSix5->fetch_array();
        $ageRangeSix6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix6 = $ageRangeSix6->fetch_array();
        $ageRangeSix7 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix7 = $ageRangeSix7->fetch_array();
        $ageRangeSix8 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix8 = $ageRangeSix8->fetch_array();
        $ageRangeSix9 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix9 = $ageRangeSix9->fetch_array();
        $ageRangeSix10 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix10 = $ageRangeSix10->fetch_array();
        $ageRangeSix11 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix11 = $ageRangeSix11->fetch_array();
        $ageRangeSix12 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fageRangeSix12 = $ageRangeSix12->fetch_array();

        $query1 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '3-10 yrs. old' && `year` = '$year'") or die(mysqli_error());
        $fetch1 = $query1->fetch_array();

        $query2 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '11-15 yrs.old' && `year` = '$year'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();
        
        $query3 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '16-20 yrs.old' && `year` = '$year'") or die(mysqli_error());
        $fetch3 = $query3->fetch_array();
        
        $query4 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '21-25 yrs.old' && `year` = '$year'") or die(mysqli_error());
        $fetch4 = $query4->fetch_array();
        
        $query5 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '26-30 yrs.old' && `year` = '$year'") or die(mysqli_error());
        $fetch5 = $query5->fetch_array();
        
        $query6 = $conn->query("SELECT COUNT(*) as total FROM `unidentifiedcorpse` WHERE `age` = '31-35 yrs.old' && `year` = '$year'") or die(mysqli_error());
        $fetch6 = $query6->fetch_array();
        


        $query22 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `year` = '$year'") or die(mysqli_error());
        $fetch22 = $query22->fetch_array();
        
        $percent1 = ($fetch1['total']/$fetch22['total']) * 100;
        $percent2 = ($fetch2['total']/$fetch22['total']) * 100;
        $percent3 = ($fetch3['total']/$fetch22['total']) * 100;
        $percent4 = ($fetch4['total']/$fetch22['total']) * 100;
        $percent5 = ($fetch5['total']/$fetch22['total']) * 100;
        $percent6 = ($fetch6['total']/$fetch22['total']) * 100;
        
                        ?>
                        
                        <h4><mark>Age Range Summary - Year <?php echo $_GET['year']?></mark></h4> <hr>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th><center>Age Range</center></th>
                                    <th><center>Jan</center></th>
                                    <th><center>Feb</center></th>
                                    <th><center>Mar</center></th>
                                    <th><center>Apr</center></th>
                                    <th><center>May</center></th>
                                    <th><center>June</center></th>
                                    <th><center>July</center></th>
                                    <th><center>Aug</center></th>
                                    <th><center>Sep</center></th>
                                    <th><center>Oct</center></th>
                                    <th><center>Nov</center></th>
                                    <th><center>Dec</center></th>
                                    <th><center>Percentage</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><center>3-10</center></th>
                                    <td><center><?php echo $fthreetoten1['total']?></center></td>
                                    <td><center><?php echo $fthreetoten2['total']?></center></td>
                                    <td><center><?php echo $fthreetoten3['total']?></center></td>
                                    <td><center><?php echo $fthreetoten4['total']?></center></td>
                                    <td><center><?php echo $fthreetoten5['total']?></center></td>
                                    <td><center><?php echo $fthreetoten6['total']?></center></td>
                                    <td><center><?php echo $fthreetoten7['total']?></center></td>
                                    <td><center><?php echo $fthreetoten8['total']?></center></td>
                                    <td><center><?php echo $fthreetoten9['total']?></center></td>
                                    <td><center><?php echo $fthreetoten10['total']?></center></td>
                                    <td><center><?php echo $fthreetoten11['total']?></center></td>
                                    <td><center><?php echo $fthreetoten12['total']?></center></td>
                                    <td><center><?php echo number_format($percent1)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>11-15</center></th>
                                    <td><center><?php echo $fageRangeTwo1['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo2['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo3['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo4['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo5['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo6['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo7['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo8['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo9['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo10['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo11['total']?></center></td>
                                    <td><center><?php echo $fageRangeTwo12['total']?></center></td>
                                    <td><center><?php echo number_format($percent2)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>16-20</center></th>
                                    <td><center><?php echo $fageRangeThree1['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree2['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree3['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree4['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree5['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree6['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree7['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree8['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree9['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree10['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree11['total']?></center></td>
                                    <td><center><?php echo $fageRangeThree12['total']?></center></td>
                                    <td><center><?php echo number_format($percent3)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>21-25</center></th>
                                    <td><center><?php echo $fageRangeFour1['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour2['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour3['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour4['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour5['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour6['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour7['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour8['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour9['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour10['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour11['total']?></center></td>
                                    <td><center><?php echo $fageRangeFour12['total']?></center></td>
                                    <td><center><?php echo number_format($percent4)?>%</center></td>
                                </tr>
                                 <tr>
                                    <th><center>26-30</center></th>
                                    <td><center><?php echo $fageRangeFive1['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive2['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive3['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive4['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive5['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive6['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive7['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive8['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive9['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive10['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive11['total']?></center></td>
                                    <td><center><?php echo $fageRangeFive12['total']?></center></td>
                                    <td><center><?php echo number_format($percent5)?>%</center></td>
                                </tr>
                                 <tr>
                                    <th><center>31-35</center></th>
                                    <td><center><?php echo $fageRangeSix1['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix2['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix3['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix4['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix5['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix6['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix7['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix8['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix9['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix10['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix11['total']?></center></td>
                                    <td><center><?php echo $fageRangeSix12['total']?></center></td>
                                    <td><center><?php echo number_format($percent6)?>%</center></td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>	
        </div>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'unidentifiedCorpseReportChart.php?year='+year;
                });
            });
        </script>
        
        <script>
        function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;    
            
        }
        </script>
    </body>
</html>