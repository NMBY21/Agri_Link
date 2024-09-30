@extends('layouts.customer')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Edukasi</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Beranda</a>
                            </li>
                            <li>Detail Edukasi</li>
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
                                    <li class="date">24 April 2021</li>
                                </ul>
                            </div>
                            <h2 class="title">Pentingnya Menjaga Kesehatan</h2>
                            <p class="short-desc">Kesehatan adalah hal penting dalam hidup. Kesehatan perlu dijaga supaya tubuh tetap bugar dan bisa melakukan aktivitas dengan lancar. Menjaga kesehatan dapat dilakukan dengan beragam cara, seperti menerapkan gaya hidup sehat, yakni mengonsumsi makanan bernutrisi, minum air putih yang cukup, menjaga pola makan, dan juga rutin berolahraga. Jadi, sahabat carik ayo jagalah kesehatan, karena kesehatan adalah investasi kedepannya.
                            </p>
                        </div>
                        <div class="blog-img img-hover-effect">
                            <img class="img-full" src="assets/images/blog/large-size/1-1-768x546.jpg" alt="Blog Image">
                        </div>
                        <p class="short-desc">Makanan bernutrisi adalah nutrisi penting dalam tubuh kita. Keseimbangan kandungan penting dari makanan, seperti karbohidrat, protein, lemak, dan lainnya mempengaruhi kesehatan tubuh kita. Air putih juga penting sekali untuk tubuh kita, yang mana tubuh kita terdiri dari air dengan komposisi lebih dari 50 persen. Jika kita kekurangan air, maka kita bisa lemas ataupun dehidrasi. Pola makan kita wajib diatur juga untuk menghindari penyakit, seperti obesitas. Nah, olahraga juga penting dalam menjaga kebugaran tubuh kita. Olahraga dapat dilakukan secara ringan, tetapi rutin. Dengan itu, kita akan merasa lebih segar dan bersemangat dalam beraktivitas.</p>
                        <blockquote>
                            <p class="mb-0">Kesehatan adalah anugerah dan nikmat yang paling berharga, cintai dirimu dengan menjaga kesehatan.
                            </p>
                        </blockquote>
                        <p class="short-desc">Menjaga kesehatan diperlukan niat dan juga usaha. Terkadang karena begitu banyak hidangan enak dan menggugah selera, terjadi kalap dan lupa mengontrol pola makan. Ketika sakit melanda, baru tersadar dan mengeluh. Ini hanya tentang bagaimana cara mengontrol. Mengontrol supaya tidak melewati batasan yang dapat diterima tubuh. Cintai dirimu, mulai dengan cara yang sederhana saja, atur kapan kamu makan, apa saja yang dapat dikonsumsi, olahraga ringan saja, kurangi makanan berlemak dan siap saji, dan konsumsi buah dan sayur sebagai asupan serat yang baik buat tubuh. Buah dan sayur memiliki rasa dan jenis yang beragam. Nutrisinya juga sangat baik buat tubuh, ada vitamin, mineral, antioksidan, dan masih banyak lagi. Dapat juga mencegah berbagai penyakit. Dijamin tidak bosan deh mengkonsumsinya. Ingat sahabat carik, buah dan sayur jangan dilupakan dalam asupan makanan setiap harinya ya.
                        </p>
                        <div class="blog-banner row">
                            <div class="single-img img-hover-effect col-sm-6">
                                <img class="img-full" src="assets/images/blog/medium-size/2-1-370x270.jpg" alt="Blog Banner">
                            </div>
                            <div class="single-img img-hover-effect col-sm-6 pt-5 pt-sm-0">
                                <img class="img-full" src="assets/images/blog/medium-size/2-2-370x270.jpg" alt="Blog Banner">
                            </div>
                        </div>
                        <p class="short-desc mb-0">Buah dan sayur adalah sumber nutrisi yang sangat baik buat tubuh. Perhatikan cara pengolahannya ya. Ada yang dimakan langsung, direbus, ditumis, dan lainnya. Tetapi, tetap ingat ya, jangan banyak minyak (lemak). Misalnya saja buah, yang dapat diolah menjadi rujak, huhu sangat enak bukan? nah, banyak inovasi yang muncul dari itu. Ada buah mangga, jeruk, salak, buah naga, sayur kangkung, sayur daun singkong, dan banyak lagi. Di Carik Bali menyediakan hasil panen buah dan sayur yang tentunya baik untuk kesehatan, berkualitas, dan dipanen dari kebun langsung. Pokoknya percaya deh, tinggal pilih, pesan, bayar, dan barang pun segera tiba di lokasi Anda.
                        </p>
                    </div>
                    <div class="social-with-tags">
                        <div class="tags">
                            <span class="title">Tags: </span>
                            <ul>
                                <li>
                                    <a href="#">Kesehatan,</a>
                                </li>
                                <li>
                                    <a href="#">Sayuran</a>
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
