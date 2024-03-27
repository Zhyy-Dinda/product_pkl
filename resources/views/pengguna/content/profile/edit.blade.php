@extends('pengguna.app')
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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Profile Edit</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card-header">
            <a href="/users/profile" class="btn btn-purple mb-4">Back</a>
        </div>
        <div class="p-3 d-flex">
            <img src="{{ $profile && Storage::exists('public/profile' . Auth::user()->image) ? Storage::url('public/profile/' . $profile->image) : asset('img/logo/user_profile.png') }}"
                class="rounded mx-3" alt="" style="width: 250px; alt="">
            {{-- <img src="{{ Storage::url('public/profile/' . $profile->image) }}" class="rounded me-3" alt="" style="width: 250px;"> --}}
            <div class="d-grid ">
                <table>
                    <thead>
                        <tr>
                            <td>
                                <h3>Nama </h3>
                            </td>
                            <td>
                                <h5>: {{ Auth::user()->name }}</h5>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3>Email </h3>
                            </td>
                            <td>
                                <h5>: {{ Auth::user()->email }}</h5>
                            </td>
                        </tr>
                        <tr>
                            
                        </tr>

                    </tbody>
                </table>


                <small><span class="fw-bold">image :</span>{{ Auth::user()->image }}</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5>Form Edit</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-center justify-center align-center">
                            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST"
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
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                        value="{{ old('name', Auth::user()->name) }}" name="name" id=""
                                        aria-describedby="TitlelHelp" placeholder="Name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ old('email', Auth::user()->email) }}" name="email" id=""
                                        aria-describedby="EmaillHelp" placeholder="Email">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="role">Role:</label>
                                    <select id="role" name="role">
                                        @foreach ($profile as $item)
                                        <option value="admin">{{ $item->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
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


    {{-- summernote --}}
    <script src="{{ asset('../assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
    <script>
        (function() {
            ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
                console.error(error);
            });
        })();
    </script>
@endsection
