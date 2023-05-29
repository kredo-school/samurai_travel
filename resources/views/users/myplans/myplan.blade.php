@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<style>
    

    .background-container{
      position:relative; 
      justify-content: center;
    }

    .container-plan{
        position: relative;
        background: transparent;
        max-height: 500px;
        overflow: auto;
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
        z-index: -1;
        }
    
    .tab-content{
        height: 500px;
    }   

    .googlemap iframe {
        position: absolute;
        margin: 2rem;
        padding: 2rem;
        top: 0; 
        left: 0; 
        width: 600px; 
        height: 500px;
    }

</style>

    <div class="top-container d-flex align-items-center">
      <img class="back-img" src="{{ asset('storage\images\plan details back(resized).jpg') }}" alt="">
    
    <div class="container bg-light shadow p-5 rounded">
      <div class="row">
        <div class="row">
          <div class="col-md-6">
            <h4 class="h4 text-capitalize"># SUGGESTED PLAN</h4>
            {{-- {{ $plan->title }} --}}
          </div>
          <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills mb-3" id="plan_id-tab" role="tablist">
                  @for($d = 1; $d <= $day; $d++)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $d > 1 ? '' : 'active' }}" id="plan_id_day{{ $d }}-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day{{ $d }}" type="button" role="tab" aria-controls="plan_id_day {{ $d }}" aria-selected="true">Day {{ $d }}</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="plan_id_day2-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day2" type="button" role="tab" aria-controls="plan_id_day2" aria-selected="false">Day 2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="plan_id_day3-tab" data-bs-toggle="pill" data-bs-target="#plan_id_day3" type="button" role="tab" aria-controls="plan_id_day3" aria-selected="false">Day 3</button>
                  </li> -->
                  @endfor
                </ul>
              </div>
          
            <div class="col-md-6 d-flex text-end ">
              {{-- Save button  --}}
              {{-- <div class="col">
                <input type="button" class="btn btn-outline-success btn-sm me-2 text-dark" name="store" value="SAVE">                  
              </div> --}}

              
              
              
              <div class="col">
                  <span># count</span>
              </div>
              
          </div>
        </div> 
      </div>

        <div class="row"> 
          <div class="col-md-6">                                 
                  @include('users.myplans.contents.place')
          </div>
        
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030689856!2d139.76454987550272!3d35.68123617258717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1683548732190!5m2!1sja!2sjp" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </div>
    </div>
  </div>

        
      
@endsection