
<div class="tab-content p-auto" id="plan_id-tabContent"> 
    <div class="tab-pane fade show active " id="plan_id_day1" role="tabpanel" aria-labelledby="plan_id_day1-tab" tabindex="0">
        <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
        <div class="container-place p-0">
            <div class="card-body">
                <div class="bg-plan p-2">
                    <div class="p-2">
                        <i class="fa-regular fa-clock"></i> ### 9:00
                        <i class="fa-solid fa-location-dot"></i> <p> {{ $place->name_en}} </p>
                    </div>

                    <div class="d-flex">
                        @foreach($place->placeImages as $image)
                            <div class="px-2">
                                <img src="{{ asset($image->image) }}" class="img-sm" alt="">
                            </div>
                            <p class="place-desc px-2">
                                {{ $image->description }}
                            </p>                    
                        @endforeach                
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-car"></i> 30 min
                </div>
            </div>
        </div> 
    </div>
</div>
