<div>
    <div class="shadow p-5 rounded">
        <h4 class="h4 text-capitalize">#Planname</h4>
        <div class="row">
            <div class="col ">
                <ul class="nav nav-pills mb-3" id="plan_id-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plan_id_day1-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day1" type="button" role="tab" aria-controls="plan_id_day1" aria-selected="true">Day 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="plan_id_day2-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day2" type="button" role="tab" aria-controls="plan_id_day2" aria-selected="false">Day 2</button>
                    </li>
                </ul>
                <div class="tab-content" id="plan_id-tabContent">
                    <div class="tab-pane fade show active" id="plan_id_day1" role="tabpanel" aria-labelledby="plan_id_day1-tab" tabindex="0">
                        <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                        <div class="bg-plan p-2">
                            <div class="p-2">
                                <i class="fa-regular fa-cloc  k"></i> ### 9:00
                                <i class="fa-regular fa-location-pin"></i> ### location name here
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <img src="{{ asset('/storage/sample/pexels-satoshi-hirayama-7526797.jpg') }}" class="img-sm" alt="#">
                                </div>
                                <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                            </div>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-car"></i> 30 min
                        </div>
                        <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                        <div class="bg-plan p-2">
                            <div class="p-2">
                                <i class="fa-regular fa-clock"></i> ### 9:00
                                <i class="fa-regular fa-location-pin"></i> ### location name here
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <img src="{{ asset('/storage/sample/pexels-satoshi-hirayama-7526797.jpg') }}" class="img-sm" alt="#">
                                </div>
                                <p class="place-desc px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint similique nemo expedita sequi quasi, possimus sit, ab voluptas, deleniti nihil nesciunt! A illum veniam obcaecati magni, quibusdam dicta accusantium.</p>
                            </div>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-car"></i> 30 min
                        </div>
                    </div>
                    <div class="tab-pane fade" id="plan_id_day2" role="tabpanel" aria-labelledby="plan_id_day2-tab" tabindex="0">
                        <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                        <div class="bg-plan p-2">
                            <div class="p-2">
                                <i class="fa-regular fa-clock"></i> ### 9:00
                                <i class="fa-regular fa-location-pin"></i> ### location name here
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <img src="{{ asset('/storage/sample/pexels-satoshi-hirayama-7526797.jpg') }}" class="img-sm" alt="#">
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
            <div class="col">
                <p>### the map is here</p>
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
</div>
