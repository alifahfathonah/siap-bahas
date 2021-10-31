<!DOCTYPE html>
<html lang="en">

<!-- Goodsoul_html/index.html  20 Nov 2019 03:27:59 GMT -->

<head>
    <meta charset="utf-8">
    <title>SIAP BAHAS</title>

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?=base_url('assets/website/');?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/swiper.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/flaticon.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/animate.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/custom-animate.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/owl.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/style.css" rel="stylesheet">
    <link href="<?=base_url('assets/website/');?>css/responsive.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader"></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div> -->

        <!-- Main Header-->
        <header class="main-header">
            <!-- Top bar -->
            <div class="top-bar theme-bg">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="left-content">
                            <div class="text">
                                <marquee behavior="scroll" direction="left" width="600"
                                    style="padding:0px 0px;margin-bottom:-10px;">
                                    Selamat Datang di SIAP
                                    AMANDEMEN
                                    Biro
                                    Administrasi
                                    Pelaksanaan Otonomi Khusus SETDA PAPUA BARAT</marquee>
                            </div>
                        </div>
                        <div class="right-content">
                            <ul class="contact-info">
                                <li><span class="flaticon-mail"></span><a
                                        href="mailto:support@charity.com">support@pabar.com</a></li>
                                <li><span class="flaticon-phone"></span><a href="tel:+211456789">+211 456 789</a></li>
                            </ul>
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="logo-column">
                            <div class="logo-box">
                                <div class="logo"><a href="<?=base_url();?>"><img
                                            src="<?=base_url('assets/website/');?>images/logo.png" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="option-wrapper">
                                <div class="nav-outer">

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-xl navbar-dark">

                                        <div class="collapse navbar-collapse">
                                            <ul class="navigation">
                                                <li><a href="<?=base_url();?>">HOME</a></li>
                                                <li><a href="<?=base_url('welcome/information');?>">INFORMASI</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->
                                </div>
                                <!-- <div class="navbar-btn-wrap">
                                    <button class="anim-menu-btn">
                                        <i class="flaticon-menu"></i>
                                    </button>
                                </div> -->
                                <div class="link-btn">
                                    <a href="<?=base_url('login');?>"
                                        class="theme-btn btn-style-one"><span>PROPOSAL</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--End Header Upper-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="logo-column">
                            <div class="logo-box">
                                <div class="logo"><a href="index-2.html"><img
                                            src="<?=base_url('assets/website/');?>images/logo.png" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-column">
                            <div class="nav-outer">

                                <div class="nav-inner">

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-xl navbar-dark">

                                        <div class="collapse navbar-collapse">
                                            <ul class="navigation">
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu style-one">
                <div class="menu-box">
                    <div class="logo"><a href="index-2.html"><img src="<?=base_url('assets/website/');?>images/logo.png"
                                alt="" width="260"></a></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-xl navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="flaticon-menu"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation">

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

            </div>
            <!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->
        <?= $this->load->view($content); ?>
        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!-- <div class="widget-wrapper">
                    <div class="row"> -->
                <!-- Contact Widget -->
                <!-- <div class="col-lg-3 col-md-6 contact-widget footer-widget">
                            <h4 class="widget-title">Contact</h4>
                            <ul>
                                <li>5404 Berrick Street, <br> 2nd cross, <br>Boston, MA 02115.</li>
                                <li><a href="mailto:support@goodsoul.com">supportyou@goodsoul.com </a></li>
                            </ul>
                            <h3><a href="tel:+211456789">+211 456 789</a></h3>
                        </div> -->
                <!-- About Widget -->
                <!-- <div class="col-lg-3 col-md-6 about-widget footer-widget">
                            <h4 class="widget-title">About</h4>
                            <ul>
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">Volunteers</a></li>
                                <li><a href="#">Upcoming Events</a></li>
                                <li><a href="#">Trending News</a></li>
                                <li><a href="#">Causes</a></li>
                            </ul>
                        </div> -->
                <!-- Link Widget -->
                <!-- <div class="col-lg-3 col-md-6 link-widget footer-widget">
                            <h4 class="widget-title">Quick Link</h4>
                            <ul>
                                <li><a href="#">Private Policies</a></li>
                                <li><a href="#">Donate Now</a></li>
                                <li><a href="#">Become a Volunteer</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div> -->
                <!-- Newsletter Widget -->
                <!-- <div class="col-lg-3 col-md-6 newsletter-widget footer-widget">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="text">Subscribe us and get latest news & <br>upcoming events.</div>
                            <form action="#">
                                <input type="email" placeholder="Emial Address...">
                                <button class="submin-btn"><span class="flaticon-next"></span>Subscribe Us</button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="footer-bottom">
                    <div class="left-content">
                        <div class="icon"><img src="<?=base_url('assets/');?>website/images/logopabar.png" alt=""
                                height="50" width="60">
                        </div>
                        <div class="copyright-text">
                            <a href="#">
                                <h4 class="d-none d-md-block">&nbsp&nbsp&nbsp&nbspS I A P &nbsp&nbsp&nbsp B A
                                    H A S</h4>
                                <p class="d-none d-md-block" style="font-size:8pt;">Biro Administrasi Pelaksanaan
                                    Otonomi Khusus SETDA PAPUA BARAT</p>
                                <h4 class="d-md-none">&nbspS I A P &nbsp&nbsp&nbsp B A H A S</h4>
                                <p class="d-md-none" style="font-size:7pt;">Biro Administrasi Pelaksanaan Otonomi Khusus
                                    SETDA PAPUA BARAT</p>
                            </a>
                        </div>
                    </div>
                    <div class="right-content">
                        <ul class="social-icon-three">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <!-- <li><a href="#"><span class="fa fa-twitter"></span></a></li> -->
                            <!-- <li><a href="#"><span class="fa fa-skype"></span></a></li> -->
                            <!-- <li><a href="#"><span class="fa fa-linkedin"></span></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-arrow"></span></div>


    </div>
    <!--End pagewrapper-->



    <!-- JS -->
    <script src="<?=base_url('assets/website/');?>js/jquery.js"></script>
    <script src="<?=base_url('assets/website/');?>js/popper.min.js"></script>
    <script src="<?=base_url('assets/website/');?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/website/');?>js/TweenMax.min.js"></script>
    <script src="<?=base_url('assets/website/');?>js/wow.js"></script>
    <script src="<?=base_url('assets/website/');?>js/owl.js"></script>
    <script src="<?=base_url('assets/website/');?>js/appear.js"></script>
    <script src="<?=base_url('assets/website/');?>js/swiper.min.js"></script>
    <script src="<?=base_url('assets/website/');?>js/jquery.fancybox.js"></script>
    <script src="<?=base_url('assets/website/');?>js/menu-nav-btn.js"></script>
    <script src="<?=base_url('assets/website/');?>js/jquery-ui.js"></script>
    <script src="<?=base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Custom JS -->
    <script src="<?=base_url('assets/website/');?>js/script.js"></script>

</body>

<!-- Goodsoul_html/index.html  20 Nov 2019 03:27:59 GMT -->

</html>