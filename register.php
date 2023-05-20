<?php
  include 'enregistrement.php';
  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <form action="" class="box" method="POST">
        <div class="box-title">
            INSCRIPTION
        </div>
        <input type="text" name="username" placeholder="entrez un nom d'utilisateur" class="box-input" required>
        <input type="email" name="email" placeholder="entrez votre email" class="box-input" required>
        <input type="password" name="password" placeholder="entrez votre mot de passe"  class="box-input" required>
        <input type="password" name="confirmpass" placeholder="confirmer votre mot de passe"  class="box-input" required>
        <input type="tel" name="tel" placeholder="entrez votre numero de telephone" class="box-input" required>
        <input type="submit" value="S'enregistrer" class="box-button" name="int">
        <p>Vous avez deja un compte?  <a href="index.php"> se connecter</a></p>
        <p class="error_message">
             <?php
            if(isset($erreur)){
                echo $erreur;
            }
            ?>
        </p>
    </form>
</body>
</html> 