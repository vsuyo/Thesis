<link rel="stylesheet" href="css/app.min.css">
<link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

<?php include("includes/header.php"); ?>


 
                <div class="content__inner">

                            <div class="quick-stats__chart peity-bar"></div>
                        </div>
                    </div>



                    <div class="row">
                    <div class="col-sm-6 col-md-12">
                    <header class="content__title content__title--calendar">
                        <h1>Calendar</h1>
                        <div class="actions actions--calendar">
                        <a href="#" class="actions__item actions__calender-prev"><i class="zmdi zmdi-long-arrow-left"></i></a>
                        <a href="#" class="actions__item actions__calender-next"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        <i class="actions__item actions__item--active zmdi zmdi-view-comfy" data-calendar-view="month"></i>
                        <i class="actions__item zmdi zmdi-view-week" data-calendar-view="basicWeek"></i>
                        <i class="actions__item zmdi zmdi-view-day" data-calendar-view="basicDay"></i>
                        </div>
                    </header>

                    <div class="calendar card"></div>


                </div>
            </div>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

        <!-- App functions and actions -->

        <!-- Calendar Script -->
        <script type="text/javascript">
            'use strict';
            $(document).ready(function() {
                var date = new Date();
                var m = date.getMonth();
                var y = date.getFullYear();

                $('.calendar').fullCalendar({
                    header: {
                        right: '',
                        center: '',
                        left: ''
                    },
                    buttonIcons: {
                        prev: 'calendar__prev',
                        next: 'calendar__next'
                    },
                    theme: false,
                    selectable: true,
                    selectHelper: true,
                    editable: false,
                    events: jArray,
                    viewRender: function (view) {
                        var calendarDate = $('.calendar').fullCalendar('getDate');
                        var calendarMonth = calendarDate.month();


                        //Set title in page header
                        $('.content__title--calendar > h1').html(view.title);
                    },
                    eventClick: function (event, element) {
                        $('#edit-event').modal('show');
                        $('.edit-event__title').val(event.title);
                        $('.edit-event__start').val(event.start);
                        $('.edit-event__description').val(event.description);
                        $('.edit-event__chapel').val(event.chapel);
                        
                    }


                });
                //Calendar views switch
                $('body').on('click', '[data-calendar-view]', function(e){
                    e.preventDefault();

                    $('[data-calendar-view]').removeClass('actions__item--active');
                    $(this).addClass('actions__item--active');
                    var calendarView = $(this).attr('data-calendar-view');
                    $('.calendar').fullCalendar('changeView', calendarView);
                });


                //Calendar Next
                $('body').on('click', '.actions__calender-next', function (e) {
                    e.preventDefault();
                    $('.calendar').fullCalendar('next');
                });


                //Calendar Prev
                $('body').on('click', '.actions__calender-prev', function (e) {
                    e.preventDefault();
                    $('.calendar').fullCalendar('prev');
                });
            });
        </script>
        <?php 
                $conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error());
                $result = mysqli_query($conn, "SELECT * FROM hearsetrans ");
                $events = array();
                while ($res = mysqli_fetch_array($result)) { 
                $clientID = $res['client_id'];
                
                  
                $result1 = mysqli_query($conn, "SELECT * FROM client where client_id = '$clientID'");
                
                
                while ($res1 = mysqli_fetch_array($result1)) {
                    
                        $e = array();
                        $e['title'] = $res1['informant'];
                        $e['start'] = $res['hearsedate'];
                        $e['description'] = date("h:i a", strtotime($res['time']));
                        
                        // Merge the event array into the return array
                        array_push($events, $e);

                }


                    // Output json for our calendar
                    
            }
            
    ?>

    
    <div class="modal fade" id="edit-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title">Hearse Details</h5>
                                    <br><br>
                                    <form class="edit-event__form">
                                        <div class="form-group">
                                            <label for="patient_Name">Client Name</label>
                                            <input type="text" class="form-control edit-event__title" placeholder="Event Title" name="patient_Name" disabled>
                                            <i class="form-group__bar"></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="sched_Time">Time</label>
                                            <input type="text" name="sched_Time" disabled class="form-control edit-event__description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                            <i class="form-group__bar"></i>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="chapel_code">Chapel Code</label>
                                            <input type="text" name="chapel_code" disabled class="form-control edit-event__chapel textarea-autosize" placeholder="Event Desctiption"></textarea>
                                            <i class="form-group__bar"></i>
                                            
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    
                                    <button class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
    </div>

    <script type="text/javascript">var jArray =<?php echo json_encode($events); ?></script>
    </body>
        </html>