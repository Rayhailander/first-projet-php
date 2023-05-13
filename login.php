<?php
        include "config.php";
        $username=$password='';
        session_start();
        if(isset($_POST['username'],$_POST['password'])){
            $username=validation($_POST['username']);
            $password=validation($_POST['password']);
            $query= "SELECT * FROM `user` WHERE  password='$password' AND user_name='$username'";
            $result= mysqli_query($con,$query);
            if (mysqli_num_rows($result)){
                $user=mysqli_fetch_array($result);
                if($user["valid"]==0){
                    $error="votre compte na pas encore ete valide";
                }else{
                    $_SESSION['username']=$username;
                    header("location:acceuil.php");
                }
                
            }
            else{
               
                $error="nom d'utilisateur ou mot de passe incorrect";
            }
        }
        
    ?>
    