<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!--Set Cookie-->

<?php 
$Month = 2592000 + time();
setcookie('test', date("F jS - g:i a"), $Month);
//$var1 = $_Cookie['test'];
//echo $var1."<br/>";

$connect = mysqli_connect("localhost", "player", "root", "playerinfo");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $item6 = mysqli_real_escape_string($connect, $data[5]);
                $item7 = mysqli_real_escape_string($connect, $data[6]);
                $query = "INSERT into esports_players(f_name, l_name, gender, gamer_tag, team_name, proficiency_level, game) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7')";
                mysqli_query($connect, $query);
                var_dump($data);
            print "<pre>";
            print_r($data);
            print "</pre>";
           // $value = "'". implode("','",$row). "'";
           // echo $value;
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  

<!DOCTYPE html>  
<html>  
 <head>           
  <title>Participants</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <?php include"navbar.php";?>               
 </head>     
 <body>
 section id="home">
        <div class="home-wrapper animated zoomIn">
                        <div class="header-wrapper">
                            <div class="header-wrapper-inner">
                                 <div class="page-header">
                                    </div>
                                <div class="header-title animated zoomIn">
                                   <h1>Add Players Using CSV Files</h1>
                                   <form method="post" enctype="multipart/form-data">
                                </div>
                                <div class="header-sub animated zoomIn">
                                 <h2>Select CSV File: </h2>
                                    <h3><input type="file" name="file" /><h3>       
                                        <input type="submit" name="submit" value="Import" class="btn btn-info"/>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    </div>          
 </body>  
</html>