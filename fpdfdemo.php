<?php

require('fpdf.php');
require("connect.php");
$pdf=new FPDF();
$pdf->ADDPage();
$pdf->setfont('Arial','B',18);
$pdf->Cell(40,10,'demo by');

$car="mysqli_query(" SELECT * FROM s_reg");
$pdf->output();
?>
