@includeIf('layout_admin.header')


<!-- partial -->
<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_settings-panel.html -->
	<div class="theme-setting-wrapper">
		<div id="settings-trigger"><i class="ti-settings"></i></div>
		<div id="theme-settings" class="settings-panel">
			<i class="settings-close ti-close"></i>
			<p class="settings-heading">SIDEBAR SKINS</p>
			<div class="sidebar-bg-options selected" id="sidebar-light-theme">
				<div class="img-ss rounded-circle bg-light border me-3"></div>Light
			</div>
			<div class="sidebar-bg-options" id="sidebar-dark-theme">
				<div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
			</div>
			<p class="settings-heading mt-2">HEADER SKINS</p>
			<div class="color-tiles mx-0 px-4">
				<div class="tiles success"></div>
				<div class="tiles warning"></div>
				<div class="tiles danger"></div>
				<div class="tiles info"></div>
				<div class="tiles dark"></div>
				<div class="tiles default"></div>
			</div>
		</div>
	</div>

	<!-- partial -->
	@includeIf('layout_admin.sidebar')
	<!-- partial -->
	<div class="main-panel">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<div class="home-tab">
						<div class="d-sm-flex align-items-center justify-content-between border-bottom">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
										aria-controls="overview" aria-selected="true">Overview</a>
								</li>
							</ul>
						</div>
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
		@includeIf('layout_admin.footer')
