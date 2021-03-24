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
  <?php
// define variables and set to empty values
$name = $email = $prenom = $numero ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nom"]);
  $email = test_input($_POST["email"]);
  $numero = test_input($_POST["numero"]);
  $prenom = test_input($_POST["prenom"]);

}

function test_input($data) {
 //for remove spaces
    $data = trim($data);
//suprimer les antislash 
  $data = stripslashes($data);
//Convertit les caractères spéciaux en entités HTML
  $data = htmlspecialchars($data);
  return $data;
}
$k = "";
$k =$k."<br>Nom: ".$name."<br>Prenom: ".$prenom."<br>numero: ".$numero."<br>email: ". $email."<br>";
// class formulair {
//   // Properties
//   public $nom;
//   public $prenom;
//   public $email;
//   public $numero;
  

  
//   function get_name() {
//     return $this->nom;
//   }
//   function get_email() {
//     return $this->email;
//   }
//   function get_prenom() {
//     return $this->prenom;
//   }
//   function get_numero() {
//     return $this->numero;
//   }
// }
?>  

<div class="container">
<div class="row">
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row justify-content-center ">
        <div class="col-5 bg-light color p-4 m-5 rounded-3">
          <div class="d-flex justify-content-center">
            <h1 class="pb-3">login</h1>
          </div>
          <fieldset>
           
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Prenom" name="prenom">
              <!-- <span class="input-group-text btn btn-success" id="basic-addon2">Numbre</span> -->
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Nom" name="nom">
              <!-- <span class="input-group-text btn btn-success" id="basic-addon2">Name</span> -->
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Email" name="email">
              <!-- <span class="input-group-text btn btn-success" id="basic-addon2">@test.com</span> -->
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Numéro" name="numero">
              <!-- <span class="input-group-text btn btn-success" id="basic-addon2">Prenom</span> -->
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>

        </div>
     
      </div>
    
    </form>

   
</div>

</div>

<?php
echo "<h2>Your Input:</h2>";
echo "<div>"."<br>Nom: ".$name."<br>Prenom: ".$prenom."<br>numero: ".$numero."<br>email: ". $email."<br>"."</div>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>