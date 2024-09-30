@extends('layouts.superadmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Product</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Input Data Product
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Stock</th>
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
                            <td>{{ $item->name_product }}</td>
                            <td>{{ $item->price_product }}</td>
                            <td>{{ $item->stock_product }}</td>
                            <td>
                                @if ($item->status_product == '1')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Non-Active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('superadmin/product/image') }}/{{ $item->id }}" class="btn btn-info">Gallery</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $item->id }}">Edit</button>

                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Product</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/product/edit') }}/{{ $item->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Thumbnail Image</label>
                                                            <input type="file" accept="image/png, image/gif, image/jpeg" name="img_input" class="form-control">
                                                            <div id="emailHelp" class="form-text">Size : 270 x 300</div>
                                                            <img src="{{ asset('img_uploads/thumbnail/'.$item->thumbnail_img) }}" class="img-thumbnail" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Name Product</label>
                                                            <input type="text" class="form-control" value="{{ $item->name_product }}" name="name_input" placeholder="Name Product ..." required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Information Product</label>
                                                            <textarea class="form-control" name="information_input" rows="3" placeholder="Information Product ..." required>{{ $item->information_product }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Description Product</label>
                                                            <textarea class="form-control" name="description_input" rows="3" placeholder="Description Product ..." required>{{ $item->description_product }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Tags Product</label>
                                                            <input class="form-control" name="tags_input" value="{{ $item->tags_product }}" placeholder="Tags Product ..." required>
                                                            <div id="emailHelp" class="form-text">tags : fruit, banana, dll</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">SKU Product</label>
                                                            <input class="form-control" name="sku_input" value="{{ $item->sku_product }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Categories Product</label>
                                                            <input class="form-control" name="categories_input" value="{{ $item->categories_product }}" placeholder="Categories Product ..." required>
                                                            <div id="emailHelp" class="form-text">tags : fruit or vegetable</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Price Product</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                                                <input type="number" class="form-control" value="{{ $item->price_product }}" placeholder="Price Product ..." name="price_input" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Stock Product</label>
                                                            <input type="number" class="form-control" value="{{ $item->stock_product }}" placeholder="Stock Product ..." name="stock_input" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Status Product</label>
                                                            <select class="form-select" aria-label="Default select example" name="status_input">
                                                                <option value="{{ $item->status_product }}" {{ $item->status_product ? 'selected' : ''}} >
                                                                    @if ($item->status_product == '1')
                                                                    Active
                                                                    @else
                                                                    Non-Active
                                                                    @endif
                                                                </option>
                                                                @if ($item->status_product == '1')
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
                                <form action="{{ url('superadmin/product/delete') }}/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
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
          <h5 class="modal-title" id="staticBackdropLabel">Input Data Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ url('superadmin/product') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Thumbnail Image</label>
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="img_input" class="form-control" required>
                            <div id="emailHelp" class="form-text">Size : 270 x 300</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_input" placeholder="Name Product ..." required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Information Product</label>
                            <textarea class="form-control" name="information_input" rows="3" placeholder="Information Product ..." required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description Product</label>
                            <textarea class="form-control" name="description_input" rows="3" placeholder="Description Product ..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tags Product</label>
                            <input class="form-control" name="tags_input" placeholder="Tags Product ..." required>
                            <div id="emailHelp" class="form-text">tags : fruit, banana, dll</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">SKU Product</label>
                            @php
                                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                $charactersLength = strlen($characters);
                                $randomString = '';
                                for ($i = 0; $i < 4; $i++) {
                                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                                }
                            @endphp
                            <input class="form-control" name="sku_input" value="{{ "CB-".$randomString }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Categories Product</label>
                            <input class="form-control" name="categories_input" placeholder="Categories Product ..." required>
                            <div id="emailHelp" class="form-text">tags : fruit or vegetable</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price Product</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="number" class="form-control" placeholder="Price Product ..." name="price_input" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Stock Product</label>
                            <input type="number" class="form-control" placeholder="Stock Product ..." name="stock_input" aria-describedby="basic-addon1">
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
