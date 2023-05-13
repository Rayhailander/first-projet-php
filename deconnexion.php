<?php
session_start();
if(isset($_SESSION['username'])){
    if(session_destroy()){
        header("location:index.php");
    }
}
?>