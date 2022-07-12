<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>formulaire salutation</title>
</head>
<body>
<form action="action3.php" method="post">
  Nom: <input type="text" name="nom" placeholder="tapez votre nom" required><br><br>
  Sexe: <br><br>
  <input type="radio" name='sexe' value="female" id="female" required> Female<br><br>
  <input type="radio" name='sexe' value="male" id="male" required> Male<br><br>
  <input type="submit" value="Envoyer">
</form>
</body>
</html>