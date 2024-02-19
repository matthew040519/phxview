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
            <h1 class="m-0">Package</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
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
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" width="100%" src="../logo/logo.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Bronze Package</h5>
                            <!-- <label for="">Price:  &#8369; 500.00</label> -->
                            <p>2 clicks / 16 videos <br> Airdrop: 200 <br> Phxrewards: 20 Phx per Day x 120 days <br> Free Promo Coupon: 3 <br>Free Raffle Ticket: 2</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" width="100%" src="../logo/logo.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Silver Package</h5>
                            <!-- <label for="">Price:  &#8369; 800.00</label> -->
                            <p>3 clicks / 24 videos <br> Airdrop: 400 <br> Phx rewards: 30 Phx per Day x 120 days <br>  Free Promo Coupon: 6 <br>Free Raffle Ticket: 4</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" width="100%" src="../logo/logo.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Gold Package</h5>
                            <!-- <label for="">Price:  &#8369; 900.00</label> -->
                            <p>4 clicks / 32 videos<br> Airdrop: 600 <br>Phx rewards: 40 Phx per Day x 120 days<br> Free Promo Coupon: 9 <br>Free Raffle Ticket: 6</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" width="100%" src="../logo/logo.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5>Platinum Package</h5>
                            <!-- <label for="">Price:  &#8369; 900.00</label> -->
                            <p>5 clicks / 16 videos <br> Airdrop: 800<br> Phx rewards: 50 Phx per Day x 120 days <br>Free Promo Coupon: 12 <br>Free Raffle Ticket: 8</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button>
                            
            </div>
          </div>
        </div>
        <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-thumbmail" width="100%" src="../logo/logo.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5>VIP Package</h5>
                            <!-- <label for="">Price:  &#8369; 900.00</label> -->
                            <p>8$ ICO 1 clicks / 8 videos <br> Airdrop: 200,000 <br> Phx rewards: 100 Phx per Day x 120 days <br>Free Promo Coupon: 12<br> Free Raffle Ticket: 12</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Select</button> 
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

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
