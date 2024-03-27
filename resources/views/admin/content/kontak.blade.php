@extends('admin.app')
@section('content')
<section class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<a href="#">
						<h5 class="text-white op-7 mb-2"><b> <i class="fa fa-home"></i> Profile CSIRT</h5>
					</a>
					<div class="ml-md-auto py-3 py-md-0">
                        {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> --}}
						<a href="/profile/create" class="btn btn-success btn-sm btn-round text-white"><i class="fa fa-plus"></i> Add User</a>
                        @empty($profile)
                        @endempty
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			{{-- dashboard --}}
            <div class="container">
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
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Nama</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">telpon</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Alamat</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">email</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Message</th>
                                            <th  class="text-center" style="background-color: rgb(192, 192, 190)" scope="col">Ststus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kontak as $kt)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kt->name }}</td>
                                            <td>{{ $kt->tlpn }}</td>
                                            <td>{{ $kt->alamat }}</td>
                                            <td>{!! $kt->email !!}</td>
                                            <td>{!! $kt->message !!}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kontak.destroy', $kt->id) }}" method="POST">
                                                    {{-- <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-success">konfirm</button>
                                                </form>
                                            </td>
                                        </tr>
                                      @empty
                                          <div class="alert alert-danger">
                                              Data Kontak    belum Tersedia.
                                          </div>
                                      @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
	    </div>
	</div>
</section>
@endsection