<?php include('../include/member_session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHXClick</title>

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
            <h1 class="m-0">Convert Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Convert Report</li>
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
                <!-- <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Withdraw</button></h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>PHXCoin</th>
                    <th>AZNT</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $id = $_SESSION['id'];

                      $query = mysqli_query($connection, "SELECT * FROM conversion INNER JOIN member_task1 ON conversion.member_id=member_task1.member_id WHERE conversion.member_id = $id");
                      while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <td><?php echo $row['phxcoin']; ?></td>
                      <td><?php echo $row['aznt']; ?></td>
                      <td><?php echo $row['date']; ?></td>
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
              <h4 class="modal-title">Withdraw</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <label for="">Username</label>
                        <input type="text" class="form-control">
                    </div> -->
                    <div class="col-md-12">
                        <label for="">Amount</label>
                        <input type="number" class="form-control">
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
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
