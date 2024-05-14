@extends('welcome')


@section('register-content')

<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <h1 class="card-title">Register</h1>
      </div>
      <div class="card-body">
      @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
          </div>
      @endif
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
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
                    Register
                </button>
            </div>
          </div>

          <div class="mb-3 d-flex justify-content-center">
            <div class="account">
                <p>Already have an account?</p>
            </div>
            <div class="login ps-3">
              <a href="/login">Login</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>





<!-- <form class="row g-3 m-5 p-5">
  <div class="col-md-6">
    <label for="inputText4" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="inputText4" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4" required>
  </div>
  
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="register" class="btn btn-primary">Register</button>
  </div>
</form> -->
@endsection()