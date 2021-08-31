<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos annonces</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head>


<body>
    
<?php
require_once("connexion.php");
require_once("produitspoo.php");

//update + info


$sql ="SELECT id, titre, photo, description, categorie, prix, datepublication, lieu FROM produits";
$query = $db->prepare($sql);
$query->execute();


while($d = $query->fetch())  {
echo "<div class ='annonce'>";

echo "<div class='titre'>" .$d['titre'] . "</div>";
echo "<div class='photo'>" .$d['photo'] . "</div>";
echo "<div class='cat'>" .$d['categorie'] . "</div>";
echo "<div class='description'>" .$d['description'] . "</div>";
echo "<div class='prix'>" .$d['prix'] .$d['lieu'] . "</div>";
echo "<div class='date'>" .$d['datepublication'] . "</div>";
echo '<a href="update.php?id='.$d['id'] .'"> <input type="button" id="update" value ="Modifier !">';


echo " </a> </div>";


}


?>

</body>
</html>