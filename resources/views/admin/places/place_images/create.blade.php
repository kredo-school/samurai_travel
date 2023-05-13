@extends('layouts.admin')

@section('title','Place_Image Create')

@section('content')
<div class="container justify-content-center shadow-sm">
    <div class="row">
        <div class="card mx-auto col-9">
            <h1 class="mx-3 mt-3 text-bold text-center fs-3">Place Image</h1>
            <div class="card-body mx-5">
                    {{-- Store the sections --}}
                <form action="{{ route('place_image.store', $place) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- image_no --}}
                    <div class="form-group mb-3">
                        <label for="image_no" class="form-label text-muted mb-2">Image No.</label>
                        <input type="number" name="image_no" class="form-control" style="width: 25%">
                        @error('image_no')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="form-group mb-3">
                        <label for="image" class="form-label text-muted mb-2">Image</label>
                        <input type="file" name="image" id="image" class="form-control" style="width: 50%" aria-describedby="image-info">
                        <div class="form-text" id="image-info">
                            The acceptable formats are jpeg, jpg, png, and gif only. <br>
                            Max file size is 1048kb.
                        </div>
                    
                        {{-- Error --}}
                        @error('image')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- name_en --}}
                    <div class="form-group mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Write about the image">{{ old('description') }}</textarea>
                        {{-- Error --}}
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Button --}}
                    <div class="row text-center mt-5 mb-3">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <a href="{{ route('place_image.show', $place) }}" class="btn btn-outline-secondary form-control p-3">Cancel</a>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary p-3 form-control">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection