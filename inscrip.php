<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    

  <body>


<?php


    require_once("connexion.php");
    
    ?>
    
   <center>
    <div class="forma">
        <form action="?" method="POST">

          <table class="table table-dark">
            <div class ="log"> <tr>
            <input type="text" name="nom" id="nom" placeholder="Nom">  <br>  <br>
            <input type="password" name="password" id="password" placeholder="Mot de Passe"> <br>  <br> 
            <input type="text" name="admail" id="admail" placeholder="Mail">


            </div>
            </div>

</table>

            </center>

            <?php
            if ($_POST) {

              if(isset($_POST["nom"]) && !empty($_POST["nom"])
            
             && isset($_POST["password"]) && !empty($_POST["password"])
             && isset($_POST["admail"]) && !empty($_POST["admail"])){
              
              $nom = strip_tags($_POST["nom"]);
              $password = strip_tags($_POST["password"]);
              $admail = strip_tags($_POST["admail"]);
    

 
              $sql ="INSERT INTO users (nom, password, admail) VALUES (:nom, :password, :admail)";
              $query = $db ->prepare($sql);
              $query->bindValue(':nom', $nom);
              $query->bindValue(':password', $password);
              $query->bindValue(':admail', $admail);

              $query->execute();
             }
            }

            ?>
               
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="Ajout" value=" Ajout ">
                   
               <center>
                <input type="submit" name='Inscrip' value='Inscription'/> 
          </center>
<!--</tr> -->

            </form>
</table>


<img id ="cham" src="img/z2.jpg"></img>

<div id="Accueil">
<a href="index.php">
<input type="button" value="Accueil">
</a>
    </body>

</html>