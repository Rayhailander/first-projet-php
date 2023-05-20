
 <?php
  $limit=3;
  if(isset($_GET['page'])){
    $Page_number = $_GET['page'];
  }
  else{
    $Page_number = 1;
  }
  $initial_page=($Page_number - 1 ) *  $limit;
  $getQuery= "SELECT * FROM `user` LIMIT $initial_page,$limit";
  $result = mysqli_query($con,$getQuery);
?> 