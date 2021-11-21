@extends('layouts.master')
@include('layouts.navbar')

@section('title','Post Page')

@section('content')
<h1>Show Page</h1>
    <div class="row">
        <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        {{$post->title}}
                    </div>
                <div class="card-body">
                    {{$post->content}}
                </div>
                <div class="card-footer">
                    <a href=" {{url("/post/edit/$post->id")}} " class="btn btn-primary">Edit</a>
                    <a href=" {{url("/post")}} " class="btn btn-primary">Back</a>
                    <a href=" {{url("/post/delete/$post->id")}} " class="btn btn-primary">Delete</a>
                </div>
                </div>
        </div>
    </div>
@endsection

