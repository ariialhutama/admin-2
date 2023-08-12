@extends('layout_admin.master_admin')

@section('title')
	Kategori
@endsection

@section('good')
	<h1 class="welcome-text">
		Daftar Kategori
	</h1>
@endsection

@section('content')
	<div class="tab-content tab-content-basic">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-title d-sm-flex align-items-center justify-content-between">
							<h4>Daftar Kategori- {{ config('app.name') }}</h4>
							<button onclick="addForm('{{ route('kategori.store') }}')" class="btn btn-success btn-lg text-white">Tambah
								Data</button>
						</div>

						<div class="table-responsive">
							<table class="table table-stripped">
								<thead>
									<tr>
										<th width="5$">No</th>
										<th>Nama Kategori</th>
										<th width="15%">aksi</th>
									</tr>
								</thead>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@includeIf('kategori.form')
@endsection

@push('scripts')
	<script>
		let table;
		$(function() {
			table = $('.table').DataTable({
				responsive: true,
				processing: true,
				// serverSide: true,
				autoWidth: false,
				ajax: {
					url: '{{ route('kategori.data') }}',
				},
				columns: [{
						data: 'DT_RowIndex',
						searchable: false,
						sortable: false
					},
					{
						data: 'nama_kategori'
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
		});



		function addForm(url) {
			$('#modal-form').modal('show');
			$('#modal-form .modal-title').text('Tambah Kategori');

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('post');
			$('#modal-form [name=nama_kategori]').focus();
		}

		function editForm(url) {
			$('#modal-form').modal('show');
			$('#modal-form .modal-title').text('Edit Kategori');

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('put');
			$('#modal-form [name=nama_kategori]').focus();

			$.get(url)
				.done((response) => {
					$('#modal-form [name=nama_kategori]').val(response.nama_kategori);
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
	</script>
@endpush
