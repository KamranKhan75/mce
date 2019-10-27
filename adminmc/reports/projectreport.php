<?php 
require('../pdfReport/fpdf.php');
  // DATBASE connection
  $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));

    // HEADER  Footer
class PDF extends FPDF
{
	
	function Header()
	{
	 
    $this->SetFont("Arial","B",15);
    $this->Cell(12);
    $this->Image('../img/logo.jpeg',10,10,10);
    $this->Cell(170,10,"Motasim Tariq Hamoua Cont. Est.",0,0,"C");
    $this->Ln();
    $this->SetFont("times","",13);	
    $this->Cell(190,3,"Contracts Details ",0,1,"C");
    $this->SetFont("times","",13);	
    $this->Cell(190,7,"Contact # : 00966-1234567 ",0,1,"C");
    $this->SetFont('Arial','B',11);

    $this->SetFillColor(180,180,255);
    $this->SetDrawColor(50,50,100);
    $this->Cell(65,5,'Description',1,0,'',true);
    $this->Cell(55,5,'Location',1,0,'',true);
    $this->Cell(25,5,'Budget',1,0,'',true);
    $this->Cell(35,5,'Date',1,1,'',true);

	}
    
	function Footer(){
		
    
			$this-> setY(-15);
			$this->SetFont("Arial","",8);
			$this->Cell(172,15,"Page".$this->PageNo(),0,1,"C");
			$this->SetFont("times","b",20);
            	
	}
}





    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AliasNbPages('{pages}');
    $pdf-> AddPage(); 

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetDrawColor(50,50,100);
    $result=$mysqli->query("SELECT * FROM projecttable") or die($mysqli->error());
    while ($row=$result->fetch_array()){
    $pdf->Cell(65,5,$row['projectDescription'],'LR',0);
    $pdf->Cell(55,5,$row['location'],'LR',0);
    $pdf->Cell(25,5, $row['budget'],'LR',0);
    $pdf->Cell(35,5,$row['date'],'LR',1);
    }

    $pdf->output();

 ?>