
<!DOCTYPE html>
<html lang="en">

    <head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
        <title>Client Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/casket_ccolor.php'?>
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
                <div id="casket_ccolor" style="width: 100%; height: 400px"></div>
                
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $q2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f2 = $q2->fetch_array();
        $q3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f3 = $q3->fetch_array();
        $q4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f4 = $q4->fetch_array();
        $q5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f5 = $q5->fetch_array();
        $q6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f6 = $q6->fetch_array();
        $q7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f7 = $q7->fetch_array();
        $q8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f8 = $q8->fetch_array();
        $q9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f9 = $q9->fetch_array();
        $q10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f10 = $q10->fetch_array();
        $q11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f11 = $q11->fetch_array();
        $q12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f12 = $q12->fetch_array();

        $c1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` =  'Jan' && `year` = '$year'") or die(mysqli_error());
        $c1 = $c1->fetch_array();
        $c2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $c2 = $c2->fetch_array();
        $c3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $c3 = $c3->fetch_array();
        $c4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $c4 = $c4->fetch_array();
        $c5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $c5 = $c5->fetch_array();
        $c6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $c6 = $c6->fetch_array();
        $c7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $c7 = $c7->fetch_array();
        $c8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $c8 = $c8->fetch_array();
        $c9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $c9 = $c9->fetch_array();
        $c10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $c10 = $c10->fetch_array();
        $c11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $c11 = $c11->fetch_array();
        $c12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $c12 = $c12->fetch_array();

        $query1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'White' && `year` = '$year'") or die(mysqli_error());
        $fetch1 = $query1->fetch_array();

        $query2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `color` = 'Silver' && `year` = '$year'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();

        $query3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `year` = '$year'") or die(mysqli_error());
        $fetch3 = $query3->fetch_array();
        
        $percentwhite = ($fetch1['total']/$fetch3['total']) * 100;
        $percentsilver = ($fetch2['total']/$fetch3['total']) * 100;
                        ?>
                        
                        <h4><mark>Casket Summary - White and Silver Colors - Year <?php echo $_GET['year']?></mark></h4> <hr>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th><center>Caskets</center></th>
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
                                    <th><center>White</center></th>
                                    <td><center><?php echo $f1['total']?></center></td>
                                    <td><center><?php echo $f2['total']?></center></td>
                                    <td><center><?php echo $f3['total']?></center></td>
                                    <td><center><?php echo $f4['total']?></center></td>
                                    <td><center><?php echo $f5['total']?></center></td>
                                    <td><center><?php echo $f6['total']?></center></td>
                                    <td><center><?php echo $f7['total']?></center></td>
                                    <td><center><?php echo $f8['total']?></center></td>
                                    <td><center><?php echo $f9['total']?></center></td>
                                    <td><center><?php echo $f10['total']?></center></td>
                                    <td><center><?php echo $f11['total']?></center></td>
                                    <td><center><?php echo $f12['total']?></center></td>
                                    <td><center><?php echo number_format($percentwhite)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>Silver</center></th>
                                    <td><center><?php echo $c1['total']?></center></td>
                                    <td><center><?php echo $c2['total']?></center></td>
                                    <td><center><?php echo $c3['total']?></center></td>
                                    <td><center><?php echo $c4['total']?></center></td>
                                    <td><center><?php echo $c5['total']?></center></td>
                                    <td><center><?php echo $c6['total']?></center></td>
                                    <td><center><?php echo $c7['total']?></center></td>
                                    <td><center><?php echo $c8['total']?></center></td>
                                    <td><center><?php echo $c9['total']?></center></td>
                                    <td><center><?php echo $c10['total']?></center></td>
                                    <td><center><?php echo $c11['total']?></center></td>
                                    <td><center><?php echo $c12['total']?></center></td>
                                    <td><center><?php echo number_format($percentsilver)?>%</center></td>
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
                    window.location = 'casketReportChart.php?year='+year;
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