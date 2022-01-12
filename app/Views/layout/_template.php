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

        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style.css') ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('fullcalendar/fullcalendar.css') ?>">

        <!-- <title><?php echo $title; ?></title> -->
    </head>
    <body>

        

        <?php $this->renderSection('content'); ?>


        <footer class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mt-5">
                        <div class="w-75">
                            <div class="tittle">
                                Tentang Kami
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-5">
                        <div class="flex-row-reverse">
                            <div class="tittle">
                                Alamat
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="tittle">
                                Social Media
                            </div>
                            <div class="isi">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="me-3">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="me-3">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="me-3">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        -->

        <!-- Aos -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>

        <!-- custom js -->
        <script type="text/javascript" src="<?php echo base_url('js/script.js') ?>"></script>

        <script src="<?php echo base_url('fullcalendar/jquery-ui.min.js') ?>"></script>

        <script src="<?php echo base_url('fullcalendar/moment.min.js') ?>"></script>

        <script src="<?php echo base_url('fullcalendar/fullcalendar.min.js') ?>"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>