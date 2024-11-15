@extends('layouts.customer')

@section('content')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">YOUR ORDER</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Home</a>
                            </li>
                            <li>Your Orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="account-page-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-orders">
                        <h4 class="small-title">YOUR ORDERS</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                        <th>TOTAL</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td><a class="account-order-id" href="#">{{ $item->id_order }}</a></td>
                                        <td>{{ $item->date_order }}</td>
                                        <td>
                                            @if ($item->status_order == '0')
                                                Order Being Packaged
                                            @elseif ($item->status_order == '1')
                                                Order Shipped
                                            @elseif ($item->status_order == '2')
                                                Order Completed
                                            @else
                                                Order Canceled
                                            @endif
                                        </td>
                                        <td>Rp {{ number_format($item->total_order) }} for {{ $item->quantity_order }} items</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id_order }}">View</button>

                                            <div class="modal fade" id="staticBackdrop{{ $item->id_order }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Order Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <hr>
                                                                <h4>Order Information</h4>
                                                                <hr>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Order ID</label>
                                                                        <input type="text" value="{{  $item->id_order }}" class="form-control" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Order Date</label>
                                                                        <input type="text" class="form-control" value="{{ $item->date_order }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Product Ordered</label>
                                                                        <input type="text" value="{{  $item->name_product }}" class="form-control" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Quantity Ordered</label>
                                                                        <input type="text" value="{{  $item->quantity_order }}" class="form-control" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Total Order</label>
                                                                        <input type="text" value="Rp. {{  number_format($item->total_order) }}" class="form-control" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Order Notes</label>
                                                                        <textarea class="form-control" rows="3" readonly>@if ($item->status_order == '0') Order Being Packaged @elseif ($item->status_order == '1') Order Shipped @elseif ($item->status_order == '2') Order Completed @else Order Canceled @endif : {{ $item->description_order }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
