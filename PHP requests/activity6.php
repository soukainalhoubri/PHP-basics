<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>formulaire profession</title>
</head>
<body>
 <form action="action6.php" method="post">
  Nom: <input type="text" name="username" placeholder="tapez votre nom" required><br><br>
  Mot de passe: <input type="password" name='password' placeholder="entrez votre mot de passe" required><br><br>
  Proffession:</br>
  <select>
    <option id="option1" value="agent">Agent immoblier</option>
    <option id="option2" value="architect">Architect</option>
    <option id="option3" value="commerce">Commerce et artisanat</option>
  </select>
<input type="reset" value="Reset"><input type="submit" value="Envoyer">
 </form>


</body>
</html>