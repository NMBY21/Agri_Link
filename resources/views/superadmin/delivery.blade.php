@extends('layouts.superadmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Transaction Delivery</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Order</th>
                            <th>Date Order</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Type Order</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Order</th>
                            <th>Date Order</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Type Order</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_order }}</td>
                            <td>{{ $item->date_order }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->name_product }}</td>
                            <td>{{ $item->quantity_order }}</td>
                            <td>
                                @if ($item->type_order == '1')
                                    Payment Gateway
                                @else
                                    COD
                                @endif
                            </td>
                            <td>Rp. {{ number_format($item->total_order) }}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id_order }}">Detail</button>

                                <div class="modal fade" id="staticBackdrop{{ $item->id_order }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Detail Order</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <hr>
                                                <h4>Information Order</h4>
                                                <hr>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">ID Order</label>
                                                        <input type="text" value="{{  $item->id_order }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Date Order</label>
                                                        <input type="text" class="form-control" value="{{ $item->date_order }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Product Order</label>
                                                        <input type="text" value="{{  $item->name_product }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Quantity Order</label>
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
                                                <hr>
                                                <h4>Information Customer</h4>
                                                <hr>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Name Customer</label>
                                                        <input type="text" value="{{  $item->name }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Number Phone Customer</label>
                                                        <input type="text" class="form-control" value="{{ $item->number_phone }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Address Customer</label>
                                                        <textarea class="form-control" rows="3" readonly>{{ $item->address_user }}</textarea>
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


                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $item->id_order }}">Confirm</button>

                                <div class="modal fade" id="staticBackdrop2{{ $item->id_order }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Confirm Order</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/delivery/confirm') }}/{{ $item->id_order }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" value="085739346311" name="from_input">
                                                <input type="hidden" value="{{ $item->quantity_order }}" name="quantity_input">
                                                <input type="hidden" value="{{ $item->name_product }}" name="product_input">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Name Customer</label>
                                                            <input type="text" name="name_input" value="{{  $item->name }}" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Number Phone</label>
                                                            <input type="text" class="form-control" value="{{ $item->number_phone }}" name="to_input" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Description Order</label>
                                                            <textarea class="form-control" name="description_input" rows="3" placeholder="Description Order ..." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop3{{ $item->id_order }}">Cancel</button>

                                <div class="modal fade" id="staticBackdrop3{{ $item->id_order }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Cancel Order</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/delivery/confirm/cancel') }}/{{ $item->id_order }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" value="085739346311" name="from_input">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Name Customer</label>
                                                            <input type="text" name="img_input" value="{{  $item->name }}" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Number Phone</label>
                                                            <input type="text" class="form-control" value="{{ $item->number_phone }}" name="to_input" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Description Order</label>
                                                            <textarea class="form-control" name="description_input" rows="3" placeholder="Description Order ..." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
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
@endsection
