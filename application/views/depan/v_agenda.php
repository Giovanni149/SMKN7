<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agenda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/fullcalendar.min.css' ?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>00 55 22 66
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>info.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Pontianak, Kalimantan Barat INA. 11001
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2">SMKN 7 Pontianak</a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
    </section>
    <!--//END HEADER -->

    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>"> SMKN 7 Pontianak</a>
                        <p><?php echo date('Y'); ?> © copyright by <a href="https://www.instagram.com/adityadwiutamaa/" target="_blank">X</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span>Pontianak, Kalimantan Barat INA. 11001</p>
                        <p>Email : info@.com
                            <br> Phone : +62 555 668 986
                        </p>
                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/fullcalendar.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>