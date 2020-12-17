<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>LogIn</title>
</head>

<body>
  <?php require 'includes/_nav.php'; ?>

  <div class="container">
    <h1 class="text-center">LogIn to our website</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
      </div>
      
      <button type="submit" class="btn btn-primary" id="loginApp">LogIn</button>
    </form>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/login.js"></script>

</body>

</html>