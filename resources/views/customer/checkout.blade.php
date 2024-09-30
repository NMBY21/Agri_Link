@extends('layouts.customer')

@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Checkout Pesanan</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Beranda</a>
                            </li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="your-order">
                        <h3>Pesanan kamu</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Barang</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> {{ $orderdetail["product"] }}<strong
                                        class="product-quantity">
                                        × {{ $orderdetail["quantity"] }}</strong></td>
                                        <td class="cart-product-total"><span class="amount">Rp {{ number_format($orderdetail["total"]) }}</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Total Pesanan</th>
                                        <td><strong><span class="amount">Rp {{ number_format($orderdetail["total"]) }}</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                    Metode Pembayaran COD
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <div class="order-button-payment mb-3">
                                                    <form method="POST" action="{{ url('customer/payment/cod') }}">
                                                        @csrf
                                                        <input type="hidden" name="id_product" value="{{ $data->id }}">
                                                        <input type="hidden" name="quantity" value="{{ $orderdetail["quantity"] }}">
                                                        <input type="hidden" name="total" value="{{ $orderdetail["total"] }}">
                                                        <input value="Buat Pesanan" type="submit">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                    Metode Pembayaran Bank Transfer
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <div class="order-button-payment mb-3">
                                                    <input id="pay-button" value="Buat Pesanan" type="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<form method="POST" id="submit_payment" action="{{ url('customer/payment/transfer') }}">
    @csrf
    <input type="hidden" name="id_product" value="{{ $data->id }}">
    <input type="hidden" name="quantity" value="{{ $orderdetail["quantity"] }}">
    <input type="hidden" name="total" value="{{ $orderdetail["total"] }}">
    <input type="hidden" name="payment" id="payment_callback">
</form>
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('<?= $snaptoken ?>', {
            // Optional
            onSuccess: function(result){
                send_response(result);
            },
            // Optional
            onPending: function(result){
                // location.reload();
            },
            // Optional
            onError: function(result){
                location.reload();
            }
        });
    };

    function send_response(result){
        document.getElementById('payment_callback').value = JSON.stringify(result);
        $('#submit_payment').submit();
    }
</script>
<!-- Main Content Area End Here -->
@endsection
