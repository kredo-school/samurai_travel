@php
    use App\Models\User;
@endphp

@if ($user->role_id !== User::ADMIN_ROLE_ID)
    {{-- Change to Admin --}}
    <div class="modal fade" id="chage-to-admin-{{ $user->id }}">
        <div class="modal-dialog">
            <div class="modal-content border-danger">
                <div class="modal-header border-danger">
                    <h3 class="h5 modal-title text-danger">
                        Change to Admin
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to change the user's role to 'Admin' ?</p>
                </div>
                <div class="modal-footer border-0">
                    <form action="{{ route('admin.users.update', $user) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="role_id" value="{{ User::ADMIN_ROLE_ID }}">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-sm">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Change to User --}}
    <div class="modal fade" id="chage-to-user-{{ $user->id }}">
        <div class="modal-dialog">
            <div class="modal-content border-primary">
                <div class="modal-header border-primary">
                    <h3 class="h5 modal-title text-primary">
                        Change to User
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to change the user's role to 'User' ?</p>
                </div>
                <div class="modal-footer border-0">
                    <form action="{{ route('admin.users.update', $user) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="role_id" value="{{ User::USER_ROLE_ID }}">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
