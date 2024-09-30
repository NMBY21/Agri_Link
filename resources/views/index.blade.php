@extends('layouts.app')

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
                                        {{-- <span class="offer">30% discount</span> --}}
                                        <h2 class="title">Product</h2>
                                        {{-- <p class="short-desc">Organic Cavendish Bananas</p> --}}
                                        <div class="btn-wrap">
                                            {{-- <a class="btn btn-custom-size xl-size btn-pronia-primary" href="#produk">Order Now</a> --}}
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
                                        <span class="offer">30% Discount</span>
                                        {{-- <h2 class="title">New Products</h2> --}}
                                        {{-- <p class="short-desc">Organic Papaya</p> --}}
                                        <div class="btn-wrap">
                                            {{-- <a class="btn btn-custom-size xl-size btn-pronia-primary" href="#produk">Order Now</a> --}}
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
                            {{-- <div class="shipping-content">
                                <h2 class="title">Free Shipping</h2>
                                <p class="short-desc mb-0">Limited to Rp. 100,000 per order</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/card.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                {{-- <h2 class="title">Secure Payment</h2>
                                <p class="short-desc mb-0">With our payment gateway</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/service.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                {{-- <h2 class="title">Best Service</h2>
                                <p class="short-desc mb-0">Friendly Service & Support from us</p> --}}
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
                <h2 class="section-title mb-0">Product</h2>
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
                                            <a href="{{ url('product') }}/{{ $item->id }}">
                                                <img class="primary-img" src="{{ asset('img_uploads/thumbnail/'.$item->thumbnail_img) }}" alt="Product Images">
                                                <img class="secondary-img" src="{{ asset('img_uploads/thumbnail/'.$item->thumbnail_img) }}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="{{ url('product') }}/{{ $item->id }}">{{ $item->name_product }}</a>
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
                    <h2 class="section-title">TESTIMONIES</h2>
                    {{-- <p class="section-desc mb-0">Our Customers Love What We Do --}} 
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
                                    {{-- <h4 class="user-name mb-1">Mrs. Kadek Dobleh</h4>
                                    <span class="user-occupation">Housewife</span> --}}
                                </div>
                            </div>
                            {{-- <p class="user-comment mb-6">The vegetables are very fresh and good --}} 
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
                                    {{-- <h4 class="user-name mb-1">Mrs. Made Rareh</h4>
                                    <span class="user-occupation">Housewife</span> --}}
                                </div>
                            </div>
                            {{-- <p class="user-comment mb-6">The service is very friendly :) --}} 
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
                                    {{-- <h4 class="user-name mb-1">Sumiyato</h4>
                                    <span class="user-occupation">Chef</span> --}}
                                </div>
                            </div>
                            {{-- <p class="user-comment mb-6">The products are highly recommended --}} 
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
