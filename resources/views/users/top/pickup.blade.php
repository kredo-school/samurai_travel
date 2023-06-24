<div class="">
    @if ($places->isNotEmpty())
        <div class="main-content row">
            <div class="col">
                @if ($places[0]->image)
                    <img src="{{ asset("/storage/sample/{$places[0]->image}") }}" class="img-lg" alt="{{ $places[0]->image }}">
                @else
                    <img src="{{ asset('/images/no-image.png') }}" class="img-lg" alt="no-image.png">
                @endif
            </div>
            <div class="col col-white">
                <h4 class="p-3 pt-5 text-capitalize">{{ $category }}</h4>
                <p class="place-desc px-3">{{ $places[0]->description }}</p>
                <div class="d-flex justify-content-end p-3">
                    <form class="" action="{{ route('placedetails', $places[0]->id) }}" method="get">
                        <button class="btn btn-outline-dark rounded-pill h6">Search More</button>
                    </form>
                </div>
            </div>
            <div class="d-flex mt-1">
                <h6 class="h6">{{ $places[0]->name_en }}</h6>
                <div class="ms-auto d-flex">
                    <i class="fa-solid fa-location-dot"></i>
                    <h6 class="h6">{{ $places[0]->prefecture->name_en }}</h6>
                </div>
            </div>
        </div>
        <div class="mt-5 mb-3 text-center">
            <h5 class="h5">Other Recommendation</h5>
        </div>
        @if ($places->count() > 1)
            <div class="sub-content row">
                @for ($i = 1; $i < $places->count(); $i++)
                    <div class="col-4">
                        @if ($places[$i]->image)
                            <a href="{{ route('placedetails', $places[$i]->id) }}">
                                <img src="{{ asset("/storage/sample/{$places[$i]->image}") }}" class="img-lg" alt="{{ $places[$i]->image }}">
                            </a>
                        @else
                            <img src="{{ asset('/images/no-image.png') }}" class="img-lg" alt="no-image.png">
                        @endif
                        <div class="d-flex mt-1">
                            <h6 class="h6">{{ $places[$i]->name_en }}</h6>
                            <div class="ms-auto d-flex">
                                <i class="fa-solid fa-location-dot"></i>
                                <h6 class="h6">{{ $places[$i]->prefecture->name_en }}</h6>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        @else
            <h5 class="h5 text-center mb-3">Sorry, preparing {{ $category }} now.</h5>
        @endif
    @else
        <h3 class="h3 text-center mb-3">Sorry, preparing {{ $category }} now.</h3>
    @endif
</div>