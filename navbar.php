<html>

<head>

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="color: white; background-color: rgba(0,0,0,0.7)">
            <a class="navbar-brand">
                <a href="index.php"><img src="img/N-Gen.png" width="100" height="52" alt=""></a>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nextgen-menu"
                aria-controls="#nextgen-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white;">
                </span>
            </button>

            <div id="nextgen-menu" class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php" style="color: white">Home</a>
                    <a class="nav-item nav-link" href="about.php" style="color: white">About Us</a>
                    <a class="nav-item nav-link" href="team.php" style="color: white">Teams</a>
                    <a class="nav-item nav-link" href="registration.php" style="color: white">Registration</a>
                    <a class="nav-item nav-link" href="reset_password.php" style="color: white">Reset Pasword</a>
                     <a class="nav-item nav-link" href="logout.php" style="color: white">Logout</a>
                </div>
                <span class="navbar-text mx-auto">
     <a class="nav-item nav-link"> Hi, <b><?php echo htmlspecialchars($_SESSION["username"]);?>     <?php
                if(isset($_COOKIE['test']))
                {
                $last = $_COOKIE['test'];
                echo "Welcome back! You last visited on ". $last;
                }
                else
                {
                echo "Welcome to our site!";
                }
                ?> </b></a>
 
    </span>
            </div>
        </nav>
    </header>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>