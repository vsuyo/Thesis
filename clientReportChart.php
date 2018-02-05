
<!DOCTYPE html>
<html lang="en">

    <head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
        <title>Client Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/clientChart.php'?>
        <!-- META SECTION -->   
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="img/A.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css" />
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <div class="btn-group pull-left">
            <div class="btn-group">
                <a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Filter by<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" onclick="oGender()">Cadaver Gender</a></li>
                </ul>
            </div>
        </div>

        <div class="btn-group pull-center">
            <div class="pull-center">
                <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
                    <option value="<?php 
    if(isset($_GET['year'])){
        $value=$_GET['year']; 
        echo $value;
    }
        else{
            echo date('Y');
        }
                                   ?>">
                        <?php 
                        if(isset($_GET['year'])){
                            $value=$_GET['year']; 
                            echo $value;
                        }
                        else{
                            echo date('Y');
                        }
                        ?></option>
                    <?php
                    for($y=2013; $y<=2025; $y++){
                    ?>
                    <option value="<?php echo $y ?>"><?php echo $y; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="panel-body">
            <div id="clientChart" style="width: 100%; height: 400px"></div>
        </div>
        <form method="post" action="Client&cadaverReport.php">
            <input type="submit" class="btn btn-success" value="Back to Report Table" />

        </form>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'clientReportChart.php?year='+year;
                });
            });
        </script>
        <script>
            function oGender() {
                myWindow = window.open("filter_gender.php?year=<?php echo $year?>", "", "width=1350, height=650");
            }
        </script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>

    </body>
</html>