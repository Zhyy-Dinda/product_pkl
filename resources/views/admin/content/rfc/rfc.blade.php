@extends('admin.app')
@section('content')
<section class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">RFC2350</h2>
					<h5 class="text-white op-7 mb-2"><b> <i class="fa fa-home"></i> <i class="fa fa-row-right"> </i>Rfc2350</h5>
					<div class="ml-md-auto py-3 py-md-0">
						{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> --}}
						<a href="/dashboard" class="btn btn-success btn-sm btn-round text-white"><i class="fa fa-plus"></i> Add User</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			{{-- dashboard --}}
			<div class="col-md-12">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title">Statistik keseluruhan</div>
						<div class="card-category">Informasi harian tentang statistik dalam sistem</div>
						<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-1"></div>
								<h6 class="fw-bold mt-3 mb-0">Posts Artikel</h6>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-2"></div>
								<h6 class="fw-bold mt-3 mb-0">Users</h6>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-3"></div>
								<h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			

		

			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="card-title fw-mediumbold">Suggested People</div>
						<div class="card-list">
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Jimmy Denis</div>
									<div class="status">Graphic Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Chad</div>
									<div class="status">CEO Zeleaf</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Talha</div>
									<div class="status">Front End Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">John Doe</div>
									<div class="status">Back End Developer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Talha</div>
									<div class="status">Front End Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Jimmy Denis</div>
									<div class="status">Graphic Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			
		</div>

		{{-- card --}}

		<style>
			.cards{
				background: #000;
			}
			.cards:hover{
				scale: 102%;
			}
		</style>
		<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-round">
						<a href="/user" class="cards" style="text-decoration: none">
						<div class="card-body ">
							<div class="row align-items-center">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
											<i class="flaticon-users"></i>
										</div>
									</div>
									<div class="col col-stats ml-3 ml-sm-0">
										<div class="numbers">
											<p class="card-category">User</p>
											<h4 class="card-title">{{ $user->count() }}</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-info bubble-shadow-small">
									<i class="flaticon-user"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Admin</p>
									<h4 class="card-title">2</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			

			{{-- 2 --}}
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-success bubble-shadow-small">
									<i class="flaticon-graph"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Sales</p>
									<h4 class="card-title">$ 1,345</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- 3 --}}

			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-secondary bubble-shadow-small">
									<i class="flaticon-success"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Order</p>
									<h4 class="card-title">576</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			{{-- 4 --}}
		

		</div>
	</div>
</section>
@endsection