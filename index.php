<?php
include_once("User.php");
include_once("src/DbGmail.php");

if(isset( $_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["mail"]) && isset($_POST["pass"])){
     $prenom= $_POST["prenom"];
     $nom= $_POST["nom"];
     $mail= $_POST["mail"];
     $pass= $_POST["pass"];

     if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)){
     
          // Inititialiser l'objet User
          $user = new User(); 
          $user->setPrenom($prenom);
          $user->setNom($nom);
          $user->setMail($mail);
          $user->setPass($pass);

          //verifier l'email 
          //chiffrer le mot de passe
          // enregistrer les données dans la table de la base de données
          $dbGmail = new DbGmail();
          $accountCreated = $dbGmail->createAccount($user);
          if ($accountCreated){
               header('Location: connexion.php');
          }
          else{
               header('Location: ' . $_SERVER["PHP_SELF"]);
          }
     }
     else{
          header('Location: ' . $_SERVER["PHP_SELF"]);    
     }
   
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
<title>Gmail</title>
</head>
<body>
    <!---------------------------HEADER--------------------------------------->
    <header class="header" id="header"> 
          <img src="./asset/mail.png" loading="lazy" alt="logo"> </img>
          <h1>
               Gmail
          </h1>
          <nav>
               <ul class="nav_menu" id =nav-menu >
                    <li>
                         <a href="./index.php" class="li_menu">POUR LES PROS</a>
                    </li>
                    <li>
                         <a href="./connexion.php" class="li_menu">CONNEXION</a>
                    </li>
                    <li>
                         <a href="#" class="compte_menu">CRÉER UN COMPTE</a>
                    </li>

               </ul>
          </nav>

        
    </header>
    <!--------------------------------MAIN------------------------------------->
    <main class="main">
          <section class ="section_1">

               <h1 class="overlay-text">Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils</h1>   
               
               <button class="compte_section">CRÉER UN COMPTE</button>
                  
          </section>
          
    </main>

    <form action="index.php" method="post">
     
     <label for="prenom">Prenom</label><br>
     <input type="text" id="prenom" name="prenom"><br>
     <label for="nom">Nom</label><br>
     <input type="text" id="nom" name="nom"><br>
     <label for="mail">Mail</label><br>
     <input type="email" id="mail" name="mail"><br>
     <label for="pass">Pass</label><br>
     <input type="password" id="pass" name="pass"><br>
     <input type="submit" value="créer mon compte">

     </form> 
     
     <?php
    include_once "./src/footer.inc.php";
    ?>
    </body>
</html>