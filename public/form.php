<?php
  // var_dump($_POST);
  // echo $_GET['user_name']; 
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
    <form  action="thanks.php"  method="post">
        <div>
            <label  for="firstname">Prénom :</label>
            <input  type="text"  id="firstname"  name="firstname">
        </div>
        <div>
            <label  for="lastname">Nom :</label>
            <input  type="text"  id="lastname"  name="lastname">
        </div>
        <div>
            <label  for="email">Courriel :</label>
            <input  type="email"  id="email"  name="email">
        </div>
        <div>
            <label  for="phone">Téléphone :</label>
            <input  type="text"  id="phone"  name="phonenumber">
        </div>
        <div>
            <label  for="topic">Sujet :</label>
            <select id="topic" name="topic" size="1"> 
                <option value="Je ne suis pas content">Je ne suis pas content</option>
                <option value="Je suis moyennement satisfait">Je suis moyennement satisfait</option>
                <option value="Je suis très heureux">Je suis très heureux</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>


