<?php

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$phoneNumber = $_POST["phonenumber"];
$topic = $_POST["topic"];
$message = $_POST["user_message"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>   
        <?= "Merci $lastName $firstName de nous avoir contacté à propos de '$topic'."?>
        <br><br>
        <?= "Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phoneNumber dans les plus brefs délais pour traiter votre demande."?>
        <br><br>
        <?="Votre message :" ?>
        <br>
        <?= "$message"?>
    </div>
</body>
</html>