<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
    <table>
    <tr>
    <td class="bg-success"> nom</td>
    <td class="bg-success">prenom</td>
    <td class="bg-success">email</td>
    <td class="bg-success">numero</td>
    </tr>
    </table>
    <table id="app">
    </table>

<script type="text/javascript" >

$.get( "affichage.php", function( data ) {
    var personne = JSON.parse(data);
  $( ".app" ).html( personne );

  //variable 
  let str="";


//traitement
for(i in personne){
   
  str +="<tr><td>"+personne[i].nom+"</td><td>"+personne[i].prenom+"</td><td>"+personne[i].email+"</td><td>"+personne[i].numero+"</td></tr>";
 
};


//afficahge 
document.getElementById("app").innerHTML =str;
 
});

    </script>
</body>
</html>