@extends('layouts.app')

@section('title')

@section('content')

<div class="container justify-content-center  my-5">
    <div class="row">
        <div class="card mx-auto col-6 my-5">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3"> Edit Recommended Plan Detail</h1>
            <div class="card-body mx-5">
                    <form action="{{ route('planDetail.update', $plan_details->id ) }}" method="post" >
                    @csrf
                    @method('PATCH')

                    <div class="form-group my-4">
                        <label for="place" class="form-label text-muted">Place</label>
                            <a href="{{ route('update.place', $plan_details->id) }}">
                                <span class ="btn btn-outline-dark btn-sm ms-2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </a>
                            <select class="form-select" name ="place_id" aria-label="Default select example">
                                <option selected>---</option>
                                    @foreach($all_places as $all_place)
                                        @if($place_id == 0)
                                            <option 
                                                {{ $all_place->id == $plan_details->place_id ? 'selected' : '' }}
                                                value="{{ $all_place->id }}">{{ $all_place->name_en }}
                                            </option>
                                        @else
                                            <option 
                                                {{ $all_place->id == $place_id ? 'selected' : '' }}
                                                value="{{ $all_place->id }}">{{ $all_place->name_en }}
                                            </option>
                                        @endif
                                    @endforeach
                            </select>

                            <label for="plan" class="form-label text-muted mt-1">Selected Plan</label>
                            <select class="form-select" name ="plan_id">
                                <option value="" >---</option>
                                    @foreach($plans as $plan)
                                        <option 
                                            {{ $plan->id == $plan_details->plan_id ? 'selected' : '' }}
                                            value="{{ $plan->id }}">{{ $plan->title }}
                                        </option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="day" class="form-label text-muted mb-2">Day</label>
                            <select class="form-select" name = "day" aria-label="Default select example">
                                <option value="" >please select</option>
                                <option {{ $plan_details->day == 1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $plan_details->day == 2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $plan_details->day == 3 ? 'selected' : '' }} value="3">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="sort_no" class="form-label text-muted mb-2">Sort No.</label>
                            <select class="form-select" name = "sort_no" aria-label="Default select example">
                                <option value="" >please select</option>
                                @for($i = 1; $i < 10; $i++)
                                <option {{ $plan_details->sort_no == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="row text-center mt-5 mb-3 justify-content-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning p-3 form-control">SAVE</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection