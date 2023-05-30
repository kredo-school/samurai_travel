@foreach($sub_imgs as $sub_img)
@if ( $sub_img->image_no % 2 != 0)
    {{-- Odd number --}}
    <div class="row d-flex flex-fluid-row p-5">
        {{-- Sub Image --}}
        <div style="width: 55%;">
            {{-- @dd($place->place_images()->first()->place_id) --}}
            <img src="{{asset('/storage/sample/' . $sub_img->image)}}" alt="topimage" class="img-fluid" style="width:100%; height:300px; object-fit: cover;">
        </div>
        <div style="width: 45%;">
            <div class="row my-3 opacity-75">
                <div class="d-flex flex-fluid-row">
                    <div style="width: 70%;">
                        <h1 class="display-2 text-end fw-bold">{{str_pad($sub_img->image_no, 2, '0', STR_PAD_LEFT)}}</h1>
                    </div>
                    <div style="width: 30%;">
                        <h1 class="display-2 text-end fw-bold"><span class="text-end display-6" style="writing-mode: vertical-rl;">和名</span></h1>
                    </div>
                </div>
            </div>    
            <div class="d-flex justify-content-end"><hr style="width: 80px;"></div>
            <p class="pb-5">{{$sub_img->description}}</p>
        </div>
    </div>
    
@else
    {{-- Even number --}}
    <div class="row d-flex flex-fluid-row p-5">
        <div style="width: 45%;">
            <div class="row my-3 opacity-75">
                <div class="d-flex flex-fluid-row">
                    <div style="width: 30%;">
                        <h1 class="display-2 fw-bold"><span class="text-end display-6" style="writing-mode: vertical-rl;">和名</span></h1>
                    </div>
                    <div style="width: 70%;">
                        <h1 class="display-2 fw-bold">{{str_pad($sub_img->image_no, 2, '0', STR_PAD_LEFT)}}</h1>
                    </div>
                </div>
            </div>    
            <div><hr style="width: 80px;"></div>
            <p class="pb-5">{{$sub_img->description}}</p>
        </div>
        {{-- Sub Image --}}
        <div class=" d-flex justify-content-end" style="width: 55%;">
            <img src="{{asset('/storage/sample/' . $sub_img->image)}}" alt="topimage" class="img-fluid" style="width:100%; height:300px; object-fit: cover;">
        </div>
        
    </div>
@endif
@endforeach
