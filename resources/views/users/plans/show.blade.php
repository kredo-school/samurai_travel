@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<style>

    .background-container{
      position:relative;
      
    }

  

    .container-plan{
        margin: 3rem auto auto auto ;
        padding: auto;
        position:relative;
        background: transparent;
        max-height: 600px;
        overflow: auto;
        }
  
    .back-img1{
        /* margin-top:0;
        width: 100%;
        height:  100%;
        background-position:center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position:absolute; */
        background-image: url('storage\images\plan details back(resized).jpg');
        }
    
    .back-img2{
        margin-top:0;
        width: 100%;
        height:  100%;
        background-position:center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position:absolute;
        }
    .tab-content{
        height: 300px;
    }   

    .googlemap iframe {
        position: absolute;
        margin: 2rem;
        padding: 2rem;
        top: 0; 
        left: 0; 
        width: 300px; 
        height: 500px;
    }
    
    .container-recommend-plan{
        width: 100%;
        position:absolute; 
        background: transparent; 
        text-align: center;
        padding:auto;
        margin:10% auto auto auto ;
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

#map {
    height: 500px; /* The height is 400 pixels */
    width: 100%; /* The width is the width of the web page */
}

    </style>
    <div class="background-container d-flex align-items-center"></div>
    {{-- <img src="{{ asset('storage\images\plan details back(resized).jpg') }}" alt="top-image" class="top-image"> --}}
    
    <div class="container bg-light shadow p-5 rounded">
      <div class="row">
        <div class="row">
          <div class="col-md-6">
            <h4 class="h4 text-capitalize">#Planname</h4>
          </div>
          <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills mb-3" id="plan_id-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plan_id_day1-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day1" type="button" role="tab" aria-controls="plan_id_day1" aria-selected="true">Day 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="plan_id_day2-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day2" type="button" role="tab" aria-controls="plan_id_day2" aria-selected="false">Day 2</button>
                    </li>
                </ul>
              </div>
          
            <div class="col-md-6 d-flex text-end ">
              {{-- Save button  --}}
              {{-- <div class="col">
                <input type="button" class="btn btn-outline-success btn-sm me-2 text-dark" name="store" value="SAVE">                  
              </div> --}}

              {{-- Edit button --}}
              <div class="col">
                  <button class="btn btn-outline-warning btn-sm me-2 text-dark" data-bs-toggle="modal" data-bs-target="#edit-plan-#" title="Edit">
                  <i class="fa-solid fa-pen text-warning"></i> EDIT
                  </button>
              </div>
              
              {{-- Delete button --}}
              <div class ="col">
                  <button class="btn btn-outline-danger btn-sm me-2 text-dark" data-bs-toggle="modal" data-bs-target="#delete-plan-{{$plan->id}}">
                  <i class="fa-solid fa-trash-can text-danger"></i> DELETE
                  </button>
              </div>
              @include('users.plans.contents.modals.delete')
              {{-- Like button --}}
              <div class="col">
                  <a href="{{ route('plans.up')}}" class="text-muted">                  
                  <i class="fa-regular fa-heart" style="font-size: 1.5rem"></i>
              </div>
              </a>
              <div class="col">
                  <span># count</span>
              </div>
              
          </div>
        </div> 
      </div>

      <div class="row"> 
        <div class="col-md-6">                                 
          <div class="container-plan bg-white shadow p-5 m-1 rounded">           
                  @foreach($interested_places as $place)
                    @include('users.plans.contents.place')
                  @endforeach         
          </div>
        </div>
        <div class="col-md-6" id="map"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key={{ config('api.google_map_api_key') }}&callback=initMap" defer>
          </script>
      </div>
      </div>
    </div>

        @include('users.plans.contents.recommend')
      
@endsection