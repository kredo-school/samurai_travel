@extends('layouts.admin')

@section('title', 'Admin: Keywords')
    
@section('content')
    <div class="container">
        <div class="row gx-2 my-4 d-flex bd-highlight">
            <div class="col-8 me-auto bd-highlight">
                <h3 class="text-bold">Keywords List</h3>
            </div>
            <div class="col-auto bd-highlight">
                <a href="{{route('admin.keywords.create')}}" class="btn btn-outline-primary mb-3 shadow-sm">
                    <i class="fa-solid fa-plus"></i> Add
                </a>
            </div>

            <table class="table table-hover align-middle bg-white border text-secondary">
                <thead class="table-success text-secondary small">
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>GENRE</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($all_keywords as $keyword)
                        <tr>
                            <td>{{$keyword->id}}</td>
                            <td>{{$keyword->name}}</td>
                            <td>{{$keyword->genre->name}}</td>
                            <td>{{$keyword->created_at}}</td>
                            <td>{{$keyword->updated_at}}</td>
                            <td>
                                {{-- EDIT --}}
                                <a href="{{route('admin.keywords.edit', ['id'=>$keyword->id])}}" class="btn btn-outline-warning btn-sm me-2 shadow-sm">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                {{-- DELETE --}}
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-keyword-{{ $keyword->id }}" title="Delete">
                                    <i class="fa-solid fa-trash-can text-danger"></i>
                                </button> 
            
                                @include('admin.keywords.modal.action')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$all_keywords->links()}}
        
        </div>
    </div>

@endsection