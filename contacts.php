<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $emailTo = "lindaselem34@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;


    mail($emailTo, $text, $headers);
    header("Location: contacts.php?mailsend");
    
}

?>