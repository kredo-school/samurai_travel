{{-- Delete --}}
<div class="modal fade" id="delete-question-{{$question->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-trash-can text-danger"></i> Delete Question
                </h3>
            </div>
            <form action="{{route('admin.question.destroy', $question->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Are you sure you want to delete <span class="fw-bold">{{$question->question}}</span>?</p>
                    <p>This action will affect all the posts under this question.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
