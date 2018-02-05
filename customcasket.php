<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>ALISBO MIS</title>
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
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="home.php">Alisbo MIS</a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                            <img src="img/A.png" alt="John Doe"/>
                        </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="img/A.png" alt="John Doe" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">ADMIN</div>

                        </div>
                    </div>
                </li>
                <li class="xn-title">Navigation</li>
                <li class="active">
                    <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                </li>

                <li class="xn-title">Components</li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Data Entry</span></a>
                    <ul>
                        <li><a href="DataEntry.html"><span class="fa fa-users"></span>Client & Cadaver</a></li>
                        <li><a href="Unidentified Corpse.html"><span class="fa fa-user"></span>Unidentified Corpse</a></li>
                        <li><a href="Hearse.html"><span class="fa fa-truck"></span>Hearse</a></li>
                        <li><a href="Viewing.html"><span class="fa fa-bookmark"></span>Viewing</a></li>
                        <li><a href="Casket.html"><span class="fa fa-archive"></span>Casket</a></li>
                        <li><a href="Insurance.html"><span class="fa fa-file-text-o"></span>Insurance</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href=""><span class="fa fa-briefcase"></span> <span class="xn-text">Services</span></a>
                    <ul>
                        <li><a href="Caskets.html"><span class="fa fa-archive"></span> Casket</a></li>
                        <li><a href="Schedule.html"><span class="fa fa-calendar"></span> Schedule</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Monitoring</span></a>
                    <ul>
                        <li><a href="Chemicals.html"><span class="fa fa-flask"></span>Chemicals</a></li>
                        <li><a href="table-datatables.html"><span class="fa fa-wrench"></span>Equipment</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="tables.html"><span class="fa fa-clipboard"></span> <span class="xn-text">Reports</span></a>
                    <ul>
                        <li><a href="CadaverReport.html"><span class="fa fa-male"></span>No. of Cadaver Served</a></li>
                        <li><a href="CasketReport.html"><span class="fa  fa-archive"></span>No of Casket Sold </a></li>
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
                    <a href="#"><span class="fa fa-comments"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
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
                    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <ul class="list-inline item-details">
                                <li><a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin templates</a></li>
                                <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
                <!-- TASKS -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-tasks"></span></a>
                    <div class="informer informer-warning">3</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                            <div class="pull-right">
                                <span class="label label-warning">3 active</span>
                            </div>
                        </div>
                        <div class="panel-body list-group scroll" style="height: 200px;">
                            <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                            <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                            <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                            <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-tasks.html">Show all tasks</a>
                        </div>
                    </div>
                </li>
                <!-- END TASKS -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb push-down-0">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Calendar</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- START CONTENT FRAME -->

            <div class="page-content-frame">

                <div class="content-frame-body content-frame-body-left">
                    <div class="col">
                        <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h2><span class="fa fa-image"></span>Customized Casket</h2>
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
                                                <input type="number" class="form-control" / placeholder="Qty.">
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
                                        <label class="col-md-3 control-label">Note</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Price</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-ruble"></span></span>
                                                <input type="number" class="form-control" / placeholder="Total">
                                            </div>
                                        </div>
                                    </div> <br>
                                    <center>
                                        <button type="button" class="btn btn-info">Save</button>&nbsp;
                                        <button type="button" class="btn btn-danger btn-md">Cancel</button>
                                    </center>
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
                                    <img src="assets/images/gallery/casket-1.jpg" alt="Image 1" />
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
                                    <img src="assets/images/gallery/casket-2.jpg" alt="Image 2" />
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
                                    <img src="assets/images/gallery/casket-3.jpg" alt="Image 3" />
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
                                    <img src="assets/images/gallery/casket-4.jpg" alt="Casket 4" />
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
                                    <img src="assets/images/gallery/casket-5.jpg" alt="Image 5" />
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
                    </div>
                </div>
                <!-- END CONTENT FRAME BODY -->
            </div>
        </div>

        <!-- END CONTENT FRAME -->



        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- BLUEIMP GALLERY -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <!-- END BLUEIMP GALLERY -->

    <!-- MESSAGE BOX-->
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
                        <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
    <script type="text/javascript" src="js/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="js/plugins/icheck/icheck.min.js"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->

    <script>
        document.getElementById('links').onclick = function(event) {
            event = event || window.event;
            var target = event.target || event.srcElement;
            var link = target.src ? target.parentNode : target;
            var options = {
                index: link,
                event: event,
                onclosed: function() {
                    setTimeout(function() {
                        $("body").css("overflow", "");
                    }, 200);
                }
            };
            var links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };

    </script>

    <!-- END SCRIPTS -->
</body>

</html>
