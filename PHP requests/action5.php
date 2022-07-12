<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>form validation</title>
</head>
<body>
    <?php
       $nom=$_POST["nom"];
       $pre=$_POST["prenom"];
       $civility=$_POST["civilite"];
       $email=$_POST["email"];

       $pass=$_POST["password"];
       $passconf=$_POST["passconfirm"];

       echo "<h1> Bonjour ".$civility." ".$nom." ".$pre."</h1>";
       echo "<h1> email : ".$email."</h1>";
    ?>

    
</body>
</html>