<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Password</title>
</head>
<body>
<form action="action5.php" method="post">
  Nom: <input type="text" name="nom" placeholder="tapes votre nom" required><br><br>
  Prénom: <input type="text" name='prenom' placeholder="tapes votre prenom" required><br><br>
  Civilié:<br>
  <input type="radio" name="civilite" value="Melle.">Melle.<br>
  <input type="radio" name="civilite" value="Mme.">Mme.<br>
  <input type="radio" name="civilite" value="M.">M.<br>
  Email: <input type="email" name='email' placeholder="entrez botre e-mail" required><br><br>
  Mot de passe: <input type="password" name='password' placeholder="antrez votre mot de passe" required><br><br>
  Confirmation de mot de passe: <input type="password" name='passconfirm' placeholder="confirmez votre mot de passe" required><br><br>

  <input type="submit" value="Envoyer">
</form>
</body>
</html>