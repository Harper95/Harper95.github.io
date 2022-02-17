<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "charper@watsonmills.com";
    $subject = "Portfolio Message";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

