<?php
 include('cadaver.php');
?>

<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Alisbo Cadaver</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        
        <link rel="icon" href="assets/images/users/A.png" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                

            </head>
    <body>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">Alisbo Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/A.png" alt="Admin"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/A.png" alt="Admin"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Admin</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>                    
                    <li>
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                              
                    <li class="xn-title">Components</li>   
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Data Entry</span></a>
                        <ul>
                             <li><a href="DataEntry.php"><span class="fa fa-users"></span>Client & Cadaver</a></li>
                             <li><a href="Unidentified Corpse.html"><span class="fa fa-user"></span>Unidentified Corpse</a></li>
                             <li><a href="Hearse.php"><span class="fa fa-truck"></span>Hearse</a></li>
                             <li><a href="Viewing.html"><span class="fa fa-bookmark"></span>Viewing</a></li>
                             <li><a href="Casket.html"><span class="fa fa-archive"></span>Casket</a></li>
                             <li><a href="Insurance.html"><span class="fa fa-file-text-o"></span>Insurance</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href=""><span class="fa fa-briefcase"></span> <span class="xn-text">Services</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-dropbox"></span>Package</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-archive"></span> Casket</a></li>
                            <li><a href="Schedule.html"><span class="fa fa-calendar"></span> Schedule</a></li>                            
                        </ul>
                    </li>                       
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Monitoring</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-flask"></span>Chemicals</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-wrench"></span>Equipment</a></li>
                        </ul>
                    </li>
                      <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-clipboard"></span> <span class="xn-text">Reports</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-male"></span>No. of Cadaver Served</a></li>
                            <li><a href="table-datatables.html"><span class="fa  fa-archive"></span>No of Casket Sold </a></li>
                            <li><a href="table-export.html"><span class="fa fa-male"></span>No. of Unclaimed Cadaver</a></li>                            
                        </ul>
                    </li>   
                      <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-cloud-download"></span>System Backup</a></li>                         
                        </ul>
                    </li>        
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
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
                            <input type="text" name="search" placeholder="Search..."/>
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
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
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
                   
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="DataEntry.php">Data Entry</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Cadaver</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                           <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                     <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Client
                                     & Cadaver</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"> 
                                        <div class="pull-right">
                                         <button class="btn btn-success" data-toggle="modal" data-target="#modal_large"><span class="fa fa-plus"></span>Add Client</button>
                                    </div></h3>
                                                                    
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable" >
                                              <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Client</h2></div>
                <div class="divB">
                    <div class="divD">
                        <hr/>
                        <?php
                        //Establishing Connection with Server
                        $conn = mysql_connect("localhost", "root", "");
                        
                        //Selecting Database
                        $db = mysql_select_db("alisbo", $conn);
                        
                            //MySQL Query to read data
                        $query = mysql_query("select * from cadaver", $conn);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"DataEntry.php?id={$row['controlno']}\">{$row['informant']}</a ></b>";
                            echo "<br />";
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from cadaver where controlno=$id", $conn);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                  

                            <hr>  

                            <br><br>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Client Information</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Displaying Data Read From Database -->
                                <span><b>Date:</b></span> <?php echo $row1['date']; ?>
                                <br><br> 
                                <span><b>Informant:</b></span> <?php echo $row1['informant']; ?>
                                <br><br>                
                                <span><b>Address:</b></span> <?php echo $row1['address']; ?>
                                <br><br>                
                                <span><b>Contact number:</b></span> <?php echo $row1['contactno']; ?>
                                <br><br>                
                                <span><b>Insurance:</b></span> <?php echo $row1['insurance']; ?>
                                <br><br>                
                                <span><b>Life Plan:</b></span> <?php echo $row1['lifeplan']; ?>
                                <br><br>
                                <span><b>Deceased:</b></span> <?php echo $row1['deceased']; ?>
                                <br><br>                
                                <span><b>Width:</b></span> <?php echo $row1['width']; ?>
                                <br><br>                
                                <span><b>Height:</b></span> <?php echo $row1['height']; ?>
                                <br><br>                
                                <span><b>Casket Type:</b></span> <?php echo $row1['casktettype']; ?>
                                <br><br>               
                                <span><b>Quantity:</b></span> <?php echo $row1['qty']; ?>
                                <br><br>                
                                <span><b>Total Cost:</b></span> <?php echo $row1['totalcost']; ?>
                                <br><br>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Cadaver Information</h3>     
                                </div> 
                                <br><br> 
                                <span><b>Deceased:</b></span> <?php echo $row1['cadaverdeceased']; ?>
                                <br><br>                
                                <span><b>Age:</b></span><?php echo $row1['age']; ?>
                                <br><br>                
                                <span><b>Gender:</b></span> <?php echo $row1['gender']; ?>
                                <br><br>                
                                <span><b>Mother's Name:</b></span> <?php echo $row1['mothersname']; ?>
                                <br><br>                
                                <span><b>Father's Name:</b></span> <?php echo $row1['fathersname']; ?>
                                <br><br>                
                                <span><b>Birthdate:</b></span> <?php echo $row1['birthdate']; ?>
                                <br><br>                
                                <span><b>Current Address:</b></span> <?php echo $row1['currentaddress']; ?>
                                <br><br>                
                                <span><b>Death Bertificate:</b></span> <?php echo $row1['deathcertificate']; ?>
                                <br><br>                
                                <span><b>Death Certificate Number:</b></span> <?php echo $row1['deathcertno']; ?>
                                <br><br>                
                                <span><b>Date issued:</b></span> <?php echo $row1['dateissued']; ?>
                                <br><br>                
                                <span><b>Place of Death:</b></span> <?php echo $row1['placeofdeath'];  ?>
                                <br><br>
                                <span><b>Date of Death:</b></span> <?php echo $row1['dateofdeath']; ?>
                                <br><br>                
                                <span><b>Time of Death:</b></span> <?php echo $row1['timeofdeath']; ?>
                                <br><br>                
                                <span><b>Transfer From:</b></span> <?php echo $row1['transferfrom']; ?>
                                <br><br>               
                                <span><b>Date Recieved:</b></span> <?php echo $row1['daterecieved']; ?>
                                <br><br>                
                                <span><b>Time Recieved:</b></span> <?php echo $row1['timerecieved']; ?>
                                <br><br>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Back</button>
                                    <button class="btn btn-primary pull-right" ><a href = "updatephp.php">Update</a></button>
                                </div>


                                </div>                            
                            </div>
                                <br><br>
                                 
                                
                                
                        </div>

        <?php
    }
}
?>
                                    </table>
                                </div>
                            </div>
                            
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                    <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="fa fa-search"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Who are you looking for?"/>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                               <button class="btn btn-success" data-toggle="modal" data-target="#modal_medium"><span class="fa fa-plus"></span>Add New</button>
                                            </div>
                                        </div>
                                             <div class="row">
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user3.jpg" alt="Nadia Ali"/>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Female</small>
                                        <p><small>Age Range</small><br>30-35 yrs. old
                                        <p><small>Height</small><br/>5'6"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Tattoo in right arm</p>                                   
                                    </div>
                                </div>                                          
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user.jpg" alt="Dmitry Ivaniuk"/>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Male</small>
                                        <p><small>Age Range</small><br>30-35 yrs. old
                                        <p><small>Height</small><br/>5'6"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Tattoo in both arm</p>                           
                                    </div>
                                </div>                                    
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user2.jpg" alt="John Doe"/>
                                    </div>
                                </div>                                
                               <div class="panel-body">                                    
                                    <div class="contact-info">
                                       <p><small>Female</small>
                                        <p><small>Age Range</small><br>23-25 yrs. old
                                        <p><small>Height</small><br/>5'8"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Bald</p>                         
                                    </div>
                                </div>                               
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user4.jpg" alt="Brad Pitt"/>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Male</small>
                                        <p><small>Age Range</small><br>32-34 yrs. old
                                        <p><small>Height</small><br/>6'1"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Long Hair</p>                                 
                                    </div>
                                </div>                             
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user5.jpg" alt="John Travolta"/>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Male</small>
                                        <p><small>Age Range</small><br>44-45 yrs. old
                                        <p><small>Height</small><br/>5'9"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>long hair</p>                                 
                                    </div>
                                </div>                                     
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user6.jpg" alt="Darth Vader"/>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                      <p><small>Female</small>
                                        <p><small>Age Range</small><br>40-42 yrs. old
                                        <p><small>Height</small><br/>5'10"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>birthmark in chest</p>                                   
                                    </div>  
                                </div>
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user7.jpg" alt="Samuel Leroy Jackson"/>
                                    </div>
                                </div>                                
                                 <div class="panel-body">                                    
                                    <div class="contact-info">
                                      <p><small>Male</small>
                                        <p><small>Age Range</small><br>33-35 yrs. old
                                        <p><small>Height</small><br/>5'4"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Mole in Face</p>                                   
                                    </div>
                                </div>                                  
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/no-image.jpg" alt="Samuel Leroy Jackson"/>
                                    </div>
                                </div>                                
                                 <div class="panel-body">                                    
                                    <div class="contact-info">
                                      <p><small>Male</small>
                                        <p><small>Age Range</small><br>20-55 yrs. old
                                        <p><small>Height</small><br/>5'2"</p>
                                        <p><small>Skin</small><br/>Fair complection</p>
                                        <p><small>Identification</small><br/>Tattoo in right arm</p>                                   
                                    </div>
                                </div>                               
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>                        
                    </div>
                                    </form>
                                </div>
                            </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                          <h2 class="fa fa-truck"> Hearse</h2>
                                        <div class="row">
                                        <form role = "form" class="form-horizontal" method="post">                                    
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Drivers Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ placeholder="Name">
                                                    </div>                                            
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Car Plate No</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control"/ placeholder="Plate No.">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Purpose</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Optional</label>
                                           </div>

                                           
                                            <div class="form-group">                                        
                                                <label class="col-md-5 control-label">Deliver (From) </label>
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control"/ readonly value="Alisbo">
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-5 control-label">To </label>
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <select class="validate[required] select" id="formGender" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="1">House</option>
                                                          <option value="0">Church to Cemetery</option>
                                                      </select>  
                                                    </div>            
                                                </div>
                                            </div>

                                              <div class="form-group">
                                                    <label class="col-md-5 control-label">Timeout (From)</label>
                                                     <div class="col-md-3">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                    </div>
                                                    <label class="col-md-1 control-label">To</label>
                                                   <div class="col-md-3">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                         
                                                    </div>
                                            </div>
                                              <br>
                                            <hr>
                                            <div class="form-group">                                        
                                                 <label class="col-md-3 col-xs-12 control-label">Hearse Date</label>
                                                 <div class="col-md-9 col-xs-12">
                                                     <div class="input-group">
                                                         <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                         <input type="text" class="form-control datepicker" >                                     
                                                     </div>
                                                 </div>
                                            </div>
                                              <div class="form-group">
                                                    <label class="col-md-3 control-label">Time</label>
                                                     <div class="col-md-9">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Destination (From) </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">To </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="formg-roup">
                                                <button class="btn btn-success pull-right">Save</button>
                                            </div>                                              
                                                 
                                            </div> 
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <h2 class="fa fa-bookmark"> Vigil</h2>
                                      <div class="row">
                                        <form role = "form" class="form-horizontal" method="post">                                    
                                        <div class="col-md-6">
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="Date" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Control No.</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" class="form-control"/ placeholder="Control No.">
                                                    </div>                                            
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label class="col-md-3 control-label">Preference</label>
                                                     <div class="col-md-9">
                                                      <select class="validate[required] select" id="formGender">
                                                          <option value="">Choose option</option>
                                                          <option value="1">Alisbo Memorial Chapel</option>
                                                          <option value="0">House</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Chapel Code</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ placeholder="Chapel Code">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label class="col-md-3 control-label">Room Type</label>
                                                     <div class="col-md-9">
                                                      <select class="validate[required] select" id="formGender">
                                                          <option value="">Choose option</option>
                                                          <option value="1">Aircon</option>
                                                          <option value="0">Non-Aircon</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Vigil Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="Date" placeholder="Date">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Duration (Days)</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" class="form-control"/ placeholder="Duration">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <hr>
                                            <label>Vigil Equipment</label>
                                            
                                            </div>
                                         </form>
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
        
        
        <!-- cadaver modal-->
        <div class="modal fadein" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Add Client</h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                            <h2 class="fa fa-group"> Client</h2>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name = "date" value="Date" placeholder="Date" required="">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                        
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Informant </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "informant" placeholder="Name" required="">
                                                    </div>            
                                                </div>
                                            </div>

                                               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Address</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name ="address" placeholder="Address" required="">
                                                    </div>            
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-md-3 control-label">Contact No:</label>    
                                            <div class="col-md-9">
                                                <input type="text" class=" form-control" name = "contactno" value="" required="" />
                                            </div>
                                        </div>
                                            
                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Insurance (Life Plan)</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "insurance" placeholder="Insurance" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Life Plan Policy</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="mask_percent form-control" name = "lifeplan" value="" required="" />
                                                </div>
                                            </div>
                                            <hr>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Deceased </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "deceased" placeholder="Name" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Dimension</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Width</span>
                                                        <input type="text" class="form-control"/ name = "width" placeholder="inches" required="">
                                                        <span class="input-group-addon">Height</span>
                                                        <input type="text" class="form-control"/ name = "height" placeholder="inches" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label class="col-md-3 control-label">Casket Type:</label>
                                                     <div class="col-md-3">
                                                      <select class="validate[required] select" name = "casktettype" id="FormCasket" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="Wood">Wood</option>
                                                          <option value="Metal">Metal</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>
                                               <div class="form-group">
                                                <label class="col-md-3 control-label">Qty.</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-sort"></span></span>
                                                        <input type="number" class="form-control"/ name = "qty" placeholder="Qty" required="">
                                                    </div>                                            
                                                </div>
                                            </div><br>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label">Total Cost</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-ruble"></span></span>
                                                        <input type="number" class="form-control"/ name = "totalcost" placeholder="Total" required="">
                                                    </div>                                            
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <h2 class="fa fa-group"> Cadaver</h2>

                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Deceased </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "cadaverdeceased" placeholder="Name" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Age</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" class="form-control"/ name = "age" placeholder="Age" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label class="col-md-3 control-label">Gender</label>
                                                     <div class="col-md-3">
                                                      <select class="validate[required] select" name = "gender" id="formGender" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>  
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Mothers Name </label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "mothersname" placeholder="Name" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Fathers Name</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "fathersname" placeholder="Name" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Birthdate</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name = "birthdate" value="Date" placeholder="Date" required="">                                            
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Current Address</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "currentaddress" placeholder="Address" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Death Certificate</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                   <form>
                                                     <label class="radio-inline">
                                                       <input type="radio"  name = "deathcertificate" value = "Yes">Yes
                                                     </label>
                                                      <label class="radio-inline">
                                                       <input type="radio"  name = "deathcertificate" value = "No">No
                                                     </label>
                                                  </form>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Death Certificate No.</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-sort"></span></span>
                                                        <input type="number" class="form-control"/ name = "deathcertno" placeholder="Control No." required="">
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date Issued</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name = "dateissued" value="Date" placeholder="Date" required="">                                            
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Place of Death</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "placeofdeath" placeholder="Address" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date of Death</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name = "dateofdeath" value="Date" placeholder="Date" required="">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Time of Death</label>
                                                     <div class="col-md-9">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker" name = "timeofdeath" required="" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                    </div>
                                            </div>
                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Transfer From</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/ name = "transferfrom" placeholder="Address" required="">
                                                    </div>            
                                                </div>
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date of Received</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name = "daterecieved" value="Date" placeholder="Date" required="">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Time of Received</label>
                                                     <div class="col-md-9">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker" name = "timerecieved" required="" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                    </div>
                                            </div><br>
                                         <div class="panel-footer">
                                                 <button class="btn btn-warning" name = "clear">Clear Form</button>                                    
                                                 <button class="btn btn-success pull-right" name = "save" href = "DataEntry.php" >Save</button>

                                            </div>
                                        </div>
                                        </form>
                                        </div>                                   
                                     </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- unidentified modal-->
         <div class="modal" id="modal_medium" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Add New</h4>
                    </div>
                    <div class="modal-body">
                       <div class="tab-pane active" id="tab-second">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                  <div class="col-md-6">
                                            <h2 class="fa fa-group"> Corpse</h2>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Control No.</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-sort"></span></span>
                                                        <input type="number" class="form-control"/ name = "controlno" placeholder="Control No.">
                                                    </div> 
                                             <div class="form-group">
                                                 <label class="col-md-3 control-label">Gender</label>
                                                     <div class="col-md-3">
                                                      <select class="validate[required] select" id="formGender" data-style="btn-success">
                                                          <option value="">Choose option</option>
                                                          <option value="1">Male</option>
                                                          <option value="0">Female</option>
                                                      </select>                           
                                                     </div><br>
                                         <div class="panel-footer">
                                                 <button class="btn btn-warning">Clear Form</button>                                    
                                                 <button class="btn btn-success pull-right">Save</button>
                                         </div>
                                            </div>
                                                </div>
                                            </div>                                   
                                                </div>
                                            </form>
                                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div>
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

        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>