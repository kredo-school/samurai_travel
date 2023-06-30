@extends('layouts.app')

@section('title', 'Show Plan Detail')

@section('map-js')
    <script src="{{ asset('js/map.js') }}" defer></script>
@endsection

@section('content')
<style>
    .background-container{
      position:relative; 
      justify-content: center;
    }

    .plan-container{
        position: relative;
        overflow: auto;
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

         /* タブの色変更 */
      .nav-pills .nav-link.active{
          background-color: #DAA4AA;
          color: black;
      }

     /* タブの文字色変更 */
    .nav-pills .nav-link{
          color: black;
          font-weight: bold;
      }
    
      .img-sm{
          width: 200px;
          height: 150px;
          object-fit: contain;
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