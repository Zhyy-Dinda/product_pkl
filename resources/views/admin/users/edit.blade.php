@extends('admin.app')
@section('content')
<section class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">User</h2>
                    <h5 class="text-white op-7 mb-2">
                        <b>
                            <a href="/dashboard" class="text-light"><i class="fa fa-home"></i></a>
                        </b> Dashboard
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
                <div class="card border-0 shadow rounded">
                    <div class="card">
                        <div class="card-body">
                            <h5>Form Edit</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-8 content-center align-center">
                                    <form action="{{ route('user.update', $user->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                    
                                      {{-- image --}}
                                      <div class="form-group">
                                        <label class="form-label" for="image">Foto Profile</label>
                                        <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                            value="{{ $user->image }}" name="image" id=""
                                            aria-describedby="ImagelHelp" placeholder="Image">
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                {{-- name --}}
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text"
                                        class="form-control  @error('name') is-invalid @enderror"
                                        value="{{ $user->name }}" name="name" id=""
                                        aria-describedby="NamelHelp" placeholder="Name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- email --}}
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email"
                                        class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ $user->email }}" name="email" id=""
                                        aria-describedby="EmaillHelp" placeholder="Email">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" name="password" id=""
                                        aria-describedby="PasswordlHelp" placeholder="Password">
                                </div>
                                @error('password')
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
        <!-- [ Main Content ] end -->
    </div>
</section>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

