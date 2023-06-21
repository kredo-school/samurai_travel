@extends('layouts.admin')

@section('title','Place_Image')

@section('content')
<div class="container">
    <div class="row gx-2 my-4 d-flex bd-highlight">
        <div class="col-8 me-auto bd-highlight">
            <h3 class="text-bold">Answers List</h3>
        </div>
        <div class="col-auto bd-highlight">
            <a href="{{route('admin.question')}}" class="btn btn-secondary float-end me-3"> << Back</a>

            <a href="{{route('admin.answer.create', $question->id)}}" class="btn btn-outline-primary mb-3 shadow-sm me-2">
                <i class="fa-solid fa-plus"></i> Add
            </a>
        </div>

        <table class="table table-hover align-middle bg-white border text-secondary">
            <thead class="table-success text-secondary small">
                <tr>
                    <th>Q-ID</th>
                    <th>A-NO</th>
                    <th>ANSWER</th>
                    <th>GENRE</th>
                    <th>KEYWORD</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($all_answers as $answer)
                <tr>
                    <td>{{ $answer->question_id }}</td>
                    <td>{{ $answer->answer_no }}</td>
                    <td class="col-2">{{ $answer->answer }}</td>
                    <td>{{ $answer->genre->name }}</td>
                    <td>{{ $answer->keyword->name }}</td>
                    <td class="col-2">{{ $answer->created_at }}</td>
                    <td class="col-2">{{ $answer->updated_at }}</td>
                    <td>
                        {{-- Edit --}}
                        <a href="{{route('admin.answer.edit', [$question, $answer])}}" class="btn btn-outline-warning btn-sm me-1 shadow-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        {{-- Delete --}}
                        <button class="btn btn-outline-danger btn-sm me-1 shadow-sm" data-bs-toggle="modal" data-bs-target="#delete-answer-{{ $answer->id}}">
                            <i class="fa-solid fa-trash-can text-danger"></i>
                        </button>
                        @include('admin.answers.modals.delete')
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>  
</div>
@endsection