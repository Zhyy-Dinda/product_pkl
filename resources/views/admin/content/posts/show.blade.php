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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Post</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Post Edit</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card-header">
            <a href="/post/" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="p-3 d-flex">
            <img src="{{ Storage::url('public/posts/' . $post->image) }}" class="rounded me-3 p-3" alt=""
                style="width: 450px;">
            <div class="d-grid ">
                <h1 class=" ">{{ $post->title }}</h1>
                <p><span class="fw-bold">id :</span>{{ $post->id }}</p>
                <small><span class="fw-bold">image :</span>{{ $post->image }}</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">

                {{-- <div class="card-body">
                    <h5>Form Edit</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            

                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>



        {{-- @include('admin.components.404') --}}

        <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
