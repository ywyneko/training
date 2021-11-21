@extends('layouts.master')
@include('layouts.navbar')

@section('title','Post Page')

@section('content')
<h1>Post Page</h1>
<div class="container-fluid">
@include('layouts.success')
    <div class="row">
        <div class="col-3">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        {{$post->title}}
                    </div>
                <div class="card-body">
                    {{$post->content}}
                </div>
                <div class="card-footer">
                    <a href=" {{url("/post/show/$post->id")}} " class="btn btn-primary">View</a>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

