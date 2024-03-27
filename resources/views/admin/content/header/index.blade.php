@extends('admin.app')
@section('content')
    <section class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Header</h2>
                        <h5 class="text-white op-7 mb-2"><b> <i class="fa fa-user"></i> {{ Auth::user()->name }}</b> Dashboard
                        </h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="/dashboard" class="btn btn-white btn-border btn-round mr-2"><i class="fa fa-home"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table caption-top">
                                    <caption>List of users</caption>
                                    <thead>
                                        <tr>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">#</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Image</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Title</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Content</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($header as $dt)
                                            <tr>
                                                <th style="background-color: rgb(238, 238, 238)" scope="row">
                                                    {{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ Storage::url('public/header/' . $dt->image) }}"
                                                        class="rounded" alt="" style="width: 150px;">
                                                </td>
                                                <td>{{ $dt->title }}</td>
                                                <td style="background-color: rgb(238, 238, 238)">{!! Str::limit($dt->content, 40) !!}
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('header.destroy', $dt->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="d-flex">
                                                            <a href="{{ route('header.show', $dt->id) }}" class="btn-sm"
                                                                href="#!"><i class="fa fa-eye text-warning"></i>
                                                            </a>
                                                            <a class="btn-sm" href="{{ route('header.edit', $dt->id) }}"><i
                                                                    class="fa fa-edit text-primary"></i>
                                                            </a>
                                                            <button type="submit" class="btn-sm border-none"><i
                                                                    class="fa fa-trash text-danger"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="ml-md-auto py-2 px-3 mb-4 py-md-0">
                                                <a href="{{ route('header.create') }}"
                                                    class="btn btn-success btn-round">Add</a> 
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
