
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
        $charity1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fcharity1 = $charity1->fetch_array();
        $charity2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fcharity2 = $charity2->fetch_array();
        $charity3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fcharity3 = $charity3->fetch_array();
        $charity4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fcharity4 = $charity4->fetch_array();
        $charity5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fcharity5 = $charity5->fetch_array();
        $charity6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fcharity6 = $charity6->fetch_array();
        $charity7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fcharity7 = $charity7->fetch_array();
        $charity8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fcharity8 = $charity8->fetch_array();
        $charity9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fcharity9 = $charity9->fetch_array();
        $charity10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fcharity10 = $charity10->fetch_array();
        $charity11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fcharity11 = $charity11->fetch_array();
        $charity12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fcharity12 = $charity12->fetch_array();

        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $Pioneer1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fPioneer1 = $Pioneer1->fetch_array();
        $Pioneer2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fPioneer2 = $Pioneer2->fetch_array();
        $Pioneer3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fPioneer3 = $Pioneer3->fetch_array();
        $Pioneer4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fPioneer4 = $Pioneer4->fetch_array();
        $Pioneer5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fPioneer5 = $Pioneer5->fetch_array();
        $Pioneer6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fPioneer6 = $Pioneer6->fetch_array();
        $Pioneer7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fPioneer7 = $Pioneer7->fetch_array();
        $Pioneer8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fPioneer8 = $Pioneer8->fetch_array();
        $Pioneer9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fPioneer9 = $Pioneer9->fetch_array();
        $Pioneer10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fPioneer10 = $Pioneer10->fetch_array();
        $Pioneer11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fPioneer11 = $Pioneer11->fetch_array();
        $Pioneer12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fPioneer12 = $Pioneer12->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $JHG1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fJHG1 = $JHG1->fetch_array();
        $JHG2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fJHG2 = $JHG2->fetch_array();
        $JHG3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fJHG3 = $JHG3->fetch_array();
        $JHG4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fJHG4 = $JHG4->fetch_array();
        $JHG5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fJHG5 = $JHG5->fetch_array();
        $JHG6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fJHG6 = $JHG6->fetch_array();
        $JHG7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fJHG7 = $JHG7->fetch_array();
        $JHG8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fJHG8 = $JHG8->fetch_array();
        $JHG9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fJHG9 = $JHG9->fetch_array();
        $JHG10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fJHG10 = $JHG10->fetch_array();
        $JHG11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fJHG11 = $JHG11->fetch_array();
        $JHG12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fJHG12 = $JHG12->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $Omb1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fOmb1 = $Omb1->fetch_array();
        $Omb2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fOmb2 = $Omb2->fetch_array();
        $Omb3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fOmb3 = $Omb3->fetch_array();
        $Omb4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fOmb4 = $Omb4->fetch_array();
        $Omb5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fOmb5 = $Omb5->fetch_array();
        $Omb6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fOmb6 = $Omb6->fetch_array();
        $Omb7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fOmb7 = $Omb7->fetch_array();
        $Omb8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fOmb8 = $Omb8->fetch_array();
        $Omb9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4  && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fOmb9 = $Omb9->fetch_array();
        $Omb10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fOmb10 = $Omb10->fetch_array();
        $Omb11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fOmb11 = $Omb11->fetch_array();
        $Omb12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fOmb12 = $Omb12->fetch_array();
        
        $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
        $SHG1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
        $fSHG1 = $SHG1->fetch_array();
        $SHG12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
        $fSHG2 = $SHG12->fetch_array();
        $SHG3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
        $fSHG3 = $SHG3->fetch_array();
        $SHG4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
        $fSHG4 = $SHG4->fetch_array();
        $SHG5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
        $fSHG5 = $SHG5->fetch_array();
        $SHG6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
        $fSHG6 = $SHG6->fetch_array();
        $SHG7 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
        $fSHG7 = $SHG7->fetch_array();
        $SHG8 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
        $fSHG8 = $SHG8->fetch_array();
        $SHG9 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5  && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
        $fSHG9 = $SHG9->fetch_array();
        $SHG10 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
        $fSHG10 = $SHG10->fetch_array();
        $SHG11 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
        $fSHG11 = $SHG11->fetch_array();
        $SHG12 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
        $fSHG12 = $SHG12->fetch_array();

        $query1 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 1 && `year` = '$year'") or die(mysqli_error());
        $fetch1 = $query1->fetch_array();

        $query2 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 2 && `year` = '$year'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();

        $query3 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 3 && `year` = '$year'") or die(mysqli_error());
        $fetch3 = $query3->fetch_array();
        
        $query4 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 4 && `year` = '$year'") or die(mysqli_error());
        $fetch4 = $query4->fetch_array();
        
        $query5 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `casket_inv_id` = 5 && `year` = '$year'") or die(mysqli_error());
        $fetch5 = $query5->fetch_array();
     
        $query6 = $conn->query("SELECT COUNT(*) as total FROM `casket` WHERE `year` = '$year'") or die(mysqli_error());
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
                                    <td><center><?php echo $fcharity1['total']?></center></td>
                                    <td><center><?php echo $fcharity2['total']?></center></td>
                                    <td><center><?php echo $fcharity3['total']?></center></td>
                                    <td><center><?php echo $fcharity4['total']?></center></td>
                                    <td><center><?php echo $fcharity5['total']?></center></td>
                                    <td><center><?php echo $fcharity6['total']?></center></td>
                                    <td><center><?php echo $fcharity7['total']?></center></td>
                                    <td><center><?php echo $fcharity8['total']?></center></td>
                                    <td><center><?php echo $fcharity9['total']?></center></td>
                                    <td><center><?php echo $fcharity10['total']?></center></td>
                                    <td><center><?php echo $fcharity11['total']?></center></td>
                                    <td><center><?php echo $fcharity12['total']?></center></td>
                                    <td><center><?php echo number_format($percentcharity)?>%</center></td>
                                </tr>
                                <tr>
                                    <th><center>Pioneer</center></th>
                                    <td><center><?php echo $fPioneer1['total']?></center></td>
                                    <td><center><?php echo $fPioneer2['total']?></center></td>
                                    <td><center><?php echo $fPioneer3['total']?></center></td>
                                    <td><center><?php echo $fPioneer4['total']?></center></td>
                                    <td><center><?php echo $fPioneer5['total']?></center></td>
                                    <td><center><?php echo $fPioneer6['total']?></center></td>
                                    <td><center><?php echo $fPioneer7['total']?></center></td>
                                    <td><center><?php echo $fPioneer8['total']?></center></td>
                                    <td><center><?php echo $fPioneer9['total']?></center></td>
                                    <td><center><?php echo $fPioneer10['total']?></center></td>
                                    <td><center><?php echo $fPioneer11['total']?></center></td>
                                    <td><center><?php echo $fPioneer12['total']?></center></td>
                                    <td><center><?php echo number_format($percentpioneer)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Junior Half Glass</center></th>
                                    <td><center><?php echo $fJHG1['total']?></center></td>
                                    <td><center><?php echo $fJHG2['total']?></center></td>
                                    <td><center><?php echo $fJHG3['total']?></center></td>
                                    <td><center><?php echo $fJHG4['total']?></center></td>
                                    <td><center><?php echo $fJHG5['total']?></center></td>
                                    <td><center><?php echo $fJHG6['total']?></center></td>
                                    <td><center><?php echo $fJHG7['total']?></center></td>
                                    <td><center><?php echo $fJHG8['total']?></center></td>
                                    <td><center><?php echo $fJHG9['total']?></center></td>
                                    <td><center><?php echo $fJHG10['total']?></center></td>
                                    <td><center><?php echo $fJHG11['total']?></center></td>
                                    <td><center><?php echo $fJHG12['total']?></center></td>
                                    <td><center><?php echo number_format($percentjuniorhalfglass)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Omb</center></th>
                                    <td><center><?php echo $fOmb1['total']?></center></td>
                                    <td><center><?php echo $fOmb2['total']?></center></td>
                                    <td><center><?php echo $fOmb3['total']?></center></td>
                                    <td><center><?php echo $fOmb4['total']?></center></td>
                                    <td><center><?php echo $fOmb5['total']?></center></td>
                                    <td><center><?php echo $fOmb6['total']?></center></td>
                                    <td><center><?php echo $fOmb7['total']?></center></td>
                                    <td><center><?php echo $fOmb8['total']?></center></td>
                                    <td><center><?php echo $fOmb9['total']?></center></td>
                                    <td><center><?php echo $fOmb10['total']?></center></td>
                                    <td><center><?php echo $fOmb11['total']?></center></td>
                                    <td><center><?php echo $fOmb12['total']?></center></td>
                                    <td><center><?php echo number_format($percentomb)?>%</center></td>
                                </tr>
                                    <tr>
                                    <th><center>Senior Half Glass</center></th>
                                    <td><center><?php echo $fSHG1['total']?></center></td>
                                    <td><center><?php echo $fSHG2['total']?></center></td>
                                    <td><center><?php echo $fSHG3['total']?></center></td>
                                    <td><center><?php echo $fSHG4['total']?></center></td>
                                    <td><center><?php echo $fSHG5['total']?></center></td>
                                    <td><center><?php echo $fSHG6['total']?></center></td>
                                    <td><center><?php echo $fSHG7['total']?></center></td>
                                    <td><center><?php echo $fSHG8['total']?></center></td>
                                    <td><center><?php echo $fSHG9['total']?></center></td>
                                    <td><center><?php echo $fSHG10['total']?></center></td>
                                    <td><center><?php echo $fSHG11['total']?></center></td>
                                    <td><center><?php echo $fSHG12['total']?></center></td>
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