
<div class="container-plan bg-white shadow p-3 rounded"> 
    <div class="tab-content " id="plan_id-tabContent"> 
        <div class="tab-content " id="plan_id-tabContent"> 
            @foreach($interested_places_groups as $key => $interested_places_group)
                <div class="tab-pane fade show {{ $key > 0 ? '' : 'active' }} }}" id="plan_id_day{{ $key + 1 }}" role="tabpanel" aria-labelledby="plan_id_day{{ $key + 1 }}-tab" tabindex="0">
                    
                    <div class="card-body">
                        @php $nextDestinationTime = null; $i = 0; @endphp
                        @foreach($interested_places_group as $place)
                            <div class="bg-plan p-2 mb-1">
                                <div class="p-2">
                                    @if($loop->first)
                                    <i class="fa-regular fa-clock"></i> Start 9:00
                                    <?php $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', strtotime('9:00')); ?>
                                    @else
                                        <i class="fa-regular fa-clock"></i>
                                        <?php 
                                        echo date('H:i', $nextDestinationTime); 
                                        $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', $nextDestinationTime);
                                        ?>
                                    @endif
                                    
                                    <i class="fa-solid fa-location-dot"></i> <span> {{ $place->name_en }} </span>
                                    
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
                                    {{--  Edit button --}}
                                    <a href="#" class="dropdown-item">
                                        <i class="fa-solid fa-square-pen"></i> Edit
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="float-start">
                                    <i class="fa-solid fa-arrow-down-long"></i>
                                    <i class="fa-solid fa-car"></i>
                                </div>
                                30 min
                            </div>
                            @php  $i++;  @endphp
                            @endforeach
                        </div>
                    </div>
            @endforeach   
        </div>
    </div> 
</div>