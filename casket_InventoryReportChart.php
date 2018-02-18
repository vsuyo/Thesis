
<!DOCTYPE html>
<html lang="en">

	<head>
        <div><center><img src="img/ALISBOLOGO3.png"/></center></div>
		<title>Casket Report</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="js/jquery.min.js"></script>
		<script src = "js/jquery.canvasjs.min.js"></script>
		<?php require 'js/charteasy/casket_inv.php'?>
	</head>
    
	<body>
		<div class="btn-group pull-right">
			<div class="pull-left">
				<select id="pyear" class="validate[required] select" data-style="btn btn-success" data-live-search="true">
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
			<div id="casket_inv" style="width: 100%; height: 400px"></div>
		</div>

		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'casket_InventoryReportChart.php?year='+year;
				});
			});
		</script>
	</body>
</html>