
<div class="container bg-light shadow p-4 mt-2 rounded">
    <div class="row">
        <div class="row">
            <div class="col-md-6">
                <div class="h4 text-capitalize">{{ $plans->title }}</div>
                
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <ul class="nav nav-pills mb-3" id="plan_id-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plan_id_day1-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day1" type="button" role="tab" aria-controls="plan_id_day1" aria-selected="false">Day 1</button>
                    </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="plan_id_day2-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day2" type="button" role="tab" aria-controls="plan_id_day2" aria-selected="false">Day 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="plan_id_day3-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day3" type="button" role="tab" aria-controls="plan_id_day3" aria-selected="false">Day 3</button>
                    </li>
                    </ul>
                </div>

                <div class="col-md-6 d-flex text-center">
                    <div class="col-6"></div>
                    {{-- Like button for saving as favorite plan  --}}
                    <div class="col-auto">
                        @if($plans->isFavorited())
                            <form action="{{ route('destroy.plan',  $plans->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                            <i class="fa-solid fa-heart text-danger" style="font-size: 1.5rem"></i></button>
                            </form>
                        @else
                            <form action="{{ route('store.plan',  $plans->id ) }}" method="post">
                                @csrf<button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart" style="font-size: 1.5rem"></i></button>
                            </form>
                        @endif
                        
                    </div>
                
                    {{-- Number of like --}}
                    <div class="col-auto h5">
                        <span>{{ $plans->favorites->count() }}</span>
                    </div>
                </div>
            </div> 
        </div>

    <div class="row"> 
    <div class="col-md-6">                                 
        <div class="plan-container bg-white shadow p-3 rounded" >    
            <div class="my-2">
                <div class="tab-content " id="plan_id-tabContent"> 
                @foreach($placeForPlanGroups as $key => $placeForPlanGroup )
                    <div class="tab-pane fade show {{ $key > 0 ? '': 'active'}} }}" id="plan_id_day{{ $key + 1 }}" role="tabpanel" aria-labelledby="plan_id_day{{ $key + 1 }}-tab" tabindex="0">
                        <div class="card-body">
                            @php $nextDestinationTime = null; $i = 0; @endphp
                            @foreach($places as $place)
                            @if($place->plan->day == $key + 1)
                                
                                <div class="bg-plan p-2 mb-1">
                                    <div class="p-2">
                                        @if($i == 0)
                                        <p><i class="fa-regular fa-clock"></i>Start 9:00</p>
                                        <?php $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', strtotime('9:00')); ?>
                                        @else
                                        <i class="fa-regular fa-clock"></i>
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
                                    <div class="float-start">
                                        <i class="fa-solid fa-arrow-down-long"></i>
                                        <i class="fa-solid fa-car"></i>
                                    </div> 30 min
                                </div>
                                    @php  $i++;  @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach  
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030689856!2d139.76454987550272!3d35.68123617258717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1683548732190!5m2!1sja!2sjp" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    </div>
</div>