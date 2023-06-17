@if(!empty($places))
    @foreach ($places->chunk(4) as $chunk)
        <div class="row mb-3">
            @foreach ($chunk as $index => $place)
                <div class="col-md-3">
                    <div class="d-flex mt-1">
                        <a href="{{ route('placedetails', $place) }}">
                            <img src="{{ asset('storage/sample/' . $place->image) }}" alt="{{ $place->image }}" class="place-img img-s img-fluid">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="h6">{{ $place->name_en }}</p>
                        </div>
                        <div class="col">
                            <p class="h6">
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $place->address }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endif
{{-- <div class="row">
    @if(!empty($places))
        @foreach ($places->chunk(2) as $chunk)
            <div class="col-6 mb-3">
                @foreach ($chunk as $index => $place)
                    <div class="d-flex mt-1">
                        <a href="">
                            <img src="{{ asset('storage/sample/' . $place->image) }}" alt="{{ $place->image }}" class="place-img img-s img-fluid">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="h6">{{ $place->name_en }}</span>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="h6"> {{ $place->address }}</span>
                        </div>
                    </div>
                    @if ($index % 2 == 0)
            </div>
            <div class="col-6 mb-3">
                    @endif
                @endforeach
            </div>
        @endforeach
    @endif
</div> --}}


