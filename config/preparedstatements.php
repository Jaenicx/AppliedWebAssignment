<?php
include 'dbconn.php';

try{
    $stmt = $conn->prepare("INSERT INTO myguests (firstName, lastName, email) VALUES (:firstName, :lastName, :email)");
    $stmt->bindParam('firstName', $firstName);
    $stmt->bindParam('lastName', $lastName);
    $stmt->bindParam('email', $email);

    $firstName= "Mary";
    $lastName="Jane";
    $email="jane@mail.com";

    $stmt->execute();
    echo "Litty over 9000";
}
catch(PDOException $e){
    echo "Lived to see another L" .$e->getMessage();
}

$conn=null;
?>