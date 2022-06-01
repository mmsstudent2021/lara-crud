@extends('master')
@section('title') Sample Blog Home @endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Hello ....</h1>
                                <p class="mb-0 text-black-50">What is on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-lg btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $post->title }}</h4>
                            <p class="card-text text-black-50">{{ Str::words($post->description,50) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
