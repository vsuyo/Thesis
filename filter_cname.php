
<!DOCTYPE html>
<html lang="en">

    <head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
        <title>Client Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/casket_name.php'?>
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
                <div id="casket_name" style="width: 100%; height: 400px"></div>
                
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <?php
    $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q1 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity ' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $q2 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f2 = $q2->fetch_array();
        $q3 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f3 = $q3->fetch_array();
        $q4 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f4 = $q4->fetch_array();
        $q5 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f5 = $q5->fetch_array();
        $q6 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f6 = $q6->fetch_array();
        $q7 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f7 = $q7->fetch_array();
        $q8 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f8 = $q8->fetch_array();
        $q9 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f9 = $q9->fetch_array();
        $q10 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f10 = $q10->fetch_array();
        $q11 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f11 = $q11->fetch_array();
        $q12 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f12 = $q12->fetch_array();

        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q11 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer ' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f11 = $q11->fetch_array();
        $q22 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f22 = $q22->fetch_array();
        $q33 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f33 = $q33->fetch_array();
        $q44 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f44 = $q44->fetch_array();
        $q55 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f55 = $q55->fetch_array();
        $q66 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f66 = $q66->fetch_array();
        $q77 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f77 = $q77->fetch_array();
        $q88 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f88 = $q88->fetch_array();
        $q99 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f99 = $q99->fetch_array();
        $q101 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f101 = $q101->fetch_array();
        $q111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f111 = $q111->fetch_array();
        $q122 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f122 = $q122->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass ' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f111 = $q111->fetch_array();
        $q222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f222 = $q222->fetch_array();
        $q333 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f333 = $q333->fetch_array();
        $q444 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f444 = $q444->fetch_array();
        $q555 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f555 = $q555->fetch_array();
        $q666 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f666 = $q666->fetch_array();
        $q777 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f777 = $q777->fetch_array();
        $q888 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f888 = $q888->fetch_array();
        $q999 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f999 = $q999->fetch_array();
        $q1011 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f1011 = $q1011->fetch_array();
        $q1111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f1111 = $q1111->fetch_array();
        $q1222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f1222 = $q1222->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q1111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f1111 = $q1111->fetch_array();
        $q2222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f2222 = $q2222->fetch_array();
        $q3333 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f3333 = $q3333->fetch_array();
        $q4444 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f4444 = $q4444->fetch_array();
        $q5555 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f5555 = $q5555->fetch_array();
        $q6666 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f6666 = $q6666->fetch_array();
        $q7777 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f7777 = $q7777->fetch_array();
        $q8888 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f8888 = $q8888->fetch_array();
        $q9999 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb'  && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f9999 = $q9999->fetch_array();
        $q10111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f10111 = $q10111->fetch_array();
        $q11111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f11111 = $q11111->fetch_array();
        $q12222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f12222 = $q12222->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $q1111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $f11111 = $q11111->fetch_array();
        $q22222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $f22222 = $q22222->fetch_array();
        $q33333 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $f33333 = $q33333->fetch_array();
        $q44444 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $f44444 = $q44444->fetch_array();
        $q55555 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $f55555 = $q55555->fetch_array();
        $q66666 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $f66666 = $q66666->fetch_array();
        $q77777 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $f77777 = $q77777->fetch_array();
        $q88888 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $f88888 = $q88888->fetch_array();
        $q99999 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass'  && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $f99999 = $q99999->fetch_array();
        $q101111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $f101111 = $q101111->fetch_array();
        $q111111 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $f111111 = $q111111->fetch_array();
        $q122222 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $f122222 = $q122222->fetch_array();

        $query1 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Charity' && `year` = '$year'") or die(mysqli_error());
        $fetch1 = $query1->fetch_array();

        $query2 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Pioneer' && `year` = '$year'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();

        $query3 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Junior Half Glass' && `year` = '$year'") or die(mysqli_error());
        $fetch3 = $query3->fetch_array();
        
        $query4 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Omb' && `year` = '$year'") or die(mysqli_error());
        $fetch4 = $query4->fetch_array();
        
        $query5 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `casketName` = 'Senior Half Glass' && `year` = '$year'") or die(mysqli_error());
        $fetch5 = $query5->fetch_array();
        
        $query6 = $conn->query("SELECT COUNT(*) as total FROM `added_casket` WHERE `year` = '$year'") or die(mysqli_error());
        $fetch6 = $query6->fetch_array();
        
        $percentcharity = ($fetch1['total']/$fetch6['total']) * 100;
        $percentpioneer = ($fetch2['total']/$fetch6['total']) * 100;
        $percentjuniorhalfglass = ($fetch3['total']/$fetch6['total']) * 100;
        $percentomb = ($fetch4['total']/$fetch6['total']) * 100;
        $percentseniorhalfglass = ($fetch5['total']/$fetch6['total']) * 100;
                        ?>
                        
                        <h6><mark><center>Casket Summary</center> <br><br>  Charity, Pioneer, Junior Half Glass, Omb and Senior Half Glass - Year <?php echo $_GET['year']?></mark></h6> <hr>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th><center>Caskets Names</center></th>
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
                                    <th><center>Charity</center></th>
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
                                    <td><center><?php echo number_format($percentcharity)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>Pioneer</center></th>
                                    <td><center><?php echo $f11['total']?></center></td>
                                    <td><center><?php echo $f22['total']?></center></td>
                                    <td><center><?php echo $f33['total']?></center></td>
                                    <td><center><?php echo $f44['total']?></center></td>
                                    <td><center><?php echo $f55['total']?></center></td>
                                    <td><center><?php echo $f66['total']?></center></td>
                                    <td><center><?php echo $f77['total']?></center></td>
                                    <td><center><?php echo $f88['total']?></center></td>
                                    <td><center><?php echo $f99['total']?></center></td>
                                    <td><center><?php echo $f101['total']?></center></td>
                                    <td><center><?php echo $f111['total']?></center></td>
                                    <td><center><?php echo $f122['total']?></center></td>
                                    <td><center><?php echo number_format($percentpioneer)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Junior Half Glass</center></th>
                                    <td><center><?php echo $f111['total']?></center></td>
                                    <td><center><?php echo $f222['total']?></center></td>
                                    <td><center><?php echo $f333['total']?></center></td>
                                    <td><center><?php echo $f444['total']?></center></td>
                                    <td><center><?php echo $f555['total']?></center></td>
                                    <td><center><?php echo $f666['total']?></center></td>
                                    <td><center><?php echo $f777['total']?></center></td>
                                    <td><center><?php echo $f888['total']?></center></td>
                                    <td><center><?php echo $f999['total']?></center></td>
                                    <td><center><?php echo $f1011['total']?></center></td>
                                    <td><center><?php echo $f1111['total']?></center></td>
                                    <td><center><?php echo $f1222['total']?></center></td>
                                    <td><center><?php echo number_format($percentjuniorhalfglass)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Omb</center></th>
                                    <td><center><?php echo $f1111['total']?></center></td>
                                    <td><center><?php echo $f2222['total']?></center></td>
                                    <td><center><?php echo $f3333['total']?></center></td>
                                    <td><center><?php echo $f4444['total']?></center></td>
                                    <td><center><?php echo $f5555['total']?></center></td>
                                    <td><center><?php echo $f6666['total']?></center></td>
                                    <td><center><?php echo $f7777['total']?></center></td>
                                    <td><center><?php echo $f8888['total']?></center></td>
                                    <td><center><?php echo $f9999['total']?></center></td>
                                    <td><center><?php echo $f10111['total']?></center></td>
                                    <td><center><?php echo $f11111['total']?></center></td>
                                    <td><center><?php echo $f12222['total']?></center></td>
                                    <td><center><?php echo number_format($percentomb)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Senior Half Glass</center></th>
                                    <td><center><?php echo $f11111['total']?></center></td>
                                    <td><center><?php echo $f22222['total']?></center></td>
                                    <td><center><?php echo $f33333['total']?></center></td>
                                    <td><center><?php echo $f44444['total']?></center></td>
                                    <td><center><?php echo $f55555['total']?></center></td>
                                    <td><center><?php echo $f66666['total']?></center></td>
                                    <td><center><?php echo $f77777['total']?></center></td>
                                    <td><center><?php echo $f88888['total']?></center></td>
                                    <td><center><?php echo $f99999['total']?></center></td>
                                    <td><center><?php echo $f101111['total']?></center></td>
                                    <td><center><?php echo $f111111['total']?></center></td>
                                    <td><center><?php echo $f122222['total']?></center></td>
                                    <td><center><?php echo number_format($percentseniorhalfglass)?>%</center></td>
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