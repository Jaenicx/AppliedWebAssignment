<?php
    $name = $_POST['txtName'];
    $subject = $_POST['txtSubject'];
    $mailfrom = $_POST['txtEmail'];
    $msg = $_POST['txtMsg'];

    $mailto = "nexxtgen@localhost";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an email from:".$name.".\n\n".$msg;

    mail($mailto, $subject, $txt, $headers);
    header("Location: success.php");

?>