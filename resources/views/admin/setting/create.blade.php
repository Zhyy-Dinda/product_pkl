@extends('admin.app')
@section('content')
    <!-- [ breadcrumb ] start -->
    <section class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Setting</h2>
                        <h5 class="text-white op-7 mb-2"><b> <i class="fa fa-user"></i> {{ Auth::user()->name }}</b> Dashboard
                        </h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                        <a href="/setting" class="btn btn-secondary btn-round">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
            <div class="pc-content">
                <!-- [ breadcrumb ] end -->
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <h5>Form</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-8 content-center align-center">
                                    <form action="{{ route('setting.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-grup">
                                            <label for="title" class="form-label">Title Web</label>
                                            <input type="text" name="title_web"
                                                class="mb-2 form-control @error('title_web') is-invalid @enderror">
                                        </div>
                                        @error('title_web')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label" for="icon">Icon</label>
                                            <input type="file" class="form-control  @error('icon') is-invalid @enderror"
                                                value="{{ old('icon') }}" name="icon" id=""
                                                aria-describedby="IconlHelp" placeholder="Icon">
                                        </div>
                                        @error('icon')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="form-group">
                                            <label class="form-label" for="logo">Logo</label>
                                            <input type="file" class="form-control  @error('logo') is-invalid @enderror"
                                                value="{{ old('logo') }}" name="logo" id=""
                                                aria-describedby="LogolHelp" placeholder="Logo">
                                        </div>
                                        @error('logo')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="form-group">
                                            <label class="form-label" for="heading">Heading</label>
                                            <input type="text"
                                                class="form-control  @error('heading') is-invalid @enderror"
                                                value="{{ old('heading') }}" name="heading" id=""
                                                aria-describedby="HeadinglHelp" placeholder="Heading">
                                        </div>
                                        @error('heading')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="form-group">
                                            <label class="form-label" for="maps">Maps</label>
                                            <input type="text" class="form-control  @error('maps') is-invalid @enderror"
                                                value="{{ old('maps') }}" name="maps" id=""
                                                aria-describedby="MapslHelp" placeholder="Maps">
                                        </div>
                                        @error('maps')
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
    </section>

    {{-- @include('admin.components.404') --}}

    <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
