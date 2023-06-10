<?php
    include 'config.php';
    echo $_POST["idname"];
    if(isset($_POST['updatevalue'])){
        if(isset($_POST["username"],$_POST["email"],$_POST["te"],$_POST["idname"])){
            $username=validation( $_POST["username"]);
            $email=validation( $_POST["email"]);
            $tel=validation($_POST["te"]);
            $id=$_POST["idname"];
            if(isset($username,$email,$tel)){
                $rec= " UPDATE `user` SET `user_name`='$username',`email`='$email',`tel`='$tel' WHERE id='$id'";
                    $result= mysqli_query($con,$rec); 
            }
        } 
        header('location:acceuil.php');
    } 
?>