<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>action</title>
</head>
<body>
 <h1>Page d'accueil</h1>
Bonjour,
 <?php 
 
 if(empty($_POST["nom"]) AND empty($_POST["prenom"])){
    echo strip_tags("l'une des variables est vide! <br><a href='activity1.php'>revenir à la page d'accueil</a>");
 }
 else{
  echo ($_POST["nom"])." ".($_POST["prenom"]);
 }
 ?>
</body>
</html>