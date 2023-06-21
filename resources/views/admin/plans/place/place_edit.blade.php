@extends('layouts.app')

@section('title' , 'Admin: Place Search')

@section('content')
<div class="container my-5">
    {{-- @foreach($plan_details as  $detail)
    <form action="{{ route('planDetail.edit', $plan_details )}}" method="post">
    @endforeach --}}
        {{-- @csrf --}}
    <form action="{{ route('search')}}" method="get">
        
    <div class="row gx-2 mb-4">
        <div class="col-3"><h3>Place Search</h3></div>
        <div class ="col">
            <label for="place_category" class="form-label text-muted mb-2">PLACE DIV</label>
            <select class="form-select" name = "place_category" id="place_category">
                <option selected>---</option>
                <option value="hotel">Hotel</option>
                <option value="restaurant">Restaulant</option>
                <option value="activity">Activity</option>
                <option value="spot">Spot</option>
            </select>
        </div>
        <div class ="col">
            <label for="name_en" class="form-label text-muted mb-2">Name EN</label>
            <select class="form-select" name = "name_en" id="name_en">
                <option selected>---</option>
                    @foreach($all_places_options as $place)
                <option value="{{ $place->name_en }}">{{ $place->name_en }}</option>
                    @endforeach
            </select>
        </div>
        <div class ="col">
            <label for="area-label" class="form-label text-muted mb-2">Area</label>
            <select class="form-select area-tag" name = "area" id="area_options">
                <option selected>---</option>
                @foreach($all_areas as $area)
                <option value="{{ $area->id }}" class="area-tag" name="area" id="area_id">
                    <span class="area-tag-text">{{ $area->name_en }}</span>
                @endforeach                
            </select>
        </div>
        <div class ="col">
            <label for="prefecture" class="form-label text-muted mb-2">Prefecture</label>
            <select class="form-select prefecture-tag" name = "prefecture" id="prefecture_options" >
                <option selected>---</option>
                @foreach($all_prefectures as $prefecture)
                <option value="{{ $prefecture->id }}" class="prefecture-tag"  name="prefecture" id="prefecture-id" area-id="{{ $prefecture->area_id }}" class="prefecture-tag" >
                    <span class="area-tag-text">{{ $prefecture->name_en }}</span>
                </option>
                @endforeach  
            </select>
        </div>
        <div class ="col">
            <label for="city" class="form-label text-muted mb-2">City</label>
            <select class="form-select city-tag" name = "city" id="city_options">
                <option selected>---</option>
                @foreach($all_cities as $city)
                <option value="{{ $city->id }}" class="city-tag" name="city" id="city-id" prefecture-id="{{ $city->prefecture_id }}"  >
                    <span class="area-tag-text">{{ $city->name_en }}</span>
                </option>
                @endforeach 
            </select>
        </div>
        <div class="col pt-4">
                <button type="submit"  name="search" class="btn btn-outline-secondary text-buttom"><i class="fa-solid fa-magnifying-glass"></i>
                </button>
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
                <tr place-category='{{$place->place_category}}' place-name_en='{{$place->place_en}}' place-area='{{$place->area}}' place-prefecture='{{$place->prefecture}}' place-city='{{$place->city}}'>
                    <td class ="text-start">{{ $place->id }}</td>
                    <td class="text-start">{{ $place->place_category }}</td>
                    <td class="text-start">{{ $place->name_en }}</td>
                    <td class="text-start">{{ $place->name_jp }}</td>
                    <td>{{ $place->created_at }}</td>
                    <td>{{ $place->updated_at }}</td>
                    <td>
                        {{-- check button --}}
                        <a href="{{ route('planDetail.edit', [$plan_detail_id, $place->id]) }}">
                            <span class ="btn btn-sm ms-2"><i class="fa-regular fa-square-check"></i>
                            </span>
                        </a>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $all_places->links() }} --}}
</div>

<script>

    //Use this to get the prefecture
    document.getElementById('area_options').addEventListener('change', function() 
    {
        const area_id = this.value;
        const options = document.getElementById('prefecture_options').options;

        for (let i = 0; i < options.length; i++)
        {
            //Get attribute and match it to area_id
            if (options[i].getAttribute('area-id') != area_id)
                options[i].style.display = 'none';
            else
                options[i].style.display = 'block';
        }
    });

    //Use this to get the city
    document.getElementById('prefecture_options').addEventListener('change', function() 
    {
        const prefecture_id = this.value;
        const options = document.getElementById('city_options').options;

        for (let i = 0; i < options.length; i++)
        {
            //Get attribute and match it to area_id
            if (options[i].getAttribute('prefecture-id') != prefecture_id)
                options[i].style.display = 'none';
            else
                options[i].style.display = 'block';
        }
    });

    function search()
    {
        const data = document.getElementById('table-id');
        const place = document.getElementById('place_category').value;
        const name = document.getElementById('name_en').value;
        const area = document.getElementById('area_id').value;
        const prefecture = document.getElementById('prefecture_options').value;
        const city = document.getElementById('city_options').value;

        console.log(place, name, area, prefecture, city);

        for (let row of data.rows) 
        {
            if (row.getAttribute('place-category') != place && row.getAttribute('place-name_en') != name 
                && row.getAttribute('place-area') != area && row.getAttribute('place-prefecture') != prefecture 
                && row.getAttribute('place-city') != city)
            {
                row.style.display = 'none';
            }
            else
                row.style.display = 'block';
        }

        console.log(data.rows[0].getAttribute('place-category'));
    }

</script>

@endsection