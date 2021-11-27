@extends('auth.auth')

@section('title', 'Registration')

@section('content')
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register</div>
      <div class="card-body">
        <form action="{{ route('user.register') }}" method="post">
          @csrf
          <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="required" autofocus="autofocus" value="{{ old('nama') }}">
                <label for="nama">Username</label>
              </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" value="{{ old('email') }}">
              <label for="email">Email address</label>
            </div>
          </div>
          <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
              </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
      </div>
    </div>
@endsection