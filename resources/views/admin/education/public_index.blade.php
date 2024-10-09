@extends('layouts.app')

@section('content')
<main class="main-content">
    <div class="container">
        <h2 class="mb-4">Educational Content</h2>

        @if ($educations->isEmpty())
        <p>No educational content available.</p>
        @else
        <div class="row">
            @foreach ($educations as $education)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{ asset('storage/' . $education->image) }}"
                        alt="{{ $education->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $education->title }}</h5>
                        <p class="card-text">{{ Str::limit($education->content, 100) }}</p>
                        <!-- Link to the individual educational content -->
                        <a href="{{ route('education.show', ['id' => $education->id]) }}" class="btn btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</main>
@endsection
