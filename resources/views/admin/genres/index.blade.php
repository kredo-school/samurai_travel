@extends('layouts.app')

@section('title' , 'Admin: Genre List')

@section('content')
<div class="container">
    <form action="{{ route('genres.store')}}" method="post">
        @csrf
    <div class="row gx-2 mb-4">
        <div class="col-8"><h3>Genres List</h3></div>
    
        <div class ="col">
            <input type="text" name="name"  placeholder=" Add a genre..." class="form-control" autofocus>
        </div>
        <div class="col-1">
            <button type="submit"  class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>Add</button>
        </div>
    
    </div>
    </form>
    
    <table class="table table-hover align-middle bg-white border text-secondary">
        <thead class="table-success text-secondary small">
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
            
            @forelse ($all_genres as $genre)
                <tr>
                    <td class="text-center">{{ $genre->id }}</td>
                    <td class="text-center">{{ $genre->name }}</td>
                    <td>{{ $genre->created_at }}</td>
                    <td>{{ $genre->updated_at }}</td>
                    <td>
                        {{-- Edit button --}}
                        <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit-genre-{{ $genre->id }}" title="Edit">
                        <i class="fa-solid fa-pen text-warning"></i>
                        </button>
                    </td>
                    <td>
                        {{-- Delete button --}}
                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-genre-{{ $genre->id }}" title="Delete">
                        <i class="fa-solid fa-trash-can text-danger"></i>
                        </button> 

                        {{-- include here the modal for edit and delete button --}}
                    @include('admin.genres.modal.action') 
                    </td> 
                </tr>
                
            @empty
            <tr>
                <td colspan="6" class="lead text-muted text-center">No Genre found.</td>
            </tr>
            @endforelse
        
        </tbody>
    </table>
</div>

    {{-- {{ $all_genres->links() }} --}}
@endsection