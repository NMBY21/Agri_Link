<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Farmer</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Farmer registration page for Agri_Link platform.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('customer/assets/images/favicon.ico') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/Pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/ion.rangeSlider.min.css') }}" />
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
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height"
                data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Register Farmer</h2>
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-register-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('farmer.register') }}">
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Nama</label>
                                            <input type="text" name="name" placeholder="Nama" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Email Address</label>
                                            <input type="email" name="email" placeholder="Alamat Email" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Kata Sandi</label>
                                            <input type="password" name="password" placeholder="Kata Sandi" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Konfirmasi Kata Sandi</label>
                                            <input type="password" name="password_confirmation"
                                                placeholder="Konfirmasi Kata Sandi" required>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                            <button class="btn btn-custom-size lg-size btn-pronia-primary"
                                                type="submit">Register</button>
                                            <a class="btn btn-custom-size lg-size btn-pronia-primary ml-5"
                                                href="/farmer/login">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
    </div>

    <!-- JS Files -->
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
    <script src="{{ asset('customer/assets/js/main.js') }}"></script>
</body>

</html>
