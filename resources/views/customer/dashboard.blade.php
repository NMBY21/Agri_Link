@extends('layouts.customer')

@section('content')
    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner style-1 bg-height" data-bg-image="{{ asset('customer/assets/images/slider/bg/1-1.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                    <div class="slide-content text-black">
                                        <span class="offer">Diskon 30%</span>
                                        <h2 class="title">Produk Baru</h2>
                                        <p class="short-desc">Pisang Cavendish Organik</p>
                                        <div class="btn-wrap">
                                            <a class="btn btn-custom-size xl-size btn-pronia-primary" href="#produk">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                    <div class="inner-img">
                                        <div class="scene fill">
                                            <div class="expand-width" data-depth="0.2">
                                                <img src="{{ asset('customer/img/header2.jpeg') }}" alt="Inner Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner style-1 bg-height" data-bg-image="{{ asset('customer/assets/images/slider/bg/1-1.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                    <div class="slide-content text-black">
                                        <span class="offer">Diskon 30%</span>
                                        <h2 class="title">Produk Baru</h2>
                                        <p class="short-desc">Buah Pepaya Organik</p>
                                        <div class="btn-wrap">
                                            <a class="btn btn-custom-size xl-size btn-pronia-primary" href="#produk">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                    <div class="inner-img">
                                        <div class="scene fill">
                                            <div class="expand-width" data-depth="0.2">
                                                <img src="{{ asset('customer/img/header1.jpeg') }}" alt="Inner Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination d-md-none"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
    <!-- Slider Area End Here -->

    <!-- Begin Shipping Area -->
    <div class="shipping-area section-space-top-100">
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

    <!-- Begin Product Area -->
    <div class="product-area section-space-top-100" id="produk">
        <div class="container">
            <div class="section-title-wrap">
                <h2 class="section-title mb-0">Produk</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="product-item-wrap row">
                                @foreach ($data as $item)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{ url('/customer/product') }}/{{ $item->id }}">
                                                <img class="primary-img" src="{{ asset('img_uploads/thumbnail/'.$item->thumbnail_img) }}" alt="Product Images">
                                                <img class="secondary-img" src="{{ asset('img_uploads/thumbnail/'.$item->thumbnail_img) }}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="{{ url('/customer/product') }}/{{ $item->id }}">{{ $item->name_product }}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">Rp. {{ number_format($item->price_product) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Testimonial Area -->
    <div class="testimonial-area section-space-top-90 section-space-bottom-95" id="testimoni">
        <div class="container-fluid">
            <div class="testimonial-bg" data-bg-image="{{ asset('customer/assets/images/testimonial/bg/1-1-1820x443.jpg') }}">
                <div class="section-title-wrap">
                    <h2 class="section-title">Apa kata customer</h2>
                    <p class="section-desc mb-0">Pelanggan Kami Menyukai Apa yang Kami Lakukan
                    </p>
                </div>
            </div>
            <div class="container custom-space">
                <div class="swiper-container testimonial-slider with-bg">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonial-item">
                            <div class="user-info mb-3">
                                <div class="user-shape-wrap">
                                    <div class="user-img">
                                        <img src="{{ asset('customer/img/user.png') }}" alt="User Image">
                                    </div>
                                </div>
                                <div class="user-content text-charcoal">
                                    <h4 class="user-name mb-1">Ibu Kadek Dobleh</h4>
                                    <span class="user-occupation">Ibu Rumah Tangga</span>
                                </div>
                            </div>
                            <p class="user-comment mb-6">Sayurnya bagus dan seger banget
                            </p>
                        </div>
                        <div class="swiper-slide testimonial-item">
                            <div class="user-info mb-3">
                                <div class="user-shape-wrap">
                                    <div class="user-img">
                                        <img src="{{ asset('customer/img/user.png') }}" alt="User Image">
                                    </div>
                                </div>
                                <div class="user-content text-charcoal">
                                    <h4 class="user-name mb-1">Ibu Made Rareh</h4>
                                    <span class="user-occupation">Ibu Rumah Tangga</span>
                                </div>
                            </div>
                            <p class="user-comment mb-6">Pelayanannya ramah sekali :)
                            </p>
                        </div>
                        <div class="swiper-slide testimonial-item">
                            <div class="user-info mb-3">
                                <div class="user-shape-wrap">
                                    <div class="user-img">
                                        <img src="{{ asset('customer/img/user.png') }}" alt="User Image">
                                    </div>
                                </div>
                                <div class="user-content text-charcoal">
                                    <h4 class="user-name mb-1">Sumiyato</h4>
                                    <span class="user-occupation">Koki</span>
                                </div>
                            </div>
                            <p class="user-comment mb-6">Produknya rekomended banget
                            </p>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination without-absolute"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->
@endsection
