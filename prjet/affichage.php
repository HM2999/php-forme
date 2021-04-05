<?php
// include("Personne.php");
session_start();

// $liste_personne=[];
// //tester sessions  
// if( isset( $_SESSION['Personne'] ) ) {
//     $personnes_list =  $_SESSION['Personne'] ;
//  }else {
//     $_SESSION['Personne'] =  $personnes_list;
//  }
// //teste input
// if(isset($_POST["nom"])){
// $personne =new Personne($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["numero"]);
// // Traitement
// $personnes_list[] = json_decode( json_encode($personne));
// $_SESSION['Personne'] =  $personnes_list;
// }

echo json_encode($_SESSION["Personne"]);

?>


