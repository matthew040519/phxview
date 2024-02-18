<?php include('../include/member_session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHXVIEW</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../back/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../back/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../logo/logo.png" alt="AdminLTELogo" height="150" width="150">
  </div>

  <!-- Navbar -->
    <?php include('../include/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include('../include/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Market</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Market</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGEKk1DaaAsuqNnnM9yrZ_6OK6I7CiM1EFEg&usqp=CAU" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Package 1</h5>
                            <!-- <label for="">Price:  &#8369; 500.00</label> -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcI9oHx3sdbQBO61LQcggwWHzW7aZWWFmifg&usqp=CAU" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Package 2</h5>
                            <!-- <label for="">Price:  &#8369; 800.00</label> -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvddyFi9n-a3EnNVaqD42l8U6-GOeAQ4gj-8Xi8rUG5hWto_CvTGNZqNYj753GY8AtJ7s&usqp=CAU" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Package 3</h5>
                            <!-- <label for="">Price:  &#8369; 900.00</label> -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvddyFi9n-a3EnNVaqD42l8U6-GOeAQ4gj-8Xi8rUG5hWto_CvTGNZqNYj753GY8AtJ7s&usqp=CAU" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Package 4</h5>
                            <!-- <label for="">Price:  &#8369; 900.00</label> -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../include/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../back/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../back/dist/js/demo.js"></script>

</body>
</html>
