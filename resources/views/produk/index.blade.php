@extends('layout_admin.master_admin')
@section('title')
	Produk
@endsection

@section('good')
	<h1 class="welcome-text">
		Daftar Produk - {{ config('app.name') }}
	</h1>
@endsection
@section('content')
	<div class="tab-content tab-content-basic">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-title d-sm-flex align-items-center justify-content-between">
							<h4>Daftar Produk - {{ config('app.name') }}</h4>
							<div class="card-wrapper">
								<button onclick="addForm('{{ route('produk.store') }}')" class="btn btn-success btn-lg text-white">Tambah
									Data</button>
								<button onclick="cetakBarcode()" class="btn btn-primary btn-lg text-white"><i class="fa fa-barcode"></i> Cetak
									Barcode</button>
								<button onclick="deleteSelected('{{ route('produk.delete_selected') }}')"
									class="btn btn-danger btn-lg text-white" id="deletedSelect"><i class="fa fa-trash"></i>
									Hapus</button>
							</div>
						</div>
						<div class="table-responsive">
							<form action="" method="post" class="form-produk">
								@csrf
								<table class="table table-hover">
									<thead>
										<th>
											<input type="checkbox" name="select_all" id="select_all">
										</th>
										<th width="5%">No</th>
										<th>Kode</th>
										<th>Nama</th>
										{{-- <th>Merk</th> --}}
										<th>Kategori</th>
										<th>Harga Beli</th>
										<th>Harga Jual</th>
										{{-- <th>Diskon</th> --}}
										<th>Stok</th>
										<th width="15%">Aksi</th>
									</thead>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@includeIf('produk.form')
@endsection

@push('scripts')
	<script>
		let table;
		$(function() {
			table = $('.table').DataTable({
				responsive: true,
				processing: true,
				autoWidth: false,
				ajax: {
					url: '{{ route('produk.data') }}',
				},
				columns: [{
						data: 'select_all',
						searchable: false,
						sortable: false,
					},
					{
						data: 'DT_RowIndex',
						searchable: false,
						sortable: false,
					},
					{
						data: 'kode_produk'
					},
					{
						data: 'nama_produk'
					},
					// {
					// 	data: 'merk'
					// },
					{
						data: 'nama_kategori'
					},
					{
						data: 'harga_beli'
					},
					{
						data: 'harga_jual'
					},
					// {
					// 	data: 'diskon'
					// },
					{
						data: 'stok'
					},
					{
						data: 'aksi',
						searchable: false,
						sortable: false
					},
				]
			});

			$('#modal-form').validator().on('submit', function(e) {
				if (!e.preventDefault()) {
					$.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
						.done((response) => {
							$('#modal-form').modal('hide');
							table.ajax.reload();
						})
						.fail((errors) => {
							alert('Tidak dapat menyimpan data');
							return;
						});
				}
			});

			$('[name=select_all]').on('click', function() {


				$(':checkbox').prop('checked', this.checked);
				// $('#deletedSelect').show();

			});

		});

		function addForm(url) {
			$('#modal-form').modal('show');
			$('#modal-form .modal-title').text('Tambah Produk')

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('post');
			$('#modal-form [name=nama_produk]').focus();
		}

		function editForm(url) {
			$('#modal-form').modal('show');
			$('#modal-form .modal-title').text('Edit Produk')

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('put');
			$('#modal-form [name=nama_produk]').focus();

			$.get(url)
				.done((response) => {
					$('#modal-form [name=nama_produk]').val(response.nama_produk);
					$('#modal-form [name=kode_produk]').val(response.kode_produk);
					$('#modal-form [name=id_kategori]').val(response.id_kategori);
					$('#modal-form [name=merk]').val(response.merk);
					$('#modal-form [name=harga_beli]').val(response.harga_beli);
					$('#modal-form [name=harga_jual]').val(response.harga_jual);
					$('#modal-form [name=diskon]').val(response.diskon);
					$('#modal-form [name=stok]').val(response.stok);
				})
				.fail((errors) => {
					alert('Tidak dapat menampilkan data');
					return;
				});
		}

		function deleteData(url) {
			if (confirm('Yakin ingin menghapus data terpilih?')) {
				$.post(url, {
						'_token': $('[name=csrf-token]').attr('content'),
						'_method': 'delete'
					})
					.done((response) => {
						table.ajax.reload();
					})
					.fail((errors) => {
						alert('Tidak dapat menghapus data');
						return;
					});
			}
		}

		function deleteSelected(url) {
			if ($('input:checked').length > 1) {
				if (confirm('Yakin ingin menghapus data terpilih?')) {
					$.post(url, $('.form-produk').serialize())
						.done((response) => {
							// $('#deletedSelect').hide();
							table.ajax.reload();
						})
						.fail((errors) => {
							alert('Tidak dapat menghapus data');
							return;
						});
				}
			} else {
				alert('Pilih data yang akan dihapus');
				return;
			}
		}
	</script>
@endpush
