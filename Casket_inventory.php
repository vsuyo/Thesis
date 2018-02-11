<?php
include('casket_add.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Casket Inventory</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="img/A.png" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php require 'require/sidebar.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-bell"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-bell"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali" />
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader" />
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
                <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                            <div class="mb-content">
                                <p>Are you sure you want to log out?</p>
                                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                            </div>
                            <div class="mb-footer">
                                <div class="pull-right">
                                    <a href="pages-login-website-light.html" class="btn btn-success btn-lg">Yes</a>
                                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Data Entry</a></li>
                <li class="active"><strong><mark>Casket Inventory</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#tab-first" role="tab" data-toggle="tab"><span class="fa fa-flask">Casket Stock List</span></a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <div class="pull-right">
                                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>New Stock</button>
                                                </div>
                                            </h3>

                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable" id="chemStockList">
                                                <thead>
                                                    <tr>
                                                        <th>Casket Name</th>
                                                        <th>Qty.</th>
                                                        <th>Date Created</th>
                                                        <th>Dimension</th>
                                                        <th>Type</th>
                                                        <th>Color</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
    
    $conn = new mysqli("localhost", "root", "", "alisbo") or die (mysqli_error());
            
$query = $conn->query("SELECT * FROM `casketinventory` ORDER BY `casket_inv_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $fetch['casketName']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['qty']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['dateCreated']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['dimension']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['type']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['color']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['price']?>
                                                            </td>
                                                            <td>
                                                                <div class='btn-group' role='group' aria-label='...'>
                                                                    <a href="#plus<?php echo $fetch['casket_inv_id'];?>" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button></a>
                                                                    <a href="#minus<?php echo $fetch['casket_inv_id'];?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span></button></a>
                                                                </div>

                                                            </td>

                                                        </tr>
 <!--Add Casket Stocks -->
    <div id="plus<?php echo $fetch['casket_inv_id'];?>" class="modal fade" role="dialog" data-backdrop="static">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title fa fa-plus"> Add Stocks</h4></center>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="casket_inv_id" value="<?php echo $fetch['casket_inv_id'];?>">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="chemName1">Casket Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="chemName1" name="casketName" value="<?php echo $fetch['casketName']?>" placeholder="Casket Name" required readonly>
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Quantity:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" OnlyNumber="true" id="qty" name="qty"  maxlength="3" min="0" max="999"  value="<?php echo $fetch['qty']?>" placeholder="Quantity" required="" >
                               
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer"><Center>
                        <button type="submit" class="btn btn-info fa fa-plus" name="add_Stocks"> Add Stocks</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle" data-dismiss="modal"> Cancel</button></Center>
                    </div>
                </div>

            </div>
        </form>
    </div>
                                                    

<!--Dispense Stock-->                                                    
 <div id="minus<?php echo $fetch['casket_inv_id'];?>" class="modal fade" role="dialog" data-backdrop="static">
        <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title fa fa-minus"> Dispense Stocks</h4></center>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="casket_inv_id" value="<?php echo $fetch['casket_inv_id'];?>">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="chemName1">Casket Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="chemName1" name="casketName" value="<?php echo $fetch['casketName']?>" placeholder="Casket Name" required readonly>
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Quantity:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" OnlyNumber="true" id="qty" name="qty"  maxlength="3" min="0" max="999"  value="<?php echo $fetch['qty']?>" placeholder="Quantity" required="" >
                               
                            </div><br><br><br>
                            <label class="control-label col-sm-3" for="qty1">Receiver:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" OnlyNumber="true" id="receiver" name="receiver" value="" placeholder="Receiver" required="" >
                               
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer"><Center>
                        <button type="submit" class="btn btn-info fa fa-plus" name="dispense_Stocks"> Dispense Stocks</button>
                        <button type="button" class="btn btn-danger fa fa-times-circle" data-dismiss="modal"> Cancel</button></Center>
                    </div>
                </div>

            </div>
        </form>
    </div>




                                                        <?php
}
$conn->close();
?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TABS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Chemical Stock List -->

    <div class="modal fade" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="mediumModalHead" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <center>
                        <h4 class="modal-title" id="mediumModalHead"><span class="fa fa-flask">Add Casket</span></h4>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="tab-pane active" id="tab-first">
                        <div class="row">
                            <form id="chem1" action="Casket_inventory.php" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Casket Name</label>
                                        <div class="col-md-6">
                                            <input name="casketName" type="text" class="form-control" / placeholder="Name" id='input' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Dimension</label>
                                        <div class="col-md-6">
                                            <input name="dimension" type="text" class="form-control" / placeholder="Dimension" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Type</label>
                                        <div class="col-md-6">
                                            <input name="type" type="text" class="form-control" / placeholder="Type" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Color</label>
                                        <div class="col-md-6">
                                            <input name="color" type="text" class="form-control" / placeholder="Color" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Price</label>
                                        <div class="col-md-6">
                                            <input name="price" type="text" class="form-control" / placeholder="Price" id='inupt2' onkeyup="myFunction(this.id)" required />
                                        </div>
                                    </div>



                                    <input type="hidden" name="dateCreated" />
                                    <input type="hidden" name="qty" />

                                </div>
                            </form>

                        </div>

                    </div><br>
                    <div class="modal-footer">
                        <center>
                            <button class="btn btn-info fa fa-check-square-o" name="submit1" form="chem1"> Save</button>
                            <button type="button" class="btn btn-danger fa fa-times" data-dismiss="modal"> Close</button></center>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        function myFunction(textboxid) {

            var input = document.getElementById(textboxid);
            var word = input.value.split(" ");
            for (var i = 0; i < word.length; i++) {
                word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
            }
            input.value = word.join(" ");
        }

    </script>
    <!-- end -->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
