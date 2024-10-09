@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Manage Users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Change Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                <td>
                    <form action="{{ route('admin.changeRole', $user->id) }}" method="POST">
                        @csrf
                        <select name="role" class="form-control">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->roles->contains($role) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
