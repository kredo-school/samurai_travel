<div class="bg-white p-3 rounded-5 border border-dark shadow-sm">
    <div class="my-3">
        <h3>PLAN NAME</h3>
    </div>
    {{-- Day of travel --}}
    <div class="overflow-hidden bg-light p-2 mb-3">
        <div class="row">
            <div class="d-flex flex-fluid-row">
                <div class="me-3">
                    <button class="btn btn-danger px-5 rounded-pill opacity-50" disabled>Day1</button>
                </div>
                <div class="me-3">
                    <button class="btn btn-light px-5 rounded-pill" disabled>Day2</button>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-auto mb-4" style="height: 500px;">
        @if (empty($recommend_places))
            <div class="mb-5">
                <h3 class="text-muted text-center">Comming Soon...</h3>
            </div>
        @else
            @foreach ($recommend_places as $recommend_place)
                {{-- Time, Location, Picture, Description --}}
            <div class="row p-2">
                <div class="d-flex justify-content-center" style="width:10%;">
                    <i class="fa-solid fa-down-long"></i>
                </div>
                <div class="bg-light" style="width: 90%;">
                    <div class="p-3">
                        {{-- Time, Location --}}
                        <div class="row mb-3">
                            <div class="d-flex flex-fluid-row">
                                <div class="me-4">
                                    <h6><i class="fa-regular fa-clock"></i> 00:00</h6>
                                </div>
                                <div class="me-4">
                                    <h6><i class="fa-sharp fa-solid fa-location-dot"></i> {{$recommend_place->name_en}}</h6>
                                </div>
                            </div>
                        </div>

                        {{-- Image, Description --}}
                        <div class="row">
                            <div class="d-flex flex-fluid-row">
                                <div class="me-3" style="height: 50%;">
                                    <a href="{{ route('placedetails',  $recommend_place->id ) }}" class="text-decoration-none text-dark">
                                        <img src="{{asset('/storage/sample/' . $recommend_place->image)}}" alt="{{$recommend_place->name_en}}" class="grid-img img-fluid">
                                    </a>
                                </div>
                                <div class="me-3">
                                    <p>{{$recommend_place->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Transportation --}}
            <div class="row my-2">
                <div class="d-flex flex-fluid-row">
                    <div class="justify-content-center me-3" style="width: 5%;">
                        <h6><i class="fa-solid fa-car"></i></h6>
                    </div>
                    <div style="width: 95%;">
                        <h6>30 min</h6>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
    <div class="row mb-3">
        <div class="d-flex justify-content-center">
            <button class="btn btn-light border-dark rounded-pill px-5" type="button">SEE MORE</button>
        </div>
    </div>
</div>