@extends('admin.app')
@section('content')
    <!-- [ breadcrumb ] start -->
    <section class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Data Setting</h2>
                        <h5 class="text-white op-7 mb-2"><b><a href="/dashboard" class="text-light"><i class="fa fa-home"></i></a></b> Dashboard
                        </h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                        {{-- <a href="/setting" class="btn btn-secondary btn-round">Back</a> --}}
                    </div>
                </div>
            </div>
        {{-- </div> --}}

        <!-- [ breadcrumb ] end -->
        <div class="pc-content">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                {{-- {{ $setting->count() }} --}}
                                <div class="table-responsive">
                                    @empty($setting)
                                    <div class="alert alert-danger my-2">
                                        <a href="{{ route('setting.create') }}" id="setting-create" class="btn btn-success btn-sm mb-1 text-light">Tambah</a>
                                        <span class="text"> hdata belum ada!!</span>
                                    </div>
                                @endempty
                                    <table class="table table-de ">
                                        <caption>List of Setting</caption>
                                        <div class="card">
                                            <h1>tile web</h1>
                                           <span> {{ $setting->title_web ?? 'default' }}</span>
                                        </div>
                                        <div class="card">
                                            <h1>icon</h1>
                                           <span> <img id="logo"
                                            src="{{ $setting && Storage::exists('public/icon/' . $setting->icon) ? Storage::url('public/icon/' . $setting->icon) : "default" }}"
                                            width="40" alt="navbar brand" class="image-fluid"></span>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title web</th>
                                                <th scope="col">icon</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp

                                        <tbody>
                                            <tr style="background: rgb(133, 132, 132); color:white">
                                                <td scope="row">{{ $setting ? $no++ : "0" }}</td>
                                                <td scope="row">{{ $setting->title_web ?? 'default' }}</td>

                                                <td scope="row">
                                                    <img id="logo"
                                                        src="{{ $setting && Storage::exists('public/icon/' . $setting->icon) ? Storage::url('public/icon/' . $setting->icon) : "default" }}"
                                                        width="40" alt="navbar brand" class="image-fluid">
                                                </td>
                                                <td scope="row">
                                                    <img id="logo"
                                                        src="{{ $setting && Storage::exists('public/logo/' . $setting->logo) ? Storage::url('public/logo/' . $setting->logo) : "default" }}"
                                                        width="230" alt="navbar brand" class="image-fluid">

                                                </td>
                                                <td scope="row">{{ $setting->heading ?? 'default' }}</td>

                                                {{-- <td > {{ Str::limit($setting->content, 50) }}</td> --}}
                                                <td scope="d-flex">
                                                   @if ($setting == true)
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('setting.destroy', $setting->id ?? 'apus') }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a class="btn btn-primary btn-sm btn-round"
                                                        href="{{ route('setting.edit', $setting->id ?? 'edit') }}">Edit</a>
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm btn-round">Delete</button>

                                                </form>
                                                   @if ($setting == false)

                                                       kosong
                                                   
                                                   @else
                                                       
                                                   @endif
                                                       
                                                   @endif
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                    {{-- {{ $setting->links() }} --}}
                                </div>
                                <div class="row" style="max-width: 120px">
                                    {{-- <td class="card w-4 " scope="row">{!! $setting->maps ?? "kosong" !!}</td> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
