@extends('layouts.app')

@section('title', 'Top')

@section('map-js')
    <script src="{{ asset('js/map.js') }}" defer></script>
@endsection

@section('top-css')
    <link href="{{ mix('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="first-page" style="background-image: url('/images/top-image.png');">
        <div class="container body-top">
            <div class="top d-flex align-items-center" style="height: 1000px;">
                <div class="top-nav d-flex">
                    <a href="{{ route('search.index') }}" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                        <div class="">Search by your destination
                            <div class="text-center mt-1">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('search.index') }}" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                        <div class="">Search by Category
                            <div class="text-center mt-1">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="#" class="mx-5 text-decoration-none text-white nav-box border border-white d-flex align-items-center justify-content-center">
                        <div class="">Search by what to do
                            <div class="text-center mt-1">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container body-top">
        <div class="mt-5 mb-3">
            <h3 class="h3 title text-center mb-3">We offer itineraries tailored to your preferences!</h3>
            @if ($top_plan)
                @include('users.top.plan')
            @else
                <h3 class="h3 text-center mb-3">Sorry, preparing plan now.</h3>
            @endif
        </div>
        <div class="my-5">
            <h3 class="h3 title text-center mb-3">Pick up</h3>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'hotel', 'places' => $hotels])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'restaurant', 'places' => $restaurants])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'activity', 'places' => $activities])
            </div>
            <div class="my-5">
                @include('users.top.pickup', ['category' => 'spot', 'places' => $spots])
            </div>
        </div>
        <div class="my-5" id="how-to-create-plan">
            <h3 class="h3 title text-center mb-3">How to create my plan?</h3>
            @include('users.top.how_to')
        </div>
    </div>

@endsection


