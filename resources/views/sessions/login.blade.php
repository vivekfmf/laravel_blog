@extends('layouts.master')


@section('content')

     <h2>Log In</h2>

     <hr>

     <form action="/login" method="POST">

          {{ csrf_field() }}

          <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password">
          </div>

          <div class="form-group">
               <button type="submit" class="btn btn-primary">Log In</button>
          </div>

          @include('layouts.errors')


     </form>


@endsection