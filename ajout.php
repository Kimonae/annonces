<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une annonce</title>
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    

  <body>


<?php


    require_once("connexion.php");
    
    ?>
    
   <center>
    <div class="form">
        <form action="?" method="POST">

          <table class="table table-dark">
            <div class ="formu"> <tr>
            <input type="text" name="titre" id="titre" placeholder="Titre" value= "<?php if(isset($titre))echo $titre;?>"> &nbsp;&nbsp; <br>  <br>
            <input type="file" name="photo" id="photo" placeholder="Photo" value= "<?php if(isset($photo))echo $photo;?>"> <br>  <br>  <br>
            <input type="text" name="description" id="description" placeholder="Description" value= "<?php if(isset($description))echo $description;?>">&nbsp;&nbsp;
            <input type="text" name="categorie" id="categorie" placeholder="Categorie" value= "<?php if(isset($categorie))echo $categorie;?>"> <br>
            <input type="int" name="prix" id="prix" placeholder="Prix" value= "<?php if(isset($prix))echo $prix;?>">&nbsp;&nbsp;
            <input type="date" name="datepublication" id="datepublication" placeholder="Date" value= "<?php if(isset($datepublication))echo $datepublication;?>"> <br> <br>
            <input type="text" name="lieu" id="lieu" placeholder="Lieu" value= "<?php if(isset($lieu))echo $lieu;?>">

            </div>
            </div>

</table>

            </center>

            <?php
            if ($_POST) {

              if(isset($_POST["titre"]) && !empty($_POST["titre"])
            
             && isset($_POST["photo"]) && !empty($_POST["photo"])
             && isset($_POST["description"]) && !empty($_POST["description"])
             && isset($_POST["categorie"]) && !empty($_POST["categorie"])
             && isset($_POST["prix"]) && !empty($_POST["prix"])
             && isset($_POST["datepublication"]) && !empty($_POST["datepublication"])
             && isset($_POST["lieu"]) && !empty($_POST["lieu"])){
              
              $titre = strip_tags($_POST["titre"]);
              $photo = strip_tags($_POST["photo"]);
              $description = strip_tags($_POST["description"]);
              $categorie = strip_tags($_POST["categorie"]);
              $prix = strip_tags($_POST["prix"]);
              $datepublication = strip_tags($_POST["datepublication"]);
              $lieu = strip_tags($_POST["lieu"]);
    

 
              $sql ="INSERT INTO produits (titre, photo, description, categorie, prix, datepublication, lieu) VALUES (:titre, :photo, :description, :categorie, :prix, :datepublication, :lieu)";
              $query = $db ->prepare($sql);
              $query->bindValue(':titre', $titre);
              $query->bindValue(':photo', $photo);
              $query->bindValue(':description', $description);
              $query->bindValue(':categorie', $categorie);
              $query->bindValue(':prix', $prix);
              $query->bindValue(':datepublication', $datepublication);
              $query->bindValue(':lieu', $lieu);
              $query->execute();
             }
            }

            ?>
               
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="Ajout" value=" Ajout ">
 <center>
                <input type="submit" name='Bouton' value='Ajouter'/>
          </center>
<!--</tr> -->

            </form>
</table>

<div id="Accueil">
<a href="index.php">
<input type="button" value="Accueil">
</a>
    </body>

</html>