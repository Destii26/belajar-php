<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('location: login.php');
}


// Atur Waktu

date_default_timezone_set('Asia/Jakarta');

$dayList = array(
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
);

$monthList = array(
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
);

$day = $dayList[date('l')];
$month = $monthList[date('F')];
$time = $day . ', ' . date('d ') . $month . date(' Y H:i:s');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"><?= $time; ?></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="logout.php" style="color: white;">
                        logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Online Shop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION['name']; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="home.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home

                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Master Data</li>
                        <li class="nav-item">
                            <a href="products.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="products.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Users</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-3">


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <a class="btn btn-primary mb-2" href="tambahproduk.php">Tambah</a>
                                    <form method="GET" action="">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cari produk..." name="search">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
                                                <a class="btn btn-outline-primary" href="products.php">refresh</a>
                                            </div>
                                        </div>
                                    </form>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Option</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Code</th>
                                                <th>Unit</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            include "koneksi.php";



                                            // Menentukan jumlah data yang akan ditampilkan per halaman
                                            $dataPerPage = 5; 

                                            // Menentukan halaman saat ini
                                            if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                $currentPage = $_GET['page'];
                                            } else {
                                                $currentPage = 1;
                                            }

                                            $startFrom = ($currentPage - 1) * $dataPerPage;

                                            // Menentukan jumlah data total dari database
                                            $totalDataQuery = mysqli_query($conn, "SELECT COUNT(*) as total FROM products");
                                            $totalData = mysqli_fetch_assoc($totalDataQuery)['total'];

                                            $totalPages = ceil($totalData / $dataPerPage);

                                            $firstData = ($currentPage - 1) * $dataPerPage + 1;


                                            // Query untuk mengambil data yang akan ditampilkan
                                            if (isset($_GET['search']) && !empty($_GET['search'])) {
                                                $keyword = $_GET['search'];
                                                $sql = mysqli_query($conn, "SELECT p.*, c.category_name 
                                                FROM products p 
                                                LEFT JOIN product_categories c ON p.category_id = c.id
                                                WHERE p.product_name LIKE '%$keyword%' 
                                                OR c.category_name LIKE '%$keyword%'
                                                OR p.description LIKE '%$keyword%'
                                                LIMIT $startFrom, $dataPerPage");
                                            } else {
                                                $sql = mysqli_query($conn, "SELECT p.*, c.category_name 
                                                FROM products p 
                                                LEFT JOIN product_categories c ON p.category_id = c.id
                                                LIMIT $startFrom, $dataPerPage");
                                            }
                                            while ($data = mysqli_fetch_assoc($sql)) {
                                            ?>
                                                <tr>
                                                    <td><?= $firstData++; ?></td>
                                                    <td style="text-align: center; display: flex; justify-content: space-between;">
                                                        <a class="btn btn-warning mr-2" href="edit.php?id=<?= $data['id']; ?>"><i class="fa fa-edit"></i>Edit</a>
                                                        <a class="btn btn-danger" href="delete.php?id=<?= $data['id']; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-edit"></i>Delete</a>
                                                    </td>
                                                    <td><?= $data['product_name']; ?></td>
                                                    <td><?= $data['category_name']; ?></td>
                                                    <td><?= $data['product_code']; ?></td>
                                                    <td><?= $data['unit']; ?></td>
                                                    <td><?= $data['description']; ?></td>
                                                    <td><?= $formatted_uang = 'Rp' . number_format($data['price'], 0, ',', '.'); ?></td>
                                                    <td><?= $data['stock']; ?></td>
                                                    <td>
                                                        <img src="upload/<?= $data['image']; ?>" width="200" alt="">
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                    <!-- Tambahkan navigasi pagination -->
                                    <div class="mt-2">
                                        <ul class="pagination">
                                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                                <li class="page-item <?php if ($i == $currentPage) echo 'active'; ?>">
                                                    <a class="page-link" href="?page=<?= $i . (isset($_GET['search']) ? '&search=' . $_GET['search'] : ''); ?>">
                                                        <?= $i; ?>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/pages/dashboard.js"></script>
</body>

</html>