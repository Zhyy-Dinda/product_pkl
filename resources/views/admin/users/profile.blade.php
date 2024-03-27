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

        {{-- profile --}}
        <div class="page-inner mt--5 justify-content-center">
			<div class="row mt--2 ">
                <div class="col-md-8 ">
                    <div class="card card-profile ">
                        <div class="card-header" style="background-image: url({{ asset('img/bg/home-bg.jpg') }})">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="{{ $user && Storage::exists('public/user/'.Auth::user()->image) ? Storage::url('public/user/'.Auth::user()->image) : asset('img/logo/user_profile.png') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{ Auth::user()->name }}</div>
                                <div class="job">{{ Auth::user()->email }}</div>
                                <div class="desc">Admin</div>
                                <div class="social-media">
                                    <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                                    </a>
                                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                                    </a>
                                </div>
                                <div class="view-profile">
                                    <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Post</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number">134</div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
