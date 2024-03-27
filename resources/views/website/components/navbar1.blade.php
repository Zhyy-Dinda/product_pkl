<div class="containe position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg border-radius-3 m-2  top-0 z-index-3 shadow position-absolute  start-0 end-0 "style="background-color: white; color:black;" >
        <div class="container-fluid p-2">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="/#header" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
            <img src="{{ asset('assets/img/logos/gray-logos/logo-black.png') }}" width="200" style="margin: -20px;" alt="">
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              {{-- <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/dashboard">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Home">Dashboar</p>
                </a>
              </li> --}}
              
              {{-- profile --}}
             
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <i class="fa fa-home me-1"></i>
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Profile">Home</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/profile_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Profile">Profile</p>
                </a>
              </li>
              {{-- artikel --}}
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/artikel_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Artikel">Artikel</p>
                </a>
              </li>
              {{-- rfc --}}
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/rfc_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to RFC2350">RFC2350</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/layanan_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Layanan">Layanan</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/panduan_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Layanan">Panduan</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/kontak_web">
                  {{-- <i class="fa fa-user me-1"></i> --}}
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View to Layanan"> Kontak</p>
                </a>
              </li>
             
              <li class="nav-item my-auto ms-3 ms-lg-0">
                {{-- <a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-lombok-tengah" target="_blank" class="btn btn-sm  bg-gradient-info  mb-0 me-1 mt-2 mt-md-0 icon-move-right">Lapor <i class="fas fa-arrow-right text-xs ms-1"></i></a> --}}
                <a href="#exempleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm  bg-gradient-info  mb-0 me-1 mt-2 mt-md-0 icon-move-right">Lapor <i class="fas fa-arrow-right text-xs ms-1"></i></a>
                {{-- <button type="button" class="btn btn-sm  bg-gradient-info  mb-0 me-1 mt-2 mt-md-0 icon-move-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Launch demo modal
                </button> --}}
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>
@include('website.components.modal')
@include('website.components.register')
