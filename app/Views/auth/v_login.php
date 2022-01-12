<!doctype html>
<html lang="en">
    <head>
        <!-- icon -->
        <!-- <link rel="icon" href="<?php echo base_url('assets/logo.png'); ?>"> -->
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/b1cc3697a1.js" crossorigin="anonymous"></script>

        <!-- Aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style.css') ?>">

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

        <title>Login</title>
    </head>
    <body class="hold-transition login-page">

        <div class="login-box">
            <div class="login-logo">
                <div class="mt-3">
                    <!-- DPRD Halteng -->
                </div>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <!-- <center>
                        <img src="<?php echo base_url('assets/default.png'); ?>" alt="logo" style="width: 180px;"> 
                    </center> -->
                    
                    <p style="color:red" class="login-box-msg"><?php echo session()->getFlashdata('error'); ?></p>

                    <form action="<?php echo base_url('home/prosesLogin') ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control <?php if(session('validation.username')) : ?>is-invalid<?php endif ?>" value="<?= old('username') ?>" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback text-start" id="invalid-username">
                                <?php echo session('validation.username'); ?>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control <?php if(session('validation.password') or session('error_pass')) : ?>is-invalid<?php endif ?>" value="<?= old('password') ?>" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback text-start" id="invalid-password">
                                <?php echo session('validation.password'); ?>
                                <?php echo session('error_pass'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>

        <!-- versi lama -->
        <!-- <div class="login shadow-sm">
            <center>
                <div class="logo">

                </div>
            </center>
            <form action="<?php echo base_url('home/prosesLogin') ?>" method="POST" class="mt-4">
                <div class="mb-4">
                    <p style="color:red"><?php echo session()->getFlashdata('error'); ?></p>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control <?php if(session('validation.username')) : ?>is-invalid<?php endif ?>" value="<?= old('username') ?>">
                    <div class="invalid-feedback text-start" id="invalid-username">
						<?php echo session('validation.username'); ?>
					</div>
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control <?php if(session('validation.password') or session('error_pass')) : ?>is-invalid<?php endif ?>" value="<?= old('password') ?>">
                    <div class="invalid-feedback text-start" id="invalid-password">
						<?php echo session('validation.password'); ?>
                        <?php echo session('error_pass'); ?>
					</div>
                </div>
                <div class="mb-4 text-center">
                    <input type="submit" class="btn btn-light shadow-sm" value="LOGIN">
                </div>
            </form>
        </div> -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>

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

        <!-- Aos -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>

        <!-- custom js -->
        <script type="text/javascript" src="<?php echo base_url('js/script.js') ?>"></script>
    </body>
</html>