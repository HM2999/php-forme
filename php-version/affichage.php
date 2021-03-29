<?
 // Traitement
 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $noms = [];
 $prenom = [];
 $email=[];
 $numero=[];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    @$noms =  $_SESSION['nom'] ;
 }else {
    @$_SESSION['nom'] =  $noms;
 }
if(isset($_POST["nom"])){
 // Ajouter le nom du nom dans le tableau
 @$noms[] = $_POST["nom"] ;

 // Enregistrer le tableau dans la session
@$_SESSION['nom'] =  $noms;
}


if( isset( $_SESSION['nom'] ) ) {
    @$prenoms =  $_SESSION['nom'] ;
 }else {
    @$_SESSION['nom'] =  $prenoms;
 }
 if(isset($_POST["prenom"])){
@$prenoms[] = $_POST["prenom"] ;

@$_SESSION['nom'] =  $prenoms;

 }


 if( isset( $_SESSION['nom'] ) ) {
    @$emails =  $_SESSION['nom'] ;
 }else {
    @$_SESSION['nom'] =  $emails;
 }

 if(isset($_POST["email"])){
 @$emails[] = $_POST["email"] ;

 
@$_SESSION['nom'] =  $emails;

 }

if( isset( $_SESSION['nom'] ) ) {
    @$numeros =  $_SESSION['nom'] ;
 }else {
    @$_SESSION['nom'] =  $numeros;
 }

if(isset($_POST["numero"])){
 @$numeros[] = $_POST["numero"] ;

 
@$_SESSION['nom'] =  $numeros;
}

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='main.css'>
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
        <a class="nav-link active" aria-current="page" href="affichage.php">Imprimer</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="mx-auto">Liste des participants</h1>
<div class="mt-4 col-12">
<table>
<tr> 
    <td class="bg-success">NOM</td>
    <td class="bg-success">PRENOM</td> 
    <td class="bg-success">EMAIL</td>
    <td class="bg-success"> numero</td> 
 </tr>
  <?php
  $i=0;
foreach ($_SESSION["nom"] as $value) {
    if($i==0){
        echo "<tr>"; 
        echo "<td>".$value."</td>";
        $i++;
    }elseif($i<=2 ){
        echo "<td>".$value."</td>";
        $i++;
    }else{
        echo "<td>".$value."</td>";
            echo "</tr>";
            $i=0;
     };
  
}
?>
</table>
</div>
</body>
</html>