<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHXVIEW</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="back/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>PHX</b>VIEW</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="sign_in" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php

        if(isset($_POST['sign_in']))
        {
            include('include/connection.php');

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            session_start();

            $user = mysqli_query($connection, "SELECT * FROM users INNER JOIN user_details ON users.users_id=user_details.users_id WHERE username = '$username'");
            $rowuser = mysqli_fetch_array($user);

            $checkusername = mysqli_num_rows($user);

            if($checkusername > 0)
            {
              if ($password == $rowuser['password']) {

                session_regenerate_id();

                $_SESSION['loggedin'] = TRUE;
                $_SESSION['role'] = $rowuser['role'];
                $_SESSION['username'] = $rowuser['username'];
                $_SESSION['fullname'] = $rowuser['first_name']. " " . $rowuser['last_name'];
                $_SESSION['id'] = $rowuser['users_id'];
                $_SESSION['date_join'] = $rowuser['date_join'];

                if($rowuser['role'] == 1)
                {
                    header('location: admin/index.php');
                }
                else if($rowuser['role'] == 0) {
                    header('location: members/index.php');
                }
                else
                {
                    header('location: client/index.php');
                }
                

              } else {
                echo "<script>alert('Invalid Password.')</script>";
              }
            } else {
                echo "<script>alert('Invalid Username or Password.')</script>";
            }
            


        }
      
      ?>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="back/dist/js/adminlte.min.js"></script>
</body>
</html>
