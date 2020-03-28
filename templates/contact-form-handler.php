<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "i.mkrft@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recieved an e-mail from ".name.".\n\n".$message;



    mail($mailTo,$txt, $headers);
    header("Location: index.php?mailsend");
}