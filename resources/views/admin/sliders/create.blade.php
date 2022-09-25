@extends('admin.master')

@section('title', 'Sliders | ' . env('APP_NAME'))

@section('content')

    <h1 class="h3 mb-4 text-gray-800">Create New Slider</h1>

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    @include('admin.errors')

    <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Arabic Name</label>
            <input type="text" name="name_ar" placeholder="Arabic Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" class="form-control">
        </div>        <div class="mb-3">
            <label>Sub Title</label>
            <input type="text" name="sub_title" placeholder="Sub Title" class="form-control">
        </div>



        <button class="btn btn-success px-5">Add</button>
    </form>




@stop
