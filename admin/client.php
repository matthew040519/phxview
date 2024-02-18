<?php include('../include/admin_session.php'); ?>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../back/dist/css/adminlte.min.css">
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Management</li>
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
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Client</button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Client Code</th>
                    <th>Client Name</th>
                    <th>Client Address</th>
                    <th>Date Joined</th>
                    <th>Date Expired</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $query = mysqli_query($connection, "SELECT username, address, users.users_id as id, date_join, date_expired FROM users INNER JOIN user_details ON users.users_id=user_details.users_id WHERE users.role = 2");
                      while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['date_join']; ?></td>
                        <td><?php echo $row['date_expired']; ?></td>
                        <td>Active</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Client</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Client Name</label>
                        <input type="text" name="client_name" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Date Join</label>
                        <input type="date" name="date_join" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Date Expire</label>
                        <input type="date" name="date_expire" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Address</label>
                        <textarea id="" cols="30" name="address" rows="4" class="form-control"></textarea>
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
  <!-- /.content-wrapper -->
  <?php include('../include/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php

      if(isset($_POST['save']))
      { 
          $client_name = $_POST['client_name'];
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $date_join = $_POST['date_join'];
          $date_expire = $_POST['date_expire'];
          $address = $_POST['address'];

          $query = mysqli_query($connection, "INSERT INTO `users`( `username`, `password`, `role`, `date_join`, `date_expired`) VALUES ('$client_name', md5('123456'), 2, '$date_join', '$date_expire')");

          $getID = mysqli_query($connection, "SELECT * FROM users WHERE username = '$client_name'");
          $row = mysqli_fetch_array($getID);
          $last_id = $row['users_id'];

          $query_details = mysqli_query($connection, "INSERT INTO `user_details`(`users_id`, `first_name`, `middle_name`, `last_name`, `address`, `sponsor_id`, `wallet_id`) VALUES ('$last_id', '$first_name', '', '$last_name', '$address', 0, 0)");

          echo "<script>window.location.replace('client.php')</script>";
      }

?>

<!-- jQuery -->
<script src="../back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../back/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../back/plugins/jszip/jszip.min.js"></script>
<script src="../back/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../back/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../back/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../back/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
