<div class="modal fade" id="delete-place_image-{{ $place_image->id }}">
    <div class="modal-dialog modal-dialog-end">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Product
                </h3>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete the image no. "{{ $place_image->image_no }}"?</p>
            </div>

            <div class="modal-footer border-0">
                <form action="{{ route('place_image.destroy', $place_image) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>