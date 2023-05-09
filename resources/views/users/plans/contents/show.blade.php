@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<style>
    .container{
        margin: 3rem auto auto auto ;
        padding: auto;
        position:relative;
        background: transparent;
        }

    .back-img{
        margin-top:0;
        width: 100%;
        height:  100%;
        background-position:center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position:absolute;
        }

    .card{
        margin-right:0;
        margin-left:0;
    }
    .googlemap {
        position: relative; 
        padding-bottom: 100%; 
        height: 0;
        overflow: hidden;
    }
    .googlemap iframe {
        position: absolute;
        margin: 2rem;
        padding: 2rem;
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%;
    }

    /* Tomo-san 分 */
    @charset "UTF-8";
.top-image {
  width: 100%;
  height: 100%;
}

.fa-arrow-right {
  font-size: 120%;
}

.top {
  position: relative;
}
.top .top-nav {
  position: absolute;
  left: 50%;
  bottom: 20px;
  transform: translate(-50%);
}
.top .top-nav .nav-box {
  width: 250px;
  height: 100px;
  background: rgba(255, 215, 112, 0.1);
}

.bg-plan {
  background-color: #F3F3F3;
}

/* タブの色変更 */
.nav-pills .nav-link.active {
  background-color: #DAA4AA;
  color: black;
}

/* タブの文字色変更 */
.nav-pills .nav-link {
  color: black;
  font-weight: bold;
}

/*　仮image　*/
.img-sm {
  width: 200px;
  height: auto;
  -o-object-fit: contain;
     object-fit: contain;
  background: #F3F3F3;
}

.img-lg {
  width: 100%;
  height: auto;
  -o-object-fit: contain;
     object-fit: contain;
  background: #F3F3F3;
}

.img-howto {
  width: 100%;
  height: auto;
  border-radius: 50%;
}

.place-desc {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 6;
}

.title {
  display: flex;
  align-items: center;
  justify-content: center;
}

.title:before, .title:after {
  border-top: 1px solid;
  content: "";
  width: 3em;
}

.title:before {
  margin-right: 1em;
}

.title:after {
  margin-left: 1em;
}


    </style>

    <img class="back-img" src="{{ asset('storage\images\plan details back(resized).jpg') }}" alt="">
    
    <div>
        <div class="container bg-white shadow p-5 rounded">
            <h4 class="h4 text-capitalize">#Planname</h4>
            <div class="row">
                <div class="col">
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
                                    <i class="fa-solid fa-location-dot"></i> ### location name here
                                    @if (isset( $place_favorite->place->name_en )) <p>{{ $placefavorite->place->name_en }}</p>
                                    @endif
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        <img src="{{ asset('storage\images\autumnal-leaves-g9dd855025_1920.jpg') }}" class="img-sm" alt="#">
                                    </div>
                                    <p class="place-desc px-2">description</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                            <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-2">
                                <div class="p-2">
                                    <i class="fa-regular fa-clock"></i> ### 9:00
                                    <i class="fa-solid fa-location-dot"></i> ### location name here
                                </div>
                                <div class="d-flex">
                                    <div class="px-2">
                                        <img src="{{ asset('storage\images\japan-g262fdae5b_1920.jpg') }}" class="img-sm" alt="#">
                                    </div>
                                    <p class="place-desc px-2">description</p>
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
                                        <img src="{{ asset('storage\images\sushi-balls-5878894_1920.jpg') }}" class="img-sm" alt="#">
                                    </div>
                                    <p class="place-desc px-2">description</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-car"></i> 30 min
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-end mt-1 mb-4 row">
                        {{-- Edit button --}}
                        <div class="col-5"></div>
                        <div class="col">
                            <button class="btn btn-outline-warning btn-sm me-2 text-dark" data-bs-toggle="modal" data-bs-target="#edit-genre-#" title="Edit">
                            <i class="fa-solid fa-pen text-warning"></i> EDIT
                            </button>
                        </div>
                        
                        {{-- Delete button --}}
                        <div class ="col-auto  ">
                            <button class="btn btn-outline-danger btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#delete-genre-#" title="Delete">
                            <i class="fa-solid fa-trash-can text-danger"></i> DELETE
                            </button>
                        </div>
                        {{-- Like button --}}
                        <div class="col-auto">
                            {{-- @if ($place->isLiked())
                                <form action="#" method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-sm shadow-none p-0">
                                    <i class="fa-solid fa-heart text-danger" style="font-size: 1.5rem"></i></button>
                                </form>
                            @else
                                <form action="#" method="post">
                            @csrf
                                <button type="submit" class="btn btn-sm shadow-none p-0">
                                    <i class="fa-regular fa-heart" style="font-size: 1.5rem"></i></button>
                                </form>
                            @endif  --}}
                            <i class="fa-regular fa-heart" style="font-size: 1.5rem"></i>
                        </div>
                        <div class="col-auto">
                            <span># count</span>
                        </div>
                    </div>
                    <div>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030689856!2d139.76454987550272!3d35.68123617258717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1683548732190!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection