<?php
session_start();
require("./Personne.php");


// Initialisation du tableau des participants
$Personne = [];



if( isset( $_SESSION['Personne'] ) ) {
    $Personne =  $_SESSION['Personne'] ;
 }else {
    $_SESSION['Personne'] =  $Personne;
 }

 if(isset($_POST["nom"])){
    $participant = new Personne;
    $participant->setNom($_POST["nom"]);
    $participant->setPrenom($_POST["prenom"]);
    $participant->setEmail($_POST["email"]);
    $participant->setNumero($_POST["numero"]);

 
$_SESSION['Personne'] =  $participant;

 }


 // Traitement
 $liste_apprenants_json =  json_encode($participant);
 echo $liste_apprenants_json;
?>
