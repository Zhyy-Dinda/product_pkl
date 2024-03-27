@include('pengguna.components.header')


			<!-- Navbar Header -->
			@include('pengguna.components.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		@include('pengguna.components.sidebar')
		<!-- End Sidebar -->

		<!-- content -->
		<div class="main-panel">

			<!-- Secction -->
			@yield('content')


			@include('pengguna.components.footer')
		</div>
		<!-- end content -->
		
		<!-- Custom template | don't include it in your project! -->
		@include('pengguna.components.custom_setting')
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	@include('pengguna.components.script')
</body>
</html>