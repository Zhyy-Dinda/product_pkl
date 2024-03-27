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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Beranda</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Beranda</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- [ breadcrumb ] end -->
        @forelse ($beranda as $dt)
            <div class="card-header">
            </div>
            <div class="col-md-12">
                <div class="card shadow">

                    <div class="card-body ">
                        <h5># Data Beranda</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.index') }} " method="POST" enctype="multipart/form-data"> --}}
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" value="{{ $dt->title }}"
                                        id="exampleInputEmail1" aria-describedby="TitlelHelp" placeholder="Title">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                            anyone else.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Selogan</label>
                                    <input type="text" class="form-control" value="{{ $dt->sub_title }}"
                                    placeholder="Text">                                </div>
                                {{-- <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label for="exampleCheck1">Check me out</label>
                                </div> --}}
                                {{-- <button type="submit" class="btn btn-primary mb-4">Save</button> --}}
                                <div class="form-group">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" value="{{ $dt->heading }}"
                                        placeholder="Text">
                                </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea  @error('content') is-invalid @enderror" name="content" id="classic-editor" placeholder="content" cols="0">{!! old('content', $dt->content) !!}</textarea>
                                </div>
                                </form>
                            </div>
                        </div>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('beranda.destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('beranda.edit', $dt->id) }}" class="btn btn-info"><i
                                    class="material-icons-two-tone text-white">edit_road</i> Edit</a>
                            <button type="submit" class="btn btn-danger"><i
                                    class="material-icons-two-tone text-white">delete_outline</i> Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @empty
            <a href="/admin/beranda/create" class="btn btn-success">Tambah</a>

            @include('admin.components.404')
        @endforelse
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        
        {{-- summernote --}}
<script src="{{ asset('../assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
<script>
  (function () {
    ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
      console.error(error);
    });
  })();
</script>
        <!-- [ Main Content ] end -->
    </div>
@endsection
