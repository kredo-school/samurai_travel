@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('content')
<style>
    .background-container{
      position:relative; 
      justify-content: center;
    }

    .plan-container{
        position: relative;
        overflow: auto;
        max-height: 500px;
        }
    
    .plan-container::-webkit-scrollbar{
        display: none;
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

    <div class="background-container d-flex align-items-center">
      <img class="back-img" src="{{ asset('storage\images\bg-paper.jpg') }}" alt="back-img">

      @include('users.plans.contents.plan', ['id', request()->route('id')])

    </div>
    
    <div>
      @include('users.plans.contents.recommend', ['id', request()->route('id')])
    </div>

@endsection