@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Education Management</h1>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('education.create') }}" class="btn btn-primary">Add Education</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($educations as $education)
            <tr>
                <td>{{ $education->title }}</td>
                <td>{{ Str::limit($education->content, 50) }}</td>
                <td><img src="{{ asset('storage/' . $education->image) }}" alt="Image" width="100"></td>
                <td>
                    <a href="{{ route('education.edit', $education->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST"
                        style="display:inline;">
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
@endsection
