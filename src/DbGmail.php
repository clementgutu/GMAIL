<?php
include_once("User.php");

    class DbGmail{
    
         // Connexion à la base de données avec PDO
         private $host = 'localhost';
         private $dbname = 'db_gmail';
         private $dbuser = 'root';
         private $password = '';
         //initialiser PDO 
        private PDO $db;
        
        function __construct(){
            try {
                $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbuser, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                die("Erreur de connexion à la base de données: " . $e->getMessage());
                }
        }

        function createAccount(User $user){
         // Requête SQL pour insérer l'utilisateur dans la table user
         $sql = "INSERT INTO user (prenom, nom, mail, pass) VALUES (:prenom, :nom, :mail, :pass)";
         $stmt = $this->db->prepare($sql);
         $stmt->execute(array(
              "prenom" => $user->getPrenom(),
              "nom" => $user->getNom(),
              "mail" => $user->getMail(),
              "pass" => $user->getPass()
         ));
    
         return $stmt->rowCount() > 0;

        }

        function login(User $user){
            $sql = "SELECT * FROM user WHERE mail = :mail AND pass = :pass";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(array(
                 "mail" => $user->getMail(),
                 "pass" => $user->getPass()
            ));
            return $stmt->rowCount() > 0;
       
            
            }
        
    }