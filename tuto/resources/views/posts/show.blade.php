@extends('layouts.app')

@section('title') Show @endsection
@section('content')
        <div class="card mt-4">
            <div class="card-header">
              Post Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Title: {{$post['title']}}</h5>
              <p class="card-text">Content: {{$post['content']}}</p>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-header">
              Post Creator Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Name: {{$post['posted_by']}}</h5>
              <p class="card-text">Email: </p>
              <p class="card-text">Created At:{{$post['created_at']}} </p>
            </div>
          </div>
@endsection     
      
