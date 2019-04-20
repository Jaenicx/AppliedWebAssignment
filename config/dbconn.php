<?php
$servername = "localhost";
$username="root";
$password="";

try{
   
    $conn= new PDO("mysql:host=$servername;dbname=dbtestphp",$username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful";
}
catch(PDOException $e){
    echo "Connection Failed :" .$e->getMessage();
}
?>