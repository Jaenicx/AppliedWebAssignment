
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
                    <h2 class="card-title mt-2 text-center">Successful</h2>
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