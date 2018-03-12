@extends('layouts.master')

@section('content')

     <h2>Register</h2>

     <hr>

     <form action="/register" method="POST">

          {{ csrf_field() }}
     
          <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" name="email" id="email" required>
          </div>

          <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" id="password" required>
          </div>

          <div class="form-group">
               <label for="password_confirmation">Password Confirmation</label>
               <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
          </div>

          <div class="form-group">
               <button type="submit" class="btn btn-primary">Register</button>
          </div>

          @include ('layouts.errors')

     </form>

@endsection