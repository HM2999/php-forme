<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
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
        <a class="nav-link" href="affichage.php">Imprimer</a>
      </div>
    </div>
  </div>
</nav>


<div class="container">
<div class="row">
    <form action="traitement.php" method="post" > 
      <div class="row justify-content-center ">
        <div class="col-5 bg-light color p-4 m-4 rounded-3">
          <div class="d-flex justify-content-center">
            <h1 class="pb-3">login</h1>
          </div>
          <fieldset>
           
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Prenom" name="prenom" required >
    
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Nom" name="nom" required >
        
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Email" name="email" equired>
       
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Numéro" name="numero" equired>

            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
           <a href="affichage.php"> <button  class="btn btn-primary">go to affichage</button></a>
          </fieldset>

        </div>
     
      </div>
    
    </form>

   
</div>

</div>
</table>

</body>
</html>