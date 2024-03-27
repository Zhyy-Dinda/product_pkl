<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{ $setting->title_web ?? "default" }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	{{-- <link rel="icon" type="image/png" id="favicon" href="default">
	<script>
		// Letakkan di bagian body atau footer HTML
		document.addEventListener('DOMContentLoaded', function() {
			var favicon = document.getElementById('favicon');
			
			// Setel href favicon menggunakan JavaScript jika ditemukan
			@if($setting && Storage::exists('public/icon/'.$setting->icon))
				favicon.href = '{{ Storage::url('public/icon/'.$setting->icon) }}';
			@endif
		});
	</script> --}}
	
	<!-- Fonts and icons -->
	<script src="{{ asset('../asset/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset("../asset/css/fonts.min.css") }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('../asset/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('../asset/css/atlantis.min.css') }}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('../asset/css/demo.css') }}">

	@yield('links')
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="/" class="logo">
					<img id="logo" src="{{ $setting && Storage::exists('public/logo/'.$setting->logo) ? Storage::url('public/logo/'.$setting->logo) : asset('img/logo/logo-white.png') }}" width="190" alt="navbar brand" class="image-fluid">
					{{-- <img id="logo" src="{{ Storage::url('public/logo/'.$setting->logo) }}" width="230" alt="navbar brand" class="image-fluid"> --}}
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->