{{-- Delete Modal --}}

<div class="modal fade" id="delete-plan-{{$plan->id}}"> 
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Plan
                </h3>
            </div>
            <div class="modal-body">
                <p class="text-start">Are you sure you want to delete this plan?</p>
                <p class="text-start">#{{ $plan->title }}</p>
                <div class="tab-content " id="plan_id-tabContent"> 
                    <div class="tab-pane fade show active " id="plan_id_day1" role="tabpanel" aria-labelledby="plan_id_day1-tab" tabindex="0">
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="card-body">
                                <div class="bg-plan p-2">
                                    <div class="p-2">
                                        <i class="fa-regular fa-clock"></i> ### 9:00
                                        <i class="fa-solid fa-location-dot"></i> <p> {{ $place->name_en}} </p>
                                        {{-- <h3>Genre</h3> --}}
                                        {{-- <p>
                                            {{ $place->keywords->first()->genre->name }}
                                        </p>
                                        
                                        <h3>Keyword</h3>
                                        <p>
                                            {{ $place->keywords->first()->name }}
                                        </p> --}}
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

            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('plans.destroy', $plan->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>