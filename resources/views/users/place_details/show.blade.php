@extends('layouts.app')

@section('title', 'Place Detail')

@section('content')
    {{-- Header --}}

    <div style="background: url({{asset('/storage/sample/topimage.png')}}); background-size:cover;">
        <div class="container text-white py-5">
            {{-- Main Image --}}
            <div  style="margin-top: 150px; margin-bottom: 150px">
                <div class="row d-flex flex-fluid-row ">
                    <div style="width: 50%;">
                        <img src="{{asset('/storage/sample/tomas-malik-orQBzc7Dl3U-unsplash.jpg')}}" alt="topimage" class="img-fluid" style="width:100%;">
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
                            <p class="pb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non consectetur quis nobis. Sequi id laborum cumque quam, fugit ea optio fuga ex asperiores eos eius adipisci facilis natus aut? Pariatur.</p>
                        </div>
                        <div class="row d-flex align-items-end">
                            <div class="d-flex justify-content-end" style="width: 60%;">
                                <div>
                                    <i class="fa-solid fa-share-from-square text-right"></i>
                                </div>
                                {{-- Heart Button --}}
                                <div class="me-2">
                                    @if ($post->isFavorite())
                                    {{-- red heart --}}
                                    <form action="{{route('favorite.destroy', $place->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                    
                                        <button type="submit" class="btn btn-sm shadow-none p-0"><i class="fa-solid fa-heart text-danger"></i></button>
                                    </form>
                                    
                                    @else
                                        {{-- white heart --}}
                                        <form action="{{route('favorite.store', $place->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm shadow-none p-0"><i class="fa-regular fa-heart"></i></button>
                                        </form>
                                    @endif
                    
                                </div>
                                {{-- Favorite Model --}}
                                {{ $place->favorite->count() }}
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

                    {{-- @foreach () --}}
                        <tr>
                            <td>Rakuten Travel</td>
                            <td class="fw-bold text-success">¥12,320～</td>
                            <td>
                                <a href="#" class="btn btn-light border-dark btn-sm rounded-pill">Go to Site ></a>
                            </td>
                        </tr>
                    {{-- @endforeach
                    <tr>
                        <td></td>
                        <td>
                            Uncategorized
                            <p class="xsmall mb-0 text-muted">Hidden posts are not included.</p>
                        </td>
                        <td>{{$uncategorized_count}}</td>
                        <td></td>
                        <td></td>
                    </tr> --}}
                </tbody>
            </table>

            {{-- Recommendation button to create plans --}}
            <div class="d-grid gap-2" style="margin-top: 100px; margin-bottom:100px;">
                <button class="btn btn-light border-dark rounded-pill" type="button"><h3>Let's create your plan!</h3></button>
            </div>

            {{-- Basic Infomartion --}}
            <div>
                <div class="row fw-bold">
                    <h2>Bacic Infomation</h2>
                </div>	
                <table class="table table-borderless mt-3 p-3">
                    <tr>
                        <th><h5><i class="fa-sharp fa-solid fa-location-dot"></i> Address:</h5></th>
                        <td><h5>{{$place->address}}</h5></td>
                    </tr>
                    <tr>
                        <th><h5><i class="fa-regular fa-clock"></i> Opening Hours:</h5></th>
                        <td><h5>{{$place->opening_time}} - {{$place->ending_time}}</h5></td>
                    </tr>
                    <tr>
                        <th><h5><i class="fa-solid fa-earth-americas"></i> Web Site:</h5></th>
                        <td><h5>{{$place->url}}</h5></td>
                    </tr>
                </table>    
            </div>

            {{-- Map --}}
            {{-- Recommend for you --}}
            @include('users.place_details.recommend')
        </div>       
    </div>
@endsection
