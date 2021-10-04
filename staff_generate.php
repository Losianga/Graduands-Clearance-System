<?php
require_once 'pdf/fpdf.php';
require_once 'connection.php';

$sql="SELECT * FROM staff_signup";
$data=mysqli_query($conn,$sql);

if(isset($_POST['btn_pdf'])){
	$pdf=new FPDF('p','mm','a4');
	$pdf->SetFont('arial','b','14');
	$pdf->AddPage();
	$pdf->cell('25','10','Post ID','1','0','C');	
	$pdf->cell('25','10','Name','1','0','C');
	$pdf->cell('50','10','Email','1','0','C');
	$pdf->cell('25','10','regNo','1','0','C');
	$pdf->cell('25','10','Contact','1','0','C');
	$pdf->cell('25','10','Gender','1','1','C');
	
	$pdf->SetFont('arial','','12');
	while($row=mysqli_fetch_assoc($data)){
		$pdf->cell('25','10',$row['id'],'1','0','C');
		$pdf->cell('25','10',$row['name'],'1','0','C');
		$pdf->cell('50','10',$row['email'],'1','0','C');
		$pdf->cell('25','10',$row['regNo'],'1','0','C');
		$pdf->cell('25','10',$row['contact'],'1','0','C');
		$pdf->cell('25','10',$row['gender'],'1','0','C');
	}
	$pdf->Output();
}
?>