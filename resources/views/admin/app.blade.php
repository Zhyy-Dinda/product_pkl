@include('admin.components.header')


			<!-- Navbar Header -->
			@include('admin.components.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		@include('admin.components.sidebar')
		<!-- End Sidebar -->

		<!-- content -->
		<div class="main-panel">

			<!-- Secction -->
			@yield('content')


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