@extends('layouts.app')

@section('title', 'Edit Keyword')
    
@section('content')
    <div class="m-5 p-3">
        <div class="container justify-content-center w-50 bg-white shadow-sm">
            <div class="text-center pt-5 mb-3">
                <h2>Keyword</h2>
            </div>

            <form action="{{ route('admin.keywords.update', ['id' => $data["id"]]) }}" method="post">
                @csrf
                @method('PATCH')

                {{-- Name --}}
                <div class="mx-5 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Edit name..." value="{{$data['keyword']['name']}}">
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Genre --}}
                <div class="mx-5 mb-5">
                    <label for="genre" class="form-label small">Genre</label>
                    <select name="genre_id" id="genre" class="form-select">
                        <option value="hidden"></option>
                        @foreach ($all_genres as $genre)
                            <option value="{{$genre->id}}" {{ ( $genre->id == $data["keyword"]["genre_id"] ) ? 'selected' : '' }}>{{$genre->name}}</option>
                        @endforeach
                    </select>
                    @error('genre_id')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                {{-- Button --}}
                <div class="d-flex justify-content-center pb-5">
                    <a href="{{ route('admin.keywords') }}" class="btn btn-outline-secondary me-5 px-5" role="button">Cancel</a>
                    <button type="submit" class="btn btn-warning px-5">Save</button>
                </div>
            </form>
        

        </div>
    </div>


    <script>
        $(document).ready(function(){
            
        })
        </script>
    
@endsection