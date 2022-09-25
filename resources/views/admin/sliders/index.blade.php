@extends('admin.master')

@section('title', 'Sliders | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Sliders</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($sliders as $slider)
        {{-- @dump(json_decode($slider->name, true)[app()->currentLocale()]) --}}
        <tr>
            <td>{{ $slider->id }}</td>
            <td>{{ $slider->trans_name }}</td>
            <td><img width="80" src="{{ asset('uploads/sliders/'.$slider->image) }}" alt=""></td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->sub_title }}</td>

            {{-- <td>{{ $slider->parent->trans_name }}</td> --}}
            <td>{{ $slider->created_at ? $slider->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.slider.edit', $slider->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $sliders->links() }}

@stop
