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
    $this->Cell(45,5,'Name',1,0,'',true);
    $this->Cell(35,5,'Iqama No.',1,0,'',true);
    $this->Cell(35,5,'Passport No.',1,0,'',true);
    $this->Cell(40,5,'Job Description',1,0,'',true);
    $this->Cell(20,5,'Salary',1,1,'',true);

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
    if (isset($_REQUEST["id"])) {
        $id =$_REQUEST["id"];
    $result=$mysqli->query("SELECT * FROM employeetable WHERE empID='$id'") or die($mysqli->error());
    while ($row=$result->fetch_array()){

    $pdf->Cell(45,5,$row['empName'],'LR',0);
    $pdf->Cell(35,5,$row['iqamaNo'],'LR',0);
    $pdf->Cell(35,5, $row['passportNo'],'LR',0);
    $pdf->Cell(40,5,$row['jobDesc'],'LR',0);
    $pdf->Cell(20,5,$row['Salary'],'LR',1);
    }
}

    $pdf->output();

 ?>