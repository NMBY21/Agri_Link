@extends('layouts.superadmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gallery Product</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Input Data Gallery Product
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image Product</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image Product</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <th><img src="{{ asset('img_uploads/gallery/'.$item->name_img_produk) }}" width="200px" class="img-thumbnail" alt="..."></th>
                            <th>
                                @if ($item->status_img_produk == '1')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Non-Active</span>
                                @endif
                            </th>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $item->id }}">Edit</button>

                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Gallery Product</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/product/image/edit') }}/{{ $item->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $data2->id }}">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <img src="{{ asset('img_uploads/gallery/'.$item->name_img_produk) }}" class="img-thumbnail" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Gallery Image</label>
                                                            <input type="file" accept="image/png, image/gif, image/jpeg" name="img_input" class="form-control">
                                                            <div id="emailHelp" class="form-text">Size : 570 x 633</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Status Product</label>
                                                            <select class="form-select" aria-label="Default select example" name="status_input">
                                                                <option value="{{ $item->status_img_produk }}" {{ $item->status_img_produk ? 'selected' : ''}} >
                                                                    @if ($item->status_img_produk == '1')
                                                                    Active
                                                                    @else
                                                                    Non-Active
                                                                    @endif
                                                                </option>
                                                                @if ($item->status_img_produk == '1')
                                                                    <option value="0">Non-Active</option>
                                                                @else
                                                                    <option value="1">Active</option>
                                                                @endif
                                                            </select>
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
                                <form action="{{ url('superadmin/product/image/delete') }}/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $data2->id }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Input Data Gallery Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ url('superadmin/product/image') }}/{{ $data2->id }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Gallery Image</label>
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="img_input" class="form-control" required>
                            <div id="emailHelp" class="form-text">Size : 570 x 633</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status Product</label>
                            <select class="form-select" aria-label="Default select example" name="status_input">
                                <option value="1">Active</option>
                                <option value="0">Non-Active</option>
                            </select>
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
@endsection
