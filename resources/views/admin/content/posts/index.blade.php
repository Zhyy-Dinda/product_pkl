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
                <a href="/post/create" class="btn btn-success btn-round btn-sm mb-3 text-light"><i class="fa fa-plus"></i> Add Post</a>
            </div>
        </div>
        <div class="page-inner mt--5 justify-content-center">
			<div class="row mt--2 ">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <form class="form-inline" action="{{ route('post.index') }}" method="GET">
                                <input type="search" name="search" class="form-control form-sm mr-sm-2" placeholder="Search" aria-label="Search" value="{{ $request->get('search') }}">
                                <button class="btn btn-primary btn-sm btn-round mb-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>  
                            <div class="table-responsive">
                                <table class="table caption-top">
                                    <caption>List of users</caption>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">#</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Image</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Title</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Content</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($posts as $dt)
                                            <tr class="text-center">
                                                <td style="background-color: rgb(238, 238, 238)" scope="row">
                                                    {{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ Storage::url('posts/'.$dt->image) }}"
                                                        class="rounded" alt="" style="width: 100px;">
                                                </td>
                                                <td>{{ $dt->title }}</td>
                                                <td style="background-color: rgb(238, 238, 238)">{!! Str::limit($dt->content, 40) !!}
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('post.destroy', $dt->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="d-flex">
                                                            <a href="{{ route('post.show', $dt->id) }}" class="btn btn-ary btn-sm btn-round" data-bs-toggle="tooltip" data-bs-placement="top" title="Show"
                                                                href="#!"><i class="fas fa-eye text-warning"></i>
                                                                </a>
                                                            <a class="btn btn- btn-sm btn-round" data-bs-toggle="tooltip" data-bs-placement="top" title="edit"
                                                                href="{{ route('post.edit', $dt->id) }}">
                                                                <i class="fa fa-edit text-primary"></i>
                                                                </a>
                                                            <button type="submit" class="btn bg-gradient-danger btn-sm btn-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Delete">
                                                                <i class="fa fa-trash  text-danger"></i>
                                                                </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
