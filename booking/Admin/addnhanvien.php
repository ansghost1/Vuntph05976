<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./Combo.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./danhmuc.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh Mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./nhanvien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nhân Viên</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./silde.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Slide</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./thanhvien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thành viên</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./tintuc.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tin Tức</p>
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
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
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-primary">
                    <div>
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div>
                        <!-- Conversations are loaded here -->
                        <div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <p>Tên nhân viên</p><input type="text" name="name_nv">
                                <input type="submit" value="Thêm " name="btn">
                            </form>
                            <?php
                            include 'db.php';
                            if (isset($_POST['btn'])) {
                                $name_nv = $_POST['name_nv'];
                                $sql = "insert into nhanvien value('null','$name_nv')";
                                echo $sql;
                                $kq = $conn->exec($sql);
                                if ($kq == 1) {
                                    header('Location:nhanvien.php');
                                } else {
                                    echo "Lỗi";
                                }
                            }
                            ?>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <di <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">

                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">

                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Sarah Doe
                                        <small class="contacts-list-date float-right">2/23/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nadia Jolie
                                        <small class="contacts-list-date float-right">2/20/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nora S. Vans
                                        <small class="contacts-list-date float-right">2/10/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Where is your new...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        John K.
                                        <small class="contacts-list-date float-right">1/27/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Kenneth M.
                                        <small class="contacts-list-date float-right">1/4/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Never mind I found...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
    </div>
    <!--/.direct-chat -->

    <!-- TO DO List -->



    <!-- Map card -->

    <!-- /.card -->

    <!-- solid sales graph -->

    <!-- /.card -->

    <!-- Calendar -->

    <!-- /.card -->
    </section>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>