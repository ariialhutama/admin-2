<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ config('app.name') }} | @yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/feather/feather.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/mdi/css/materialdesignicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/ti-icons/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/typicons/typicons.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/css/vendor.bundle.base.css') }}">
	<!-- endinject -->
	{{-- fontawesome --}}
	<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.css') }}">
	{{-- End fontawesome --}}
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('ADM2/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet"
		href="{{ asset('ADM2/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('ADM2/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
	<link rel="stylesheet" href="{{ asset('ADM2/template/js/select.dataTables.min.css') }}">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('ADM2/template/css/vertical-layout-light/style.css') }}">
	<!-- endinject -->
	<link rel="shortcut icon" href="{{ asset('ADM2/template/images/favicon.png') }}" />
</head>

<body>
	<div class="container-scroller">

		<!-- partial:partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="index.html">
						<img src="{{ asset('ADM2/template/images/logo.svg') }}" alt="logo" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="index.html">
						<img src="{{ asset('ADM2/template/images/logo-mini.svg') }}" alt="logo" />
					</a>
				</div>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-top">
				<ul class="navbar-nav">
					<li class="nav-item font-weight-semibold d-none d-lg-block ms-0">

						@yield('good')
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">

					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
						<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<img class="img-xs rounded-circle" src="{{ asset('ADM2/template/images/faces/face8.jpg') }}"
								alt="Profile image">
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle" src="{{ asset('ADM2/template/images/faces/face8.jpg') }}"
									alt="Profile image">
								<p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
								<p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
							</div>
							<a href="{{ route('profile.show') }}" class="dropdown-item"><i
									class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
								Profile <span class="badge badge-pill badge-danger">1</span></a>
							<a type="submit" onclick="$('#logout').submit()" class="dropdown-item"><i
									class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
								Out</a>
							<form action="{{ route('logout') }}" id="logout" method="post" style="display: none">
								@csrf
							</form>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-bs-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
