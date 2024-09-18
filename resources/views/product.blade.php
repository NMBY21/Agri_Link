@extends('layouts.app')

@section('content')
<!-- Begin Main Content Area  -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">{{ $data->name_product }}</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>{{ $data->name_product }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                @foreach ($dataimage as $item)
                                <div class="swiper-slide">
                                    <a href="{{ asset('img_uploads/gallery/'.$item->name_img_produk) }}" class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('img_uploads/gallery/'.$item->name_img_produk) }}" alt="Product Image">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="thumbs-arrow-holder">
                            <div class="swiper-container single-product-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach ($dataimage as $item)
                                    <a href="#" class="swiper-slide">
                                        <img class="img-full" src="{{ asset('img_uploads/gallery/'.$item->name_img_produk) }}" alt="Product Thumnail">
                                    </a>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class=" thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title">{{ $data->name_product }}</h2>
                        <div class="price-box">
                            <span class="new-price">Rp. {{ number_format($data->price_product) }}</span>
                        </div>
                        <p class="short-desc">{{ $data->description_product }}</p>
                        <ul class="quantity-with-btn">
                            <li class="add-to-cart">
                                <a class="btn btn-custom-size lg-size btn-pronia-primary" href="{{ url('login') }}">Order</a>
                            </li>
                        </ul>
                        <div class="product-category mt-5">
                            <span class="title">SKU:</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->sku_product }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category">
                            <span class="title">Categories :</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->categories_product }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category product-tags">
                            <span class="title">Tags :</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->tags_product }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab-area section-space-top-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                Information
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                Description
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="product-information-body">
                                <h4 class="title">Informasi tentang {{ $data->name_product }}</h4>
                                <p class="short-desc mb-4">{{ $data->information_product }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description-body">
                                <p class="short-desc mb-0">
                                    {{ $data->description_product }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- Main Content Area End Here  -->
@endsection
