@extends('admin.app')
@section('content')
    <section class="content">
        <div class="panel-header bg-info-gradient">
            <div class="page-inner ">

                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white fw-bold">Post</h2>
                        <h5 class="text-white "><b> <i class="fa fa-user"></i></b> Dashboard
                        </h5>
                        <a href="/setting" class="btn btn-danger  text-light btn-sm mb-3 btn-round">back</a>
                        
                            <div class="card">

                                <div class="card-body">
                                    <h5>Form Edit</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8 content-center align-center">
                                            <form action="{{ route('setting.update', $setting->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-grup">
                                                    <label for="image" class="form-label">Icon</label>
                                                    <input type="file" name="icon" class="mb-2 form-control">
                                                </div>
                                                @error('icon')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="form-grup">
                                                    <label for="image" class="form-label">Logo</label>
                                                    <input type="file" name="logo" class="mb-2 form-control">
                                                </div>
                                                @error('logo')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="form-group">
                                                    <label class="form-label" for="title_web">Title web</label>
                                                    <input type="text"
                                                        class="form-control  @error('title_web') is-invalid @enderror"
                                                        value="{{ old('title_web', $setting->title_web) }}" name="title_web"
                                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                                </div>
                                                @error('title_web')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="form-group">
                                                    <label class="form-label" for="heading">Heading</label>
                                                    <input type="text"
                                                        class="form-control  @error('heading') is-invalid @enderror"
                                                        value="{{ old('heading', $setting->heading) }}" name="heading"
                                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                                </div>
                                                @error('title_web')
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
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- @include('admin.components.404') --}}

    <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
