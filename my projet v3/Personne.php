<?php
class Personne {
    public $Nom;
    public $Prenom;
    public $Email;
    public $Numero;
      
  //methodes   
    public function setNom($Nom){
        $this->Nom = $Nom;
    }
    public function getNom(){
        return $this->Nom;
    }

    public function setPrenom($Prenom){
        $this->Prenom = $Prenom;
    }
    public function getPrenom(){
        return $this->Prenom;
    }

    public function setEmail($Email){
        $this->Email = $Email;
    }
    public function getEmail(){
        return $this->Email;
    }

    public function setNumero($Numero){
        $this->Numero = $Numero;
    }
    public function getNumero(){
        return $this->Numero;
    }


}
?>