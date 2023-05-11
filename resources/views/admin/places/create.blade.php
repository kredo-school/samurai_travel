@extends('layouts.app')

@section('title','Place Create')

@section('content')
<div class="container justify-content-center shadow-sm">
    <div class="row">
        <div class="card mx-auto col-9">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Place</h1>
            <div class="card-body mx-5">
                    {{-- Store the sections --}}
                <form action="{{ route('place.store') }}" method="post">
                    @csrf
                    {{-- Place_Category --}}
                    <div class="form-group mb-3">
                        <label for="place_category" class="form-label text-muted mb-2">Place Category</label>
                        <select class="form-select" name="place_category" style="width: 25%">
                            <option selected hidden>Place-Category</option>
                            <option value="spot">spot</option>
                            <option value="activity">activity</option>
                            <option value="restaurant">restaurant</option>
                            <option value="hotel">hotel</option>
                        </select>
                        @error('place_category')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                        {{-- name_jp --}}
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name_jp" class="form-label">Name(JP)</label>
                            <input type="name_jp" class="form-control p-2" placeholder="Japanese Name here..." id="name_jp" name="name_jp" value="{{ old('name_jp') }}">
                            @error('name_jp')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- name_en --}}
                        <div class="col">
                            <label for="name_en" class="form-label">Name(EN)</label>
                            <input type="name_en" class="form-control" placeholder="English Name here..." id="name_en" name="name_en" value="{{ old('name_en') }}">
                            
                            @error('name_en')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Area, Prefecture, City --}}
                    <div class="row mb-3"> 
                        <div class="col">
                            <label for="area_id" name="area_id" class="form-label">Area</label>
                            <select class="form-select" id="area_id" name="area_id">
                                    <option selected hidden>Select the area</option>
                                @foreach ($all_areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name_en }}</option>
                                @endforeach
                            </select>

                            @error('area_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="prefecture_id" name="prefecture_id" class="form-label">Prefecture</label>
                            <select class="form-select" id="prefecture_id" name="prefecture_id">
                                    <option selected hidden>Select the prefecture</option>
                                @foreach ($all_prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}">{{ $prefecture->name_en }}</option>
                                @endforeach
                            </select>

                            @error('prefecture_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="city_id" name="city_id" class="form-label">City</label>
                            <select class="form-select" id="city_id" name="city_id">
                                    <option selected hidden>Select the city</option>
                                @foreach ($all_cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name_en }}</option>
                                @endforeach
                            </select>

                            @error('city_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="mb-3">
                        <label for="address" name="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">

                        @error('address')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- url --}}
                    <div class="mb-3">
                        <label for="url" name="url" class="form-label">url</label>
                        <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}">

                        @error('url')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Time --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="opening_time" name="opening_time" class="form-label">opening_time</label>
                            <input type="time" id="opening_time" name="opening_time" class="form-control" value="{{ old('opening_time') }}">
            
                            @error('opening_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="ending_time" name="ending_time" class="form-label">ending_time</label>
                            <input type="time" id="ending_time" name="ending_time" class="form-control" value="{{ old('ending_time') }}">
            
                            @error('ending_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="spend_time" name="spend_time" class="form-label">spend_time</label>
                            <input type="number" id="spend_time" name="spend_time" class="form-control" value="{{ old('spend_time') }}">
            
                            @error('spend_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    {{-- Button --}}
                    <div class="row text-center mt-5 mb-3">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <a href="{{ url('/places') }}" class="btn btn-outline-secondary form-control p-3">Cancel</a>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary p-3 form-control">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection