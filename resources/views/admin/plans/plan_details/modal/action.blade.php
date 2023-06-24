
{{-- Delete --}}
<div class="modal fade" id="delete-{{ $detail->id }}">
    <div class="modal-dialog">
        <form action="{{ route('planDetail.destroy', $detail->id) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-content border-danger">
                <div class="modal-header border-danger">
                    <h3 class="h5 modal-title text-danger">
                        <i class="fa-solid fa-trash-can"></i> Delete Recommended Plan Detail
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the plan details whose day is <span class="fw-bold">{{ $detail->day }}</span>
                        and whose place is <span>{{ $detail->place->name_en }}</span> </p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>