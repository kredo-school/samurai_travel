@extends('layouts.app')

@section('title', 'Place Detail')

@section('place-details-css')
    <link href="{{ mix('css/place-details.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- Header --}}

    <div style="background: url({{asset('/storage/sample/topimage.png')}}); background-size:cover;">
        <div class="container text-white py-5">
            {{-- Main Image --}}
            <div  style="margin-top: 150px; margin-bottom: 150px">
                <div class="row d-flex flex-fluid-row ">
                    <div style="width: 50%;">
                        <img src="{{asset('/storage/sample/' . $place->image)}}" alt="mainimage" class="img-fluid" style="width:100%;">
                        {{-- <img src="{{asset('/storage/sample/' . $place->image)}}" alt="mainimage" class="img-fluid" style="width:100%;"> --}}
                    </div>
                    <div style="width: 50%;">
                        <div class="row d-flex flex-fluid-row align-items-center">
                            <div style="width: 60%;">
                                <h1>{{$place->name_en}}</h1>
                            </div>
                            <div style="width: 40%;">
                                <h1 class="display-2 fw-bold" style="writing-mode: vertical-rl;">{{$place->name_jp}}</h1>
                            </div>  
                        </div>
                        {{-- Description --}}
                        <div class="row pt-3" style="width: 80%;">
                            {{-- <p class="pb-5">{{$place->description}}</p> --}}
                            <p class="pb-5">{{$place->description}}</p>
                        </div>
                        <div class="row d-flex flex-fluid-row align-items-end" style="width: 80%;">
                            <div class="d-flex justify-content-end">
                                <div class="me-2">
                                    <i class="fa-solid fa-share-from-square text-right"></i>
                                </div>
                                {{-- Heart Button --}}
                                <div class="me-2">
                                    @if ($place->isFavorite())
                                    {{-- red heart --}}
                                    <form action="{{route('place_favorite.destroy', $place->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                    
                                        <button type="submit" class="btn btn-sm shadow-none p-0"><i class="fa-solid fa-heart text-danger"></i></button>
                                    </form>
                                    
                                    @else
                                        {{-- white heart --}}
                                        <form action="{{route('place_favorite.store', $place->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm shadow-none p-0"><i class="fa-regular fa-heart text-white"></i></button>
                                        </form>
                                    @endif
                    
                                </div>
                                {{-- Favorite Model --}}
                                {{ $place->placeFavorite->count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Background cover WHITE --}}
    <div style="background: url({{asset('/storage/sample/bg-white.png')}}); background-size:cover;">
        <div class="container py-5">
            {{-- Sub Items --}}
            @include('users.place_details.sub_items')

            {{-- Affiriate Links --}}
            {{-- If this place is a hotel, activities and restrant,a table shows up --}}
            @if (1==1)
                <table class="table table-bordered bg-white mt-3">
                    <thead class="small table-secondary">
                        <tr>
                            <th>Reservation Site</th>
                            <th>Lodging Fees</th>
                            <th>Site URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- If the place has the link of affiliate, the table shows up --}}
                            @foreach ($affiliates as $affiliate)
                            <tr>
                                <td>{{$affiliate['affiliate']->site_name}}</td>
                                <td class="fw-bold text-success">
                                    ¥{{$affiliate['price']}}～
                                </td>
                                <td>
                                    <a href="{{$affiliate['affiliate']->site_url}}" class="btn btn-light border-dark btn-sm rounded-pill">Go to Site ></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            @endif
            {{-- Recommendation button to create plans --}}
            <div class="d-grid gap-2" style="margin-top: 100px; margin-bottom:100px;">
                <a href="#" class="btn btn-light border-dark rounded-pill">
                    <h3>Let's create your plan!</h3>
                </a>
            </div>

            {{-- Basic Infomartion --}}
            <div>
                <div class="row fw-bold">
                    <h2>Bacic Infomation</h2>
                </div>	
                <table class="table table-borderless mt-3 p-3">
                    <tr>
                        <th class="w-25">
                            <h5><i class="fa-sharp fa-solid fa-location-dot"></i> Address</h5>
                        </th>
                        <td class="w-75">
                            <h5>{{$place->address}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th><h5><i class="fa-regular fa-clock"></i> Opening Hours</h5></th>
                        <td>
                            <h5>{{wordwrap($place->opening_time, 2, ':', true) .' '. $place->open_ampm}} - {{wordwrap($place->ending_time, 2, ':', true) .' '. $place->end_ampm}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th><h5><i class="fa-solid fa-earth-americas"></i> Web Site</h5></th>
                        <td><a href="#" class="text-decoration-none text-dark"><h5>{{$place->url}}</h5></a></td>
                    </tr>
                </table>    
            </div>

            {{-- Map --}}
            {{-- Recommend for you --}}
            @if ($place->recommend_places->isNotEmpty())
                @include('users.place_details.recommend')
            @else
                <h3 class="text-muted text-center">No Recommend Places</h3>
            @endif
        </div>       
    </div>
@endsection
