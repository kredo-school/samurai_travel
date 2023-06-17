@extends('layouts.admin')

@section('title','Place_Image')

@section('content')
<div class="container">
    <div class="row gx-2 my-4 d-flex bd-highlight">
        <div class="col-8 me-auto bd-highlight">
            <h3 class="text-bold">Questions List</h3>
        </div>
        <div class="col-auto bd-highlight">
            <a href="{{route('admin.top')}}" class="btn btn-secondary float-end me-3"> << Back</a>

            <a href="{{route('admin.question.create')}}" class="btn btn-outline-primary mb-3 shadow-sm me-2">
                <i class="fa-solid fa-plus"></i> Add
            </a>
        </div>

        <table class="table table-hover align-middle bg-white border text-secondary">
            <thead class="table-success text-secondary small">
                <tr>
                    <th>#</th>
                    <th>QUESTION</th>
                    <th>GENRE</th>
                    <th>KEYWORD</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($all_questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td class="col-2">{{ $question->question }}</td>
                    <td>{{ $question->genre->name }}</td>
                    <td>{{ $question->keyword->name }}</td>
                    <td class="col-2">{{ $question->created_at }}</td>
                    <td class="col-2">{{ $question->updated_at }}</td>
                    <td>
                        {{-- Question --}}
                        <a href="{{route('admin.answer', $question->id)}}" class="btn btn-outline-dark btn-sm me-1 shadow-sm">
                            <i class="fa-regular fa-comment"></i>
                        </a>
                        {{-- Edit --}}
                        <a href="{{route('admin.question.edit', $question->id)}}" class="btn btn-outline-warning btn-sm me-1 shadow-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- Delete --}}
                        <button class="btn btn-outline-danger btn-sm me-1 shadow-sm" data-bs-toggle="modal" data-bs-target="#delete-question-{{ $question->id}}">
                            <i class="fa-solid fa-trash-can text-danger"></i>
                        </button>
                        @include('admin.questions.modals.delete')
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{$all_questions->links()}}

    </div>  
</div>
@endsection