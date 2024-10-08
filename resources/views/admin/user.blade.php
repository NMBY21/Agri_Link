@extends('layouts.admin')

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
                            <th>Role</th>
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
                            <th>Role</th>
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
                                {{ $item->number_phone ?? 'Empty' }}
                            </td>
                            <td>
                                @if ($item->status_user == '1')
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Non-Active</span>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{ route('user.role.update', $item->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <select name="role" onchange="this.form.submit()">
                                        <option value="customer" {{ $item->roles->contains('name', 'customer') ?
                                            'selected' : '' }}>Customer
                                        </option>
                                        <option value="admin" {{ $item->roles->contains('name', 'admin') ? 'selected' :
                                            '' }}>Admin</option>
                                        <option value="superadmin" {{ $item->roles->contains('name', 'superadmin') ?
                                            'selected' : '' }}>Superadmin
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <!-- Detail Button -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop3{{ $item->id }}">Detail</button>

                                <!-- Detail Modal -->
                                <div class="modal fade" id="staticBackdrop3{{ $item->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Detail Data Customer
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1"
                                                                class="form-label">Name Customer</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->name }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1"
                                                                class="form-label">Email Customer</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->email }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Number Phone Customer</label>
                                                            <input class="form-control"
                                                                value="{{ $item->number_phone }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1"
                                                                class="form-label">Address Customer</label>
                                                            <textarea class="form-control" rows="3"
                                                                disabled>{{ $item->address_user ?? 'N/A' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Status Product</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="status_input"
                                                                disabled>
                                                                <option value="{{ $item->status_user }}" selected>
                                                                    {{ $item->status_user == '1' ? 'Active' :
                                                                    'Non-Active' }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Button -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2{{ $item->id }}">Edit</button>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Customer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST"
                                                action="{{ url('admin/customer/edit') }}/{{ $item->id }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label">Name Customer</label>
                                                                <input type="text" class="form-control"
                                                                    name="name_input" value="{{ $item->name }}"
                                                                    placeholder="Name Customer ..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label">Email Customer</label>
                                                                <input type="text" class="form-control"
                                                                    name="email_input" value="{{ $item->email }}"
                                                                    placeholder="Email Customer ..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Number Phone Customer</label>
                                                                <input class="form-control" name="number_input"
                                                                    type="number" value="{{ $item->number_phone }}"
                                                                    placeholder="Number Phone Customer ...">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Password Customer</label>
                                                                <input class="form-control" type="password"
                                                                    name="password_input"
                                                                    placeholder="Change Password Customer ...">
                                                                <div id="emailHelp" class="form-text">Password minimum 8
                                                                    characters</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label">Address Customer</label>
                                                                <textarea class="form-control" name="address_input"
                                                                    rows="3"
                                                                    placeholder="Address Customer ...">{{ $item->address_user ?? 'N/A' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Status User</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example"
                                                                    name="status_input" required>
                                                                    <option value="1" {{ $item->status_user == '1' ?
                                                                        'selected' : '' }}>Active</option>
                                                                    <option value="0" {{ $item->status_user == '0' ?
                                                                        'selected' : '' }}>Non-Active</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Button -->
                                <form method="POST" action="{{ route('user.destroy', $item->id) }}"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
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
@endsection
