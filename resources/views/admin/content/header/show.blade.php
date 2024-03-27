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
                            <h2 class="mb-0">Posts</h2>
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
                            <td><h5 style="color: gray">: {{ $post->id }}</h5><hr></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h4>Title </h4></td>
                            <td><h5 style="color: gray">: {{ $post->title }}</h5><hr></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><h4>Image </h4></td>
                            <td><h5 style="color: gray">: {{ $post->image }}</h5><hr></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><h4>Content </h4></td><hr>
                            <div>
                                <td style="width: 1%"><h5 style="color: gray">: {{ $post->content }}</h5></td>
                            </div>
                        </tr>
                    </tbody>
                </table>
                
                
                {{-- <small><h4 class="fw-bold">image :</h4>{{ $post->image }}</small> --}}
            </div>
        </div>
        <div class="w-50 m-3">
            
            <div class="card-header">
                <form onsubmit="return confirm('Data akan di hapus');"  action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    <a class="btn btn-primary btn-sm" href="{{ route('post.edit', $post->id) }}"><i class="material-icons-two-tone text-white"></i> Edit</a>
                    <a href="/post/" class="btn btn-success btn-sm">Back</a>
                </form>
            </div>
        </div>        
        
        
        {{-- @include('admin.components.404') --}}
        <img src="{{ Storage::url('public/posts/' . $post->image) }}" class="rounded me-3" alt=""style="width: 800px;">

        <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
