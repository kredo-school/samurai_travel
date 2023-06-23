@extends('layouts.app')

@section('title' , 'Admin: Recommended Plans')

@section('content')
<div class="container">
    <form action="{{ route('recommended_plans.store')}}" method="post">
        @csrf
    <div class="row gx-2 mb-4 my-5">
        <div class="col-8"><h3>Recommended Plans List</h3></div>
    
        <div class ="col">
            <input type="text" name="title"  placeholder=" Add a title..." class="form-control" autofocus>
        </div>
        <div class="col-1">
            <button type="submit"  class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>ADD</button>
        </div>
        {{-- Error --}}
        @error('title')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    
    </div>
    </form>
    
    <table class="table table-hover align-middle bg-white border text-secondary">
        <thead class="table-success text-secondary small">
            <tr>
                <th>#</th>
                <th>TITLE</th>
                <th>Admin User</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
            
            @forelse($recommended_plans as $recommended_plan)
                <tr>
                    <td class="text-start">{{ $recommended_plan->id }}</td>
                    <td class="text-start">{{ $recommended_plan->title }}</td>
                    <td class ="text-start">Administrator</td>
                    <td>{{ $recommended_plan->created_at }}</td>
                    <td>{{ $recommended_plan->updated_at }}</td>
                    <td>
                        {{-- Key button --}}
                        <a href="{{ route("show.plan_keywords", ["plan"=>$recommended_plan->id]) }}">
                            <button class="btn btn-sm btn-outline-dark me-2" >
                                <i class="fa-solid fa-key"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        {{-- Details button --}}
                        <a href="{{ route('show.plan_details', $recommended_plan->id) }}">
                        <button class="btn btn-sm btn-outline-dark me-2" >
                            <i class="fa-regular fa-rectangle-list"></i>
                        </button>
                        </a>
                    </td>
                    <td>
                        {{-- Edit button --}}
                        <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit-recommended_plan-{{ $recommended_plan->id }}" title="Edit">
                        <i class="fa-solid fa-pen text-warning"></i>
                        </button>
                    </td>
                    <td>
                        {{-- Delete button --}}
                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-recommended_plan-{{ $recommended_plan->id }}" title="Delete">
                        <i class="fa-solid fa-trash-can text-danger"></i>
                        </button> 

                        {{-- include here the modal for edit and delete button --}}
                    
                        @include('admin.plans.modal.action')
                    </td> 
                </tr>
                
            @empty
            <tr>
                <td colspan="6" class="lead text-muted text-center">No Recommended Recommended Plan found.</td>
            </tr>
            @endforelse
        
        </tbody>
    </table>
</div>

@endsection