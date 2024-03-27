@extends('admin.app')
@section('content')
<section class="content ">
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
    <div class="page-inner mt--5 justify-content-center">
        <div class="row mt--2 ">
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                
                                <div class="form-grup">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" name="image" class="mb-2 form-control @error('image') is-invalid @enderror">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                              
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" id="" aria-describedby="TitlelHelp" placeholder="Title">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                
                                
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="" placeholder="content" rows="3">{{ old('content') }}</textarea>
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection


