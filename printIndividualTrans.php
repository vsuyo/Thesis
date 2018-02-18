<?php 
require "fpdf.php";
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'alisbo');


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
        $this->Cell(290,5,'Client Summary Transaction',0,0,'C');
        $this->SetLineWidth(0.01);
        $this->Line(25, 85, 310-30, 85);
        $this->Line(25, 75, 310-30, 75);
        $this->Ln(12);
        }
    }
    function footer(){
        if ($this->page == 1)
        {
        $this->SetY(-15);
        $this->SetFont('Arial','',7);
        $this->Cell(0,-10,'Alisbo Memorial Chapels MIS | Notorious Trio 2017-2018 | Entes | Molabin | Suyo ',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',8);
        $this->Cell(0,20,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->Ln(20);
        }
    }
    function headerTableCadaver(){
    }
    function viewTable($con){
            $this->SetFont('Times','',12);
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'alisbo');
        
$query = mysqli_query($con, "SELECT * FROM client where client.client_id = '".$_GET['id']."'");
$cPrintClient = mysqli_fetch_array($query);
            $this->Cell(15);
            $this->SetFont('Times','B',12);
            $this->Cell(19.5,8,'Informant Details',0,'C');
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(19.5,8,'Informant:',0,'C');
            $this->SetFont('Times','U',12);
            $this->Cell(0,8,$cPrintClient['informant'],0,'C');
            $this->Cell(50);
            $this->Ln();
            $this->Cell(206);
            $this->SetFont('Times','',12);
            $this->Cell(30,8,'Date Registered:',0,'C');
            $this->SetFont('Times','U',12);
            $tDate = date("F j, Y");
            $this->Cell(0,8,$tDate,0,'C');
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(16.5,8,'Address:',0,'C');
            $this->SetFont('Times','U',12);
            $this->Cell(0,8,$cPrintClient['address'],0,'C');
            $this->Cell(50);
            $this->Ln();
            $this->Cell(214);
            $this->SetFont('Times','',12);
            $this->Cell(30,8,'Contact Number:',0,'C');
            $this->SetFont('Times','U',12);
            $this->Cell(0,8,$cPrintClient['contactno'],0,'C');
            $this->Ln(15);
            $this->SetLineWidth(0.01);
            $this->Line(25, 120, 310-30, 120);
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(16.5,8,'No. of Cadavers: ',0,'C');
            $this->SetFont('Times','U',12);
            //$this->Cell(0,8,$cPrintCadaver['cadaverdeceased'],0,'C');
            $this->Cell(50);
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','B',12);
            $this->Cell(65,7,'Deceased Name',1,0,'C');
            $this->Cell(30,7,'Date Added',1,0,'C');
            $this->Cell(20,7,'Age',1,0,'C');
            $this->Cell(25,7,'Gender',1,0,'C');
            $this->Cell(30,7,'Birthdate',1,0,'C');
            $this->Cell(45,7,'Death Certificate No.',1,0,'C');
            $this->Cell(40,7,'Insurance',1,0,'C');
            $this->Cell(214);
            $this->Ln(7.2);
$query = mysqli_query($con, "SELECT * FROM cadaverentry where cadaverentry.client_id = '".$_GET['id']."'");
while($cPrintCadaver = mysqli_fetch_array($query)){
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(65,7,$cPrintCadaver['cadaverdeceased'],1,0,'C');
            $this->Cell(30,7,$cPrintCadaver['dateadded'],1,0,'C');
            $this->Cell(20,7,$cPrintCadaver['age'],1,0,'C');
            $this->Cell(25,7,$cPrintCadaver['gender'],1,0,'C');
            $this->Cell(30,7,$cPrintCadaver['birthdate'],1,0,'C');
            $this->Cell(45,7,$cPrintCadaver['deathcertno'],1,0,'C');
            $this->Cell(40,7,$cPrintCadaver['insurance'],1,0,'C');
            $this->Ln();
            
}
            $this->Ln();
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(16.5,8,'Chosen Caskets: ',0,'C');
            $this->SetFont('Times','U',12);
            //$this->Cell(0,8,$cPrintCadaver['cadaverdeceased'],0,'C');
            $this->Cell(50);
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','B',12);
            $this->Cell(65,7,'Casket Name',1,0,'C');
            $this->Cell(30,7,'Dimension',1,0,'C');
            $this->Cell(25,7,'Type',1,0,'C');
            $this->Cell(30,7,'Color',1,0,'C');
            $this->Cell(25,7,'Qty',1,0,'C');
            $this->Cell(40,7,'Price',1,0,'C');
            $this->Cell(40,7,'Total Cost',1,0,'C');
            $this->Cell(214);
            $this->Ln(7.2);
$query = mysqli_query($con, "SELECT casketinventory.casketName, casket.dimension, casket.type, casket.color, casket.qty, casket.price, casket.total FROM casket  
INNER JOIN casketinventory ON casket.casket_inv_id = casketinventory.casket_inv_id
where casket.client_id = '".$_GET['id']."'");
while($cPrintCaskets = mysqli_fetch_array($query)){
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(65,7,$cPrintCaskets['casketName'],1,0,'C');
            $this->Cell(30,7,$cPrintCaskets['dimension'],1,0,'C');
            $this->Cell(25,7,$cPrintCaskets['type'],1,0,'C');
            $this->Cell(30,7,$cPrintCaskets['color'],1,0,'C');
            $this->Cell(25,7,$cPrintCaskets['qty'],1,0,'C');
            $this->Cell(40,7,$cPrintCaskets['price'],1,0,'C');
            $this->Cell(40,7,$cPrintCaskets['total'],1,0,'C');
            $this->Ln();
            
}
            $this->Ln();
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(16.5,8,'Viewing/Vigil Details: ',0,'C');
            $this->SetFont('Times','U',12);
            //$this->Cell(0,8,$cPrintCadaver['cadaverdeceased'],0,'C');
            $this->Cell(50);
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','B',12);
            $this->Cell(25,7,'Preference',1,0,'C');
            $this->Cell(65,7,'Address',1,0,'C');
            $this->Cell(25,7,'Room Type',1,0,'C');
            $this->Cell(30,7,'Chapel Code',1,0,'C');
            $this->Cell(30,7,'Start Date',1,0,'C');
            $this->Cell(30,7,'End Date',1,0,'C');
            $this->Cell(25,7,'Duration',1,0,'C');
            $this->Cell(25,7,'Date Added',1,0,'C');
            $this->Cell(214);
            $this->Ln(7.2);
$query = mysqli_query($con, "SELECT * FROM viewing where viewing.client_id = '".$_GET['id']."'");
while($cPrintViewing = mysqli_fetch_array($query)){
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(25,7,$cPrintViewing['preference'],1,0,'C');
            $this->Cell(65,7,$cPrintViewing['address'],1,0,'C');
            $this->Cell(25,7,$cPrintViewing['roomtype'],1,0,'C');
            $this->Cell(30,7,$cPrintViewing['chapelcode'],1,0,'C');
            $this->Cell(30,7,$cPrintViewing['startdate'],1,0,'C');
            $this->Cell(30,7,$cPrintViewing['enddate'],1,0,'C');
            $this->Cell(25,7,$cPrintViewing['duration'],1,0,'C');
            $this->Cell(25,7,$cPrintViewing['date'],1,0,'C');
            $this->Ln();
}
            $this->Ln();
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(16.5,8,'Hearse Details: ',0,'C');
            $this->SetFont('Times','U',12);
            //$this->Cell(0,8,$cPrintCadaver['cadaverdeceased'],0,'C');
            $this->Cell(50);
            $this->Ln(10);
            $this->Cell(15);
            $this->SetFont('Times','B',12);
            $this->Cell(65,7,'Driver Name',1,0,'C');
            $this->Cell(30,7,'Car Name',1,0,'C');
            $this->Cell(30,7,'Plate Number',1,0,'C');
            $this->Cell(30,7,'Hearse Date',1,0,'C');
            $this->Cell(30,7,'Hearse Time',1,0,'C');
            $this->Cell(30,7,'Destination To',1,0,'C');
            $this->Cell(45,7,'Destination From',1,0,'C');
            $this->Cell(214);
            $this->Ln(7.2);
$query = mysqli_query($con, "SELECT hearse.DriverName, car.plateno,car.unit , hearsetrans.purpose, hearsetrans.deliver, hearsetrans.to, hearsetrans.timeoutfrom, hearsetrans.timeoutto, hearsetrans.hearsedate, hearsetrans.time, hearsetrans.destinationfrom, hearsetrans.destinationto  FROM hearsetrans 
    INNER JOIN  hearse ON hearse.hearse_id = hearsetrans.hearse_id
    INNER JOIN car ON car.car_id = hearsetrans.car_id  
where hearsetrans.client_id = '".$_GET['id']."'");
while($cPrintHearse = mysqli_fetch_array($query)){
            $this->Cell(15);
            $this->SetFont('Times','',12);
            $this->Cell(65,7,$cPrintHearse['DriverName'],1,0,'C');
            $this->Cell(30,7,$cPrintHearse['unit'],1,0,'C');
            $this->Cell(30,7,$cPrintHearse['plateno'],1,0,'C');
            $this->Cell(30,7,$cPrintHearse['hearsedate'],1,0,'C');
            $this->Cell(30,7,$cPrintHearse['time'],1,0,'C');
            $this->Cell(30,7,$cPrintHearse['destinationto'],1,0,'C');
            $this->Cell(45,7,$cPrintHearse['destinationfrom'],1,0,'C');
            $this->Ln();
            
}
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTableCadaver();
$pdf->viewTable($con);
$pdf->Output();

?>
