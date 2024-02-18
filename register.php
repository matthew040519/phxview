<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHX Click</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="back/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>PHX</b>Click</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
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
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="first_name" placeholder="Firstname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="last_name" placeholder="Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea name="address" class="form-control" id="" placeholder="Address" cols="30" rows="4"></textarea>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                <a href="login.php" class="text-center">I already have a membership</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php

        if(isset($_POST['submit'])){
            
            include('include/connection.php');

            date_default_timezone_set('Asia/Manila');
            $tdate = date("Y-m-d");

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $address = $_POST['address'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];


            mysqli_query($connection, "INSERT INTO `users`( `username`, `password`, `role`, `date_join`, `date_expired`)
                 VALUES ('$username', '$password', 0, '$tdate', '$tdate')");

            $getID = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");
            $row = mysqli_fetch_array($getID);
            $last_id = $row['users_id'];

            mysqli_query($connection, "INSERT INTO `user_details`(`users_id`, `first_name`, `last_name`, `address`) 
                VALUES ('$last_id', '$first_name', '$last_name', '$address')");

            header('location: login.php');

        }
      
      ?>

      <!-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="back/dist/js/adminlte.min.js"></script>
</body>
</html>
