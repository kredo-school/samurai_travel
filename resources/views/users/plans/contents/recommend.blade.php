{{-- @extends('layouts.app')

@section('title', 'Show Plan Detail') --}}


<style>
    .background-container{
        position:relative; 
        justify-content: center;
    }

    .container-out{
        max-width: 330px;
        max-height: 550px;
        border: 1px solid black;
        border-radius: 25px;
    }

    .container-plan{
        position: relative;
        max-height: 380px;
        overflow-y: scroll; 
    }

    .container-plan::-webkit-scrollbar{
        display:none;
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
    
    .img-xs{
        width: 100px;
    }

    .btn{
        width: 250px;
    }

</style>

<div class="background-container recommended ">
    <img class="back-img" src="{{ asset('images\bg-image.jpg') }}" alt="">
    <div class="row">
        <div class="my-4">
            <p class="h3 title text-center my-1 py-5">Recommend for you</p>
        </div>
    </div>
    
    <div class="row align-items-center justify-content-center pb-5">
        {{-- display 3 plans registered as Admin User --}}

        {{-- @include('users.plans.contents.recommend-plan', ['recommended' => $recommended ]) --}}
        @include('users.plans.contents.recommend-plan')
                    
    </div>
</div>

