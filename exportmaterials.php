<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "", "alisbo");
$output = '';
if(isset($_POST["export"])){
 $query = "SELECT * FROM materialstocktrans";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0){
  $output .= '
   <table class="table" bordered="1"> 
    <center><h3>Alisbo Memorial Chapels MIS</p></h3> 
                    <p>Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental</p>
                    <p>(034) 434-0290</p>
        
                    <center><p><h2>Materials Report</h2></p></center><br>
                    <tr>  
                        <th>Material Name</th>
                        <th>Material Description</th>
                        <th>Quantity</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result)){
   $output .= '
                    <tr>  
                         <td>'.$row["matName1"].'</td>  
                         <td>'.$row["matDesc1"].'</td>  
                         <td>'.$row["qty1"].'</td>       

                    </tr>
   ';
  }
  
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=MaterialReport.xls');
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
        $this->Cell(290,5,'Vigil Materials Report
        ',0,0,'C');
        $this->SetLineWidth(0.01);
        $this->Line(25, 85, 310-30, 85);
        $this->Line(25, 75, 310-30, 75);
        $this->Ln(12);
        }
    }
   function footer(){
         if ($this->page == 1)
        {
        $this->SetY(-20);
        $this->Cell(70);
        $this->Cell(310,5,'__________________           __________________',0,0,'C');
        $this->Ln(7);
        $this->Cell(190);      
        $this->Cell(317,5,'Prepared By                         Approved By ',0,0,'');
        $this->SetY(-2);
        $this->SetFont('Arial','',7);
        $this->Cell(0,-10,'Alisbo Memorial Chapels MIS | Notorious Trio 2017-2018 | Entes | Molabin | Suyo ',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',8);
        $this->Cell(0,20,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->Ln(20);
        }
    }
     function headerTable(){
        $this->SetFont('Times','B',13);
        $this->Cell(70);
        $this->Cell(145,8,'Current Vigil Material Details as of Year 2018',0,0,'C');
        $this->Ln();
        $this->Cell(75);
       $this->SetFont('Times','B',12);
        $this->Cell(45,8,'Material Name',1,0,'C');
        $this->Cell(45,8,'Description',1,0,'C');
        $this->Cell(45,8,'Quantity',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from materialstocktrans');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(75);
            $this->Cell(45,8,$data->matName1,1,0,'C');
            $this->Cell(45,8,$data->matDesc1,1,0,'C');
            $this->Cell(45,8,$data->qty1,1,0,'C');
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
