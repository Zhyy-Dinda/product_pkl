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
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Heading</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Title</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Content</th>
                                            <th style="background-color: rgb(192, 192, 190)" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($profile as $dt)
                                        <tr>
                                            <th style="background-color: rgb(238, 238, 238)" scope="row">
                                                {{ $no++ }}</th>
                                            <td>
                                                <img src="{{ Storage::url('public/profile/' . $dt->image) }}"
                                                    class="rounded" alt="" style="width: 150px;">
                                            </td>
                                            <td style="background-color: rgb(230, 230, 238)">{{ $dt->heading }}</td>
                                            <td>{{ $dt->title }}</td>
                                            <td style="background-color: rgb(238, 238, 238)">{!! Str::limit($dt->content,40) !!}
                                            </td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('profile.destroy', $dt->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="d-flex">
                                                        <a href="{{ route('profile.show', $dt->id) }}" class="btn btn-ary btn-sm btn-round" data-bs-toggle="tooltip" data-bs-placement="top" title="Show"
                                                            href="#!"><i class="fas fa-eye text-warning"></i>
                                                            </a>
                                                        <a class="btn btn- btn-sm btn-round" data-bs-toggle="tooltip" data-bs-placement="top" title="edit"
                                                            href="{{ route('profile.edit', $dt->id) }}">
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


