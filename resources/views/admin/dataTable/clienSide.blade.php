@extends('admin.app')
@section('links')
 <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css"/>
@endsection

@section('content')
    <!-- [ breadcrumb ] start -->
    <section class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">User</h2>
                        <h5 class="text-white op-7 mb-2"><b> 
                            <a href="/dashboard" calss="text-light">
                                <i class="fa fa-home text-light"></i>
                            </a>
                        </b> Dashboard > user
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
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                            <a href="/post/create" class="btn btn-success btn-round btn-sm mb-3 text-light"><i class="fa fa-plus"></i> Add Post</a>
                            <form class="form-inline" action="{{ route('user.index') }}" method="GET">
                                <input type="search" name="search" class="form-control form-sm mr-sm-2" placeholder="Search" aria-label="Search" value="{{ $request->get('search') }}">
                                <button class="btn btn-primary btn-icon btn-round mb-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="clienSide">
                                <thead>
                                    <tr class="text-center" >
                                        <th scope="col">No</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)   
                                        <tr class="text-center">
                                            <td scope="row">{{ $loop->iteration}}</td>
                                            <td scope="row">
                                                 <img src="{{ $user && Storage::exists('public/user/'.$user->image) ? Storage::url('public/user/'.$user->image) : asset('img/logo/user_profile.png') }}" width="60" alt="" class="image-rounded m-2">
                                            </td>
                                            <td scope="row">{{ $user->name ?? 'title' }}</td>
                                            <td scope="row">{{ $user->email ?? 'Email' }}</td>
                                
                                            {{-- <td > {{ Str::limit($user->content, 50) }}</td> --}}
                                            <td scope="d-flex">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('user.destroy', $user->id ?? 'apus') }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-outline-primary btn-sm "href="{{ route('user.edit', $user->id ?? 'edit') }}"><i class="fa fa-edit"></i></a>
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="m-3">
                                {{-- {{ $users->links() }} --}}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>

    @endsection
    @section('scripts')
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script>
        $(document).ready( function (){
            $('#clienSide').DataTable();
        })
    </script>
    @endsection
