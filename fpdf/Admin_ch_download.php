<?php
require('fpdf17/fpdf.php');
$con =mysqli_connect("localhost","root","","school_mgt_system");



class PDF extends FPDF{
	function Header(){
		$this->SetFont('Arial','',12);
		$this ->Image('img.png',10,10,200);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,40,'----------------------------------------------------------------------------------------------------------------------------------------',0,1);
		$this->Cell(0.5,5,'To whom it may concern:',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'was a student of Lumbini College,colombo 05.',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'During his career in school he has participated in extracurricular activities as follows:',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'',0,1);
	}

	function Footer(){
		$this->SetFont('Arial','',12);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'He was obidient,honest and trustworthy.His conduct and behavior was saisfactory.',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'I wish him success in all his future endeavors.',0,1);
		$this->Cell(0.5,5,'',0,1);
	    $this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'...................................',0,1);
		$this->Cell(0.5,5,'',0,1);
		$this->Cell(0.5,5,'Principal',0,1);

	}
	
	
	
}


$pdf = new PDF('P','mm','A4');
$pdf->AddPage();

//$username =$_POST['$username'];

$query = mysqli_query($con, "SELECT * FROM extra_activities ");
while($data = mysqli_fetch_array($query)){

	
	
	$pdf->Cell(40,5,$data['year'],0,0);
	$pdf->Cell(60,5,$data['activity'],0,1);


}





$pdf->output();
?>
