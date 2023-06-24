@extends('layouts.app')

@section('map-js')
    <script src="{{ asset('js/map.js') }}" defer></script>
@endsection
@section('plan-details-css')
    <link href="{{ mix('css/plan-details.css') }}" rel="stylesheet">
@endsection

@section('title', 'Suggested Plan')

@section('content')
<div class="container bg-light shadow p-4 mt-2 rounded">
    <div class="row">
        <div>
            <div class="h4 text-capitalize">Suggested Plan</div>
        </div>
        <div class="row">

        </div>
        <div class="col">
            <ul class="nav nav-pills mb-3" id="tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="day1-tab" data-bs-toggle="pill" data-bs-target="#day1" type="button" role="tab" aria-controls="day1" aria-selected="false">Day 1</button>
                </li>
            </ul>
        </div>
        <div class="col">
            <form action="{{ route('suggest-plans.edit', Auth::user()->id) }}" method="GET">
                <button class="btn btn-outline-dark rounded-pill h6">Edit Plan</button>
            </form>
        </div>
    </div>
    <div class="row"> 
        <div class="col">
            <div class="plan-container bg-white shadow p-3 rounded">
                <div class="my-2">
                    <div class="tab-content " id="tabContent">
                        <div class="tab-panel fade show" id="day1" role="tabpanel" aria-labelledby="day1-tab" tabindex="0">
                            <div class="card-body">
                                @php $i = 0; @endphp
                                @foreach($plan_details as $key => $place)
                                    <div class="bg-plan p-2 mb-1">
                                        <div class="p-2">
                                            <p><i class="fa-regular fa-clock"></i>@if ($i == 0) Start @endif
                                                {{ $arrival_times[$i]; }}
                                            </p>
                                            @php $i++; @endphp
                                            <p><i class="fa-solid fa-location-dot"></i> {{ $place->name_en }}</p>
                                            <div class="d-flex">
                                                <div class="px-2">
                                                    <img src="{{ asset('storage/sample/'.$place->image) }}" class="img-sm" alt="{{$place->image}}">
                                                </div>
                                                <p class="place-desc px-2">
                                                    {{ $place->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($key !== 'hotel')
                                        <div>
                                            <div class="float-start">
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                                <i class="fa-solid fa-car"></i>
                                            </div>{{ $move_time }} min
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col map" id="map_{{ Auth::user()->id}}">
            <script src="https://maps.googleapis.com/maps/api/js?key={{ config('api.google_map_api_key') }}&callback=initMap" defer>
            </script>
        </div>
    </div>
    <script>
        const gm_plan = {!! json_encode($gm_plan) !!};
    </script>
</div>
@endsection