@extends('layouts.admin')

@section('title','Question Create')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="w-50 justify-content-center shadow-sm mb-5">
        <div class="text-center pt-5 mb-3">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Question</h1>
        </div>
        <form action="{{route('admin.question.store')}}" method="post">
            @csrf
            {{-- Question --}}
            <div class="mx-5 mb-3">
                <label for="question" class="form-label fw-bold">Question</label>
                <textarea name="question" id="question" rows="5" class="form-control" placeholder="Write about the question">{{ old('question') }}</textarea>
                {{-- Error --}}
                @error('question')
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
                <a href="{{route('admin.question')}}" class="btn btn-outline-secondary me-5 px-5" role="button">Cancel</a>
                <button type="submit" class="btn btn-primary px-5">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection