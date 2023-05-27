@extends('layouts.admin')

@section('title','Place')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-9">
            <h1 class="text-bold fs-3">Places List</h1>
        </div>
        <div class="col-3">
            <a href="{{ route('admin.place.create') }}" class="btn btn-outline-primary float-end  px-4 me-3"> + Add</a>
        </div>
        <div class="card mt-2">
            <div class="table-responsive-xl mt-4">
                <table class="table table-hover align-middle bg-white border">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>PLACE-CATEGORY</th>
                            <th>NAME(JP)</th>
                            <th>NAME(EN)</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                            <th>OPENING TIME</th>
                            <th>ENDING TIME</th>
                            <th>OFFICIAL SITE</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($all_places as $place)
                        <tr>
                            <td>{{ $place->id }}</td>
                            <td>{{ $place->place_category }}</td>
                            <td>{{ $place->name_jp }}</td>
                            <td>{{ $place->name_en }}</td>
                            <td>
                                <img src="{{ asset('storage/sample/' . $place->image) }}" alt="{{ $place->image }}" class="d-block mx-auto img-fluid w-10">
                            </td>
                            <td>{{ $place->description }}</td>
                            <td>{{ $place->opening_time }} {{ $place->open_ampm }}</td>
                            <td>{{ $place->ending_time }} {{ $place->end_ampm }}</td>
                            <td><a href="{{ $place->url }}">{{ $place->url }}</a></td>
                            <td>{{ $place->created_at }}</td>
                            <td>{{ $place->updated_at }}</td>
                            <td>
                                <a href="{{ route('admin.place_keyword.index', $place) }}" class="text-primary" >
                                <button class="border-0 bg-transparent text-info p-1  me-1">
                                    <i class="fa-solid fa-key fs-4"></i>
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('admin.place_image.show', $place) }}" class="text-primary" >
                                <button class="border-0 bg-transparent text-success p-1 me-1">
                                    <i class="fa-regular fa-image fs-4"></i>
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('admin.place.edit', $place) }}" class="border-0 bg-transparent text-warning p-1 me-1">
                                    <i class="fa-solid fa-pen-to-square fs-4"></i>
                                </a>
                            </td>
                            <td>
                                <button class="border-0 bg-transparent text-danger p-1 me-1" data-bs-toggle="modal" data-bs-target="#delete-place-{{ $place->id}}">
                                    <i class="fa-solid fa-trash-can text-danger fs-4"></i>
                                </button>
                                @include('admin.places.modals.delete')
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
<div class="d-flex justify-content-center mt-3">
    {{ $all_places->links() }}  
</div>
@endsection

