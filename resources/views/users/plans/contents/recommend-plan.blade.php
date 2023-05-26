<div class="row"> 
    <div class="col">                                 
      <div class="container-plan bg-white  p-2 rounded">    
          <div class="my-5">
            <div class="tab-content " id="plan_id-tabContent{{ $key + 1}}"> 
                @foreach($placeForPlanGroups as $key => $placeForPlanGroup )
                  <div class="tab-pane fade show {{ $key > 0 ? '': 'active'}} }}" id="plan_id_day{{ $key + 1 }}" role="tabpanel" aria-labelledby="plan_id_day{{ $key + 1 }}-tab" tabindex="0">
                    <div class="card-body">
                      <?php $nextDestinationTime = null; ?>
                        @foreach($places as $place)
                          @if($place->plans->day == $key + 1)
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2 mb-1">
                                <div class="p-2">
                                  @if($loop->first)
                                    <p><i class="fa-regular fa-clock"></i> Start 9:00 </p>
                                    <?php $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', strtotime('9:00')); ?>
                                  @else
                                    <?php 
                                    echo date('H:i', $nextDestinationTime); 
                                    $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', $nextDestinationTime);
                                    ?>
                                  @endif
                                  
                                    <p><i class="fa-solid fa-location-dot"></i> {{ $place->name_en }}</p>
                                    
                                    <div class="d-flex">
                                        @foreach($place->placeImages as $image)
                                            <div class="px-2">
                                                <img src="{{ asset($image->image) }}" class="img-sm" alt="{{$image->image}}">
                                            </div>
                                            <p class="place-desc px-2">
                                                {{ $image->description }}
                                            </p>      
                                        @endforeach                
                                    </div>
                                </div>
                            </div>
                              <div>
                                <i class="fa-solid fa-car"></i> 30 min
                              </div>
                          @endif
                        @endforeach
                      </div>
                  </div>
              @endforeach 
              
            </div>
          </div>
    </div>
  </div>
</div>

