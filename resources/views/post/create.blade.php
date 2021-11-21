@extends('layouts.master')
@include('layouts.navbar')

@section('title','Create Page')

@section('content')
<h1>Create Page</h1>
<div class="row">
    <div class="col-6">
        <form action=" {{url('/post')}} " method="POST">
            @csrf
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" name="title">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label >Content</label>
              <input type="text" class="form-control" name="content">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
