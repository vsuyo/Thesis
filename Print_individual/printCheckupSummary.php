   <!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 17:21:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
    </head>
<body>
            <section class="content">
                <div class="content__inner">

                    <div class="invoice">
                        <div class="invoice__header">
                            <img class="invoice__logo" src="../images/logo.png" alt="" style="width: 500px; height:200px; ">
                        </div>


                        <table class="table table-bordered invoice__table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>Name</th>
                                    <th>Checkup Date</th>
                                    <th>Diagnosis</th>
                                    <th>Blood Pressure</th>
                                    <th >Problems</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php include("dbconnect.php");
                                 $id = $_GET['id']; 
                                    $result = mysqli_query($connect, "SELECT * FROM `patientcheckup` INNER JOIN `patient` ON patientcheckup.patient_ID = patient.patient_ID WHERE patient.patient_ID = '$id'");
                                    while ($res1 = mysqli_fetch_array($result)) {
                                       
                                        ?>
                                        <tr>
                                         <td style="width: 20%"><?php echo $res1['patient_Name'] ?></td> 
                                        <td style="width: 20%"><?php echo $res1['pc_date'] ?></td>
                                        <td style="width: 20%"><?php echo $res1['pc_diagnosis'] ?></td>
                                        <td style="width: 20%"><?php echo $res1['pc_bloodPressure'] ?></td>
                                        <td style="width: 20%"><?php echo $res1['pc_problems'] ?></td>
                                    
                                    </tr>
                                    <?php } ?>

                            </tbody>
                        </table>

                        
                        
                    </div>

                </div>
            </section>
            <script type="text/javascript">
 window.onload = function() { window.print(); }
</script>
                    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 17:21:23 GMT -->
</html>