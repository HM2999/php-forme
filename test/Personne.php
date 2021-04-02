<?php

    class Personne {
     
        public $prenom;
        public $nom;
        public $email;
        public $numero;
 

        public function __construct($nom,$prenom,$email,$numero) {
   
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->numero = $numero;
        }

       

        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getNumero() {
            return $this->numero;
        }

                                 
    }