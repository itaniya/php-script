<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS @v4.5.3 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>SignUp</title>
</head>

<body>
  <?php require_once('includes/_nav.php') ?>

  <div class="container">
    <h1 class="text-center">Signup to our website</h1>
    <form id="signUpForm">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
      </div>
      <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword">
      </div>
      
      <button type="submit" class="btn btn-primary" id="signUpFormSubmit">SignUp</button>
    </form>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  
  <!-- Bootstrap CSS @v4.5.3 -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="js/sweetalert.min.js"></script>

  <script src="js/signup.js"></script>

</body>

</html>