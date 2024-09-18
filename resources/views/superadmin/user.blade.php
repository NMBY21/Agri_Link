@extends('layouts.superadmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Customer</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Input Data Customer
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name User</th>
                            <th>Email User</th>
                            <th>Number Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name User</th>
                            <th>Email User</th>
                            <th>Number Phone</th>
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
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                @if ($item->number_phone == null)
                                    Empty
                                @else
                                    {{ $item->number_phone }}
                                @endif
                            </td>
                            <td>
                                @if ($item->status_user == '1')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Non-Active</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop3{{ $item->id }}">Detail</button>

                                <div class="modal fade" id="staticBackdrop3{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Detail Data Customer</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Name Customer</label>
                                                        <input type="text" class="form-control" value="{{ $item->name }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Email Customer</label>
                                                        <input type="text" class="form-control" value="{{ $item->email }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Number Phone Customer</label>
                                                        <input class="form-control" value="{{ $item->number_phone }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Address Customer</label>
                                                        <textarea class="form-control" rows="3" disabled>{{ $item->address_user }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Status Product</label>
                                                        <select class="form-select" aria-label="Default select example" name="status_input" disabled>
                                                            @if ($item->status_user == '1')
                                                            <option selected='selected'>Active</option>
                                                            @else
                                                            <option selected='selected'>Non-Active</option>
                                                            @endif
                                                        </select>
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

                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $item->id }}">Edit</button>

                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Product</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/customer/edit') }}/{{ $item->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Name Customer</label>
                                                            <input type="text" class="form-control" name="name_input" value="{{ $item->name }}" placeholder="Name Customer ..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Email Customer</label>
                                                            <input type="text" class="form-control" name="email_input" value="{{ $item->email }}" placeholder="Email Customer ..." required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Number Phone Customer</label>
                                                            <input class="form-control" name="number_input" type="number" value="{{ $item->number_phone }}" placeholder="Number Phone Customer ...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Password Customer</label>
                                                            <input class="form-control" type="password" name="password_input" placeholder="Change Password Customer ...">
                                                            <div id="emailHelp" class="form-text">Password minimum 8 characters</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Address Customer</label>
                                                            <textarea class="form-control" name="address_input" rows="3" placeholder="Address Customer ...">{{ $item->address_user }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Status Product</label>
                                                            <select class="form-select" aria-label="Default select example" name="status_input">
                                                                <option value="{{ $item->status_user }}" {{ $item->status_user ? 'selected' : ''}} >
                                                                    @if ($item->status_user == '1')
                                                                    Active
                                                                    @else
                                                                    Non-Active
                                                                    @endif
                                                                </option>
                                                                @if ($item->status_user == '1')
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
                                <form action="{{ url('superadmin/customer/delete') }}/{{ $item->id }}" method="POST" class="d-inline">
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
          <h5 class="modal-title" id="staticBackdropLabel">Input Data Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ url('superadmin/customer') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Name Customer</label>
                            <input type="text" class="form-control" name="name_input" placeholder="Name Customer ..." required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Email Customer</label>
                            <input type="text" class="form-control" name="email_input" placeholder="Email Customer ..." required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Number Phone Customer</label>
                            <input class="form-control" name="number_input" type="number" placeholder="Number Phone Customer ...">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password Customer</label>
                            <input class="form-control" type="password" name="password_input" placeholder="Password Customer ..." required>
                            <div id="emailHelp" class="form-text">Password minimum 8 characters</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address Customer</label>
                            <textarea class="form-control" name="address_input" rows="3" placeholder="Address Customer ..." required></textarea>
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
