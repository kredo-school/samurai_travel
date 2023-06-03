@extends('layouts.app')

@section('title' , 'Admin: Recommended Plan Details List')

@section('content')
<div class="container">
    <form action="#" method="post">
        @csrf
    <div class="row gx-2 mb-4">
        <div class="col-8"><h3>Recommended Plan Details List</h3></div>
        <div class ="col"></div>
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
                <th>PLAN ID</th>
                <th>DAY</th>
                <th>Place</th>
                <th>SORT_NO</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
            
            @forelse($recommended_plans as $recommended_plan)
                @foreach($recommended_plan->planDetails as  $recoPlanDetails)
                <tr>
                    <td class="text-start">{{ $recommended_plan->id }}</td>
                    <td class="text-start">{{ $recoPlanDetails->day }}</td>
                    <td class="text-start">{{ $recoPlanDetails->place->name_en }}</td>
                    <td class ="text-start">{{ $recoPlanDetails->sort_no }}</td>
                    <td>{{ $recommended_plan->created_at }}</td>
                    <td>{{ $recommended_plan->updated_at }}</td>
                    
                    <td>
                        {{-- Edit button --}}
                        <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit-recommended_plan-{{ $recoPlanDetails->id }}" title="Edit">
                        <i class="fa-solid fa-pen text-warning"></i>
                        </button>
                    </td>
                    <td>
                        {{-- Delete button --}}
                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-recommended_plan-{{ $recoPlanDetails->id }}" title="Delete">
                        <i class="fa-solid fa-trash-can text-danger"></i>
                        </button> 

                        {{-- include here the modal for edit and delete button --}}
                        @include('admin.plans.plan_details.modal.action')
                    </td> 
                </tr>
                @endforeach
            @empty
            <tr>
                <td colspan="6" class="lead text-muted text-center">No Recommended Recommended Plan found.</td>
            </tr>
            @endforelse
        
        </tbody>
    </table>
</div>

@endsection