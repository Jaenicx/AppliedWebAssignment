<?php
define('DB_SERVER', 'localhost');
define('db_username','root');
define('db_password','');
define('db_name','dbtestphp');

try{
    $link= new PDO("mysql:host=". DB_SERVER . ";db_name=".db_name, db_username, db_password);

    //$conn = new PDO(mysqli_connect(DB_SERVER, db_username, db_password, db_name));

    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection Successful";
}
catch(PDOException $e){
    echo "Connection Failed :" .$e->getMessage();
}
?>