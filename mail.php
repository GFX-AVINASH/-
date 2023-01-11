<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n"

$recipient = "gfxavinash@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!")

echo"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/610eb2405d.js" crossorigin="anonymous"></script>
    
    
</head>
<body>

<div class="container">
<div> class="thanks" 
<img src="images/message.png">
</div>
<p> class="back"Go Back To The <a href="index.html">Home Page</a>.</p>




</body>
</html>";

?>