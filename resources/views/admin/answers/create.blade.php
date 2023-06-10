@extends('layouts.admin')

@section('title','Answer Create')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="w-50 justify-content-center shadow-sm mb-5">
        <div class="text-center pt-5 mb-3">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Answer</h1>
        </div>
        <form action="{{route('admin.answer.store', $question->id)}}" method="post">
            @csrf
            <div class="d-flex justify-content-start">
                {{-- Answer No --}}
                <div class="mx-5 mb-3">
                    <label for="answer_no" class="form-label mb-2">Answer No.</label>
                    <input type="number" name="answer_no" class="form-control">
                    @error('answer_no')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Question No --}}
                <div class="mx-5 mb-3">
                    <label for="question_id" class="form-label mb-2">Question ID.</label>
                    <input type="number" name="question_id" class="form-control" value="{{$question->id}}" disabled>
                    @error('question_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            {{-- Answer --}}
            <div class="mx-5 mb-3">
                <label for="answer" class="form-label fw-bold">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="form-control" placeholder="Write about the Answer">{{ old('answer') }}</textarea>
                {{-- Error --}}
                @error('answer')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Genre --}}
            <div class="mx-5 mb-5">
                <label for="genre" class="form-label">Genre</label>
                <select name="genre_id" id="genre" class="form-select">
                    <option value="hidden" disabled>Select Genre</option>
                    @foreach ($all_genres as $genre)
                        <option value="{{$genre->id}}" key={{$genre->id}}>{{$genre->name}}</option>
                    @endforeach
                </select>
                @error('genre_id')
                    <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>

            {{-- Keyword --}}
            <div class="mx-5 mb-5">
                <label for="keyword" class="form-label">Keyword</label>
                <select name="keyword_id" id="keyword" class="form-select">
                    <option value="hidden" disabled>Select Keyword</option>
                    @foreach ($all_keywords as $keyword)
                        <option value="{{$keyword->id}}" key={{$keyword->id}}>{{$keyword->name}}</option>
                    @endforeach
                </select>
                @error('keyword_id')
                    <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            {{-- Button --}}
            <div class="d-flex justify-content-center pb-5">
                <a href="{{route('admin.answer', $question->id)}}" class="btn btn-outline-secondary me-5 px-5" role="button">Cancel</a>
                <button type="submit" class="btn btn-primary px-5">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection