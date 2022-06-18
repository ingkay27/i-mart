<?php 
session_start();
require 'konek.php';

if (isset($_SESSION['login'])) {
  header('Location: index.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $user = mysqli_fetch_assoc($data);


    if ($user) {
      if ($username == $user['username'] && $password == $user['password']) {
      $_SESSION['login'] = true;
      $_SESSION['level'] = $user['level'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['chart'] = [];
      $_SESSION['faktur'] = [];
      header('Location: index.php');
      }
    }


      echo "<script>
      alert('Username atau password salah!!');
      document.location.href = 'login.php';
      </script>";

}

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SUPERINDO -- LOGIN</title>
    <!-- Required meta tags -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>inky</title>
</head>
<body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/profil.jpg" width="100%" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>SUPERINDO</strong></h3>
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" name="remember">
                  <div class="control__indicator"></div>
                </label>
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary" name="login">

              <span class="d-block text-left my-4 text-muted"> developer social media</span>
              
              <div class="social-login">
                <a href="https://web.facebook.com/ingki.pramud.9/" target="_blank" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="https://api.whatsapp.com/send?phone=6281214134521" target="_blank" class="twitter bg-success">
                  <span class="icon-whatsapp mr-3"></span> 
                </a>
                <a href="https://www.instagram.com/inky_2711/" target="_blank" class="google">
                  <span class="icon-instagram mr-3"></span> 
                </a>

                <a href="https://inky.pawonpres.online/" target="_blank" class="google bg-primary">
                  <span class="icon-web mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>