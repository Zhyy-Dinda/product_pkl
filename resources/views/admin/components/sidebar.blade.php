
<div class="sidebar sidebar-style-2 bg">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ $user && Storage::exists('public/user/'.Auth::user()->image) ? Storage::url('public/user/'.Auth::user()->image) : asset('img/logo/user_profile.png') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->role }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="/user-profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user/edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="/setting">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="/logout" class="d-flex">
                                    <span class="link-collapse d-flex">Logouts
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            {{-- <a href="/" target="_blank" class="text-center justify-content-center"><span class="btn-label mr-2"> <i class="fa fa-link"></i> </span>blank Website</a>  --}}
            <ul class="nav nav-outline-success">
                <li class="nav-item active">
                    <a href="/" target="_blank" class="btn btn-round btn-sm ">
                        <i class="fas fa-link"></i>
                        <p class="icon-move-right">Blank Web </p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="/dashboard" class="" >
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>


                <li class="nav-section" style="color: blue;">
                    <span class="sidebar-mini-icon">
                        <div class="bg-primary" style="color: blue;">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </span>
                    <h4 class="text-section">Data Master</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#submenu">
                        <div class="text-primary">
                            <i style="color: blue;" class="fas fa-bars bg-gradieant-primary"></i>
                        </div>
                        <p>Data Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/user">
                                    <i style="color: blue" class="fas fa-user"></i>
                                    <span class="">User</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="/kontak">
                                    <i style="color: blue" class="fas fa-comments"></i>
                                    <span class="">Lapor</span>
                                </a>
                            </li>
                            
                            
                            <li>
                                <a href="/kontak">
                                    <i style="color: blue" class="fas fa-phone"></i>
                                    <span class="">Kontak</span>
                                </a>
                            </li>
                            
                            {{-- setting --}}
                            <li >
                                <a href="/setting">
                                    <i style="color: blue" class="fas fa-cog"></i>
                                    <p>Setting</p>
                                    <span class="badge badge-outline-success">2</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>

                {{-- data home --}}
                <li class="nav-item">
                    <a data-toggle="collapse" href="#home">
                        <div class="text-primary">
                            <i style="color: blue;" class="fas fa-home bg-gradieant-primary"></i>
                        </div>
                        <p>Data Home</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="home">
                        <ul class="nav nav-collapse">
                            
                            <li>
                                <a href="/header">
                                    <span class="sub-item">Header</span>
                                </a>
                            </li>
                            <li>
                                <a href="/profile">
                                    <span class="sub-item">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="/artikel">
                                    <span class="sub-item">Post</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#website">
                        <div class="text-primary">
                            <i style="color: blue;" class="fas fa-tasks bg-gradieant-primary"></i>
                        </div>
                        <p>Data Website</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="website">
                        <ul class="nav nav-collapse">
                            
                            
                            <li>
                                <a href="/profile">
                                    <span class="sub-item">Profile CSIRT</span>
                                </a>
                            </li>
                            <li>
                                <a href="/artikel">
                                    <span class="sub-item">Post Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="/artikel">
                                    <span class="sub-item">RFC2350</span>
                                </a>
                            </li>
                            <li>
                                <a href="/panduan">
                                    <span class="sub-item">Panduan</span>
                                </a>
                            </li>
                            <li>
                                <a href="/layanan">
                                    <span class="sub-item">Layanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kontak">
                                    <span class="sub-item">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                

                <li class="nav-item">
                    <a href="/logout">
                        <i style="color: blue" class="fas fa-sign-in-alt"></i>
                        <p>Logout</p>
                        {{-- <span class="badge badge-outline-success">2</span> --}}
                    </a>
                </li>
               
                {{-- <li class="mx-2 mt-2">
                    <a href="/view" class="btn btn-outline-primary btn-block btn-rounded"><span class="btn-label mr-2"> <i class="fa fa-link"></i> </span>Lihat Website</a> 
                </li> --}}
            </ul>
        </div>
    </div>
</div>