@extends('layouts.app')

@section('title') Create @endsection

@section('content')

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <legend>Create Post</legend>
        
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>  

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="form-control" rows="3" name="content"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <input type="text" class="form-control" name="post_creator">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

@endsection
