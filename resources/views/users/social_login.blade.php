@extends('layouts.app')

@section('title', 'Social Login')

@section('social-login-css')
    <link href="{{ mix('css/social-login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container" style="padding: 120px 0">
        <div class="back-frame text-center d-flex align-items-center justify-content-center" style="width: 960px; height: 640px;">
            <div>
                {{-- facebook login --}}
                <p>
                    <a href="{{ route('auth.facebook') }}" class="text-decoration-none h4 border border-dark rounded-pill py-3 d-inline-block" style="width: 320px;">
                        <i class="fa-brands fa-square-facebook text-primary me-3"></i>
                        <span class="text-dark">Login with Facebook</span>
                    </a>
                </p>

                {{-- google login --}}
                <p>
                    <a href="{{ route('auth.google') }}" class="text-decoration-none h4 border border-dark rounded-pill py-3 d-inline-block" style="width: 320px;">
                        <i class="fa-brands fa-google text-danger me-3"></i>
                        <span class="text-dark">Login with Google</span>
                    </a>
                </p>

                <p class="mt-5">
                    By proceeding, you agree to our <a href="#">Terms of Use</a> and confirm you have read our <a href="#">Privacy Statement</a>.
                </p>
            </div>
        </div>
    </div>
@endsection
