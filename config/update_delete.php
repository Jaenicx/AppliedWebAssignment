<?php
include 'dbconn.php';
try{
$sql = "DELETE FROM myguests WHERE id=3";
$update = "UPDATE myguests SET lastName='Reeeee' WHERE id=4";

$conn->exec($sql);
echo "Ws, All Ws";
}catch(PDOException $e){
    echo "Another L" .$e->getMessage();
}
?>