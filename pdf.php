<?php
if(isset($_POST['print']))
{
	
	if($_POST['comments']!="")
	{
	$aid=$_POST['aid'];
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$did=$_POST['did'];
	$dname=$_POST['dname'];
	$num=$_POST['num'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$comment=$_POST['comments'];
	
	require("./fpdf/fpdf.php");
	
	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetFont("courier","",15);
	$pdf->Cell(0,10,"Appointment Slip",1,1,'C');
	
	$pdf->Cell(50,10,"Appointment ID",1,0,'C');
	$pdf->Cell(140,10,$aid,1,1,'C');
	
	$pdf->Cell(50,10,"Patient ID",1,0,'C');
	$pdf->Cell(140,10,$pid,1,1,'C');
	
	$pdf->Cell(50,10,"Patient Name",1,0,'C');
	$pdf->Cell(140,10,$pname,1,1,'C');
	
	$pdf->Cell(50,10,"Doctor ID",1,0,'C');
	$pdf->Cell(140,10,$did,1,1,'C');
	
	$pdf->Cell(50,10,"Doctor Name",1,0,'C');
	$pdf->Cell(140,10,$dname,1,1,'C');
	
	$pdf->Cell(50,10," Contact Number",1,0,'C');
	$pdf->Cell(140,10,$num,1,1,'C');
	
	$pdf->Cell(50,10,"Contact Email",1,0,'C');
	$pdf->Cell(140,10,$email,1,1,'C');
	
	$pdf->Cell(50,10,"Date",1,0,'C');
	$pdf->Cell(140,10,$date,1,1,'C');
	
	$pdf->Cell(50,10,"Time",1,0,'C');
	$pdf->Cell(140,10,$time,1,1,'C');
	
	$pdf->Cell(50,10,"Comments",0,0,'C');

	$pdf->MultiCell(140,7,$comment,'LRTB','L',false);
	
	$file = time().'.pdf';
	$pdf->output($file,"D");
	}
	else
	{
	$aid=$_POST['aid'];
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$did=$_POST['did'];
	$dname=$_POST['dname'];
	$num=$_POST['num'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$status=$_POST['status'];
	
	require("./fpdf/fpdf.php");
	
	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetFont("courier","",15);
	$pdf->Cell(0,10,"Appointment Slip",1,1,'C');
	
	$pdf->Cell(50,10,"Appointment ID",1,0,'C');
	$pdf->Cell(140,10,$aid,1,1,'C');
	
	$pdf->Cell(50,10,"Patient ID",1,0,'C');
	$pdf->Cell(140,10,$pid,1,1,'C');
	
	$pdf->Cell(50,10,"Patient Name",1,0,'C');
	$pdf->Cell(140,10,$pname,1,1,'C');
	
	$pdf->Cell(50,10,"Doctor ID",1,0,'C');
	$pdf->Cell(140,10,$did,1,1,'C');
	
	$pdf->Cell(50,10,"Doctor Name",1,0,'C');
	$pdf->Cell(140,10,$dname,1,1,'C');
	
	$pdf->Cell(50,10," Contac Number",1,0,'C');
	$pdf->Cell(140,10,$num,1,1,'C');
	
	$pdf->Cell(50,10,"Contact Email",1,0,'C');
	$pdf->Cell(140,10,$email,1,1,'C');
	
	$pdf->Cell(50,10,"Date",1,0,'C');
	$pdf->Cell(140,10,$date,1,1,'C');
	
	$pdf->Cell(50,10,"Time",1,0,'C');
	$pdf->Cell(140,10,$time,1,1,'C');
	
	$pdf->Cell(50,10,"Status",1,0,'C');
	$pdf->Cell(140,10,$status,1,1,'C');
	
	$file = time().'.pdf';
	$pdf->output($file,"D");
	}
}
	
	

?>