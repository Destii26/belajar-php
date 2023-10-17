<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Form Update Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->



                            <div class="card-body">
                                <form action="update.php" method="POST">
                                    <?php
                                    require "database.php";
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM products WHERE id='$id'";
                                    $sql = mysqli_query($koneksi, $query);
                                    while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" name="produk" value="<?= $row['product_name']; ?>">
                                            <input type="text" hidden class="form-control" name="id" value="<?= $row['id']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" value="<?= $row['price']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Stok</label>
                                            <input type="text" class="form-control" name="stok" value="<?= $row['stock']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" value="<?= $row['description']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Diskon</label>
                                            <input type="text" class="form-control" name="diskon" value="<?= $row['discount_amount']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Product code</label>
                                            <input type="text" class="form-control" name="code" value="<?= $row['product_code']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Category id</label>
                                            <input type="text" class="form-control" name="categoryid" value="<?= $row['category_id']; ?>">
                                        </div>
                                    <?php } ?>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong>Copyright &copy; 2014-2021
            <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
</body>

</html>