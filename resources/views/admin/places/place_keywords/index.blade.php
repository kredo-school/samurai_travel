@extends('layouts.admin')

@section('title','Place_Keyword')

@section('content')
<div class="container">
    <form action="{{ route('place_keyword.store', $place) }}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col-7">
                <h1 class="text-bold fs-3">Places Keywords List</h1>
            </div>
            {{-- Place_Category --}}  
            <div class="col-5">
                <div class="input-group">
                    <select class="form-select input-group-text fs-5" name="keyword_id">
                        <option selected hidden disabled>Select "Keyword" from here</option>
                        @foreach ($all_keywords as $keyword)
                        <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                        
                        @endforeach
                    </select>  
                    @error('keyword_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary float-end  py-2 px-4 me-3 input-group-text"> + Add</button>
                </div>
            </div>
        </div>
    </form>
        <div class="card mt-2">
            <div class="table-responsive-xl mt-4">
                <table class="table table-hover align-middle bg-white border text-center">
                    <thead class="small table-success">
                        <tr>
                            <th>PLACE ID</th>
                            <th>KEYWORD</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($all_place_keywords as $key => $place_keyword)
                        <tr>
                            <td>{{ $place_keyword->place_id }}</td>
                            <td>
                                {{ $place_keyword->keyword->name }}
                            </td>
                            <td>{{ $place_keyword->created_at }}</td>
                            <td>{{ $place_keyword->updated_at }}</td>

                            <td>
                                <a href="#" class="border-0 bg-transparent text-warning" data-bs-toggle="modal" data-bs-target="#edit-place_keyword-{{ $key }}">
                                    <i class="fa-solid fa-pen-to-square fs-4"></i>
                                </a>
                                @include('admin.places.place_keywords.modals.edit')
                            </td>
                            <td>
                                <button class="border-0 bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#delete-place_keyword-{{ $place_keyword->keyword_id }}">
                                    <i class="fa-solid fa-trash-can text-danger fs-4"></i>
                                </button>
                                @include('admin.places.place_keywords.modals.delete')
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ url('places') }}" class="btn btn-secondary float-end  px-4 me-3"> << Back</a>
        </div>
    </div>  
</div>
<div class="d-flex justify-content-center mt-3">
    {{ $all_place_keywords->links() }}  
</div>
@endsection