<?php
// var_dump($_POST);

  // Tous les champs sont requis et ne doivent pas être vides
  // Le format du champ e-mail doit être vérifié avec filter_var

  $errors = [];
  // vérifie si le formulaire a bien été soumis, avec une méthode POST
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
        $errors[] = "Le nom est obligatoire"; 
    if(!isset($_POST['email']) || trim($_POST['email']) === '')
        $errors[] = "L'email est obligatoire";
    if((!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
        $errors[] = "Veuillez entrer un email valide";
    if(!isset($_POST['phoneNumber']) || trim($_POST['phoneNumber']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if(!isset($_POST['topic']) || trim($_POST['topic']) === '')
        $errors[] = "Le sujet concerné est obligatoire"; 
    if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Le message est obligatoire";  
    if(empty($errors)) {
        // traitement du formulaire
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $topic = $_POST['topic'];
        $message = $_POST['user_message']; 
    }
  }
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
    <?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) : ?>
                <div class="border border-danger rounded p-3 m-5 bg-danger">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php else : ?>
                <?= "Merci $lastName $firstName de nous avoir contacté à propos de '$topic'."?>
                <br><br>
                <?= "Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phoneNumber dans les plus brefs délais pour traiter votre demande."?>
                <br><br>
                <?="Votre message :" ?>
                <br>
                <?= "$message"?>
    <?php   endif; ?>   
    </div>
</body>
</html>