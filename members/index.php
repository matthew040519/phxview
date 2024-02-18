<?php include('../include/member_session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHXclick</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../back/plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="../logo/logo.png" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../back/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../back/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../back/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../back/plugins/summernote/summernote-bs4.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../logo/logo.png" alt="AdminLTELogo" height="150" width="150">
  </div> -->

  <!-- Navbar -->
    <?php include('../include/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include('../include/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                $id = $_SESSION['id'];
                $phx_coin = mysqli_query($connection, "SELECT sum(rate) as total_rate FROM member_task1 WHERE member_id = $id"); 
                $convert = mysqli_query($connection, "SELECT sum(phxcoin) as phxcoin, sum(aznt) as aznt FROM conversion WHERE member_id = $id");
                $phx_coin_row = mysqli_fetch_array($phx_coin);
                $convert_row = mysqli_fetch_array($convert);
                $total = $phx_coin_row['total_rate'] - $convert_row['phxcoin'];
                if($phx_coin_row['total_rate'] > 0){
              ?>
                <h3><?php echo $total; ?></h3>
                  <?php } else { ?>
                    <h3>0.00</h3>
                    <?php } ?>
                <p>PhxCoin</p>
              </div>
              <div class="icon">
                <i class="fas fa-coins"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default">Convert <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo number_format($convert_row['aznt'], 2); ?></h3>

                <p>AZNT</p>
              </div>
              <div class="icon">
                <i><img width="80px" style="margin-bottom: 100%;" height="100%" src="../logo/aznt.ico" alt=""></i>
              </div>
              <a href="#" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0.00</h3>

                <p>Withdrawal</p>
              </div>
              <div class="icon">
                <i class="fas fa-wallet"></i>
              </div>
              <a href="#" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="time"></h3>
                <p>Days Remaining</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar"></i>
              </div>
              <a href="#" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>_</h3>

                <p>Rewards Wallet</p>
              </div>
              <div class="icon">
                <i class="fas fa-wallet"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Unilevel</p>
              </div>
              <div class="icon">
                <i class="fas fa-network-wired"></i>
              </div>
              <a href="#" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>Downlines</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>E-market</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <form method="POST">
          <?php 
            $id = $_SESSION['id'];
            $query = mysqli_query($connection, "SELECT * FROM member_task1 WHERE member_id = $id ORDER BY id DESC LIMIT 1");
            $check = mysqli_num_rows($query);
            if($check > 0)
            {
                $row = mysqli_fetch_array($query);
                $task_id = $row['task_id'] + 1;

                $query_task = mysqli_query($connection, "SELECT * FROM task1 WHERE task_id = $task_id");
                $check_task = mysqli_num_rows($query_task);
                if($check_task > 0){
                    $row_task = mysqli_fetch_array($query_task); ?>

                    <input type="hidden" name="task_id" value="<?php echo $row_task['task_id']; ?>">
                    <input type="hidden" name="rate" value="<?php echo $row_task['rate']; ?>">
                    <div class="card-header" style="text-align: center;">
                      <h3><?php echo $row_task['task_name']; ?></h3><br>
                      Rewards: <?php echo number_format($row_task['rate'], 2); ?>
                    </div>
                    <div class="card-body">
                      <video height="400px" width="100%" controls id="myVideo">
                        <source src="../storage/video/<?php echo $row_task['url']; ?>" type="video/mp4"></source>
                      </video>
                    </div>

                    <div class="card-footer">
                      <a class="btn btn-primary" onclick="myFunction()">Finish</a>
                      <button class="btn btn-success" type="submit" name="claim" id="claim" style="display: none;">Claim your rewards</button>
                    </div>

           <?php } else {  ?>
             <div class="card-body">
                <div style="text-align: center;">
                  <h1>No Task Available..</h1>
                </div>
             </div>
          <?php } } 
           else {
            $query_task = mysqli_query($connection, "SELECT * FROM task1 LIMIT 1");
                $row_task = mysqli_fetch_array($query_task);
                $check_task = mysqli_num_rows($query_task);
                if($check_task > 0){
          ?>
                <input type="hidden" name="task_id" value="<?php echo $row_task['task_id']; ?>">
                <input type="hidden" name="rate" value="<?php echo $row_task['rate']; ?>">
                <div class="card-header" style="text-align: center;">
                  <h3><?php echo $row_task['task_name']; ?></h3>
                  Rewards: <?php echo number_format($row_task['rate'], 2); ?>
                </div>
                <div class="card-body">
                <!-- style="pointer-events: none;" -->
                  <video height="400px" width="100%" controls  id="myVideo">
                    <source src="../storage/video/<?php echo $row_task['url']; ?>" type="video/mp4"></source>
                  </video>
                </div>
              
                <div class="card-footer">
                  <a class="btn btn-primary" onclick="myFunction()">Finish</a>
                  <button class="btn btn-success" type="submit" name="claim" id="claim" style="display: none;">Claim your rewards</button>
                </div>
            
          <?php } else { ?>
            <div class="card-body">
                <div style="text-align: center;">
                  <h1>No Task Available..</h1>
                </div>
             </div>
            <?php } } ?>
          
          </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Convert</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Convertion of PhxCoin to AZNT</label>
                        <input type="text" readonly name="client_name" value="5:1" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">PhxCoin</label>
                        <input type="number" name="phxcoin" class="form-control">
                    </div>
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   
    <!-- /.content -->
  </div>
  <?php

    if(isset($_POST['save']))
    {
        $phxcoin = $_POST['phxcoin'];
        $id = $_SESSION['id'];
        $convert = $phxcoin / 5;

        $phx_coin = mysqli_query($connection, "SELECT sum(rate) as total_rate FROM member_task1 WHERE member_id = $id"); 
                $convert = mysqli_query($connection, "SELECT sum(phxcoin) as phxcoin FROM conversion WHERE member_id = $id");
                $phx_coin_row = mysqli_fetch_array($phx_coin);
                $convert_row = mysqli_fetch_array($convert);
                $total = $phx_coin_row['total_rate'] - $convert_row['phxcoin'];

        if($phxcoin > $total)
        {
            echo "<script>alert('Insufficient Balance!')</script>";
        }
        else{
          mysqli_query($connection, "INSERT INTO `conversion`( `member_id`, `phxcoin`, `aznt`) 
          VALUES ('$id', '$phxcoin', '$convert')");
          echo "<script>window.location.replace('index.php')</script>";
        }
       

        
    }

    if(isset($_POST['claim']))
    {

        date_default_timezone_set('Asia/Manila');
        $tdate = date("Y-m-d");
        $task_id = $_POST['task_id'];
        $id = $_SESSION['id'];
        $rate = $_POST['rate'];

        $query = mysqli_query($connection, "INSERT INTO `member_task1`( `task_id`, `member_id`, `status`, `rate`, `date`) 
        VALUES ('$task_id', '$id', 0, '$rate', '$tdate')");

        echo "<script>window.location.replace('index.php')</script>";

    }
  
  ?>
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
<script>
  
  function myFunction() {
    var x = document.getElementById("myVideo").ended;
    // alert(x);
    if(x)
    {
      var claim = document.getElementById('claim');
      claim.style.removeProperty("display");
    }
  }
</script>
<?php $date1 = date_create($_SESSION['date_join']); ?>
<script>

    // function everySeconds(date)
    // {
    //     return <?php ?>
    // }
    var countDownDate = new Date("<?php $date = date_create($_SESSION['date_join']); date_add($date,date_interval_create_from_date_string("120 days")); echo date_format($date, 'F j, Y H:i:s');?>").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {

      var now = new Date("<?php date_add($date1,date_interval_create_from_date_string("1 seconds")); echo date_format($date1, 'F j, Y H:i:s');?>").getTime();
      
      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      // document.getElementById("time").innerHTML = days + "d " + hours + "h "
      // + minutes + "m " + seconds + "s ";
      document.getElementById("time").innerHTML = days + "d " + hours + "h ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
<script src="../back/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../back/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../back/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../back/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../back/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../back/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../back/plugins/moment/moment.min.js"></script>
<script src="../back/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../back/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../back/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../back/dist/js/pages/dashboard.js"></script>
</body>
</html>
