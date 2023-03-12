<?php 
    class User{
        private $mail;
        private $pass;
        private $prenom;
        private $nom;

        function getMail(){
            return $this->mail;

        }
        function setMail($mail){
            $this->mail=$mail;

        }


        function getPass(){
            return $this->pass;

        }
        function setPass($pass){
            $this->pass=$pass;

        }


        function getNom(){
            return $this->nom;

        }
        function setNom($nom){
            $this->nom=$nom;

        }

        
        function getPrenom(){
            return $this->prenom;

        }
        function setPrenom($prenom){
            $this->prenom=$prenom;

        }


        
              
    }

