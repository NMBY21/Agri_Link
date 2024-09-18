{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<!DOCTYPE html> --}}
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carik Bali Agriculture</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Pronia plant store bootstrap 5 template is an awesome website template for any home plant shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('customer/assets/images/favicon.ico') }}" />

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

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Login Customer</h2>
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>Login</li>
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Alamat Email</label>
                                            <input type="email" name="email" placeholder="Alamat Email" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Kata Sandi</label>
                                            <input type="password" name="password" placeholder="Kata Sandi" required>
                                        </div>
                                        {{-- <div class="col-md-4 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a href="#"> Lupa Password ?</a>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12 pt-5">
                                            <button class="btn btn-custom-size lg-size btn-pronia-primary" type="submit">Login</button>
                                            <a class="btn btn-custom-size lg-size btn-pronia-primary ml-5" href="/register">Register</a>
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
