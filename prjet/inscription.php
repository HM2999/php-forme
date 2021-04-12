<?php
include("Personne.php");
session_start();
$liste_personne=[];
//tester sessions  
if( isset( $_SESSION['Personne'] ) ) {
    $personnes_list =  $_SESSION['Personne'] ;
 }else {
    $_SESSION['Personne'] =  $personnes_list;
 }
//teste input
if(isset($_POST["nom"])){
$personne =new Personne($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["numero"]);
// Traitement
$personnes_list[] = json_decode( json_encode($personne));
$_SESSION['Personne'] =  $personnes_list;
}

header('Location: http://localhost:3300/liste.php');
exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Page d'inscription</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="liste.php">Imprimer</a>
      </div>
    </div>
  </div>
</nav>
    <p> merci</p>
</body>
</html>

