<?php

$conn = new mysqli("localhost", "root", "", "alisbo") or die(mysqli_error()); // alisbo will be backed up

//get all tables
$tables = array();
$result = mysqli_query($conn,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
	$tables[] = $row[0];
}

$return = '';
foreach($tables as $table){
	$result = mysqli_query($conn,"select * from ".$table);
	$num_fields = mysqli_num_fields($result);

	//$return .= 'DROP TABLE '.$table.';';
	$row2 = mysqli_fetch_row(mysqli_query($conn,'SHOW CREATE TABLE '.$table));
	$return .= "

".$row2[1].";

";

	for($i=0;$i<$num_fields;$i++){
		while($row = mysqli_fetch_row($result)){
			$return .= "INSERT INTO ".$table." VALUES(";
			for($j=0;$j<$num_fields;$j++){
				$row[$j] = addslashes($row[$j]);
				if(isset($row[$j])){ $return .='"'.$row[$j].'"';}else{ $return .= '""';}
				if($j<$num_fields-1){ $return .= ',';}
			}
			$return .= ");
";
		}
	}
	$return .= "


";
}

//save file
$handle = fopen('Alisbo_Backup_'.date('Y_m_d_H_i_s').'.sql','w+');
fwrite($handle,$return);
fclose($handle);
echo '<script>alert("Succesfully Added!"); window.location.href="Backup.php"</script>';

exit;