<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "", "alisbo");
$output = '';
if(isset($_POST["export"])){
 $query = "SELECT cadaverentry.cadaverdeceased, client.informant, casket.choosecasket, casket.dimension, casket.type, casket.color, casket.qty, casket.price, casket.date, casket.total FROM casket INNER JOIN cadaverentry ON cadaverentry.cadaverentry_id = casket.cadaverentry_id INNER JOIN client ON client.client_id = casket.client_id";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0){
  $output .= '
   <table class="table" bordered="1">  
                    <center><h3>Alisbo Memorial Chapels MIS</p></h3> 
                    <p>Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental</p>
                    <p>(034) 434-0290</p>
                    <p><h4>Materials Report</h4></p></center><br>
                    <tr> 
                        <th>Informant</th>
                        <th>Cadaver Name</th>
                        <th>Casket Dimension</th>
                        <th>Casket Type</th>
                        <th>Casket Quantity</th>
                        <th>Total Cost</th>
                        <th>Date Added</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result)){
   $output .= '
                    <tr><center>  
                         <td>'.$row["informant"].'</td>  
                         <td>'.$row["cadaverdeceased"].'</td>  
                         <td>'.$row["dimension"].'</td>
                         <td>'.$row["choosecasket"].'</td>
                         <td>'.$row["qty"].'</td>
                         <td>'.$row["total"].'</td>
                         <td>'.$row["date"].'</td> 

                    </tr></center>
   ';
  }
  
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Casket Report.xls');
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
        $this->Cell(292,5,'Casket Report
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
        $this->Cell(145,8,'Current Casket Details as of Year 2018',0,0,'C');
        $this->Ln();
        $this->Cell(0.1);
        $this->SetFont('Times','B',10);
        $this->Cell(45,8,'Informant',1,0,'C');
        $this->Cell(75,8,'Cadaver Name',1,0,'C');
        $this->Cell(30,8,'Casket Dimension',1,0,'C');
        $this->Cell(30,8,'Casket Type',1,0,'C');
        $this->Cell(30,8,'Casket Quantity',1,0,'C');
        $this->Cell(30,8,'Total Cost',1,0,'C');
        $this->Cell(30,8,'Date Added',1,0,'C');
        $this->Ln();

    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('SELECT cadaverentry.cadaverdeceased, client.informant, casket.choosecasket, casket.dimension, casket.type, casket.color, casket.qty, casket.price, casket.date, casket.total FROM casket INNER JOIN cadaverentry ON cadaverentry.cadaverentry_id = casket.cadaverentry_id INNER JOIN client ON client.client_id = casket.client_id');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(0.1);
            $this->Cell(45,8,$data->informant,1,0,'C');
            $this->Cell(75,8,$data->cadaverdeceased,1,0,'C');
            $this->Cell(30,8,$data->dimension,1,0,'C');
            $this->Cell(30,8,$data->choosecasket,1,0,'C');
            $this->Cell(30,8,$data->qty,1,0,'C');
            $this->Cell(30,8,$data->total,1,0,'C');
            $this->Cell(30,8,$data->date,1,0,'C');
            $this->Ln();
        }
            $this->Ln(35);
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
