@extends('layouts.app')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Contact Us</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">Our <span>Story</span></h2>
                        <p class="about-desc">Carik Bali is a local business in Bali that sells various agricultural and plantation products from the Bali region. Carik Bali is inspired by the abundance of agricultural and plantation land in Bali. Many farmers struggle to sell or distribute their harvests directly to consumers, often selling them at low prices that tend to disadvantage them. Carik Bali aims to support the marketing of Bali farmers' harvests. The agricultural and plantation products from Bali are very diverse. This is a great potential that needs to be managed well to create a society with high-quality food.
                            Let's support our local farmers with their agriculture and plantations, reflecting the happiness of our farmers and encouraging them to keep working for the region.
                            </p>
                        <div class="about-signature">
                            <img src="{{ asset('customer/assets/images/about/icon/2.png') }}" alt="Signature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                                <h2 class="title">Free Shipping</h2>
                                <p class="short-desc mb-0">Limited to $ 100,000 per order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/card.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Secure Payment</h2>
                                <p class="short-desc mb-0">With our payment gateway</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{ asset('customer/assets/images/shipping/icon/service.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Best Service</h2>
                                <p class="short-desc mb-0">Friendly service & support from us</p>
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
            <iframe class="contact-map-size" src="https://www.google.com/maps/place/Ethio+Innovation+Software+Development/@9.0188336,38.8004416,17z/data=!4m8!3m7!1s0x164b85acb94c361d:0x88d8203742a69cb9!8m2!3d9.0188336!4d38.8004416!9m1!1b1!16s%2Fg%2F11vx25sn1j?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

</main> 
<!-- Main Content Area End Here -->
@endsection
