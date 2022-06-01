@extends('master')
@section('title') Edit Post @endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="">
                                <h1 class="mb-0">Edit Post</h1>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>

                        <form action="{{ route('post.update',$post->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Post Title</label>
                                <input type="text" class="form-control form-control-lg" value="{{ $post->title }}" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Post Title</label>
                                <textarea type="text" rows="10" class="form-control form-control-lg" name="description">{{ $post->description }}</textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-lg">Update Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
