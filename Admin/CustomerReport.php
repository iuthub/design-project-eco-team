<?php
require('../fpdf.php');
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(90);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(200,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(20,40,27,20,20,20,20,27,18,15,15,15,15);
	
	
	//Header
	$this->SetFont('Arial','B',11);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	$this->SetFont('Arial','',10);
	foreach ($data as $eachResult) 
	{ //width
		$this->Cell(20,6,$eachResult["Cust_Id"],1);
		$this->Cell(40,6,$eachResult["FullName"],1);
		$this->Cell(27,6,$eachResult["Phone"],1);
        $this->Cell(20,6,$eachResult["Country"],1);
		$this->Cell(20,6,$eachResult["City"],1);
		$this->Cell(20,6,$eachResult["Adress"],1);
		$this->Cell(47,6,$eachResult["Email"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('Customer ID','Customer FullName','PHONE','Country','City','Address','Email Address');


$db_username = 'root';
$db_password = 'renovatio';
$db_name = 'test2';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$currDate = date('Y-m-d');
$strSQL = "Select* from customer";
$objQuery = mysqli_query($mysqli,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//


//*** Table 1 ***//
$pdf->AddPage();
	
	$pdf->SetFont('Helvetica','b',14);
	$pdf->Cell(55);
	$pdf->Write(5, ' NOVASHOP CUSTOMER REPORS ');
	$pdf->Ln();
	
	$pdf->SetFont('Helvetica','b',12);
	$pdf->Cell(75);
	$pdf->Write(5, 'CUSTOMER REPORT');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(7);
	$pdf->Cell(57);
	$result=mysqli_query($mysqli,"select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysqli_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	$pdf->Cell(0);
	$pdf->SetFontSize(10);
	$pdf->Cell(54);
	

	$pdf->Ln(-1);
	


	$result=mysqli_query($mysqli,"Select * from customer") or die ("Database query failed: $query" . mysqli_error());
	
	$count = mysqli_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, ' Employee Record: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->BasicTable($header,$resultData);


$pdf->Output();

?>