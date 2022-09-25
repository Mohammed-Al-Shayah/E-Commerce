@extends('admin.master')

@section('title', 'Edit Sliders | ' . env('APP_NAME'))

@section('content')

    <h1 class="h3 mb-4 text-gray-800">Edit Slider</h1>

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    @include('admin.errors')

    <form action="{{ route('admin.slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ $slider->en_name }}">
        </div>

        <div class="mb-3">
            <label>Arabic Name</label>
            <input type="text" name="name_ar" placeholder="Arabic Name" class="form-control" value="{{ $slider->ar_name }}">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
            <img width="80" src="{{ asset('uploads/sliders/'.$slider->image) }}" alt="">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title"  class="form-control" value="{{ $slider->title }}"  placeholder="Title" >
        </div>

        <div class="mb-3">
            <label>Sub Title</label>
            <input type="text" name="sub_title"  class="form-control" value="{{ $slider->sub_title }}"  placeholder="Sub Title" >
        </div>



        <button class="btn btn-success px-5">Edit</button>
    </form>




@stop
