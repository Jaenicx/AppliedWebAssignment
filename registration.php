<<<<<<< HEAD
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
=======
>>>>>>> 4749687fdc0d35f04093f885c46a477cde1a6372

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submission</title>
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/pdffile.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Header Icon-->
    <link rel="shortcut icon" href="img/N-White.png">
    <!--Animation--->
    <link rel="stylesheet" href="css/animation/animate.css">
</head>

<body>
<<<<<<< HEAD
    <?php include 'navbar.php';?>
    <section id="pdf-form">
        <div class="pdf-form-holder d-flex justify-content-center">
            <div class="container">
                <form class="form-holder animated fadeInUp" action="pdfcreate.php" enctype="multipart/form-data"
                    method="POST">
                    <div class="form-group">
                        <h2 class="text-center">Enter Information</h2>
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="first_name" />
                    </div>
=======

    <section id="pdf-form">
        <div class="pdf-form-holder d-flex justify-content-center">
            <div class="container">
                        <form class="form-holder animated fadeInUp" action="phpCreation.php" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                    <h2 class="text-center">Enter Information</h2>
                                <label>First Name:</label>
                                <input type="text" class="form-control" name="first_name" />
                            </div>

                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="text" class="form-control" name="last_name" />
                            </div>
>>>>>>> 4749687fdc0d35f04093f885c46a477cde1a6372

                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="last_name" />
                    </div>

                    <div class="form-group">
                        <label>Gender:</label>
                        <select name='gender' placeholder="--Choose Your Gender-">
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gamer Tag:</label>
                        <input type="text" class="form-control" name="gamer_tag" />
                    </div>


                    <div class="form-group">
                        <label>Team Name(If Available):</label>
                        <input type="text" class="form-control" name="team_name" />
                    </div>

<<<<<<< HEAD
                    <div class="form-group">
                        <label>Proficiency Level:</label>
                        <select name='pro_level'>
                            <option value=''></option>
                            <option value='Pro'>Pro</option>
                            <option value='Semi-Pro'>Semi-Pro</option>
                            <option value='Amateur'>Amateur</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Game Participating In</label>
                        <input type="text" class="form-control" name="game_participation" /></div>
                    <div>
                        <label>Team Icon:</label>
                    </div>
                    <div>
                        <input type="file" name="image">
                    </div>

                    <button class="btn btn-primary p-20" type="submit" value="Register" name="submit">Submit</button>
=======
                            <div class="form-group">
                                <label>Game Participating In</label>
                                <input type="text" class="form-control" name="game_participation" /></div>
                                <div>
                                <label>Team Icon:</label>
                                </div>
                            	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  	</div>

                            <button class="btn btn-primary p-20" type="submit" value="Register"
                                name="submit">Submit</button>
>>>>>>> 4749687fdc0d35f04093f885c46a477cde1a6372

                </form>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js">
    <script src="js/script.js"></script>  
=======
>>>>>>> 4749687fdc0d35f04093f885c46a477cde1a6372
</body>

</html>