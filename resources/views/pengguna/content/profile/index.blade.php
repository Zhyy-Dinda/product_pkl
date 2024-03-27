@extends('pengguna.app')
@section('content')
<section class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
					<h5 class="text-white op-7 mb-2"><b> <i class="fa fa-home"></i> <i class="fa fa-row-right"> </i>User Profile</h5>
					<div class="ml-md-auto py-3 py-md-0">
						{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> --}}
						{{-- <a href="/dashboard" class="btn btn-success btn-sm btn-round text-white"><i class="fa fa-plus"></i> Add User</a> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			{{-- dashboard --}}
			
			

			
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

			{{-- profile --}}
			<div class="col-sm-6 col-md-12">
				<div class="card card-stats card-round">
					{{-- <a href="/users/detail" class="cards" style="text-decoration: none"> --}}
					<div class="card-body ">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-priy bubble-shadow-small">
									<img src="{{ $user && Storage::exists('public/user/'.Auth::user()->image) ? Storage::url('public/user/'.Auth::user()->image) : asset('img/logo/user_profile.png') }}" alt="..." class="avatar-img rounded-circle">
									{{-- <img src="{{ Storage::url('public/user/'.Auth::user()->image) }}" width="500" alt="..." class="avatar-img rounded"> --}}
								</div>
								</div>
								<div class="col col-stats ml-3 ml-sm-0">
									<div class="numbers">
										<p class="card-category">Profile Detail</p>
										<h4 class="card-title">{{ Auth::user()->name }}</h4>
										<p class="title">{{ Auth::user()->email }}</p>
									</div>
								</div>
							</div>
							<a href="{{ route('users-profile-edit',Auth::user()->id )}}" class="btn btn-outline-primary btn-sm">Edit Profile</a>
						
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					{{-- <a href="/Users/profile/edit" class="cards" style="text-decoration: none"> --}}
					<div class="card-body ">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-user"></i>
									</div>
								</div>
								<div class="col col-stats ml-3 ml-sm-0">
									<div class="numbers">
										{{-- <p class="card-category">Profile Edit</p> --}}
										<h4 class="card-title">{{ $user->count() }}</h4>
									</div>
								</div>
							</div>
						</a>
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
									<p class="card-category">Layanan Tersedia</p>
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
									<p class="card-category">Dinas Tersedia</p>
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