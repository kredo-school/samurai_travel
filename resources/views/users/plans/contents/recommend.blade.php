{{-- @extends('layouts.app')

@section('title', 'Show Plan Detail') --}}


<style>
    .background-container{
        position:relative; 
        justify-content: center;
    }

    .container-out{
        max-width: 350px;
        max-height: 550px;
        border: 1px solid black;
        border-radius: 50px;
    }

    .container-plan{
        position: relative;
        max-height: 380px;
        overflow:auto;
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
    
    .img-sm{
        width: 100px;
    }

    .btn{
        width: 250px;
    }

</style>

<div class="background-container">
    <img class="back-img" src="{{ asset('storage\images\bg-paper.jpg') }}" alt="">
    <div class="row">
        <div class="my-4">
            <p class="h3 title text-center my-1 py-5">Recommend for you</p>
        </div>
    </div>
    
    <div class="row align-items-center justify-content-center pb-5">
        
        @foreach($recommended_plans as $key=>$recommended)
            <div class="container-out col-3 bg-white shadow rounded mb-4 mx-4 p-1">
                <h4 class="h5 text-capitalize text-center">{{ $recommended->title }}</h4>
                <div class = "bg-light pt-1">
                    <ul class="nav nav-pills mb-3" id="plan_id-tab{{ $key + 1 }}" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active h6" id="plan_id_day1-tab{{ $key + 1 }}" data-bs-toggle="pill" data-bs-target="#plan_id_day{{ $key + 1 }}" type="button" role="tab" aria-controls="plan_id_day{{ $key + 1 }}" aria-selected="true">Day 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link h6" id="plan_id_day2-tab{{ $key + 1 }}" data-bs-toggle="pill" data-bs-target="#plan_id_day{{ $key + 1 }}" type="button" role="tab" aria-controls="plan_id_day{{ $key + 1 }}" aria-selected="false">Day 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link h6" id="plan_id_day3-tab{{ $key + 1 }}" data-bs-toggle="pill" data-bs-target="#plan_id_day{{ $key + 1 }}" type="button" role="tab" aria-controls="plan_id_day{{ $key + 1 }}" aria-selected="false">Day 3</button>
                        </li>    
                    </ul>
                </div>

                    @include('users.plans.contents.recommend-plan', ['recommended' => $recommended ])
                    
                <div class=" d-flex justify-content-center p-3 h6">
                    <form action="{{ route('show.plan', $recommended->id )}}" method="get">
                        @csrf
                        <button class="btn btn-md btn-outline-dark rounded-pill h6" > SEE MORE </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>
