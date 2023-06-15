@extends('layouts.app')

@section('title')

@section('content')

<div class="container justify-content-center  my-5">
    <div class="row">
        <div class="card mx-auto col-6 my-5">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3"> Edit Recommended Plan Detail</h1>
            <div class="card-body mx-5">
                {{-- @foreach($plan_details as  $detail) --}}
                    <form action="{{ route('planDetail.update', $plan_detail->id ) }}" method="post" >
                {{-- @endforeach --}}
                    @csrf
                    @method('PATCH')

                    <div class="form-group my-4">
                        <label for="place" class="form-label text-muted">Place</label>
                            <a href="{{ route('update.place') }}">
                                <span class ="btn btn-outline-dark btn-sm ms-2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </a>
                            <select class="form-select" name ="place_id" aria-label="Default select example">
                                <option selected>---</option>
                                    @foreach($all_places as $all_place)
                                        <option 
                                            {{ $all_place->id == Request::input('id') ? 'selected' : '' }}
                                            value="{{ $all_place->id }}">{{ $all_place->name_en }}
                                        </option>
                                    @endforeach
                            </select>

                            <label for="plan" class="form-label text-muted mt-1">Selected Plan</label>
                            <select class="form-select" name ="plan_id">
                                <option selected>---</option>
                                    @foreach($plans as $plan)
                                        <option 
                                            {{ $plan->id == Request::input('plan_id') ? 'selected' : '' }}
                                            value="{{ $plan->id }}">{{ $plan->title }}
                                        </option>
                                    @endforeach
                            </select>
                            {{-- <input type="text" value="{{ request()->plan_id }}" name="plan_id"> --}}
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="day" class="form-label text-muted mb-2">Day</label>
                            <select class="form-select" name = "day" aria-label="Default select example">
                                <option selected>please select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="sort_no" class="form-label text-muted mb-2">Sort No.</label>
                            <select class="form-select" name = "sort_no" aria-label="Default select example">
                                <option selected>please select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
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