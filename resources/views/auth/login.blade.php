@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="card mx-auto" style="width: 500px">
        <div class="text-center mt-5">
            <img src="{{ asset('assets/logo_red.png')}}" alt="logo" style="width: 150px; height: 150px;">
        </div>
        <h1 class="mx-3 mt-3 text-center">{{ __('Login') }}</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="px-5">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label text-muted mb-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label text-muted mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <div class="text-end">
                            <a class="text-decoration-none text-danger" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
