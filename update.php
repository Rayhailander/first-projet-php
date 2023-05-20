<?php
    include 'config.php';
        if(isset($_POST["username"],$_POST["email"],$_POST["tel"])){
            $username=validation( $_POST["username"]);
            $email=validation( $_POST["email"]);
            $tel=validation($_POST["tel"]);
            if(isset($username,$email,$tel)){
                $query= "SELECT * FROM `user` WHERE  email='$email' or user_name='$username'";
                $result1= mysqli_query($con,$query);
                if (mysqli_num_rows($result1)){
                    $erreur = "votre adresse email ou votre nom d'utilisateur existe deja"; 
                } else {
                    $rec= "INSERT INTO `user`(`user_name`, `email`, `tel`,`type`)
                    VALUES ('$username','$email',,'$tel','guest')";
                    $result= mysqli_query($con,$rec); 
                }
            }
        }
        header('location:acceuil.php');
?>