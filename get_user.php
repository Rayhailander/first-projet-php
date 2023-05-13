<?php 
include 'config.php';
$sql="select * from `user` where type !='admin'";
$result = mysqli_query($con,$sql);
?>