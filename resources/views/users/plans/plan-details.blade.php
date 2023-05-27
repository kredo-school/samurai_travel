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
        overflow:auto;
        }

    .back-img{
        margin-top:0;
        width: 100%;
        height:  100%;
        background-position:center center;
        background-repeat: repeat;
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
        width: 300px; 
        height: 500px;
    }

    

</style>

    <div class="background-container d-flex align-items-center">
      <img class="back-img" src="{{ asset('storage\images\background.png') }}" alt="back-img">

      @include('users.plans.contents.plan')

    </div>

    <div class="my-5">
      {{-- @include('users.plans.contents.recommend') --}}
    </div>

  

@endsection