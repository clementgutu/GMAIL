<?php
include_once("src/DbGmail.php");

if(isset($_POST["mail"]) && isset($_POST["pass"])){

    $mail= $_POST["mail"];
    $pass= $_POST["pass"];

    // Inititialiser l'objet User
    $user = new User(); 
    $user->setMail($mail);
    $user->setPass($pass);

    //verifier l'email 
    //chiffrer le mot de passe
    // enregistrer les données dans la table de la base de données
    $dbGmail = new DbGmail();
    $isConnected=$dbGmail->login($user);
    if ($isConnected){
        header('Location: welcome.php');
    }
    else{
        header('Location: ' . $_SERVER["PHP_SELF"]);
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion PHP POO</title>
    <link href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php

    include_once "./src/header.php";
   

?>
<section class="blankslate">
            <h2>
                Connectez-vous
            </h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">

            <label for="login">Login</label>
            <input class="form-control" name="mail" type="text" placeholder="Login" id="login">

            <label for="pass">Password</label>
            <input class="form-control input-monospace"  id="pass" name="pass" type="password" placeholder="password">
            <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>
</section>

    
   
<?php
    include_once "./src/footer.inc.php"
     //reproduire le fichier index.php(forme, post,) 
     //appeler la fonction login de la base de données
     //select user Where mail and pass ...
   ?>
  