@extends('layouts.admin')

@section('title','Place Edit')

@section('content')
<div class="container justify-content-center shadow-sm">
    <div class="row">
        <div class="card mx-auto col-9">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Place</h1>
            <div class="card-body mx-5">
                    {{-- Store the sections --}}
                <form action="{{ route('admin.place.update', $place->id) }}" method="post" enctype="multipart/form-data" id="edit-place-form">
                    @csrf
                    @method('POST')
                    {{-- Place_Category --}}
                    <div class="form-group mb-3">
                        <label for="place_category" class="form-label text-muted mb-2">Place Category</label>
                        <select class="form-select" name="place_category" style="width: 25%">
                            <option selected hidden>{{ $place->place_category }}</option>
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
                            <input type="name_jp" class="form-control p-2" placeholder="Japanese Name here..." id="name_jp" name="name_jp" value="{{ old('name_jp',$place->name_jp) }}">
                            @error('name_jp')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- name_en --}}
                        <div class="col">
                            <label for="name_en" class="form-label">Name(EN)</label>
                            <input type="name_en" class="form-control" placeholder="English Name here..." id="name_en" name="name_en" value="{{ old('name_en', $place->name_en) }}">
                            
                            @error('name_en')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Image & Description --}}
                    <div class="form-group mb-3">
                        <label for="image" class="form-label text-muted mb-2">Image</label>
                        <img src="{{ asset('storage/sample/' . $place->image) }}" alt="{{ $place->image }}" class="image-fluid w-100">
                        <input type="file" name="image" id="image" class="form-control mt-3" style="width: 50%" aria-describedby="image-info">
                        <div class="form-text" id="image-info">
                            The acceptable formats are jpeg, jpg, png, and gif only. <br>
                            Max file size is 1048kb.
                        </div>

                        @error('image')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="description" rows="1" class="form-control" placeholder="Write about the image">{{ old('description', $place->description) }}</textarea>

                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Area, Prefecture, City --}}
                    <div class="row mb-3"> 
                        <div class="col">
                            <label for="area_id" name="area_id" class="form-label">Area</label>
                            <select class="form-select" id="area_id" name="area_id">
                                @foreach ($all_areas as $area)
                                    <option {{ $area->id === $place->area_id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->name_en }}</option>
                                @endforeach
                            </select>

                            @error('area_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="prefecture_id" name="prefecture_id" class="form-label">Prefecture</label>
                            <select class="form-select" id="prefecture_id" name="prefecture_id">
                                @foreach ($all_prefectures as $prefecture)
                                <option {{ $prefecture->id === $place->prefecture_id ? 'selected' : '' }} value="{{ $prefecture->id }}">{{ $prefecture->name_en }}</option>
                                @endforeach
                            </select>

                            @error('prefecture_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="city_id" name="city_id" class="form-label">City</label>
                            <select class="form-select" id="city_id" name="city_id">
                                @foreach ($all_cities as $city)
                                    <option {{ $city->id === $place->city_id ? 'selected' : '' }}  selected value="{{ $city->id }}">{{ $city->name_en }}</option>    
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
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $place->address) }}">

                        @error('address')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- url --}}
                    <div class="mb-3">
                        <label for="url" name="url" class="form-label">url</label>
                        <input type="text" id="url" name="url" class="form-control" value="{{ old('url', $place->url) }}">

                        @error('url')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Time --}}
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="opening_time" name="opening_time" class="form-label">opening_time</label>
                            <input type="number" id="opening_time" name="opening_time" class="form-control" value="{{ old( 'opening_time', $place->opening_time) }}">
                            <select class="form-select" name="open_ampm" style="width: 50%">
                                <option selected>{{ $place->open_ampm }}</option>
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>

                            @error('opening_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="ending_time" name="ending_time" class="form-label">ending_time</label>
                            <input type="number" id="ending_time" name="ending_time" class="form-control" value="{{ old('ending_time', $place->ending_time) }}">
                            <select class="form-select" name="end_ampm" style="width: 50%">
                                <option selected>{{ $place->end_ampm }}</option>
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                            @error('ending_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="spend_time" name="spend_time" class="form-label">spend_time</label>
                            <input type="number" id="spend_time" name="spend_time" class="form-control" value="{{ old('spend_time', $place->spend_time) }}">
            
                            @error('spend_time')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    {{-- Button --}}
                    <div class="row text-center mt-5 mb-3">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <a href="{{ url('admin/places') }}" class="btn btn-outline-secondary form-control p-3">Cancel</a>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-warning p-3 form-control">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var selectPrefectures = $("select#prefecture_id");
        var selectCities = $("select#city_id");
        // selectPrefectures.empty();
        // selectCities.empty();

        $('select#area_id').on('change keyup', function(){
            selectPrefectures.empty();
            selectCities.empty();

            // Create an <option> element
            var option = $("<option></option>");
            option.val('');
            option.text('Select the prefecture');
            
            // Append the option to the select element
            selectPrefectures.append(option);


            $.ajax({
                type: 'POST',
                url: '{{ route("admin.ajax.getPrefecturesByArea") }}',
                data: $('#edit-place-form').serialize(),
                dataType: 'json',
                success: function(jsonData) {

                    // Iterate over the JSON data
                    $.each(jsonData, function(index, item) {
                        // Create an <option> element
                        var option = $("<option></option>");
                        // Set the value and text of the option
                        option.val(item.id);
                        option.text(item.name_en);
                        // Append the option to the select element
                        selectPrefectures.append(option);
                    });
                },
                error: function(xhr) {

                }
            });
        });

        $('select#prefecture_id').on('change keyup', function(){
            selectCities.empty();

            // Create an <option> element
            var option = $("<option></option>");
            option.val('');
            option.text('Select the city');
            // Append the option to the select element
            selectCities.append(option);

            $.ajax({
                type: 'POST',
                url: '{{ route("admin.ajax.getCitiesByPrefecture") }}',
                data: $('#edit-place-form').serialize(),
                dataType: 'json',
                success: function(jsonData) {

                    // Iterate over the JSON data
                    $.each(jsonData, function(index, item) {
                        // Create an <option> element
                        var option = $("<option></option>");
                        // Set the value and text of the option
                        option.val(item.id);
                        option.text(item.name_en);
                        // Append the option to the select element
                        selectCities.append(option);
                    });
                },
                error: function(xhr) {

                }
            });
        });

    });

</script>
@endsection