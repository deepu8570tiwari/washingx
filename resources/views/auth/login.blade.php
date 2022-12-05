@extends('layouts.front')
@section('title')
        SignIn
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="POST" action="{{ route('login') }}">
         @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <a href="{{url('login/facebook')}}" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-facebook-f"></i>
              </a>
              <a href="{{url('login/google')}}" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-google"></i>
              </a>

              <!--<a href="{{url('login/github')}}" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-twitter"></i>
              </a>

              <a href="" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-linkedin"></i>
              </a>-->
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control form-control-lg"
              placeholder="Email address" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control form-control-lg"
              placeholder="Enter password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <label class="form-check-label" for="remember">
                Remember me
              </label>
            </div>
            @if (Route::has('password.request'))
                <a class="btn btn-link text-body" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{url('register')}}"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
    </div>
</div>
</section>
@include('auth.footer')
@endsection

