<!DOCTYPE html>
<html lang="en">
<head>
    <!-- icon -->
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b1cc3697a1.js" crossorigin="anonymous"></script>

    <!-- css AdminLTE -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/adminlte.min.css') ?>"> -->

    <!-- js AdminLTE -->

    <!-- <script type="text/javascript" id="debugbar_dynamic_script"></script>
    <script type="text/javascript" id="debugbar_loader" data-time="1585277113" src="<?php echo base_url('AdminLTE/plugins/'); ?>/index.php?debugbar"></script> -->

    <!-- fontawesome -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css"> -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/dist-lte/css/adminlte.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style-admin.css') ?>">

    <!-- Full Calender css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('fullcalendar/fullcalendar.css') ?>">

    <!-- fulllcalender js -->
    
    <title>BARKAS AMANAH</title>
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
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
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
                </li> -->

                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/anggota/default.png'); ?>" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline"><?php echo session('admin_nama'); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="<?php echo base_url('assets/anggota/default.png'); ?>" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <?php echo session('admin_nama'); ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                        </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?php echo base_url('/profil-admin') ?>" class="btn btn-default btn-flat">Profile</a>
                            <a href="<?php echo base_url('/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('/admin') ?>" class="brand-link">
                <span class="brand-text font-weight-light"><center> BARKAS AMANAH</center></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo base_url('/admin') ?>" class="nav-link">
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/barkas-pending') ?>" class="nav-link">
                                <p>
                                    Pending
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/komisi-data') ?>" class="nav-link">
                                <p>
                                    Data Barkas
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/fraksi-data') ?>" class="nav-link">
                                <p>
                                    Soldout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
            
        <!-- content -->
        <?php $this->renderSection('content'); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- ChartJS -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/sparklines/sparkline.js"></script>
    
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/pages/dashboard.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/demo.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
                $('#data-tabel').DataTable();
            } );
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

    <!-- <script>
        $(function () {
            CKEDITOR.replace('editor');
        });
        $(function () {
            CKEDITOR.replace('editor2');
        });
        $(function () {
            CKEDITOR.replace('editor3');
        });
        $(function () {
            CKEDITOR.replace('editor4');
        });
        $(function () {
            CKEDITOR.replace('editor5');
        });
    </script> -->

    <script src="<?php echo base_url('fullcalendar/jquery-ui.min.js') ?>"></script>

    <script src="<?php echo base_url('fullcalendar/moment.min.js') ?>"></script>

    <script src="<?php echo base_url('fullcalendar/fullcalendar.min.js') ?>"></script>

    <!-- <script src="<?php echo base_url('js/main.js') ?>"></script>
    
    <script src="<?php echo base_url('js/locales-all.js') ?>"></script>

    <script src="<?php echo base_url('js/moment.js') ?>"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('/AdminLTE/plugins'); ?>/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('/AdminLTE/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('/AdminLTE/dist'); ?>/js/adminlte.min.js"></script> -->
</body>
</html>