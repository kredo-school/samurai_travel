{{-- Edit --}}
<div class="modal fade" id="edit-recommended_plan-{{$recommended_plan->id}}">
    <div class="modal-dialog">
        <form action="{{ route('admin.recommended_plans.update', $recommended_plan->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="modal-content border-warning">
                <div class="modal-header border-warning">
                    <h3 class="h5 modal-title text-warning">
                        <i class="fa-solid fa-pen-to-square"></i> Edit Plan Name
                    </h3>
                </div>
                <div class="modal-body">
                    <input type="text" name="new_title" class="form-control" placeholder="Plan name" value="{{ $recommended_plan->title }}">
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-warning btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Delete --}}
<div class="modal fade" id="delete-recommended_plan-{{$recommended_plan->id}}">
    <div class="modal-dialog">
        <form action="{{ route('admin.recommended_plans.destroy', $recommended_plan->id) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-content border-danger">
                <div class="modal-header border-danger">
                    <h3 class="h5 modal-title text-danger">
                        <i class="fa-solid fa-trash-can"></i> Delete Plan
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <span class="fw-bold">{{ $recommended_plan->title }}</span> Plan?</p>
                    <p class="fw-light">This action will affect all the post under this Plan.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>