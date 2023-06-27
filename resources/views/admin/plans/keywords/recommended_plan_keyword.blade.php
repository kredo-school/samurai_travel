@extends('layouts.app')

@section('title' , 'Admin: Recommended Plan Keywords')

@section('content')
<div class="container">
    {{-- @forelse($recommended_plans as $recommended_plan) --}}
    <form action="{{ route('plan_keyword.store')}}" method="post">
        @csrf
    <div class="row gx-2 my-5">
        <div class="col-8"><h3>Recommended Plan Keywords List</h3></div>
    
        <div class ="col">
            {{-- <label for="name" name="name" class="form-label text-muted mb-2">plese select a keyword</label> --}}
            <select class="form-select" name="keyword_id" aria-label="Default select example">
                <option selected>please select</option>
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
                    <td>{{ $keyword->created_at }}</td>
                    <td>{{ $keyword->updated_at }}</td>
                    
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