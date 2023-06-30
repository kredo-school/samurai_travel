@extends('layouts.admin')

@section('title','Place_Image')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-9">
            <h1 class="text-bold fs-3">Places Images List</h1>
        </div>
        <div class="col-3">
            <a href="{{ route('admin.place_image.create', $place->id) }}" class="btn btn-outline-primary float-end  px-4 me-3"> + Add</a>

            <a href="{{ url('admin/places') }}" class="btn btn-secondary float-end  px-4 me-3"> << Back</a>
        </div>
    </div>
    <div class="table-responsive-xl mt-4">
        <table class="table table-hover align-middle bg-white border text-center">
            <thead class="small table-success">
                <tr>
                    <th class="col-1">PLACE ID</th>
                    <th class="col-1">IMAGE NO</th>
                    <th class="col-1">NAME(JP)</th>
                    <th class="col-1">NAME(EN)</th>
                    <th class="col-2">IMAGE</th>
                    <th class="col-2">DESCRIPTIOON</th>
                    <th class="col-1">CREATED AT</th>
                    <th class="col-1">UPDATED AT</th>
                    <th class="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($all_place_images as $place_image)
                <tr>
                    <td class="col-1">{{ $place_image->place->id }}</td>
                    <td class="col-1">
                        {{ $place_image->image_no }}
                    </td>
                    <td class="col-1">{{ $place_image->name_jp }}</td>
                    <td class="col-1">{{ $place_image->name_en }}</td>
                    <td class="col-2">
                        <img src="{{ asset('storage/sample/' . $place_image->image) }}" alt="{{ $place_image->image }}" class="d-block mx-auto img-fluid w-10">
                    </td>
                    <td class="col-2">{{ $place_image->description }}</td>
                    <td class="col-1">{{ $place_image->created_at }}</td>
                    <td class="col-1">{{ $place_image->updated_at }}</td>

                    <td class="col-1">
                        <a href="{{ route('admin.place_image.edit', $place_image) }}" class="border-0 bg-transparent text-warning me-4">
                            <i class="fa-solid fa-pen-to-square fs-4"></i>
                        </a>

                        <button class="border-0 bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#delete-place_image-{{ $place_image->id }}">
                            <i class="fa-solid fa-trash-can text-danger fs-4"></i>
                        </button>
                        @include('admin.places.place_images.modals.delete')
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    {{ $all_place_images->links() }}  
</div>
@endsection