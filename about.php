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
    <title>Next Gen | About</title>
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/emailstyle.css">
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
    <?php include"navbar.php";?>
    <header class="masterhead">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto text-center">
                    <div class="title-wrapper">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-holder">
                    Ncx Gaming, Inc. is the owner and operator of esports franchise Next Gen Gaming and a member of the
                    Jamaican Esports Initiative (JEI) . Founded as an amatuer Call of Duty team in 2017, the Kingston
                    based organization has grown into one of the largest and most-winning esports groups.
                    Today, Next Gaming competes, streams and produces content across multiple gaming titles including
                    Paladins, Call of Duty, CS:GO, Naruto Shippuden Ultimate Ninja Storm 4, PUBG Mobile, Fortnite, Apex
                    Legends, Mortal Kombat and FIFA.
                    The internationally diverse Next Gen and Gorilla Warfare rosters feature top professional gamers
                    from around the island of Jamaica. Next Gen provides dedicated coaching staffs, team managers,
                    personal fitness trainers and mental health coaches to support its network of professional esports
                    teams.
                    <div>
                </div>
            </div>
        </div>
    </section>
    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action ="mail.php" method="POST">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtSubject" class="form-control" placeholder="The Subject *" value="" />
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="contact-wrapper text-white text-center">
            <h2>Contact Information:</h2>
            <?php include "businesscard.php";?>
            </div>
            
</div>
    <script src="js/bootstrap.min.js">
        < script src = "js/jquery-3.3.1.min.js" >
            < script src = "js/script.js" >
    </script>

    <body>