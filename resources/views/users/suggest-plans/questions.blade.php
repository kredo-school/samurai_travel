@extends('layouts.app')

@section('title', 'Questions')

@section('suggest-plans-css')
    <link href="{{ mix('css/suggest-plans.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="q-box col-6 shadow col-white text-center rounded-3 pt-5 pb-3 px-4">
                <div class="row">
                    <div class="col-6 offset-3 h3 p-2 border border-dark boorder-2 rounded-pill mb-4">Question {{session('question_no')}}</div>
                </div>
                <form id="search-button" method="GET">
                    <div class="h2 fw-bold mb-5">{{ $question->question }}</div>
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <div class="row mb-5 answers d-flex">
                        @foreach ($question->answers as $answer)
                            <div class="col form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="{{$answer->id}}" name="answer[]" id="answer-{{$loop->iteration}}">
                                <label class="form-check-label" for="answer-{{$loop->iteration}}">{{$answer->answer}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-4 offset-5 d-flex align-items-center">
                            <button type="submit" value="search-now" class="border-0 bg-white">Search up to here</button>
                        </div>
                        <div class="col-3">
                        @if (session('question_no') < 5)
                            <div class="form">
                                <button type="submit" value="next" class="btn btn-outline-dark rounded-pill">NEXT 
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        @else
                            <div class="form">
                                <button type="submit" value="search" class="btn btn-outline-dark rounded-pill">SEARCH 
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('search-button').addEventListener('submit', function(event) {
                    var submitType = event.submitter.value;

                    if (submitType === 'next') {
                        this.action = "{{ route('suggest-plans.questions') }}";
                    } else {
                        this.action = "{{ route('suggest-plans.show', Auth::user()->id) }}";
                    }
                });
            });
        </script>
    </div>
@endsection