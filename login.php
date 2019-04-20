<?php
$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);   
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$emailErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"]))
{
    $emailErr="E-Mail is required";

}else{
    $email= $_POST["email"];
}
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["password"]))
{
    $passwordErr="Password is required";

}else{
    $password= $_POST["password"];
}
}

?>


<!DOCTYPE html>
<html>

</html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--Stylesheets-->
   <link rel="stylesheet" type="text/css" href="css/login.css">
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
    <section id="login">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card animated fadeInUp">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <span class="error"><br><?php echo $emailErr; ?></span>    
                        <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="E-mail" name=email>
                            </div>
                            <span class="error"><br><?php echo $passwordErr; ?></span>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name=password>
                            </div>
                            
                            <div class="form-group text-center">
                                <input type="submit" value="Login" class="btn btn-primary bth-block">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="register.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js">
        < script src = "js/jquery-3.3.1.min.js" >
        <script src="js/script.js"></script>
            </body> 
            