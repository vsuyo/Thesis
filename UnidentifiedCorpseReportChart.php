
<!DOCTYPE html>
<html lang="en">

	<head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
		<title>Unidentified Corpse Report</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="js/jquery.min.js"></script>
		<script src = "js/jquery.canvasjs.min.js"></script>
		<?php require 'js/charteasy/UnidentifiedCorpseChart.php'?>
        
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
			<div id="UnidentifiedCorpseChart" style="width: 100%; height: 400px"></div>
		</div>
        
        <form method="post" action="UnidentifiedCorpseReport.php">
        <input type="submit" class="btn btn-success" value="Back to Report Table" />

        </form>
        
		
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'UnidentifiedCorpseReportChart.php?year='+year;
				});
			});
		</script>
         <script>
            function oCorpseGender() {
                myWindow = window.open("filter_ucgender.php?year=<?php echo $year?>", "", "width=1350, height=650");
            }
            
        </script>
        

	</body>
</html>