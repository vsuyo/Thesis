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
    <center><h3>Alisbo Memorial Chapels MIS</p></h3> 
                    <p>Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental</p>
                    <p>(034) 434-0290</p>
        
                    <center><p><h2>Hearse Report</h2></p></center><br>
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
  header('Content-Disposition: attachment; filename=Hearse Report.xls');
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
        if ($this->page == 1)
        {
        $this->image('ALISBOLOGO.png',101);
        $this->SetFont('Times','',12);
        $this->Cell(276,5,'(034) 434-0290',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,' Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental',0,0,'C');
        $this->Ln(15);
        $this->SetFont('Times','',12);
        $tDate = date("F j, Y");
        $this->Cell(480,5,' Date Report:  '.$tDate,0,0,'C');
        $this->Ln(11);
        $this->SetFont('Arial','B',14);
        $this->Cell(290,5,'Hearse Report
        ',0,0,'C');
        $this->SetLineWidth(0.01);
        $this->Line(25, 85, 310-30, 85);
        $this->Line(25, 75, 310-30, 75);
        $this->Ln(12);
        }
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
        $this->Cell(65);
        $this->SetFont('Times','B',10);
        $this->Cell(45,8,'Informant',1,0,'C');
        $this->Cell(45,8,'Driver Name',1,0,'C');
        $this->Cell(30,8,'Plate Number',1,0,'C');
        $this->Cell(35,8,'Hearse Date',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('SELECT client.informant, hearse.DriverName, car.plateno, hearsetrans.purpose, hearsetrans.deliver, hearsetrans.to, hearsetrans.timeoutfrom, hearsetrans.timeoutto, hearsetrans.hearsedate, hearsetrans.time, hearsetrans.destinationfrom, hearsetrans.destinationto, hearsetrans.hearse_id  FROM hearsetrans INNER JOIN client ON client.client_id = hearsetrans.client_id INNER JOIN  hearse ON hearse.hearse_id = hearsetrans.hearse_id INNER JOIN car ON car.car_id = hearsetrans.car_id ');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(65);
            $this->Cell(45,8,$data->informant,1,0,'C');
            $this->Cell(45,8,$data->DriverName,1,0,'C');
            $this->Cell(30,8,$data->plateno,1,0,'C');
            $this->Cell(35,8,$data->hearsedate,1,0,'C');
            $this->Ln();
        }
            $this->Ln(20);
            $this->Cell(70);
            $this->Cell(310,5,'__________________           __________________',0,0,'C');
            $this->Ln(7);
            $this->Cell(190);      
            $this->Cell(317,5,'Prepared By                         Approved By ',0,0,'');
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

