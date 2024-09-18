<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carik Bali Agriculture</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Pronia plant store bootstrap 5 template is an awesome website template for any home plant shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('customer/img/logo.png') }}" />

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/Pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/ion.rangeSlider.min.css') }}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/style.css') }}">

</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-middle py-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">
                                <div class="header-contact d-none d-lg-flex">
                                    <i class="pe-7s-call"></i>
                                    <a href="https://wa.me/+6281246312412">+6281246312412</a>
                                </div>

                                <a href="{{ url('/') }}" class="header-logo">
                                    <img src="{{ asset('customer/img/logo.png') }}" height="100px" alt="Header Logo">
                                </a>

                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="{{ url('/') }}">Beranda</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{ url('/') }}#produk">Produk</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{ url('education') }}">Edukasi</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{ url('/') }}#testimoni">Testimoni</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{ url('contact') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky py-4 py-lg-0">
                <div class="container">
                    <div class="header-nav position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-6">

                                <a href="{{ url('/') }}" class="header-logo">
                                    <img src="{{ asset('customer/img/logo.png') }}" alt="Header Logo">
                                </a>

                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="{{ url('/') }}">Beranda</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{ url('/') }}#produk">Produk</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{ url('education') }}">Edukasi</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{ url('/') }}#testimoni">Testimoni</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{ url('contact') }}">Kontak</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="header-contact offcanvas-contact">
                            <i class="pe-7s-call"></i>
                            <a href="https://wa.me/+6281246312412">+6281246312412</a>
                        </div>
                        <div class="offcanvas-user-info">
                            <ul>
                                <li class="dropdown d-none d-lg-block">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="settingButton">
                                        <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul>
                                    <li class="drop-holder">
                                        <a href="{{ url('/') }}">Beranda</a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{ url('/') }}#produk">Produk</a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{ url('education') }}">Edukasi</a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{ url('/') }}#testimoni">Testimoni</a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{ url('contact') }}">Kontak</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header Area End Here -->

        @yield('content')

        <!-- Begin Footer Area -->
        <div class="footer-area" data-bg-image="{{ asset('customer/assets/images/footer/bg/1-1920x465.jpg') }}">
            <div class="footer-top section-space-top-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget-item">
                                <div class="footer-widget-logo">
                                    <a href="index.html">
                                        <img src="{{ asset('customer/img/logo.png') }}" height="100px" alt="Logo">
                                    </a>
                                </div>
                                <div class="social-link with-border">
                                    <ul>
                                        <li>
                                            <a href="https://web.facebook.com/profile.php?id=100079025948266" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/p/CbEtDL2rBC6/?igshid=YmMyMTA2M2Y=" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/+6281246312412" data-tippy="Whatsapp" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-40">
                            <div class="footer-contact-info">
                                <h3 class="footer-widget-title">Punya Pertanyaan? Hubungi Kami</h3>
                                <a href="https://wa.me/+6281246312412">+6281246312412</a>
                                <div class="address">
                                    <ul>
                                        <li>
                                            Jalan Tukad Badung Nomor 335 Renon Denpasar
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text">© 2022 Carik Bali Agriculture Made with <i class="fa fa-heart text-danger"></i> by
                            <a href="{{ url('/') }}" rel="noopener" target="_blank">Carik Bali Agriculture</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->

    <script src="{{ asset('customer/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/vendor/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('customer/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/tippy.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/mailchimp-ajax.js') }}"></script>
    <script src="{{ asset('customer/assets/js/plugins/jquery.counterup.js') }}"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ asset('customer/assets/js/main.js') }}"></script>

</body>

</html>
