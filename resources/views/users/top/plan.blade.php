<div>
    <div class="shadow p-5 rounded bg-white">
        <h4 class="h4 text-capitalize">#PlanName</h4>
        <div class="row">
            <div class="col ">
                <ul class="nav nav-pills mb-3" id="tab-1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plan-1-1-tab" data-bs-toggle="pill" data-bs-target="#plan-1-1" type="button" role="tab" aria-controls="plan-1-1" aria-selected="true">Day 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="plan-1-2-tab" data-bs-toggle="pill" data-bs-target="#plan-1-2" type="button" role="tab" aria-controls="plan-1-2" aria-selected="false">Day 2</button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col tab-content" id="plan-1-tab-content">
                    {{-- day 1 --}}
                    <div class="tab-pane fade show active" id="plan-1-1" role="tabpanel" aria-labelledby="plan-1-1-tab" tabindex="0">
                        {{-- place 1 --}}
                        <div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-regular fa-location-pin"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        @if (file_exists(asset('/storage/xxx.jpg')))
                                            <img src="{{ asset('/storage/xxx.jpg') }}" class="img-sm" alt="#">
                                        @else
                                            <img src="{{ asset('/images/no-image.png') }}" class="img-sm" alt="#">
                                        @endif
                                    </div>
                                    <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                        {{-- place 2 --}}
                        <div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-regular fa-location-pin"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        @if (file_exists(asset('/storage/xxx.jpg')))
                                            <img src="{{ asset('/storage/xxx.jpg') }}" class="img-sm" alt="#">
                                        @else
                                            <img src="{{ asset('/images/no-image.png') }}" class="img-sm" alt="#">
                                        @endif
                                    </div>
                                    <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                        {{-- place 3 --}}
                        <div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-regular fa-location-pin"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        @if (file_exists(asset('/storage/xxx.jpg')))
                                            <img src="{{ asset('/storage/xxx.jpg') }}" class="img-sm" alt="#">
                                        @else
                                            <img src="{{ asset('/images/no-image.png') }}" class="img-sm" alt="#">
                                        @endif
                                    </div>
                                    <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                    </div>
                    {{-- day 2 --}}
                    {{-- <div class="tab-pane fade" id="plan-{plans.id}-{plan_details.day}" role="tabpanel" aria-labelledby="plan-{plans.id}-{plan_details.id}-tab" tabindex="0"> --}}
                    <div class="tab-pane fade" id="plan-1-2" role="tabpanel" aria-labelledby="plan-1-2-tab" tabindex="0">
                        {{-- place 1 --}}
                        <div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-regular fa-location-pin"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        @if (file_exists(asset('/storage/xxx.jpg')))
                                            <img src="{{ asset('/storage/xxx.jpg') }}" class="img-sm" alt="#">
                                        @else
                                            <img src="{{ asset('/images/no-image.png') }}" class="img-sm" alt="#">
                                        @endif
                                    </div>
                                    <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                        {{-- place 2 --}}
                        <div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-regular fa-location-pin"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        @if (file_exists(asset('/storage/xxx.jpg')))
                                            <img src="{{ asset('/storage/xxx.jpg') }}" class="img-sm" alt="#">
                                        @else
                                            <img src="{{ asset('/images/no-image.png') }}" class="img-sm" alt="#">
                                        @endif
                                    </div>
                                    <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="map"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key={{ config('api.google_map_api_key') }}&callback=initMap" defer>
                </script>
            </div>
        </div>
    </div>
    <form class="" action="#" method="post">
        <div class="d-flex text-center mt-4 row">
            <div class="col">
                <button class="btn btn-light btn-outline-dark rounded-pill h6">Let's create your plan!</button>
            </div>
            <div class="col">
                <button class="btn btn-light btn-outline-dark rounded-pill h6">How to create?</button>
            </div>
        </div>
    </form>
    <script>
        const gm_plan = {!! json_encode($gm_plan) !!};
    </script>
</div>
