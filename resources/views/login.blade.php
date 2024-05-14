@extends('welcome')

@section('login-content')
<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <h1 class="card-title">Login</h1>
      </div>
      <div class="card-body">
      @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">
            {{Session::get('error')}}
          </div>
      @endif
        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>

          <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">
                    Login
                </button>
            </div>
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <div class="account">
                <p>Don't have an account?</p>
            </div>
            <div class="register ps-3">
              <a href="/register">Register</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>



<!-- <form class="m-5 p-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
@endsection