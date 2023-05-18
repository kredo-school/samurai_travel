@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<div class="row align-items-center m-5">
    <div class="col shadow rounded mb-4 mx-4 p-4 howto">
        {{-- <div class="d-flex justify-content-center">
            @if (file_exists(asset('/storage/xxx.jpg')))
                <img src="{{ asset('/storage/xxx.jpg') }}" class="img-howto" alt="#">
            @else
                <img src="{{ asset('/images/no-image.png') }}" class="img-howto" alt="#">
            @endif
        </div>
        <h5 class="h5 text-center my-4">Search</h5>
        <div class="mb-2">&#9312; Search by your destination and what you would like to do on your trip.</div>
        <div >&#9313; Open the page you are interested in from those that came up as search results.</div> --}}
    </div>
   
    <div class="col shadow rounded mb-4 mx-4 p-4 howto">
        {{-- <div class="d-flex justify-content-center">
            @if (file_exists(asset('/storage/xxx.jpg')))
                <img src="{{ asset('/storage/xxx.jpg') }}" class="img-howto" alt="#">
            @else
                <img src="{{ asset('/images/no-image.png') }}" class="img-howto" alt="#">
            @endif
        </div>
        <h5 class="h5 text-center my-4">Press this button</h5>
        <div class="mb-2">&#9312; Click on the button at the bottom of each page that says "Let's create a plan with this plan".</div>
        <div >&#9313; You will be taken to the login page, as you will need to register as a member to view and edit plans.</div> --}}
    </div>
    
    <div class="col shadow rounded mb-4 mx-4 p-4 howto">
        {{-- <div class="d-flex justify-content-center">
            @if (file_exists(asset('/storage/xxx.jpg')))
                <img src="{{ asset('/storage/xxx.jpg') }}" class="img-howto" alt="#">
            @else
                <img src="{{ asset('/images/no-image.png') }}" class="img-howto" alt="#">
            @endif
        </div>
        <h5 class="h5 text-center my-4">Login</h5>
        <div class="mb-2">&#9312; Please login with your account from Facebook, Instagram or Google.</div>
        <div >&#9313; If you do not have either account, please go to "Create an account" to register.</div> --}}
    </div>
    
</div>
@endsection

