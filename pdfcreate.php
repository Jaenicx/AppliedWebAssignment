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

    header("Location: success.php", true, 301);

    $mysqli = new mysqli('localhost','demo','root');

    if($mysqli->connect_error){

        die('Connect Error: '.$mysqli->connect_errno.':'.$mysqli->connect_error);
    }

    $sql = "INSERT INTO esports_players (f_name, l_name, gender, gamer_tag, team_name, proficiency_level, game) VALUES ( '{$mysqli->real_escape_string($_POST['first_name'])}','{$mysqli->real_escape_string($_POST['last_name'])}','{$mysqli->real_escape_string($_POST['gender'])}','{$mysqli->real_escape_string($_POST['gamer_tag'])}','{$mysqli->real_escape_string($_POST['team_name'])}','{$mysqli->real_escape_string($_POST['pro_level'])}','{$mysqli->real_escape_string($_POST['game_participation'])}' ) ";
    $insert = $mysqli->query($sql);

    if($insert){

        echo "Success! Row ID: {$mysqli->insert_id}";
    }else{
        die("Error: {$mysqli->errno } : {$mysqli->error}");
    }
    $mysqli->close();

    
}


?>

<?php


?>
<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next Gen | Register</title>
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/success.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <!--Header Icon-->
    <link rel="shortcut icon" href="img/N-White.png">
    <!--Animation--->
    <link rel="stylesheet" href="css/animation/animate.css">
</head>

<body>
    <div id="success">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card animated fadeInUp">
                    <h2 class="card-title mt-2">Successful</h2>
                    </header>
                   
                    <div class="border-top card-body text-center"><a href="index.php">Home</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>