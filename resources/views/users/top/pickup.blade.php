@if ($category == 'hotel')
    <div class="">
        <div class="main-content row">
            <div class="col">
                @php dd( $sub_hotels )@endphp
                @if ( file_exists(asset('/storage/sample/' . $top_hotel->image)))
                    <img src="{{asset('/storage/sample/' . $top_hotel->image)}}" class="img-lg" alt="#">
                @else
                    <img src="{{ asset('/storage/sample/' . $top_hotel->image) }}" class="img-lg" alt="#">
                @endif
            </div>
            <div class="col col-white">
                <h4 class="p-3 pt-5 text-capitalize">{{ $category }}</h4>
                <p class="place-desc px-3">{{$top_hotel->description}}</p>
                <div class="d-flex justify-content-end p-3">
                    <form class="" action="#" method="">
                        <button class="btn btn-outline-dark rounded-pill h6">Search More</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5 mb-3 text-center">
            <h5 class="h5">Other Recommendation</h5>
        </div>
        <div class="sub-content row">
            <div class="col-4">
                @if (file_exists(asset('/storage/xxx.jpg')))
                    <img src="{{ asset('/storage/xxx.jpg') }}" class="img-lg" alt="#">
                @else
                    <img src="{{ asset('/images/no-image.png') }}" class="img-lg" alt="#">
                @endif
                <div class="d-flex mt-1">
                    <h6 class="h6"></h6>
                    <div class="ms-auto d-flex">
                        <i class="fa-regular fa-location-pin"></i>
                        <h6 class="h6"></h6>
                    </div>
                </div>
            </div>            
            <div class="col-4">
                @if (file_exists(asset('/storage/xxx.jpg')))
                    <img src="{{ asset('/storage/xxx.jpg') }}" class="img-lg" alt="#">
                @else
                    <img src="{{ asset('/images/no-image.png') }}" class="img-lg" alt="#">
                @endif
                <div class="d-flex mt-1">
                    <h6 class="h6"></h6>
                    <div class="ms-auto d-flex">
                        <i class="fa-regular fa-location-pin"></i>
                        <h6 class="h6"> #location</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                @if (file_exists(asset('/storage/xxx.jpg')))
                    <img src="{{ asset('/storage/xxx.jpg') }}" class="img-lg" alt="#">
                @else
                    <img src="{{ asset('/images/no-image.png') }}" class="img-lg" alt="#">
                @endif
                <div class="d-flex mt-1">
                    <h6 class="h6"></h6>
                    <div class="ms-auto d-flex">
                        <i class="fa-regular fa-location-pin"></i>
                        <h6 class="h6"> #location</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif($category == 'restaurant')
@elseif($category == 'activity')
@else
@endif
