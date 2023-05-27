@extends('layouts.admin')

@section('title', 'Registration')

@section('content')

<div class="card mx-auto" style="width: 500px">
    <h1 class="mx-3 mt-3 text-center">Registration</h1>
    <div class="card-body">
        <form action="{{ route('admin.store') }}" method="post">
            @csrf

            <div class="px-5">
                <div class="form-group mb-3">
                    <label for="first_name" class="form-label text-muted mb-2">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}">
                    @error('first_name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="last_name" class="form-label text-muted mb-2">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
                    @error('last_name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label text-muted mb-2">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label text-muted mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    @error('password')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label text-muted mb-2">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    Register
                </button>

            </div>
        </form>
    </div>
</div>

@endsection
