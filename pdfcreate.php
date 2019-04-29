<?php
if(!empty($_POST['submit'])){

    require 'fpdf/fpdf.php';
    class PDF extends FPDF{

        function Header(){
            $this->SetFont('Arial','B',15);
            $this->Image('N-Gen.png',11,10,20,20);

            //$this->Cell(100,10,'header',0,1);

            $this->Ln(5);
        }
    }


    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $gamer_tag=$_POST['gamer_tag'];
    $team_name=$_POST['team_name'];
    $pro_level=$_POST['pro_level'];
    $game_participation=$_POST['game_participation'];

    // print_r($_POST);
    // exit();
    $pdf = new PDF();
    $pdf->AddPage();


    $pdf->SetFont("Arial","I",16);

    //$pdf->Image('N-Gen.png',10,10,50,35);
    //$pdf->Cell(65,14,"Next Gen",2,1,'C');
    $pdf->Ln(15);
    $pdf->Cell(65,14,"Player Information",2,0,'L');
    $pdf->Ln(15);
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(65,14,"First Name:",2,0);
    $pdf->Cell(65,14,$first_name,2,1);
    $pdf->Cell(65,14,"Last Name:",2,0);
    $pdf->Cell(65,14,$last_name,2,1);

    $pdf->Cell(65,14,"Gender:",2,0);
    $pdf->Cell(65,14,$gender,2,1);

    $pdf->Cell(65,14,"Gamer Tag:",2,0);
    $pdf->Cell(65,14,$gamer_tag,2,1);

    $pdf->Cell(65,14,"Team Name:",2,0);
    $pdf->Cell(65,14,$team_name,2,1);

    $pdf->Cell(65,14,"Proficiency Level:",2,0);
    $pdf->Cell(65,14,$pro_level,2,1);

    $pdf->Cell(65,14,"Game Participation:",2,0);
    $pdf->Cell(65,14,$game_participation,2,1);

    $pdf->Output();

    
    $mysqli = new mysqli('localhost','demo','root');

    if($mysqli->connect_error){

        die('Connect Error: '.$mysqli->connect_errno.':'.$mysqli->connect_error);
    }

    // Get image name
    $image = $_FILES['image']['name'];

     // image file directory
     $target = "images/".basename($image);

    $sql = "INSERT INTO esports_players (f_name, l_name, gender, gamer_tag, team_name, proficiency_level, game,image) VALUES ( '{$mysqli->real_escape_string($_POST['first_name'])}','{$mysqli->real_escape_string($_POST['last_name'])}','{$mysqli->real_escape_string($_POST['gender'])}','{$mysqli->real_escape_string($_POST['gamer_tag'])}','{$mysqli->real_escape_string($_POST['team_name'])}','{$mysqli->real_escape_string($_POST['pro_level'])}','{$mysqli->real_escape_string($_POST['game_participation'])}','$image' ) ";
    $insert = $mysqli->query($sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    // execute query

    if($insert){

        echo "Success! Row ID: {$mysqli->insert_id}";
    }else{
        die("Error: {$mysqli->errno } : {$mysqli->error}");
    }
    $result = mysqli_query($mysqli, "SELECT * FROM esports_players");
    $mysqli->close();

    
}

	
?>

