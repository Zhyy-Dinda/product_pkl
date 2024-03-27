@extends('admin.app')
@section('content')
    <div class="pc-content">

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Data Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Header</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Header Edit</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card-header">
            <a href="/header" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="p-3 d-flex">
            <img src="{{ Storage::url('public/header/' . $header->image) }}" class="rounded me-3" alt=""
                style="width: 250px;">
            <div class="d-grid ">
                <h1 class=" ">{{ $header->title }}</h1>
                <p><span class="fw-bold">id :</span>{{ $header->id }}</p>
                <small><span class="fw-bold">image :</span>{{ $header->image }}</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5>Form Header</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('header.update', $header->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-grup">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" name="image" class="mb-2 form-control">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                        value="{{ old('title', $header->title) }}" name="title" id=""
                                        aria-describedby="TitlelHelp" placeholder="Title">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea autocomplete="off" rows="4" cols="30" margin-left: 25px;"
                                        class="form-control  @error('content') is-invalid @enderror" name="content" id="" placeholder="content"
                                        rows="3">{{ old('content', $header->content) }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <button type="submit" class="btn btn-primary mb-4">Save</button>
                                <button type="reset" class="btn btn-warning mb-4">reset</button>
                            </form>

                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- @include('admin.components.404') --}}

        <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
