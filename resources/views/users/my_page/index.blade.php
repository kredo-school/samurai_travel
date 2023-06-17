@extends('layouts.app')

@section('title', 'My Page')

@section('content')

@php
    $interest_span_class = 'h4 border bg-white rounded-pill d-inline-block m-2 py-2 px-3';
    $interest_i_class = 'fa-solid fa-circle-xmark ps-2';
@endphp

<style type="text/css">
    .place-img-div {
        position: relative;
    }

    .place-img-div .see-place {
        position: absolute;
        top: 24px;
        left: 24px;
    }

    .place-img-div .del-place {
        position: absolute;
        top: 24px;
        right: 24px;
    }

    .plan-div {
        position: relative;
    }

    .plan-div .del-plan {
        position: absolute;
        top: 16px;
        right: 56px;
    }

    #div-profile:hover {
        cursor: pointer;
    }

    .fa-circle-xmark:hover,.fa-arrow-up-right-from-square:hover
    {
        cursor: pointer;
        color: #F7C229 !important;
    }

</style>


<div id="first-page" style="background-image: url('/images/leaf-black-image.png');">
    <div class="container" style="height: 800px;">
        <div class="row">
            <div class="col-3">
                <div id="div-profile" class="text-center" style="margin-top: 136px;" data-bs-toggle="modal" data-bs-target="#profile">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset("storage/avatar/".Auth::user()->avatar) }}" alt="avatar" class="img-thumbnail"/>
                    @else
                        <i class="fa-solid fa-user bg-white text-secondary border border-secondary rounded p-3" style="font-size: 15rem;"></i>
                    @endif
                    <a class="h4 text-white text-decoration-none mt-3 d-block" href="#" id="username">{{ Auth::user()->first_name." ".Auth::user()->last_name}}</a>
                </div>
                @include('users.my_page.modal.profile')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <h3 class="text-white text-line-white m-5">My favorite places</h3>
                    </div>
                </div>

                <div class="row" style="height: 560px; overflow: auto;">
                    @forelse ($place_favorites as $place_favorite)
                        <div id="place-favorite-{{ $place_favorite->place_id }}" class="col-3 p-2 m-0 place-img-div">
                            <img src="{{ asset("storage/sample/{$place_favorite->place->image}") }}" alt="place-image-{{ $place_favorite->place->id }}" class="w-100 place-img"/>
                            <a href="{{ route('placedetails', $place_favorite->place_id) }}">
                                <i class="fa-solid fa-arrow-up-right-from-square text-white see-place h4"></i>
                            </a>
                            <i id="place-favorite-i-{{ $place_favorite->place_id }}" class="fa-solid fa-circle-xmark ps-2 text-white del-place h4"></i>
                        </div>
                    @empty
                        <h3 class="text-white text-center">You have no favorite places.</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <h3 class="text-black text-line-black m-5">My favorite plans</h3>
        </div>
    </div>

    <ul class="slider p-0">
        @foreach ($plan_favorites as $plan_favorite)
            <li>
                @php $plan = $plan_favorite->plan; @endphp
                <div class="plan-div">
                    @include('users.my_page.plan')
                    <i id="plan-favorite-i-{{ $plan_favorite->id }}" class="fa-solid fa-circle-xmark ps-2 del-plan h4"></i>
                </div>
            </li>
        @endforeach
    </ul>
    @if ($plan_favorites->count() === 0)
        <h3 class="text-black text-center">You have no favorite plans.</h3>
    @endif


    <div class="my-5 pt-5">

        {{-- Interests --}}
        <div onclick="obj=document.getElementById('open').style; obj.display=(obj.display==='none')?'block':'none';">
            <div class="border bg-white rounded justify-content-center d-flex align-items-center mx-2" style="height: 48px">
                <a style="cursor:pointer;">
                    <h4 class="d-inline mt-2">INTERESTS </h4><i class="fa-solid fa-plus"></i>
                </a>
            </div>
        </div>
        <div id="open" style="display:none; clear:both;">
            <div class="border bg-white rounded-bottom mx-2">
                <div class="row">
                    <div id="interest-grp" class="col-9">
                        @foreach ($interests as $interest)
                            <span id="interest-{{ $interest->id }}" class="{{ $interest_span_class }}">
                                {{ $interest->keyword->name }}
                                <i id="interest-i-{{ $interest->id }}" class="{{ $interest_i_class }}"></i>
                            </span>
                        @endforeach
                    </div>
                    <div class="col-3 my-2">
                        <select style="width:240px;" name="keyword" id="keyword-select"></select>
                        <span id="add-keyword" class="btn btn-outline-dark mx-1"><i class="fa-solid fa-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    function addInterest(){
        // Get the selected keyword id
        const keyword_id = $('select[name="keyword"]').val();

        // If no keyword is selected, do nothing
        if (!keyword_id) {
            return;
        }

        $.ajax({
            // Register interest
            type: "POST",
            url: "/my_page/interests/store",
            data: { keyword_id : keyword_id },
            dataType: "json",

        }) .then((res) => {
            // In case of success response
            if (res.interest_id) {
                // Create a new span element
                const span = document.createElement('span');
                span.id = `interest-${res.interest_id}`;
                span.className = interest_span_class;
                span.textContent = res.keyword_name;

                // Create a new i element
                const i = document.createElement('i');
                i.id = `interest-i-${res.interest_id}`;
                i.className = interest_i_class;
                span.appendChild(i);
                i.addEventListener('click', function(event) {
                    removeInterest(res.interest_id);
                });

                // Add the new span element to the DOM
                const interest_grp = document.getElementById('interest-grp');
                interest_grp.appendChild(span);            }

                // Reset the select2 element
                $('#keyword-select').val(null).trigger('change');

        }) .fail((error) => {
            console.log(error.statusText);
        });
    }

    function removeInterest(id){
        $.ajax({
            // Delete interest
            type: "DELETE",
            url: `/my_page/interests/${id}/destroy`,

        }) .then((res) => {
            // In case of success response

            // Remove the span element from the DOM
            const interest = document.getElementById(`interest-${id}`);
            interest.remove();

        }) .fail((error) => {
            console.log(error.statusText);
        });
    }

    function removePlaceFavorite(place_id){
        $.ajax({
            // Delete place favorite
            type: "DELETE",
            url: `/my_page/place_favorites/${place_id}/destroy`,

        }) .then((res) => {
            // In case of success response

            // Remove the div element from the DOM
            const place_favorite = document.getElementById(`place-favorite-${place_id}`);
            place_favorite.remove();

        }) .fail((error) => {
            console.log(error.statusText);
        });
    }

    function removePlanFavorite(id, x_icon){
        $.ajax({
            // // Delete plan favorite
            type: "DELETE",
            url: `/my_page/plan_favorites/${id}/destroy`,

        }) .then((res) => {
            // In case of success response

            // Get the index of the slide to be clicked
            let slide_lis = document.getElementsByClassName( "slick-slide" );
            slide_lis = [].slice.call(slide_lis);

            const slide_li = x_icon.parentNode.parentNode;
            const index = slide_lis.indexOf( slide_li ) ;

            // Remove the li element from the DOM
            $('.slider').slick('slickRemove', index, false);
        }) .fail((error) => {
            console.log(error.statusText);
        });
    }


    // Receive data from html
    const interest_span_class = @json($interest_span_class);
    const interest_i_class = @json($interest_i_class);
    const interests = @json($interests);
    const place_favorites = @json($place_favorites);
    const plan_favorites = @json($plan_favorites);

    // CSRF Token
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // select2 for Searching Keywords
    $('#keyword-select').select2({
        placeholder: 'Select a keyword',
        allowClear: true,
        ajax: {
            url: '/my_page/keywords',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id,
                        }
                    })
                };
            },
            cache: true,
        }
    });

    // Set event listener to add button
    const add_keyword = document.getElementById('add-keyword');
    add_keyword.addEventListener('click', addInterest);

    // Set event listener to each interest
    const interst_x_icons = {};
    interests.forEach(
        function (interest) {
            interst_x_icons[interest['id']] = document.getElementById(`interest-i-${interest['id']}`);
            interst_x_icons[interest['id']].addEventListener('click', function(event) {
                removeInterest(interest['id']);
            });
        }
    );

    // Set event listener to each place favorite
    const place_favorite_x_icons = {};
    place_favorites.forEach(
        function (place_favorite) {
            place_favorite_x_icons[place_favorite['place_id']] = document.getElementById(`place-favorite-i-${place_favorite['place_id']}`);
            place_favorite_x_icons[place_favorite['place_id']].addEventListener('click', function(event) {
                removePlaceFavorite(place_favorite['place_id']);
            });
        }
    );

    // Set event listener to each plan favorite
    const plan_favorite_x_icons = {};
    plan_favorites.forEach(
        function (plan_favorite) {
            plan_favorite_x_icons[plan_favorite['id']] = document.getElementById(`plan-favorite-i-${plan_favorite['id']}`);
            plan_favorite_x_icons[plan_favorite['id']].addEventListener('click', function(event) {
                removePlanFavorite(plan_favorite['id'], plan_favorite_x_icons[plan_favorite['id']]);
            });
        }
    );

</script>

@endsection
