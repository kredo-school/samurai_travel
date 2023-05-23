<div class="background-container">
    <img class="back-img2" src="{{ asset('storage\images\background.png') }}" alt="">
    <div class="row">
        <div class="my-5">
            <h3 class="h3 title text-center my-3 py-5">Recommend for you</h3>
        </div>
    </div>
    
    <div class="row align-items-center ">
        <div class="col shadow rounded mb-4 mx-4 p-4 plan-content">
            {{-- Plan No.1 that registered as recommend plan --}}
            <ul class="nav nav-pills mb-3" id="plan_id-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="plan_id_day1-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day1" type="button" role="tab" aria-controls="plan_id_day1" aria-selected="true">Day 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plan_id_day2-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day2" type="button" role="tab" aria-controls="plan_id_day2" aria-selected="false">Day 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plan_id_day3-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day3" type="button" role="tab" aria-controls="plan_id_day3" aria-selected="false">Day 3</button>
                </li>    
            </ul>
            
            <div class="container-plan bg-white shadow p-5 m-1 rounded"> 
                {{-- @foreach($adminPlans as $adminPlan)
                    @foreach($adminPlan->planDetails as $planDetail)
                        <div class="tab-content " id="plan_id-tabContent"> 
                        <div class="tab-pane fade show active " id="plan_id_day1" role="tabpanel" aria-labelledby="plan_id_day1-tab" tabindex="0">
                                <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                                <div class="card-body">
                                    <div class="bg-plan p-2">
                                        <div class="p-2">
                                            <i class="fa-regular fa-clock"></i> ### 9:00
                                            <i class="fa-solid fa-location-dot"></i> <p> {{ $place->name_en}} </p>
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
                    @endforeach 
                 @endforeach  --}}
            </div> 
        </div>
       
        <div class="col shadow rounded mb-4 mx-4 p-4 plan-content">
            {{-- Plan No.2 that registered as recommend plan --}}
            <h5 class="text-center"> Recommended plan #2 </h5>
        </div>
        
        <div class="col shadow rounded mb-4 mx-4 p-4 plan-content">
            {{-- Plan No.3 that registered as recommend plan --}}
            <h5 class="text-center"> Recommended plan #3 </h5>
        </div>
        
    </div>

</div>