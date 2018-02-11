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
                                    <th style="width: 5%">Informant</th>
                                    <th style="width: 5%">Cadaver Deceased</th>
                                    <th style="width: 5%">Preference</th>
                                    <th style="width: 5%">Hearse Date</th>
                                    <th style="width: 5%">Casket Name</th>
                                    <th style="width: 5%">Qty</th>
                                    <th style="width: 5%"s>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                                 $id = $_GET['id'];
$result = mysqli_query($conn, "SELECT client.informant, client.client_id, cadaverentry.cadaverdeceased, viewing.preference, hearsetrans.hearsedate, casket.casket_inv_id, casketinventory.casketName, casket.qty, casket.total FROM client
INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id
INNER JOIN viewing ON client.client_id = viewing.client_id
INNER JOIN hearsetrans ON client.client_id = hearsetrans.client_id
INNER JOIN casket ON client.client_id = casket.client_id
INNER JOIN casketinventory ON casket.casket_inv_id = casketinventory.casket_inv_id WHERE client.client_id = '$id'");
                                    while ($fetch = mysqli_fetch_array($result)) {
                                       
                                        ?>
                                        <tr>
                                         <td style="width: 5%"><?php echo $fetch['informant'] ?></td> 
                                        <td style="width: 5%"><?php echo $fetch['cadaverdeceased'] ?></td>
                                        <td style="width: 5%"><?php echo $fetch['preference'] ?></td>
                                        <td style="width: 5%"><?php echo $fetch['hearsedate'] ?></td>
                                        <td style="width: 5%"><?php echo $fetch['casketName'] ?></td>
                                        <td style="width: 2%"><?php echo $fetch['qty'] ?></td>
                                        <td style="width: 2%"><?php echo $fetch['total'] ?></td>
                                    
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