<?php
    include 'config.php';
    if(isset($_POST["username"],$_POST["email"],$_POST["password"],$_POST["tel"],$_POST["confirmpass"])){
        $username=validation( $_POST["username"]);
        $email=validation( $_POST["email"]);
        $password=validation( $_POST["password"]);
        $tel=validation($_POST["tel"]);
        $confirmpass=validation($_POST["confirmpass"]);
        if($password != $confirmpass){ 
          $erreur = "les deux mot de passe sont differents";
          } else {
              if(isset($username,$email,$password,$tel)){
                  $query= "SELECT * FROM `user` WHERE  email='$email' or user_name='$username'";
                  $result1= mysqli_query($con,$query);
                  if (mysqli_num_rows($result1)){
                      $erreur = "votre adresse email ou votre nom d'utilisateur existe deja"; 
                  } else {
                      $rec= "INSERT INTO `user`(`user_name`, `email`, `password`, `tel`,`type`)
                      VALUES ('$username','$email','$password','$tel','guest')";
                      $result= mysqli_query($con,$rec); 
                      header('location:acceuil.php');
                  }
              }
          } 
    }
?>