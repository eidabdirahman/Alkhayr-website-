<?php
if(!empty($_POST["send"])){
    $UserName = $_POST["UserName"];
    $UserEmial = $_POST["UserEmail"];
    $UserSubject = $_POST["UserSubject"];
    $UserMessage = $_POST["UserMessage"];
    $ToEmial = "shucaybcabdi2017@gmail.com";

    $mailHeaders = "Name: " . $UserName.
    "\r\n Email: " .$UserEmial .
    "\r\n Subject: " . $UserSubject.
    "\r\n message: " .$UserMessage . "\r\n";
    if(mail($ToEmial, $UserName, $mailHeaders)){
        $message = "your information is Recived succesfully";

    }
}
?>
