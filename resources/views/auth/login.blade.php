@extends('layouts.app')

@section('content')



<div class="card overflow-hidden mt-2">
    <div
        class="text-center bg-primary position-relative">
        <div class="img-overlay"></div>
        <div class="position-relative pt-4 py-5 mb-1">
            <h5 class="text-white">Welcome!</h5>
            <p class="text-white-50 mb-0 fs-14">
                Sign in to Continue to Oxhen..
            </p>
        </div>
    </div>
    <div class="card-body position-relative">
        <div
            class="p-4 mt-n5 bg-white card rounded pb-0">
            <form method="POST" action="{{ route('login') }}">
                @csrf




                <div class=" mb-3">


                    <label class="fs-14 mb-2" for="email">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="user name" placeholder="Enter Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="fs-14 mb-2" for="password">Password</label>
                    <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-muted fs-13">
                                <i class="mdi mdi-lock me-1"></i>
                                Forgot password?
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary  w-100">
                        {{ __('Login') }}
                    </button>
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
    <div
        class="row justify-content-center text-center my-3">
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
    <p> Don't have an account ?
        <a href="{{ route('register')}}" class="fw-bold text-white">
            Register
        </a>
    </p>
    <p> ©
        <script>
            document.write(new Date().getFullYear());
        </script>
        Oxhen. Crafted with
        <i class="mdi mdi-heart text-danger"></i> by
        Themesdesign
    </p>
</div>

@endsection