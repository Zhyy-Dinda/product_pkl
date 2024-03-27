@include('admin.components.header')


			<!-- Navbar Header -->
			{{-- @include('admin.components.navbar') --}}
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="javascriptvoid();search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item  hidden-caret">
                            <a class="nav-link dropdown-toggle" href="javascriptvoid();" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages 									
                                        <a href="javascriptvoid();" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="javascriptvoid();">
                                                <div class="notif-img"> 
                                                    <img src="../asset/img/jm_denis.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-img"> 
                                                    <img src="../asset/img/chadengle.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-img"> 
                                                    <img src="../asset/img/mlane.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-img"> 
                                                    <img src="../asset/img/talha.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  hidden-caret">
                            <a class="nav-link dropdown-toggle" href="javascriptvoid();" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="javascriptvoid();">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-img"> 
                                                    <img src="../asset/img/profile2.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="javascriptvoid();">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="javascriptvoid();" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Generated Report</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-database"></i>
                                                    <span class="text">Create New Database</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-pen"></i>
                                                    <span class="text">Create New Post</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-interface-1"></i>
                                                    <span class="text">Create New Task</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-list"></i>
                                                    <span class="text">Completed Tasks</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="javascriptvoid();">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file"></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
            
            
                        <li class="nav-item  hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascriptvoid();" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('icon/user.png') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="{{ asset('icon/user.png') }}" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p><a href="profile.html" class="btn btn-xs btn-info btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascriptvoid();">My Profile</a>
                                        <a class="dropdown-item" href="javascriptvoid();">My Balance</a>
                                        <a class="dropdown-item" href="javascriptvoid();">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascriptvoid();">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascriptvoid();">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		@include('admin.components.sidebar')
		<!-- End Sidebar -->

		<!-- content -->
		<div class="main-panel">

			<!-- Secction -->
			<head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
                <link rel="icon" type="image/png" href="{{ $setting && Storage::exits('public/icon/'.$setting->icon) ?  Storage::url('public/icon/'.$setting->icon): 'kosong'}}">
                <title>
                  {{ $setting->title_web ?? "kosong"}}
                </title>
                <!--     Fonts and icons     -->
                {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /> --}}
                <!-- Nucleo Icons -->
                {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
                <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
                <!-- Font Awesome Icons -->
                {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
                <!-- Material Icons -->
                {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> --}}
                <!-- CSS Files -->
                <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
                <!-- Nepcha Analytics (nepcha.com) -->
                <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
                {{-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}
              </head>
              
              
              
              <body class="blog-author bg-gray-200">
                <!-- Navbar Transparent -->
                {{-- @include('website.components.navbar1') --}}
                <!-- End Navbar -->
                <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
                @include('website.section.header')
                <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
                <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4" style="background: linear-gradient( #1d2591);">
                  <!-- START Testimonials w/ user image & text & info -->
                  <section class="py-sm-7 py-5 position-relative" >
                    <div class="container">
                      <div class="row">
                        <div class="col-12 mx-auto">
                          <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2 logo" data-bs-toggle="tooltip" data-bs-placement="left" title="Star us on Diskominfo" src="{{ asset('assets/img/logos/circle-logo.png') }}" alt="bruce" loading="lazy">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2 logo" data-bs-toggle="tooltip" data-bs-placement="right" title="Badan Siber Sandi Negara" src="{{ asset('image/Logo_BSSN_new.png') }}" alt="bruce" loading="lazy">
                          </div>
                          <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                              <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="mb-0">Profile CSIRT PrayaKota</h3>
                                <div class="d-block">
                                  {{-- <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button> --}}
                                  <a href="#post" class="btn btn-sm btn-outline-info text-nowrap mb-0">Read More</a>
                                  {{-- <a href="/" class="btn btn-sm bg-gradient-info text-nowrap mb-0">Lapor Insident</a> --}}
                                </div>
                              </div>
                              <div class="row mb-4">
                                <div class="col-auto">
                                  <span class="h6">323</span>
                                  <span>Posts</span>
                                </div>
                                <div class="col-auto">
                                  <span class="h6">3.5k</span>
                                  <span>Followers</span>
                                </div>
                                <div class="col-auto">
                                  <span class="h6">260</span>
                                  <span>Following</span>
                                </div>
                              </div>
                              @foreach ($data as $dt)
                              <p class="text-lg mb-0">
                                {!! $dt->content !!} <br><a href="/profile" class="text-info icon-move-right">More Profile
                                   <i class="fas fa-arrow-right text-sm ms-1"></i>
                                 </a>
                              @endforeach
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <!-- END Testimonials w/ user image & text & info -->
                <!-- START Blogs w/ 4 cards w/ image & text & link -->
                <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4" >
                  <hr>
                  {{-- post --}}
                  <section class="py-3"id="post">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                          <h3 class="mb-5">Lates Post</h3>
                        </div>
                      </div>
                      <div class="row">
                        {{-- card --}}
                        @forelse ($posts as $post)
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                              <a class="d-block blur-shadow-image">
                                <img src="{{ Storage::url('public/posts/'.$post->image) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                              </a>
                            </div>
                            <div class="card-body px-0">
                              <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">{{ $post->title }}</a>
                              </h5>
                              <p>
                                {!! Str::limit($post->content, 50) !!}
                              </p>
                              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        @empty
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                              <a class="d-block blur-shadow-image">
                                <img src="../assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                              </a>
                            </div>
                            <div class="card-body px-0">
                              <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                              </h5>
                              <p>
                                Finding temporary housing for your dog should be as easy as
                                renting an Airbnb. That’s the idea behind Rover ...
                              </p>
                              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        @endforelse
              
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                              <a class="d-block blur-shadow-image">
                                <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                              </a>
                            </div>
                            <div class="card-body px-0">
                              <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                              </h5>
                              <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                              </p>
                              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                              </a>
                            </div>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                              <a class="d-block blur-shadow-image">
                                <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                              </a>
                            </div>
                            <div class="card-body px-0">
                              <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                              </h5>
                              <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                              </p>
                              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                              </a>
                            </div>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-md-12 col-12">
                          <div class="card card-blog card-background cursor-pointer">
                            <div class="full-background" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy"></div>
                            <div class="card-body">
                              <div class="content-left text-start my-auto py-4">
                                <h2 class="card-title text-white">Flexible work hours</h2>
                                <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                                <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- END Blogs w/ 4 cards w/ image & text & link -->
                </div>

                <section>
                  <div class="page-header min-vh-100">
                    <div class="container">
                      <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                          <div style="border: 2 solid black;">
                
                            <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jp'); background-size: cover;" loading="lazy">
                              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                          </div>
                        </div>
                        <div style="margin-top: 50px;"></div>
                          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                                <h3 class="text-white text-primary mb-0">All Post</h3>
                              </div>
                            </div>
                            <div class="card-body">
                              <p class="pb-3">
                                For further questions, including partnership opportunities, please email hello@creative-tim.com
                                or contact using our contact form.
                              </p>
                              <div class="card-header d-flex p-0 position-relative">
                                <a class="d-block blur-shadow-image mx-3">
                                  <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg " loading="lazy" style="width: 500px;">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rem nam sunt?</p>
                                </a>
                                <div class="" style="width: 50%">
                                  <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae consequatur impedit reprehenderit in unde, voluptatem quia. Veritatis dignissimos minus officiis. Aliquid beatae facilis non nostrum maxime? Aut dolorem repellendus nostrum!</h5>
                                </div>
                              </div>
                              <section class="py-3"id="post">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <h3 class="mb-5">Lates Post</h3>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                                          </h5>
                                          <p>
                                            Finding temporary housing for your dog should be as easy as
                                            renting an Airbnb. That’s the idea behind Rover ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                
                                    {{-- image --}}
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                      <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                          <a class="d-block blur-shadow-image">
                                            <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                          </a>
                                        </div>
                                        <div class="card-body px-0">
                                          <h5>
                                            <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                          </h5>
                                          <p>
                                            If you’ve ever wanted to train a machine learning model
                                            and integrate it with IFTTT, you now can with ...
                                          </p>
                                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-12">
                                      <div class="card card-blog card-background cursor-pointer">
                                        <div class="full-background" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy"></div>
                                        <div class="card-body">
                                          <div class="content-left text-start my-auto py-4">
                                            <h2 class="card-title text-white">Flexible work hours</h2>
                                            <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                                            <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                                              <i class="fas fa-arrow-right text-xs ms-1"></i>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>

                {{-- profile --}}
                <section>
                  <div class="page-header min-vh-100">
                    <div class="container">
                      <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                          <div style="border: 2 solid black;">
              
                            <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jp'); background-size: cover;" loading="lazy">
                              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                          </div>
                        </div>
                        <div style="margin-top: 50px;"></div>
                          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                                <h3 class="text-white text-primary mb-0">Profile PerayaKota CSIRT</h3>
                              </div>
                            </div>
                            <div class="card-body">
                              <p class="pb-3">
                                For further questions, including partnership opportunities, please email hello@creative-tim.com
                                or contact using our contact form.
                              </p>
                              <P>“(Ingatlah) Kechilafan Satu Orang Sahaja Tjukup Sudah Menjebabkan Keruntuhan Negara” MAYJEN TNI DR. ROEBIONO KERTOPATI
              
                                  Pemerintah Kota mataram - Computer Security Incident Response Team ( MataramKota-CSIRT). 
                                  
                                  Bertanggung Jawab sebagai ketua MataramKota-CSIRT adalah Kepala Dinas Komunikasi dan Informatika Kota Mataram. 
                                  
                                  Anggota Tim dari MataramKota-CSIRT adalah beberapa staf yang ada pada Dinas Komunikasi dan Informatika Kota Mataram dan beberapa Pranata Komputer di lingkungan Pemerintah Kota Mataram. Dalam Pembentukannya, MataramKota-CSIRT mengemban misi : 
                                  
                                  a. Menciptakan Keamanan Siber pada Pemerintah Kota Mataram; 
                                  
                                  b. Membangun Kapasitas Sumber Daya Keamanan Siber pada Pemerintah Kota Mataram. Konstituen MataramKota-CSIRT yaitu Instansi Pemerintah pengguna TIK di lingkungan Kota Mataram.</P>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>

                <section class="py-lg-5">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="card box-shadow-xl overflow-hidden mb-5">
                          <div class="row">
                            <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy">
                              <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                <div class="mask bg-gradient-dark opacity-8"></div>
                                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                  <h3 class="text-white">Contact Information</h3>
                                  <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                                  <div class="d-flex p-2 text-white">
                                    <div>
                                      <i class="fas fa-phone text-sm"></i>
                                    </div>
                                    <div class="ps-3">
                                      <span class="text-sm opacity-8">(+40) 772 100 200</span>
                                    </div>
                                  </div>
                                  <div class="d-flex p-2 text-white">
                                    <div>
                                      <i class="fas fa-envelope text-sm"></i>
                                    </div>
                                    <div class="ps-3">
                                      <span class="text-sm opacity-8">hello@creative-tim.com</span>
                                    </div>
                                  </div>
                                  <div class="d-flex p-2 text-white">
                                    <div>
                                      <i class="fas fa-map-marker-alt text-sm"></i>
                                    </div>
                                    <div class="ps-3">
                                      <span class="text-sm opacity-8"> Kompleks Kantor Bupati Lombok Tengah Jl. Raden Puguh Puyung 83561</span>
                                    </div>
                                  </div>
                                  <div class="mt-4">
                                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                                      <i class="fab fa-facebook"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                                      <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                                      <i class="fab fa-dribbble"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                                      <i class="fab fa-instagram"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <form class="p-3" id="contact-form" method="post">
                                <div class="card-header px-4 py-sm-5 py-3">
                                  <h2>Say Hi!</h2>
                                  <p class="lead"> We'd like to talk with you.</p>
                                </div>
                                <div class="card-body pt-1">
                                  <div class="row">
                                    <div class="col-md-12 pe-2 mb-3">
                                      <div class="input-group input-group-static mb-4">
                                        <label>My name is</label>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                      </div>
                                    </div>
                                    <div class="col-md-12 pe-2 mb-3">
                                      <div class="input-group input-group-static mb-4">
                                        <label>I'm looking for</label>
                                        <input type="text" class="form-control" placeholder="What you love">
                                      </div>
                                    </div>
                                    <div class="col-md-12 pe-2 mb-3">
                                      <div class="input-group input-group-static mb-4">
                                        <label>Your message</label>
                                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 text-end ms-auto">
                                      <button type="submit" class="btn bg-gradient-info mb-0">Send Message</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                
                @include('website.components.footer')
                <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
              
              

			@include('admin.components.footer')
		</div>
		<!-- end content -->
		
		<!-- Custom template | don't include it in your project! -->
		@include('admin.components.custom_setting')
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	@include('admin.components.script')
</body>
</html>
