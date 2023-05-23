
<div class="tab-content " id="plan_id-tabContent"> 
    @foreach($interested_places_groups as $key => $interested_places_group)
        <div class="tab-pane fade show {{ $key > 0 ? '' : 'active' }} }}" id="plan_id_day{{ $key + 1 }}" role="tabpanel" aria-labelledby="plan_id_day{{ $key + 1 }}-tab" tabindex="0">
            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
            <div class="card-body">
                @foreach($interested_places_group as $place)
                    <div class="bg-plan p-2 mb-1">
                        <div class="p-2">
                            <i class="fa-regular fa-clock"></i> ### 9:00
                            <i class="fa-solid fa-location-dot"></i> <p> {{ $place->name_en }} </p>
                            
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
                @endforeach
            </div>
            
        </div>
    @endforeach   
</div>
                        {{-- ジャンル名とキーワード名を表示させるときは次のコードを使用 --}}
                        {{-- <h3>Genre</h3> --}}
                        {{-- <p>
                            {{ $place->keywords->first()->genre->name }}
                        </p>
                        
                        <h3>Keyword</h3>
                        <p>
                            {{ $place->keywords->first()->name }}
                        </p> --}}