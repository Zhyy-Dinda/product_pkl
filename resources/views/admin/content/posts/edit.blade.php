@extends('admin.app')
@section('content')
    <div class="pc-content">
        <div class="panel-header bg-primary-gradient ">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Post Artikel</h2>
                        <a href="/dashboard" class="text-light">
                            <h5 class="text-white op-7 mb-2"><b> <i class="fa fa-home"></i></b> 
                            </a>
                            Dashboard
                        </h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="/dashboard" class="btn btn-white btn-border btn-sm btn-round mr-2"><i class="fa fa-home"></i></a>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="card-header">
            <a href="/post/" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="p-3 d-flex">
            <img src="{{ Storage::url('public/posts/' . $post->image) }}" class="rounded me-3" alt=""
                style="width: 250px;">
            <div class="d-grid ">
                <h1 class=" ">{{ $post->title }}</h1>
                <p><span class="fw-bold">id :</span>{{ $post->id }}</p>
                <p><span class="fw-bold">Heading :</span>{{ $post->heading }}</p>
                <small><span class="fw-bold">image :</span>{{ $post->image }}</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5>Form Edit</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('post.update', $post->id) }}" method="POST"
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
                                        value="{{ old('title', $post->title) }}" name="title" id=""
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
                                        rows="3">{{ old('content', $post->content) }}</textarea>
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
