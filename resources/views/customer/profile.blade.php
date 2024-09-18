@extends('layouts.customer')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Akun Saya</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Home</a>
                            </li>
                            <li>Akun Saya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="account-page-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Detail Akun</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                            <div class="myaccount-details">
                                <form action="{{ url('/customer/profile') }}" method="POST" class="myaccount-form">
                                    @csrf
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>Nama</label>
                                            <input type="text" value="{{ $data->name }}" name="name_input" required>
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Alamt Email</label>
                                            <input type="email" value="{{ $data->email }}" name="email_input" required>
                                        </div>
                                        <div class="single-input">
                                            <label>No Telepon</label>
                                            @if ($data->number_phone == null)
                                                <input type="number" placeholder="No Telepon Anda Kosong" name="phone_input">
                                            @else
                                                <input type="number" value="{{ $data->number_phone }}" name="phone_input">
                                            @endif
                                        </div>
                                        <div class="single-input">
                                            <label>Alamat Rumah</label>
                                            @if ($data->address_user == null)
                                                <textarea rows="3" placeholder="Alamat Rumah Anda Kosong" name="address_input"></textarea>
                                            @else
                                                <textarea rows="3" name="address_input">{{ $data->address_user }}</textarea>
                                            @endif
                                        </div>
                                        <div class="single-input">
                                            <label>Password Baru (Biarkan kosong jika tidak ingin merubah)</label>
                                            <input type="password" name="password_input">
                                        </div>
                                        <div class="single-input">
                                            <button class="btn btn-custom-size lg-size btn-pronia-primary" type="submit">
                                                <span>SIMPAN</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@endsection
