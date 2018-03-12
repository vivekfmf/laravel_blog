@extends('layouts.master')

@section('content')

<h2>Create Post</h2>

<hr>

<form action="/posts" method="POST">

     {{ csrf_field() }}

     <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" id="title" name="title">
     </div>

     <div class="form-group">
          <label for="body">Post Body</label>
          <input type="text" class="form-control" id="body" name="body">
     </div>

     <div class="form-group">
          <button type="submit" class="btn btn-primary">Create Post</button>
     </div>

@include('layouts.errors')


</form>

@endsection