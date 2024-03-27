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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Profiles</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
       
        <div class="p-3 d-flex">
            <div class="">
                <table>
                    <thead>
                        <tr>
                            <td><h4># id</h4></td>
                            <td><h5 style="color: gray">: {{ $profile->id }}</h5><hr></td>
                        </tr>
                        <tr>
                            <td><h4>Heading </h4></td>
                            <td><h5 style="color: gray">: {{ $profile->heading }}</h5><hr></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h4>Title </h4></td>
                            <td><h5 style="color: gray">: {{ $profile->title }}</h5><hr></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><h4>Image </h4></td>
                            <td><h5 style="color: gray">: {{ $profile->image }}</h5><hr></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><h4>Content </h4></td><hr>
                            <div>
                                <td style="width: 1%"><h5 style="color: gray">: {{ $profile->content }}</h5></td>
                            </div>
                        </tr>
                    </tbody>
                </table>
                
                
                {{-- <small><h4 class="fw-bold">image :</h4>{{ $profile->image }}</small> --}}
            </div>
        </div>
        <div class="w-50 m-3">
            
            <div class="card-header">
                <form onsubmit="return confirm('Data akan di hapus');"  action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    <a class="btn btn-primary btn-sm" href="{{ route('profile.edit', $profile->id) }}"><i class="material-icons-two-tone text-white">edit_road</i> Edit</a>
                    <a href="/admin/profile/" class="btn btn-success btn-sm">Back</a>
                </form>
            </div>
        </div>        
        
        
        {{-- @include('admin.components.404') --}}
        <img src="{{ Storage::url('public/profile/' . $profile->image) }}" class="rounded me-3" alt=""style="width: 800px;">

        <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
