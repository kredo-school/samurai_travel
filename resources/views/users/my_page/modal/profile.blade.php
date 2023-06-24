<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content border-dark">
            <div class="modal-header border-dark">
                <h3 class="h4 modal-title text-dark">
                    Profile
                </h3>
            </div>
            <form action="{{ route('my_page.update_profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="modal-body">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset("storage/avatar/".Auth::user()->avatar) }}" alt="avatar" class="img-thumbnail"/>
                    @else
                        <i class="fa-solid fa-user bg-white text-secondary border border-secondary rounded p-3" style="font-size: 15rem;"></i>
                    @endif
                    <input type="file" name="avatar_image" id="avatar_image" class="form-control mt-1" aria-describedby="avatar_image_info">
                    <div class="form-text" id="avatar_image_info">
                        Acceptable formats: jpeg, jpg, png, gif only<br>
                        Maximum file size: 1024KB
                    </div>
                    <p class="text-danger fw-bold" id="alert_avatar_image"></p>

                    <div class="form-check mt-3">
                        <input type="checkbox" name="remove_avatar_image" class="form-check-input">
                        <label for="remove_avatar_image" class="form-check-label fw-bold">Remove image</label>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <label for="first_name" class="form-label fw-bold">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ Auth::user()->first_name }}">
                            <p class="text-danger fw-bold" id="alert_first_name"></p>
                        </div>
                        <div class="col-6">
                            <label for="last_name" class="form-label fw-bold">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ Auth::user()->last_name }}">
                            <p class="text-danger fw-bold" id="alert_last_name"></p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-outline-dark btn-sm" id="btn_update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    const submit = document.querySelector('#btn_update');
    submit.addEventListener('click', (event) => {
        event.preventDefault();

        const avatar_image = document.querySelector('#avatar_image');
        const first_name = document.querySelector('#first_name');
        const last_name = document.querySelector('#last_name');

        const alert_avatar_image = document.querySelector('#alert_avatar_image');
        const alert_first_name = document.querySelector('#alert_first_name');
        const alert_last_name = document.querySelector('#alert_last_name');

        let error = false;
        alert_last_name.textContent = '';
        alert_first_name.textContent = '';
        alert_last_name.textContent = '';

        if (avatar_image.files[0]) {
            const avatar_image_size = avatar_image.files[0].size;
            const avatar_image_type = avatar_image.files[0].type;

            if (avatar_image_size > 1024000) {
                alert_avatar_image.textContent = 'Maximum file size is 1024KB.';
                error = true;
            }
            if (avatar_image_type != 'image/jpeg' && avatar_image_type != 'image/jpg' && avatar_image_type != 'image/png' && avatar_image_type != 'image/gif') {
                alert_avatar_image.textContent = 'Acceptable formats: jpeg, jpg, png, gif only.';
                error = true;
            }
        }

        if (first_name.value == '') {
            alert_first_name.textContent = 'First name is required.';
            error = true;
        }
        if (first_name.value.length > 255) {
            alert_first_name.textContent = 'First name must be 255 characters or less.';
            error = true;
        }

        if (last_name.value == '') {
            alert_last_name.textContent = 'Last name is required.';
            error = true;
        }
        if (last_name.value.length > 255) {
            alert_last_name.textContent = 'Last name must be 255 characters or less.';
            error = true;
        }

        if (error == false) {
            submit.form.submit();
        }
    }, false);

</script>