<?php
include 'login.php';
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
    <form action="" class="box"  method="POST">
        <div class="box-title">
            LOGIN
        </div>
        <input type="text" name="username" placeholder="entrez votre nom d'utilisateur" class="box-input">
        <input type="password" name="password" placeholder="entrez votre mot de passe"  class="box-input">
        <input type="submit" value="Connexion" class="box-button">
        <p>creer un compte si vous etes nouveau. <a href="register.php">s'inscrire?</a></p>
        <p class="error_message">
            <?php
            if(isset($error)){
                echo $error;
            }
            ?>
        </p>
    </form>
</body>
</html>
