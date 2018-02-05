<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "alisbomemchap");
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
  header('Content-Type: application/docx');
  header('Content-Disposition: attachment; filename=download.docx');
  echo $output;
 }
}
?>


<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=alisbomemchap','root','');

class myPDF extends FPDF{
    function header(){
        $this->image('ALISBOLOGO.png',101);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Unidentified Corpse',0,0,'C');
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
        $this->Cell(25,10,'Date',1,0,'C');
        $this->Cell(35,10,'Control Number',1,0,'C');
        $this->Cell(25,10,'Gender',1,0,'C');
        $this->Cell(35,10,'Age',1,0,'C');
        $this->Cell(38,10,'Length (in Inches)',1,0,'C');
        $this->Cell(35,10,'Skin Type',1,0,'C');
        $this->Cell(90,10,'Identification',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from unidentifiedcorpse');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(25,10,$data->date,1,0,'C');
            $this->Cell(35,10,$data->controlNo,1,0,'C');
            $this->Cell(25,10,$data->gender,1,0,'C');
            $this->Cell(35,10,$data->age,1,0,'C');
            $this->Cell(38,10,$data->height,1,0,'C');
            $this->Cell(35,10,$data->skinType,1,0,'C');
            $this->Cell(90,10,$data->identification,1,0,'L');
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
?>
