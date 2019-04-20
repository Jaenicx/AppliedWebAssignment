<?php
include "dbconn.php";

try{
$create= "CREATE TABLE myguests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    firstName VARCHAR(20),
    lastName VARCHAR(20),
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

$insert ="INSERT into myguests (firstName, lastName, email) VALUES ('Jae Nicholas','McDonald', 'jaenicholas@gmail.com')";
$conn->exec($insert);
echo "Litty Again";
}catch(PDOException $e){
echo $insert . $e->getMessage();
}

$conn=null;
?>