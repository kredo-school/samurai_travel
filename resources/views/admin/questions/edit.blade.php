@extends('layouts.admin')

@section('title','Question Edit')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="w-50 justify-content-center shadow-sm mb-5">
        <div class="text-center pt-5 mb-3">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Question</h1>
        </div>
        <form action="{{route('admin.question.update', $question)}}" method="post">
            @csrf
            @method('PATCH')

            {{-- Question --}}
            <div class="mx-5 mb-3">
                <label for="question" class="form-label fw-bold">Question</label>
                <textarea name="question" id="question" rows="5" class="form-control" placeholder="Write about the question">{{ old('question', $question->question) }}</textarea>
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
                    @foreach ($data['genre'] as $genre)
                    @if ($genre->id === $question->genre_id)
                        <option selected value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @else
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endif
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
                    @foreach ($data['keyword'] as $keyword)
                    @if ($keyword->id === $question->keyword_id)
                        <option selected value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                    @else
                        <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                    @endif
                    @endforeach
                </select>
                @error('keyword_id')
                    <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            {{-- Button --}}
            <div class="d-flex justify-content-center pb-5">
                <a href="{{route('admin.question')}}" class="btn btn-outline-secondary me-5 px-5" role="button">Cancel</a>
                <button type="submit" class="btn btn-warning px-5">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection