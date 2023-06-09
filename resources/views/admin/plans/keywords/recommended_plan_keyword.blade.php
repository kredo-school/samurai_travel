@extends('layouts.admin')

@section('title' , 'Admin: Recommended Plan Keywords')

@section('content')
<div class="container">
    <form action="{{ route('admin.plan_keyword.store',['plan' => $recommended_plan->id ])}}" method="post">
        @csrf
    <div class="row gx-2 my-5">
        <div class="col-8"><h3>Recommended Plan Keywords List</h3></div>
    
        <div class ="col">
            <select class="form-select" name="keyword_id" aria-label="Default select example" required >
                <option selected value="">please select</option>
                @foreach($all_keywords as $all_keyword)
                    <option value="{{ $all_keyword->id }}">{{ $all_keyword->name }}</option>
                @endforeach
            </select>
            <input type="hidden" value="{{ request()->plan->id }}" name="plan_id">
        </div>
        <div class="col-1">
            <button type="submit"  class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>ADD</button>
        </div>
        {{-- Error --}}
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    
    </div>
    </form>
    
    <table class="table table-hover align-middle bg-white border text-secondary">
        <thead class="table-success text-secondary small">
            <tr>
                <th>KEYWORD ID</th>
                <th>KEYWORD</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
                @foreach($plan_keywords as $keyword)
                <tr>
                    <td class="text-start">{{ $keyword->id }}</td>
                    <td class="text-start">{{ $keyword->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($keyword->getOriginal('pivot_created_at'))->diffForHumans() }}</td>
                    <td>{{ \Carbon\Carbon::parse($keyword->getOriginal('pivot_updated_at'))->diffForHumans() }}</td>
                    
                    <td>
                        {{-- Edit button --}}
                        <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit-plan_keyword-{{ $keyword->id }}" title="Edit">
                        <i class="fa-solid fa-pen text-warning"></i>
                        </button>
                    </td>
                    <td>
                        {{-- Delete button --}}
                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-plan_keyword-{{ $keyword->id }}" title="Delete">
                        <i class="fa-solid fa-trash-can text-danger"></i>
                        </button> 

                        {{-- include here the modal for edit and delete button --}}
                    
                        @include('admin.plans.keywords.modal.action')
                    </td> 
                </tr>
                @endforeach
                
        </tbody>
    </table>
</div>
@endsection