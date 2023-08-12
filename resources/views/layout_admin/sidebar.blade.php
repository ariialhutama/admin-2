<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="{{ route('dashboard') }}">
				<i class="mdi mdi-grid-large menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item nav-category">UI Elements</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('kategori.index') }}" aria-expanded="false" aria-controls="ui-basic">
				<i class="menu-icon mdi mdi-floor-plan"></i>
				<span class="menu-title">Kategori</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('produk.index') }}" aria-expanded="false" aria-controls="form-elements">
				<i class="menu-icon mdi mdi-card-text-outline"></i>
				<span class="menu-title">Produk</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
				<i class="menu-icon mdi mdi-chart-line"></i>
				<span class="menu-title">Suplier</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
				<i class="menu-icon mdi mdi-table"></i>
				<span class="menu-title">Penjualan</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('member.index') }}" aria-expanded="false" aria-controls="tables">
				<i class="menu-icon fa-solid fa-house"></i>
				<span class="menu-title">Member</span>
			</a>
		</li>
	</ul>
</nav>
