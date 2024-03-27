
<div class="sidebar sidebar-style-2 bg">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ $user && Storage::exists('public/user/'.Auth::user()->image) ? Storage::url('public/user/'.Auth::user()->image) : asset('img/logo/user_profile.png') }}" alt="..." class="avatar-img rounded-circle">
                    {{-- <img src="{{ Storage::url('public/user/'.Auth::user()->image) }}" alt="..." class="avatar-img rounded-circle"> --}}
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
                                <a href="/users/profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="/users/edit">
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
         
            <ul class="nav nav-primary">
                <li class="nav-item active mb-3">
                    <a href="/users/dashboard" class="" >
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#submenu">
                        <div class="text-primary">
                            <i style="color: blue;" class="fas fa-tags bg-gradieant-primary"></i>
                        </div>
                        <p>Tiket</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/users">
                                    <i style="color: blue" class="fas fa-id-card"></i>
                                    <span class="">Tiket Anda</span>
                                    <span class="badge badge-outline-success">2</span>
                                </a>
                            </li>
                            
                            {{-- setting --}}
                            <li >
                                <a href="/users">
                                    <i style="color: blue" class="fas fa-plus"></i>
                                    <p>Buat tiket</p>
                                    
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/users/profile" class="" >
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/users/kategori" class="" >
                        <i class="fas fa-id-card"></i>
                        <p>Kategori</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
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