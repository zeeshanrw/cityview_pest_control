<?php
if (isset($_POST['submit'])){


    $name=$_POST['name'];
    $number=$_POST['number'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];

    $mailTo="info@cityviewpestcontrol.ca";
    $headers="From: ".$mailFrom;
    $txt="You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers, $number);
    header("Location: index.php?mailsend");
}
?>