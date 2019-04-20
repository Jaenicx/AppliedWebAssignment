<?php
$firstName = $lastName = $email = $password = "";
$firstNameErr = $lastNameErr = $emailErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstName = test_input($_POST["firstName"]);
    $lastName = test_input($_POST["lastName"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
      $firstNameErr = "* First Name is required";
    } else {
      $firstName = test_input($_POST["firstName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$firstNameErr)) {
        $firstNameErr = "Only letters and white space allowed"; 
      }
    }
}
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastName"])) {
      $lastNameErr = "* Last Name is required";
    } else {
      $lastName = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
        $lastNameErr = "Only letters and white space allowed"; 
      }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Invalid email format"; 
    }
  }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["password"]))
{
    $passwordErr="* Password is required";

}else{
    $password= $_POST["password"];
}
}


?>

<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next Gen | Register</title>
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
<?php include"navbar.php";?>
    <div id="register">

        <div class="container">
            <div class="d-flex justify-content-center h-100 p-20">
                <div class="card animated fadeInUp">
                    <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="form-group">
                            <label>First name </label>
                            <input type="text" class="form-control" placeholder="First Name" name=firstName>
                            <span class="error"><br>
                                <?php echo $firstNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name=lastName>
                            <span class="error"><br>
                                <?php echo $lastNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name=email>
                            <span class="error"><br>
                                <?php echo $emailErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Create password</label>
                            <input type="password" class="form-control" placeholder="Password" name=password>
                            <span class="error"><br>
                                <?php echo $passwordErr; ?></span>
                        </div>
                        <div class="form-group">
                            <button id="submitButton" type="submit" onclick="register()" class="btn btn-primary btn-block"> Register </button>
                        </div>
                    </form>
                    <div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js">
    <script src="js/script.js"></script>
</body>

</html>