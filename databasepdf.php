<?php
require 'fpdf/fpdf.php';

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'playerinfo');


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		$this->Cell(12,0,'',0,0);
		$this->Cell(12);
		
		//put logo
        $this->Image('N-Gen.png',87,10,15,10);
        
		
		$this->Cell(200,10,'Esports Players List',0,1,'C');
		
		//dummy cell to give line spacing
		$this->Cell(0,5,'',0,1);
		$this->Ln(5);
		
		$this->SetFont('Times','I',12);
		$this->SetFillColor(180,180,255);
        $this->SetDrawColor(180,180,255);
		$this->Cell(25,5,'Player ID',1,0,'',true);
        $this->Cell(30,5,'First Name',1,0,'',true);
		$this->Cell(30,5,'Last Name',1,0,'',true);
		$this->Cell(15,5,'Gender',1,0,'',true);
		$this->Cell(25,5,'Game Tag',1,0,'',true);
		$this->Cell(30,5,'Team Name',1,0,'',true);
		$this->Cell(40,5,'Proficiency Level',1,0,'',true);
        $this->Cell(60,5,'Game Participation',1,0,'',true);
        $this->Ln();
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF(); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage('L','A4',0);


$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);

$query=mysqli_query($con,"select * from esports_players");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(25,5,$data['player_id'],'LR',0);
	$pdf->Cell(30,5,$data['f_name'],'LR',0);
	$pdf->Cell(30,5,$data['l_name'],'LR',0);
	$pdf->Cell(15,5,$data['gender'],'LR',0);
	$pdf->Cell(25,5,$data['gamer_tag'],'LR',0);
	$pdf->Cell(30,5,$data['team_name'],'LR',0);
	$pdf->Cell(40,5,$data['proficiency_level'],'LR',0);
	
	if($pdf->GetStringWidth($data['game']) > 65){
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(65,5,$data['game'],'LR',0);
		$pdf->SetFont('Arial','',9);
	}else{
		$pdf->Cell(65,5,$data['game'],'LR',0);
    }
    $pdf->Ln();
}




$pdf->Output();
?>
