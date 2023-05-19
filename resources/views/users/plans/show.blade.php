@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<style>

    .background-container{
      position:relative;
      
      justify-content: center;
      
      
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
        z-index: -1;
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

    .plan-content {
    min-height: 500px;
    max-height: 700px;
    min-width: 160px;
    max-width: 500px;
    background-color: white;
    border: solid 1px black;
    
    
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
    <div class="background-container d-flex align-items-center"></div>
    {{-- <img src="{{ asset('storage\images\plan details back(resized).jpg') }}" alt="top-image" class="top-image"> --}}
    
    <div class="container bg-light shadow p-5 rounded">
      <div class="row">
        <div class="row">
          <div class="col-md-6">
            <h4 class="h4 text-capitalize">#{{ $plan->title }}</h4>
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
              
              {{-- Like button for save the plan --}}
              <div class="col">
                <form action="{{ route('favorite.plan', ['planId' => $plan->id ]) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline-light btn-sm me-2 text-dark">
                    <i class="fa-regular fa-heart" ></i> FAVORITE
                  </button>
                    @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                </form>
              </div>
              
              
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
        
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030689856!2d139.76454987550272!3d35.68123617258717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1683548732190!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </div>
    </div>

        @include('users.plans.contents.recommend')
      
@endsection