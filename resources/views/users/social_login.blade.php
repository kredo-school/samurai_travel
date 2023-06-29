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
</div>
<script>
document.addEventListener('DOMContentLoaded', async function() {
    window.csrfToken = '{{ csrf_token() }}';
    try {
        // const favPlaceList = JSON.parse(localStorage.getItem('favPlaceList'));
        const favPlaceList = localStorage.getItem('favPlaceList');
        console.log(favPlaceList);
        const response = await fetch('/social_login/save-in-session/ajax', {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/json',
                'X-CSRF-Token' : window.csrfToken,
            },
            body: JSON.stringify(favPlaceList),
        });
        const data = await response.json();
        console.log(data['message']);
        console.log(data['data']);
        console.log(data['session_data']);
    } catch (error) {
        console.log(error);
    }
});
</script>
@endsection
