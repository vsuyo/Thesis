<?php
include('cadaver.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Alisbo Cadaver</title>
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
        <?php require 'require/sidebar.php'?>
        <!-- PAGE CONTENT -->
        <div class="page-content">

            <?php require 'require/vertical-navigation.php'?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Data Entry</a></li>
                <li class="active">
                <strong><mark>Normal Casket</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="panel-body">
             <div class="page-content-frame">   
                                      
                    <div class="content-frame-body content-frame-body-left">
                                        <div class="col">
                                        <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">                          <div class="col-md-6">
                                         <div class="page-title">                    
                                        <h2><span class="fa fa-image"></span>Normal Casket</h2>
                                        </div>    
                                           <div class="content-frame">   
                                                                   
                                               <div class="form-group">
                                                 <label class="col-md-3 control-label">Dimension</label>
                                                     <div class="col-md-3">
                                                      <select class="validate[required] select" id="dimension">
                                                          <option value="">Choose Dimension</option>
                                                          <option value="1">19 x 72</option>
                                                          <option value="0">17 X 72</option>                                               
                                                          <option value="0">15 X 72</option>
                                                      </select>                           
                                                     </div>                        
                                            </div>                                                      
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Qty.</label>
                                                <div class="col-md-4">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-sort"></span></span>
                                                        <input type="number" class="form-control"/ placeholder="Qty.">
                                                    </div>                                            
                                                </div>
                                            </div>                                                       
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Material</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                   <form>
                                                     <label class="radio-inline">
                                                       <input type="checkbox" name="checkbox">Wood
                                                     </label>
                                                      <label class="radio-inline">
                                                       <input type="checkbox" name="checkbox">Metal
                                                     </label>
                                                  </form>
                                                </div>
                                            </div>                                                      
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Color</label>
                                                <div class="col-md-9">
                                                   <form>
                                                     <label class="radio-inline">
                                                       <input type="checkbox" name="checkbox">White
                                                     </label>
                                                      <label class="radio-inline">
                                                       <input type="checkbox" name="checkbox">Silver
                                                     </label>
                                                  </form>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                            <label class="col-md-3 control-label">Price</label>
                                                 <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-ruble"></span></span>
                                                    <input type="number" class="form-control"/ placeholder="Total">
                                                    </div>                                            
                                                </div>
                                          </div> <br>                  
                            
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->                        
                    </div>             
                    </form>
                    </div>
                        <div class="col-md-6">
                          <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Casket Designs</h2>
                        </div> 
                      
                       <div class="gallery" id="links"> 
                            <a class="gallery-item" href="assets/images/gallery/casket-1.jpg" title="Casket 1" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-1.jpg" alt="Image 1"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 1</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Wood</p>
                                    <p style="text-indent: 20px">17" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">20000</p>
                                </div>                                
                            </a>
                            <a class="gallery-item" href="assets/images/gallery/casket-2.jpg" title="Casket 2" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-2.jpg" alt="Image 2"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 2</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Wood</p>
                                     <p style="text-indent: 20px">18" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">25000</p>
                                </div>                                
                            </a>
                             <a class="gallery-item" href="assets/images/gallery/casket-3.jpg" title="Casket 3" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-3.jpg" alt="Image 3"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 3</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Wood</p>
                                     <p style="text-indent: 20px">19" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">30000</p>
                                </div>                                
                            </a>
                             <a class="gallery-item" href="assets/images/gallery/casket-4.jpg" title="Casket 4" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-4.jpg" alt="Casket 4"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 4</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Wood</p>
                                     <p style="text-indent: 20px">17" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">20000</p>
                                </div>                                
                            </a>
                             <a class="gallery-item" href="assets/images/gallery/casket-5.jpg" title="Casket 5" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-5.jpg" alt="Image 5"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 5</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Wood</p>
                                     <p style="text-indent: 20px">15" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">22000</p>
                                </div>                                
                            </a>
                             <a class="gallery-item" href="assets/images/gallery/casket-6.jpg" title="Casket 6" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-6.jpg" alt="Image 6" />                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 6</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Metal</p>
                                     <p style="text-indent: 20px">19" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">40000</p>
                                </div>                                
                            </a>
                            <a class="gallery-item" href="assets/images/gallery/casket-6.jpg" title="Casket 6" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-6.jpg" alt="Image 6" />                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 6</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Metal</p>
                                     <p style="text-indent: 20px">19" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">40000</p>
                                </div>                                
                            </a>
                            <a class="gallery-item" href="assets/images/gallery/casket-6.jpg" title="Casket 6" data-gallery>
                                <div class="image">                              
                                    <img src="assets/images/gallery/casket-6.jpg" alt="Image 6" />                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Casket 6</strong>
                                    <span> Details:</span>
                                    <p style="text-indent: 20px">Metal</p>
                                     <p style="text-indent: 20px">19" X 72"</p>
                                     <p style="text-indent: 20px">white</p>
                                     <p style="text-indent: 20px">40000</p>
                                </div>                                
                            </a>
                        </div>  
                            <div class="footer">
                            <center>             
                             <button type="button" class="btn btn-success fa fa-check"> Save</button>&nbsp;
                             <button type="button" class="btn btn-danger btn-md fa fa-times-circle"> Cancel</button>
                            </center>
                            </div><hr>   
                        </div>
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                 </div>
                </div> 
               
           <?php require 'require/footer.php' ?>
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

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
