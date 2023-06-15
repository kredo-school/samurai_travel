@extends('layouts.app')

@section('title' , 'Admin: Recommended Plan Details List')

@section('content')
<div class="container">
    <div class="row gx-2 my-4">
        <div class="col-8"><h3>Recommended Plan Details List</h3></div>
        <div class ="col"></div>
        <div class="col-1">
        
            <a href="{{ route('planDetail.create', ['plan_id' => $plan_details[0]->plan_id ]) }}">
                <button type="submit"  class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>ADD</button>
            </a>
        </div>
        {{-- Error --}}
        @error('title')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>
    
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
            
            @foreach($plan_details as  $detail)
            <tr>
                <td class="text-start">{{ $detail->plan_id }}</td>
                <td class="text-start">{{ $detail->day }}</td>
                <td class="text-start">{{ $detail->place->name_en }}</td>
                <td class ="text-start">{{ $detail->sort_no }}</td>
                <td>{{ $detail->plan->created_at->diffForHumans() }}</td>

                <td>{{ $detail->plan->updated_at->diffForHumans() }}</td>
                
                <td>
                    {{-- Edit button --}}
                    <a href="{{ route('planDetail.edit', $detail->id ) }}">
                    <button class="btn btn-outline-warning btn-sm me-2" title="Edit">
                    <i class="fa-solid fa-pen text-warning"></i>
                    </button>
                    </a>
                </td>
                <td>
                    {{-- Delete button --}}
                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{ $detail->id }}" title="Delete">
                    <i class="fa-solid fa-trash-can text-danger"></i>
                    </button> 

                    {{-- include here the modal for edit and delete button --}}
                    @include('admin.plans.plan_details.modal.action')
                </td> 
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection