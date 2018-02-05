<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "alisbo");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM hearsetrans";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Informant</th>
                        <th>Driver Name</th>
                        <th>Plate No.</th>
                        <th>Hearse Date</th> 
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                    <tr>  
                         <td>'.$row["informant"].'</td>  
                         <td>'.$row["DriverName"].'</td>  
                         <td>'.$row["carplateno"].'</td>  
                         <td>'.$row["hearsedate"].'</td>  

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
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
        $this->Cell(276,5,'Hearse Report
        ',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,' Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(45,10,'Informant',1,0,'C');
        $this->Cell(45,10,'Driver Name',1,0,'C');
        $this->Cell(30,10,'Plate Number',1,0,'C');
        $this->Cell(35,10,'Hearse Date',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from hearsetrans');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(45,10,$data->informant,1,0,'C');
            $this->Cell(45,10,$data->DriverName,1,0,'C');
            $this->Cell(30,10,$data->carplateno,1,0,'C');
            $this->Cell(35,10,$data->hearsedate,1,0,'C');
            $this->Ln();
        }
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
