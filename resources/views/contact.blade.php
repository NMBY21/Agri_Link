@extends('layouts.app')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Kontak Kami</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">Cerita <span>Kami</span></h2>
                        <p class="about-desc">Carik Bali merupakan usaha lokal Bali yang menjual berbagai hasil panen pertanian dan perkebunan daerah Bali. Carik Bali terinspirasi dari banyaknya lahan pertanian dan perkebunan di Bali. Banyak petani kesulitan menjual atau menyalurkan hasil panennya ke konsumen langsung, sehingga menjual sekedar dengan harga yang murah, dan cenderung merugikan petani, yang penting laku. Carik Bali mempunyai tujuan untuk mendukung pemasaran hasil panen petani Bali. Hasil pertanian dan perkebunan daerah Bali sangat beragam. Hal ini adalah potensi besar yang perlu dikelola dengan baik, untuk mewujudkan masyarakat yang mempunyai pangan kualitas baik.
                            Mari bersama dukung petani lokal kita dengan pertanian dan perkebunannya, sehingga tercermin kebahagiaan para petani kita dan terus bersemangat berkarya untuk daerah.
                            </p>
                        <div class="about-signature">
                            <img src="{{ asset('customer/assets/images/about/icon/2.png') }}" alt="Signature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Shipping Area -->
    <div class="shipping-area section-space-y-axis-100">
        <div class="container">
            <div class="shipping-bg">
                <div class="row shipping-wrap">
                    <div class="col-lg-4 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/car.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Bebas biaya kirim</h2>
                                <p class="short-desc mb-0">Dibatasi pada Rp. 100.000 per pesanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/card.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Pembayaran Aman</h2>
                                <p class="short-desc mb-0">Dengan gateway pembayaran kami</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/service.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Layanan Terbaik</h2>
                                <p class="short-desc mb-0">Layanan Ramah & Dukungan dari kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shipping Area End Here -->

    <div class="contact-with-map pb-5">
        <div class="contact-map">
            <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15776.040742790306!2d115.2291486697754!3d-8.690580199999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241aaecc07c35%3A0xc2527e4285658ba2!2sJl.%20Tukad%20Badung%20No.335%2C%20Renon%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080226!5e0!3m2!1sid!2sid!4v1648406960600!5m2!1sid!2sid" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

</main>
<!-- Main Content Area End Here -->
@endsection
