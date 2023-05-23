<div class="modal fade" id="edit-place_keyword-{{ $key }}">
    <form action="{{ route('admin.place_keyword.update',['place'=>$place_keyword->place->id ,'keyword'=> $place_keyword->keyword]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content border-warning">
                <div class="modal-header border-warning">
                    <h3 class="h5 modal-title text-warning">
                        <i class="fa-solid fa-circle-exclamation"></i> Edit Keyword
                    </h3>
                </div>
                <div class="modal-body">
                    <select class="form-select input-group-text fs-5" name="keyword_id">
                        @foreach ($all_keywords as $keyword)
                        <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                        @endforeach
                    </select>  
                    <!-- @error('keyword_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning btn-sm">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>