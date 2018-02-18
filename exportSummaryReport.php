<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "", "alisbo");
$output = '';
if(isset($_POST["export"])){
 $query = "SELECT client.informant, client.client_id,cadaverentry.deathcertno , cadaverentry.cadaverdeceased, viewing.preference, hearsetrans.hearsedate,casket.price , casket.casket_inv_id, casketinventory.casketName, casket.qty, casket.total FROM client
INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id
INNER JOIN viewing ON client.client_id = viewing.client_id
INNER JOIN hearsetrans ON client.client_id = hearsetrans.client_id
INNER JOIN casket ON client.client_id = casket.client_id
INNER JOIN casketinventory ON casket.casket_inv_id = casketinventory.casket_inv_id";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) >= 0){
  $output .= '
   <table class="table" bordered="1">
   <center><h3>Alisbo Memorial Chapels MIS</p></h3> 
                    <p>Lacson St. cor. Burgos Avenue, Bacolod, 6100 Negros Occidental</p>
                    <p>(034) 434-0290</p>
        
                    <center><p><h2>Summary Report</h2></p></center><br>
                    <tr>  
                        <th>Informant</th>
                        <th>Deceased</th>
                        <th>Death Certificate Number</th>
                        <th>Preference</th>
                        <th>Casket</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Hearse Date</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result)){
   $output .= '
                    <tr>  
                         <td>'.$row["informant"].'</td> 
                         <td>'.$row["cadaverdeceased"].'</td> 
                         <td>'.$row["deathcertno"].'</td> 
                         <td>'.$row["preference"].'</td> 
                         <td>'.$row["casketName"].'</td> 
                         <td>'.$row["qty"].'</td>
                         <td>'.$row["price"].'</td>
                         <td>'.$row["total"].'</td>
                         <td>'.$row["hearsedate"].'</td>

                    </tr>
   ';
  }
  
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Summary Report.xls');
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
        $this->Cell(292,5,'Summary Report
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
        $this->Cell(145,8,'Current Summary Details as of Year 2018',0,0,'C');
        $this->Ln();
        $this->Cell(15);
        $this->SetFont('Times','B',10);
        $this->Cell(45,8,'Informant',1,0,'C');
        $this->Cell(30,8,'Deceased',1,0,'C');
        $this->Cell(35,8,'Death Certificate #',1,0,'C');
        $this->Cell(30,8,'Preference',1,0,'C');
        $this->Cell(30,8,'Casket',1,0,'C');
        $this->Cell(20,8,'Quantity',1,0,'C');
        $this->Cell(20,8,'Price',1,0,'C');
        $this->Cell(20,8,'Total',1,0,'C');
        $this->Cell(30,8,'Hearse Date',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('SELECT client.informant, client.client_id,cadaverentry.deathcertno , cadaverentry.cadaverdeceased, viewing.preference, hearsetrans.hearsedate,casket.price , casket.casket_inv_id, casketinventory.casketName, casket.qty, casket.total FROM client
INNER JOIN cadaverentry ON client.client_id = cadaverentry.client_id
INNER JOIN viewing ON client.client_id = viewing.client_id
INNER JOIN hearsetrans ON client.client_id = hearsetrans.client_id
INNER JOIN casket ON client.client_id = casket.client_id
INNER JOIN casketinventory ON casket.casket_inv_id = casketinventory.casket_inv_id');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(15);
            $this->Cell(45,8,$data->informant,1,0,'C');
            $this->Cell(30,8,$data->cadaverdeceased,1,0,'C');
            $this->Cell(35,8,$data->deathcertno,1,0,'C');
            $this->Cell(30,8,$data->preference,1,0,'C');
            $this->Cell(30,8,$data->casketName,1,0,'C');
            $this->Cell(20,8,$data->qty,1,0,'C');
            $this->Cell(20,8,$data->price,1,0,'C');
            $this->Cell(20,8,$data->total,1,0,'C');
            $this->Cell(30,8,$data->hearsedate,1,0,'C');
            $this->Ln();
        }
        $this->Ln(30);
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
