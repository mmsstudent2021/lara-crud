@extends('master')
@section('title') Create Post @endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="">
                                <h1 class="mb-0">Create New Post</h1>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>

                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Post Title</label>
                                <input type="text" class="form-control form-control-lg" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Post Title</label>
                                <textarea type="text" rows="10" class="form-control form-control-lg" name="description"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-lg">Add Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
