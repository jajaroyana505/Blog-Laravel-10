@extends('layouts.app')

@section('content')


<div class="card overflow-hidden mt-2">
    <div class="text-center bg-primary position-relative">
        <div class="img-overlay"></div>
        <div class="position-relative pt-4 py-5 mb-1">
            <h5 class="text-white">Welcome!</h5>
            <p class="text-white-50 mb-0 fs-14">Sign up For a New Account.</p>
        </div>
    </div>
    <div class="card-body position-relative">
        <div class="p-4 mt-n5 bg-white card rounded pb-0">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label class="fs-14 mb-2" for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="fs-14 mb-2" for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="fs-14 mb-2" for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="mb-2">
                    <label for="password-confirm" class="fs-14 mb-2">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end">
                            <a href="{{ route('password.request') }}" class="text-muted fs-13"><i class="mdi mdi-lock me-1"></i> Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100" type="submit">Sign up</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="text-center plan-line">
                or sign up with
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center my-3">
        <div class="col-lg-6">
            <ul class="list-unstyled btn-social-icon mb-0">
                <li class="list-inline-item">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mt-5 text-center text-white-50">
    <p>Have account already? <a href="{{ route('login')}}" class="fw-bold text-white"> Sign in</a> </p>
    <p>©<script>
            document.write(new Date().getFullYear())
        </script> Oxhen. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
</div>

@endsection