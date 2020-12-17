<?php
session_start();

if(!ISSET($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Welcome - <?= $_SESSION['username']; ?></title>
  </head>
  <body>
    <?php require 'includes/_nav.php'; ?>


    <div class="container">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"> Welcome - <?= $_SESSION['username']; ?></h4>
      <p>Hey How are you doing? Welcome to iSecure You are logged in as Welcome - <?= $_SESSION['username']; ?></p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php"> using this link.</a></p>
    </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>