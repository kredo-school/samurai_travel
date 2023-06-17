@extends('layouts.app')

@section('plan-details-js')
    <script src="{{ asset('js/plan-details.js') }}" defer></script>
@endsection
@section('suggest-plans-css')
    <link href="{{ mix('css/plan-details.css') }}" rel="stylesheet">
@endsection

@section('title', 'Edit Plan')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-4">
            <form action="{{ route('suggest-plans.store', Auth::user()->id) }}" method="POST">
                @csrf
                @php $i = 0; @endphp
                @foreach($plan_details as $key =>$place)
                    <div class="card mb-2" id='place_{{ $key }}' data-arrival-time='{{ $arrival_times[$i] }}'>
                        <div class="card-body row">
                            <div class="col-10">
                                <div><i class="fa-regular fa-clock"></i>{{ $arrival_times[$i]; }}</div>
                                <div class="h5">{{ $place->name_en }}</div>
                                <input type="hidden" name="{{ $key }}" value="{{ $place->id }}">
                                <div>
                                    <img src="{{ asset('storage/sample/'.$place->image) }}" class="img-sm" alt="{{ $place->image }}">
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <button name='remove_button' id='remove_button_{{ $key }}' type="button" class="border-0 bg-white">
                                    <i class="fa-sharp fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @php $i++; @endphp
                @endforeach

        </div>
        <div class="col-8">
            <div class="row">
                <div class="col text-center">
                    <div class="h3">Other Places you might like to visit</div>
                </div>
            </div>
            <div class="other-place-list" id="other_place_list">
                @foreach ($place_list as $index => $place)
                    @if ($index === 0 || ($index + 1) % 4 === 0)
                        <div class="row mb-3">
                    @endif
                        <div class="col-4" id="other_place_{{ $index }}">
                            <div>
                                <img src="{{ asset('storage/sample/'.$place->image) }}" class="img-sm" alt="{{$place->image}}">
                            </div>
                            <p data-place-id="{{$place->id}}">{{ $place->name_en }}</p>
                        </div>
                    @if (($index + 1) % 3 === 0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mt-3 submit text-center">
            <button type="submit" class="btn btn-outline-dark fw-bold bg-white rounded-pill">Save as my plan</button>
        </div>
    </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add_place_modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="add_place_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable .modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h3" id="add_place_modal_label">Other places you might like to visit</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="add-place-list" id="add_place_list">
                @foreach ($place_list as $index => $place)
                    @if ($index === 0 || ($index + 1) % 4 === 0)
                        <div class="row mb-3">
                    @endif
                    <div class="col-4 add-place d-flex flex-column" id="add_place_{{ $index }}">
                        <div class="mx-auto">
                            <img src="{{ asset('storage/sample/'.$place->image) }}" class="img-sm" alt="{{$place->image}}">
                        </div>
                        <p class="mt-auto" data-place-id="{{$place->id}}">{{ $place->name_en }}</p>
                    </div>
                    @if (($index + 1) % 3 === 0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="add_place_button" disabled data-bs-dismiss="modal">Add</button>
        </div>
    </div>
</div>
@endsection