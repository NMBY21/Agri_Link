@extends('layouts.app')

@section('content')
<main class="main-content">
    <div class="container">
        <h2>{{ $education->title }}</h2>
        <img src="{{ asset('storage/' . $education->image) }}" alt="{{ $education->title }}" class="img-fluid">
        <p>{{ $education->content }}</p>
        <a href="{{ route('education.guest') }}" class="btn btn-secondary">Back to List</a>
    </div>
</main>
@endsection
