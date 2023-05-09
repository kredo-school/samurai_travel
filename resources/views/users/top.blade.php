@extends('layouts.app')

@section('title', 'Top')

@section('content')
    <div class="container body-top">
        <div class="top d-flex align-items-center">
            <img src="{{ asset('/assets/top-image.png')}}" alt="top-image" class="top-image">
            <div class="top-nav d-flex">
                <a href="#" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                    <div class="">Search by your destination
                        <div class="text-center mt-1">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                    <div class="">Search by category
                        <div class="text-center mt-1">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                    <div class="">Search by what to do
                        <div class="text-center mt-1">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-5 mb-3">
            <h3 class="h3 title text-center mb-3">We offer itineraries tailored to your preferences!</h3>
            @include('users.top.plan')
        </div>
        <div class="my-5">
            <h3 class="h3 title text-center mb-3">Pick up</h3>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'hotel'])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'restaurant'])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'activity'])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'spot'])
            </div>
        </div>
        <div class="my-5">
            <h3 class="h3 title text-center mb-3">How to create my plan?</h3>
            @include('users.top.how_to')
        </div>
    </div>
@endsection