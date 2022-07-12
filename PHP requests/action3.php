<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>salutations</title>
</head>
<body>
   <?php
      $sexe=$_POST["sexe"];
      $nom=$_POST["nom"];
      if($sexe=="female"){
       echo "<h1>Bonjour Madame ".$nom."</h1>";
      }
      else{
       echo "<h1>Bonjour Monsieur ".$nom."</h1>";
      }
      
   ?>
</body>
</html>