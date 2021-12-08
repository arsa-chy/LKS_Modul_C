@extends('auth.auth')

@section('title', 'Login')

@section('content') 
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="{{ route('user.login') }}" method="post">
        @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" autofocus="autofocus" value="{{ old('email') }}">
              <label for="email">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('user.register') }}">Register an Account</a>
          <a class="d-block small" href="/">Back to My Shop</a>
        </div>
      </div>
    </div>
@endsection