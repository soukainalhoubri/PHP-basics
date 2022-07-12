<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>page user</title>
</head>
<body>
    <?php
      $user=$_POST["username"];
      $pass=$_POST["password"];

      if($user=="user" AND $pass=="pass"){
       echo "<h1> Authentification completed succesfully!</h1>";
      }
      else{
       echo "<h1 style='color:red'> Error! Wrong credentials</h1>";
       echo "<a href='activity4.php'>Go to homepgae</a>";
      }
    ?>
</body>
</html>