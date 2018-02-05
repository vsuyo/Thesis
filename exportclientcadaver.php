<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "", "alisbo");
$output = '';
if(isset($_POST["export"])){
 $query = "SELECT client.informant, client.date, cadaverentry.cadaverdeceased, cadaverentry.age, cadaverentry.gender, cadaverentry.birthdate FROM client  INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) >= 0){
  $output .= '
   <table class="table" bordered="1">
   <center><h3>Alisbo Memorial Chapels MIS</p></h3> 
                    <p>Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental</p>
                    <p>(034) 434-0290</p>
        
                    <center><p><h2>Chemicals Report</h2></p></center><br>
                    <tr>  
                        <th>Informant</th>
                        <th>Deceased</th>
                        <th>Deceased Age</th>
                        <th>Deceased Gender</th>
                        <th>Deceased Birthdate</th>
                        <th>Date Added</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result)){
   $output .= '
                    <tr>  
                         <td>'.$row["informant"].'</td> 
                         <td>'.$row["cadaverdeceased"].'</td> 
                         <td>'.$row["age"].'</td> 
                         <td>'.$row["gender"].'</td> 
                         <td>'.$row["birthdate"].'</td> 
                         <td>'.$row["date"].'</td> 

                    </tr>
   ';
  }
  
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Client & Cadaver Report.xls');
  echo $output;
 }
}
?>


<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=alisbo','root','');

if(isset($_POST["export2"]))
{

class myPDF extends FPDF{
   function header(){
        $this->image('ALISBOLOGO.png',101);
        $this->SetFont('Arial','B',14);
        $this->Cell(292,5,'Chemicals Report
        ',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'(034) 434-0290',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,5,' Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental',0,0,'C');
        $this->Ln(15);
        $this->Cell(55,5,' Prepared By: ',0,0,'C');
        $this->Cell(350,5,' Date Report: ',0,0,'C');
        $this->SetLineWidth(0.01);
        $this->Line(25, 85, 310-30, 85);
        $this->Ln(20);
    }
    function footer(){
         $this->SetY(-15);
        $this->SetFont('Arial','',7);
        $this->Cell(0,-10,'Alisbo Memorial Chapels MIS | Notorious Trio 2017-2018 | Entes | Molabin | Suyo ',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',8);
        $this->Cell(0,30,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',13);
        $this->Cell(70);
        $this->Cell(145,8,'Current Hearsing Details as of Year 2018',0,0,'C');
        $this->Ln();
        $this->Cell(15);
        $this->SetFont('Times','B',10);
        $this->Cell(45,8,'Informant',1,0,'C');
        $this->Cell(30,8,'Deceased',1,0,'C');
        $this->Cell(45,8,'Deceased Age',1,0,'C');
        $this->Cell(45,8,'Deceased Gender',1,0,'C');
        $this->Cell(45,8,'Deceased Birthdate',1,0,'C');
        $this->Cell(45,8,'Date Added',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('SELECT client.informant, client.date, cadaverentry.cadaverdeceased, cadaverentry.age, cadaverentry.gender, cadaverentry.birthdate FROM client  INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(15);
            $this->Cell(45,8,$data->informant,1,0,'C');
            $this->Cell(30,8,$data->cadaverdeceased,1,0,'C');
            $this->Cell(45,8,$data->age,1,0,'C');
            $this->Cell(45,8,$data->gender,1,0,'C');
            $this->Cell(45,8,$data->birthdate,1,0,'C');
            $this->Cell(45,8,$data->date,1,0,'C');
            $this->Ln();
        }
        $this->Ln(20);
            $this->Cell(480,5,'__________________',0,0,'C');
            $this->Ln();
            $this->Cell(480,5,' Approved By ',0,0,'C');
        }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
}
?>
