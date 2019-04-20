<?php
include 'dbconn.php';
try{

$conn->beginTransaction();
$conn->exec("INSERT INTO myguests (firstName, lastName, email) VALUES('Jaenicx','Damage','nicxes@gmail.com')");
$conn->exec("INSERT INTO myguests (firstName, lastName, email) VALUES('JerryEnuh','Tank','jerrye@gmail.com')");
$conn->exec("INSERT INTO myguests (firstName, lastName, email) VALUES('Storm','Healer','storm@gmail.com')");
$conn->exec("INSERT INTO myguests (firstName, lastName, email) VALUES('FlameGhoul','Flank','flameg@gmail.com')");

$conn->commit();
echo "Even Littier than Before";
}
catch(PDOException $e){
    $conn->rollback();
    echo "Accept the L" .$e->getMessage();
}
$conn=null;
?>