<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"><link rel="icon" type="image/png" id="favicon" href="default">

  <script>
      // Letakkan di bagian body atau footer HTML
      document.addEventListener('DOMContentLoaded', function() {
          var favicon = document.getElementById('favicon');
          
          // Setel href favicon menggunakan JavaScript jika ditemukan
          @if($setting && Storage::exists('public/icon/'.$setting->icon))
              favicon.href = '{{ Storage::url('public/icon/'.$setting->icon) }}';
          @endif
      });
  </script>

  <title>
    {{ $setting->title_web ?? "default" }}
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Kanban scripts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-kit/3.0.3/css/material-kit.css" integrity="sha512-O1Iyk1hSWQMilXqlrhY9RpDnln9K9FzljvAW6hpNJaFDlAe9Txk4kTPlcHBFaY5YxZjBOz6WBTbtg8Hjsfiw9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/material-kit/3.0.3/js/material-kit.min.js" integrity="sha512-9EgoG4Ypp+QejqrxPVXIpj5qjGkAZKuAJSA1O/q9yfBjxYRY6SH/u15L7M+y6U3w4qMxoUQfZxABPH7zEEEgMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<style>
  .logo:hover{
    scale: 105%
  }
</style>

<body class="blog-author bg-gray-200">
  <!-- Navbar Transparent -->
  @include('website.components.navbar1')
  <!-- End Navbar -->
  <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
  @include('website.section.header')
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4" style="background: linear-gradient( #1d2591);">
    <!-- START Testimonials w/ user image & text & info -->
 


    
    
    {{-- prifile --}}
    <section class="py-sm-7 py-5 position-relative" >
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2 logo" data-bs-toggle="tooltip" data-bs-placement="left" title="Diskominfo Lombok Tengah" src="{{ asset('assets/img/logos/circle-logo.png') }}" alt="bruce" loading="lazy">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2 logo" data-bs-toggle="tooltip" data-bs-placement="right" title="Badan Siber & Sandi Negara" src="{{ asset('image/Logo_BSSN_new.png') }}" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-10 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0">Profile {{ $profile->title ?? "Profile Default"}}</h3>
                  <div class="d-block">
                    {{-- <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button> --}}
                    <a href="#post" class="btn btn-sm btn-outline-info text-nowrap mb-0">Read More</a>
                  </div>
                </div>
                <img src="{{ $profile && Storage::exists('public/profile/'.$profile->image) ? Storage::url('public/profile/'.$profile->image) : asset('../img/default.jpg')}}" width="300" style="border-radius:12px;" class="mb-3">
                <div class="row mb-4">
                  <div class="col-auto">
                    <span class="h6">{{$data_post->count() }}</span>
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
                <p class="text-lg mb-0">
                  {!! $profile->content ?? "null" !!} <br><a href="/profile_web" class="text-info icon-move-right">More Profile
                     <i class="fas fa-arrow-right text-sm ms-1"></i>
                   </a>
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
                <a href="/artikel_web" class="text-info text-sm icon-move-right">Read More
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
                  <img src="../img/default.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
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
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
              <div class="card-header p-0 position-relative">
                <a class="d-block blur-shadow-image">
                  <img src="../img/default.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
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
                  <img src="../img/default.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
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
          @endforelse


          <div class="col-lg-3 col-md-12 col-12">
            <div class="card card-blog card-background cursor-pointer">
              <div class="full-background" style="background-image: url('../img/default.jpg')" loading="lazy"></div>
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
{{--   
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
                    <h2>Contact Us!</h2>
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
  <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- --> --}}
  
  @include('website.components.footer')
  <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>