@extends('layouts.app')

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
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Detail Education</li>
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
                                    <li class="date">September 10, 2024</li>
                                </ul>
                            </div>
                            <h2 class="title">The Importance of Maintaining Health</h2>
                            <p class="short-desc">Health is an essential aspect of life. It needs to be maintained to keep the body fit and able to carry out activities smoothly. Maintaining health can be done in various ways, such as adopting a healthy lifestyle, which includes consuming nutritious food, drinking enough water, maintaining a balanced diet, and also exercising regularly. So, friends, let’s take care of our health because it is an investment for the future.
                            </p>
                        </div>
                        <div class="blog-img img-hover-effect">
                            <img class="img-full" src="{{ asset('customer/assets/images/blog/large-size/1-1-768x546.jpg') }}" alt="Blog Image">
                        </div>
                        <p class="short-desc">Nutritious food is essential for our bodies. The balance of important nutrients in food, such as carbohydrates, proteins, fats, and others, affects our health. Water is also very important for our bodies, as our bodies consist of over 50 percent water. If we lack water, we can feel weak or dehydrated. Our eating patterns also need to be regulated to avoid diseases like obesity. Exercise is also crucial in maintaining our physical fitness. It can be done lightly but regularly. By doing so, we will feel fresher and more energetic in our activities.</p>
                        <blockquote>
                            <p class="mb-0">Health is a blessing and the most valuable gift; love yourself by maintaining your health.
                            </p>
                        </blockquote>
                        <p class="short-desc">Maintaining health requires intention and effort. Sometimes, because of so many delicious and tempting dishes, we can overindulge and forget to control our diet. When illness strikes, we only realize it and complain. It's all about how to control ourselves. Control so that we don’t exceed the limits acceptable to our bodies. Love yourself, start with simple ways, like regulating when you eat, what you can consume, light exercise, reducing fatty and fast food, and consuming fruits and vegetables as good sources of fiber for the body. Fruits and vegetables come in various tastes and types. Their nutrition is also very beneficial for the body, containing vitamins, minerals, antioxidants, and much more. They can also prevent various diseases. You definitely won't get bored consuming them. Remember, friends, don’t forget to include fruits and vegetables in your daily diet.
                        </p>
                        <div class="blog-banner row">
                            <div class="single-img img-hover-effect col-sm-6">
                                <img class="img-full" src="{{ asset('customer/assets/images/blog/medium-size/2-1-370x270.jpg') }}" alt="Blog Banner">
                            </div>
                            <div class="single-img img-hover-effect col-sm-6 pt-5 pt-sm-0">
                                <img class="img-full" src="{{ asset('customer/assets/images/blog/medium-size/2-2-370x270.jpg') }}" alt="Blog Banner">
                            </div>
                        </div>
                        <p class="short-desc mb-0">Fruits and vegetables are excellent sources of nutrition for the body. Pay attention to how they are prepared. Some can be eaten raw, boiled, stir-fried, and so on. But remember not to use too much oil (fat). For example, fruits can be made into a salad, which is very delicious, right? There are many innovations that come from this. There are mangoes, oranges, salak (snake fruit), dragon fruit, water spinach, cassava leaves, and many more. At Carik Bali, we provide fresh produce that is healthy, high quality, and harvested directly from the farm. Just trust us; all you need to do is choose, order, pay, and the goods will arrive at your location shortly.
                        </p>
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
