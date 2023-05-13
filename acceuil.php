<?php
include 'utilitie/test_connection.php';
include 'get_user.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-examples\assets\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap-5.3.0-alpha1-examples\assets\dist\js\bootstrap.bundle.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand col-lg-2 me-0" href="#">Centered nav</a>
      <div class="d-lg-flex col-lg-2 justify-content-lg-end">
          <form action="deconnexion.php" method="POST"> 
              <button class="btn btn-primary">Deconnexion</button>
          </form>
      </div>
    </div>
</nav>
<div class="container">
  <div class="mt-4 p-5 bg-light text-dark rounded">
    <h2>Manager User</h2>
      <div class="card">
        <div class="card-body">
          <div id="button">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#adduser">
              Add User
            </button>
          </div>
          <div class="modal" id="adduser">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h3>Add User</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <form method="POST" action="enregistrement.php">
                  <input type="text" name="username" placeholder="entrez un nom d'utilisateur" class="form-control rounded-4" required><br>
                  <input type="email" name="email" placeholder="entrez votre email" class="form-control rounded-4" required><br>
                  <input type="password" name="password" placeholder="entrez votre mot de passe"  class="form-control rounded-4" required><br>
                  <input type="password" name="confirmpass" placeholder="confirmer votre mot de passe"  class="form-control rounded-4" required><br>
                  <input type="tel" name="tel" placeholder="entrez votre numero de telephone" class="form-control rounded-4" required><br>
                  <input type="submit" value="S'enregistrer" class="w-100 mb-2 btn btn-lg rounded-4 btn-success">
                </form>
                </div>
              </div>
            </div>
          </div>
          <table class="table table-striped table-striped ">
            <thead>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>NUMBER</th>
              <th>TYPE</th>
              <th>UPDATE</th>
              <th>DELETE</th>
            </thead>
            <tbody>
            <?php 
            if($result){
              foreach($result as $rows){
            ?>
            <tr>
              <td><?php echo $rows['user_name'] ?></td>
              <td><?php echo $rows['email'] ?></td>
              <td><?php echo $rows['tel'] ?></td>
              <td><?php echo$rows['type'] ?></td>
              <div id="button">
                <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#update">Edit</button></td>
                <div class="modal" id="update">
                  <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                        <h3>Update</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="update.php">
                          <input type="text" value="<?php  echo $rows['user_name'] ?>" name="username" class="form-control rounded-4" required><br>
                          <input type="email" name="email"value="<?php  echo $rows['email'] ?>" class="form-control rounded-4" required><br>
                          <input type="tel" name="te" value="<?php  echo $rows['tel'] ?>" class="form-control rounded-4" required><br>
                          <input type="submit" value="Update" class="w-100 mb-2 btn btn-lg rounded-4 btn-success">
                        </form>
                      </div>
                  </div>
                </div>
              </div>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <?php }} ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
</body>
</html>