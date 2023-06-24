@extends('layouts.app')

@section('title', 'Search by Category')

@section('search-css')
    <link href="{{ mix('css/search.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container py-5">
    <div class="mb-5">
        <h3 class="h3 title text-center mb-3">Explore Japan</h3>
    </div>
    <form action="{{ route('search.place') }}" method="get" id="create-search-form">
        <div class="search-body">
            {{-- Seacrch Menu :Category--}}
            <div class="row mb-3 category-search">
                <div class="col-2 search-box">
                    <span class="search-box_title fs-5">Add Category</span>
                </div>
                <div class="col-10">
                    <div class="checkbox-list">
                        <label for="category1" class="category-label">
                            <input type="checkbox" {{ (isset($s_category) && in_array('spot', $s_category)) ? 'checked' : '' }} class="category-tag" name="category[]" value="spot" id="category1">
                            <span class="category-tag-text">Spot</span>
                        </label>
                        <label class="category-label">
                            <input type="checkbox" {{ (isset($s_category) && in_array('restaurant', $s_category)) ? 'checked' : '' }} class="category-tag" name="category[]" value="restaurant">
                            <span class="category-tag-text">Restaurant</span>
                        </label>
                        <label class="category-label">
                            <input type="checkbox" {{ (isset($s_category) && in_array('hotel', $s_category)) ? 'checked' : '' }} class="category-tag" name="category[]" value="hotel">
                            <span class="category-tag-text">Hotel</span>
                        </label>
                        <label class="category-label">
                            <input type="checkbox" {{ (isset($s_category)  && in_array('activity', $s_category)) ? 'checked' : '' }} class="category-tag" name="category[]" value="activity">
                            <span class="category-tag-text">Activity</span>
                        </label>
                    </div>
                </div>
            </div>
            
            {{-- Add Area-Condition --}}
            <div class="row area-search">
                <div class="col-2 search-box">
                    <span class="search-box_title fs-5">Add Area</span>
                </div>
                <div class="col-10">
                    @foreach ($all_areas as $area)
                    <label class="area-label">
                        <input type="checkbox" {{ (isset($s_area) && in_array($area->id, $s_area)) ? 'checked' : '' }} class="area-tag" name="area[]" value="{{ $area->id }}" id="area_id">
                        <span class="area-tag-text">{{ $area->name_en }}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="row drop-list">
                <input id="prefecture-check" class="prefecture-check" type="checkbox" {{ isset($s_prefectures) ? 'checked' : '' }}>
                <label class="prefecture-nav-label" for="prefecture-check">Add More Prefectures</label>
                <div class="prefecture-content">
                    @foreach ($all_prefectures as $prefecture)
                        @php
                            $display = '';

                            if(isset($s_prefectures)) {
                                $display = !in_array($prefecture->area->id, $s_area) ? 'd-none' : '';
                            } else {
                                $display = 'd-none';
                            }
                        @endphp
                        <label class="prefecture-label {{ $display }}" data-area="{{ $prefecture->area->id  }}">
                            <input type="checkbox" class="prefecture-tag" {{ (isset($s_prefectures) && in_array($prefecture->id, $s_prefectures)) ? 'checked' : '' }} name="prefecture[]" value="{{ $prefecture->id }}" id="prefecture_id">
                            <span class="prefecture-tag-text">{{ $prefecture->name_en }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Add Keyword-Condition --}}
            <div class="row genre-search mt-3">
                <div class="col-2 search-box">
                    <span class="search-box_title fs-5">Add Genre</span>
                </div>
                <div class="col-10">
                    @foreach ($all_genres as $genre)
                    <label class="genre-label">
                        <input type="checkbox" {{ (isset($s_genre) && in_array($genre->id, $s_genre)) ? 'checked' : '' }} class="genre-tag" name="genre[]" value="{{ $genre->id }}" id="genre_id">
                        <span class="genre-tag-text">{{ $genre->name }}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="row drop-list">
                <input id="keyword-check" class="keyword-check" type="checkbox" {{ isset($s_keywords) ? 'checked' : '' }}>
                <label class="keyword-nav-label" for="keyword-check">Add More Genres & Keywords</label>
                <div class="keyword-content">
                    @foreach ($all_keywords as $keyword)
                        @php
                            $display = '';

                            if(isset($s_keywords)) {
                                $display = !in_array($keyword->genre->id, $s_genre) ? 'd-none' : '';
                            } else {
                                $display = 'd-none';
                            }
                        @endphp
                        <label class="keyword-label {{ $display }}" data-genre="{{ $keyword->genre->id }}">
                            <input type="checkbox" class="keyword-tag" {{ (isset($s_keywords) && in_array($keyword->id, $s_keywords)) ? 'checked' : '' }} name="keyword[]" value="{{ $keyword->id }}" id="keyword_id">
                            <span class="keyword-tag-text">{{ $keyword->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Button --}}
            <div class="row text-center my-3">
                <div class="col-5 text-end">
                    <a href="{{ route('search.index') }}" class="cancel-button btn">
                        Reset
                    </a>
                </div>
                
                <div class="col-7 text-start">
                    <button type="submit" class="submit-button btn ms-1 p-2 px-5">
                    <i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;Search
                    </button>
                </div>
            </div>
            
        </div>
    </form>

    {{-- Show Places --}}
    <div class="show-place mt-5">
        @include('users.search.search_details.place')
    </div>
    
</div>
<script>
    // To show prefectures related to the designated Area
    $(document).ready(function(){
        var area_ids = [];
        $('.area-tag').change(function() {
            let value = $(this).val();
            let index = area_ids.indexOf(parseInt(value))
            if($(this).is(':checked')) {
                if(index == -1) {
                    area_ids.push(parseInt($(this).val()))
                }
            } else {
                area_ids.splice(index, 1);
            }
            $('.prefecture-label').each(function() {
                if(area_ids.length == 0) {
                    $('.prefecture-label').addClass('d-none');
                } else {
                    if(area_ids.indexOf(parseInt($(this).data('area'))) > -1) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none')
                    }
                }
            });
        });
    });

    // To show keywords related to the designated Genre
    $(document).ready(function(){
        var genre_ids = [];
        $('.genre-tag').change(function() {
            let value = $(this).val();
            let index = genre_ids.indexOf(parseInt(value))
            if($(this).is(':checked')) {
                if(index == -1) {
                    genre_ids.push(parseInt($(this).val()))
                }
            } else {
                genre_ids.splice(index, 1);
            }
            // console.log(genre_ids)
            $('.keyword-label').each(function() {
                if(genre_ids.length == 0) {
                    $('.keyword-label').addClass('d-none');
                } else {
                    if(genre_ids.indexOf(parseInt($(this).data('genre'))) > -1) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none')
                    }
                }
            });
        });
    });
</script>
@endsection