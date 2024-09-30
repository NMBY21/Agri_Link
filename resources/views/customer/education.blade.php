@extends('layouts.customer')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Education</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Home</a>
                            </li>
                            <li>Education Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 order-1">
                    <div class="blog-detail-item">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li class="author">
                                        <a href="#">By: Admin</a>
                                    </li>
                                    <li class="date">April 24, 2021</li>
                                </ul>
                            </div>
                            <h2 class="title">The Importance of Maintaining Health</h2>
                            <p class="short-desc">Health is an important aspect of life. It needs to be maintained so that the body stays fit and can perform activities smoothly. Maintaining health can be done in various ways, such as adopting a healthy lifestyle, which includes consuming nutritious foods, drinking enough water, maintaining a balanced diet, and exercising regularly. So, friends, let’s take care of our health, because health is an investment for the future.</p>
                        </div>
                        <div class="blog-img img-hover-effect">
                            <img class="img-full" src="assets/images/blog/large-size/1-1-768x546.jpg" alt="Blog Image">
                        </div>
                        <p class="short-desc">Nutritious food is essential for our bodies. The balance of important nutrients in food, such as carbohydrates, proteins, fats, and others, affects our health. Water is also crucial for our bodies, as we consist of more than 50 percent water. If we lack water, we may become weak or dehydrated. Our eating habits must also be regulated to avoid diseases, such as obesity. Exercise is also important for maintaining our fitness. Exercise can be done lightly but regularly. This way, we will feel fresher and more energized in our activities.</p>
                        <blockquote>
                            <p class="mb-0">Health is the most valuable gift and blessing; love yourself by taking care of your health.</p>
                        </blockquote>
                        <p class="short-desc">Maintaining health requires intention and effort. Sometimes, due to the abundance of delicious and tempting dishes, we forget to control our eating habits. It’s only when we fall ill that we realize and complain. It’s all about how to control ourselves. Control so that we do not exceed the limits that our bodies can handle. Love yourself; start with simple steps, regulate when you eat, what you can consume, engage in light exercise, reduce fatty and fast foods, and consume fruits and vegetables for good fiber intake. Fruits and vegetables come in various flavors and types. Their nutrients are also very good for the body, including vitamins, minerals, antioxidants, and much more. They can also prevent various diseases. You won’t get bored consuming them. Remember, friends, don’t forget to include fruits and vegetables in your daily diet.</p>
                        <div class="blog-banner row">
                            <div class="single-img img-hover-effect col-sm-6">
                                <img class="img-full" src="assets/images/blog/medium-size/2-1-370x270.jpg" alt="Blog Banner">
                            </div>
                            <div class="single-img img-hover-effect col-sm-6 pt-5 pt-sm-0">
                                <img class="img-full" src="assets/images/blog/medium-size/2-2-370x270.jpg" alt="Blog Banner">
                            </div>
                        </div>
                        <p class="short-desc mb-0">Fruits and vegetables are excellent sources of nutrition for the body. Pay attention to how they are processed. Some can be eaten raw, boiled, sautéed, and more. But remember, don’t use too much oil (fat). For example, fruits can be made into salads, which are very tasty, right? Many innovations come from that. There are mangoes, oranges, salak (snake fruit), dragon fruit, kale, cassava leaves, and many more. Carik Bali provides fresh fruits and vegetables that are certainly good for health, high quality, and harvested directly from the fields. Trust me, just choose, order, pay, and the products will arrive at your location soon.</p>
                    </div>
                    <div class="social-with-tags">
                        <div class="tags">
                            <span class="title">Tags: </span>
                            <ul>
                                <li>
                                    <a href="#">Health,</a>
                                </li>
                                <li>
                                    <a href="#">Vegetables</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@endsection
