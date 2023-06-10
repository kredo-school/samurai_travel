{{-- Delete --}}
<div class="modal fade" id="delete-answer-{{$answer->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-trash-can text-danger"></i> Delete Answer
                </h3>
            </div>
            <form action="{{route('admin.answer.destroy', $answer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Are you sure you want to delete <span class="fw-bold">{{$answer->answer}}</span>?</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
