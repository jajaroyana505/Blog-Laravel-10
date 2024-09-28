@extends('layouts.app')

@section('content')


<div class="card overflow-hidden mt-2">
    <div class="text-center bg-primary position-relative">
        <div class="img-overlay"></div>
        <div class="position-relative pt-4 py-5 mb-1">
            <h5 class="text-white">Reset Password</h5>
            <p class="text-white-50 mb-0 fs-14">Re-Password with Oxhen.</p>
        </div>
    </div>
    <div class="card-body position-relative">
        <div class="p-4 mt-n5 bg-white card rounded pb-0">
            <div class="alert alert-gray text-center mb-4" role="alert">
                <p class="fs-14 mb-0">Enter your Email and instructions will be sent to you!</p>
            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <p class="fs-14 mb-0">
                    {{ session('status') }}
                </p>
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label class="fs-14 mb-2" for="email">Email</label>
                    <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100" type="submit">Reset</button>
                </div>
                <div class="mt-4 mb-2 text-center">
                    <p class="mb-0 fs-14">Remember It ? <a href="{{route('login')}}" class="text-danger">Login</a></p>
                </div>
            </form>
        </div>
    </div><!-- card-body end -->
</div><!-- card-body end -->
<div class="mt-5 text-center text-white-50">
    <p>Remember It ? <a href="{{route('login')}}" class="fw-bold text-white"> Go to Login</a> </p>
    <p>©<script>
            document.write(new Date().getFullYear())
        </script> Oxhen. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
</div>
@endsection