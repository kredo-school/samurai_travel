@extends('layouts.admin')

@section('title', 'Admin: Users')

@section('content')

    @php
        use App\Models\User;
    @endphp

    <div class="row mb-2">
        <div class="col-2">
            <h3 class="text-bold">Users List</h3>
        </div>
        <div class="col-10">
            <form action="{{ route('admin.users') }}" method="get">
                <div class="row">
                    <div class="col-2">
                        <input type="text" name="name" class="form-control" value="{{ $name }}" placeholder="Name">
                    </div>
                    <div class="col-3">
                        <input type="text" name="email" class="form-control" value="{{ $email }}" placeholder="Email">
                    </div>
                    <div class="col-2">
                        <select name="role_id" class="form-select">
                            <option {{ $role_id == '' ? 'selected' : '' }} value="">- Role -</option>
                            <option {{ $role_id == User::ADMIN_ROLE_ID ? 'selected' : '' }} value="{{ User::ADMIN_ROLE_ID }}">Admin</option>
                            <option {{ $role_id == User::USER_ROLE_ID ? 'selected' : '' }} value="{{ User::USER_ROLE_ID }}">User</option>
                        </select>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <button type="submit" class="btn btn-dark btn-sm">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover align-middle bg-white border">
        <thead class="small table-success text-secondary">
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>ROLE</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->first_name}}</td>
                    <td>{{ $user->last_name}}</td>
                    <td>{{ $user->email}}</td>
                    @if ($user->role_id === User::ADMIN_ROLE_ID)
                        <td><span class="badge bg-danger">Admin</span></td>
                    @elseif ($user->role_id === User::USER_ROLE_ID)
                        <td><span class="badge bg-primary">User</span></td>
                    @endif
                    <td>{{ $user->created_at}}</td>
                    <td>{{ $user->updated_at}}</td>
                    <td>
                        @if (Auth::user()->id !== $user->id)
                            <div class="dropdown">
                                <button class="btn btn-sm" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <div class="dropdown-menu">
                                    @if ($user->role_id !== User::ADMIN_ROLE_ID)
                                        <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#chage-to-admin-{{ $user->id }}">
                                            Change to Admin
                                        </button>
                                    @else
                                        <button class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#chage-to-user-{{ $user->id }}">
                                            Change to User
                                        </button>
                                    @endif
                                </div>
                            </div>
                            @include('admin.users.modal.role')
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->appends(request()->query())->links() }}
@endsection