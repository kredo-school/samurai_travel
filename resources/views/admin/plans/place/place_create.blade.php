@extends('layouts.app')

@section('title' , 'Admin: Place Search')

@section('content')
<div class="container my-5">
    <form action="{{ route('planDetail.create')}}" method="post">
        @csrf
        
    <div class="row gx-2 mb-4">
        <div class="col-3"><h3>Place Search</h3></div>
        <div class ="col">
            <label for="place_div" class="form-label text-muted mb-2">PLACE DIV</label>
            <select class="form-select" name = "place_div" aria-label="Default select example">
                <option selected>---</option>
                <option value="hotel">Hotel</option>
                <option value="restaurant">Restaulant</option>
                <option value="activity">Activity</option>
                <option value="spot">Spot</option>
            </select>
        </div>
        <div class ="col">
            <label for="name_en" class="form-label text-muted mb-2">Name EN</label>
            <select class="form-select" name = "place_div" aria-label="Default select example">
                <option selected>---</option>
                @foreach($all_places as $place)
                <option value="{{ $place->id }}">{{ $place->name_en }}</option>
                @endforeach
            </select>
        </div>
        <div class ="col">
            <label for="area-label" class="form-label text-muted mb-2">Area</label>
            <select class="form-select area-tag" name = "area[]" id="area_id">
                <option selected>---</option>
                @foreach($all_area as $area)
                    <option value="{{ $area->id }}">
                        {{-- @if(in_array($area->id, $selected_areas)) selected @endif>{{ $area->name_en }} --}}
                    </option>
                @endforeach                
            </select>
        </div>
        <div class ="col">
            <label for="prefecture" class="form-label text-muted mb-2">Prefecture</label>
            <select class="form-select prefecture-tag" name = "prefecture[]" >
                <option selected>---</option>
                @foreach($all_prefecture as $prefecture)
                    <option value="{{ $prefecture->id }}">
                        {{-- @if(in_array($prefecture->id, $selected_prefectures)) selected @endif>{{ $prefecture->name_en }}{{ $prefecture->name_en }} --}}
                    </option>
                @endforeach  
            </select>
        </div>
        <div class ="col">
            <label for="city" class="form-label text-muted mb-2">City</label>
            <select class="form-select city-tag" name = "city[] ">
                <option selected>---</option>
                @foreach($all_city as $city)
                    <option value="{{ $city->id }}">
                        {{-- @if(in_array($city->id, $cities)) selected @endif>{{ $city->name_en }}{{ $city->name_en }} --}}
                    </option>
                @endforeach 
            </select>
        </div>
        <div class="col pt-4">
            <a href="{{ route('search.place')}}">
                <span type="submit"  class="btn btn-outline-secondary text-buttom"><i class="fa-solid fa-magnifying-glass"></i></span>
            </a>
        </div>
        <div class="col pt-4">
        <button type="submit" class="btn btn-primary text-buttom">Select this place</button>
        </div>
        {{-- Error --}}
        @error('title')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    
    </form>
</div>

    <table class="table table-hover align-middle bg-white border text-secondary">
        <thead class="table-success text-secondary small">
            <tr>
                <th>#</th>
                <th>Place DIV</th>
                <th>NAME EN</th>
                <th>NAME JP</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>  
            </tr>
        </thead>
        <tbody> 
            @foreach($all_places as $place)
                <tr>
                    <td class ="text-start">{{ $place->id }}</td>
                    <td class="text-start">{{ $place->place_category }}</td>
                    <td class="text-start">{{ $place->name_en }}</td>
                    <td class="text-start">{{ $place->name_jp }}</td>
                    <td>{{ $place->created_at }}</td>
                    <td>{{ $place->updated_at }}</td>
                    <td>
                        {{-- check button --}}
                        <a href="{{ route('planDetail.create',['id' => $place->id ])  }}">
                            <span class ="btn btn-outline-dark btn-sm ms-2"><i class="fa-regular fa-square-check"></i>
                            </span>
                        </a>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
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
</script>

@endsection