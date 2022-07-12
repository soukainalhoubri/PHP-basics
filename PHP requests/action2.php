<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Table de multiplication</title>
</head>
<body>
   <?php
     $num=$_POST["entier"];
     if(isset($num)){
      for($i=1;$i<=9;$i++){
       echo "<h1>".$num."x".$i."=".$num*$i."</h1>";
    }
     }

     

   ?>
</body>
</html>