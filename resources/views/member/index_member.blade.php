@extends('layout_admin.master_admin')

@section('title')
	Member
@endsection

@section('good')
	<h1 class="welcome-text">
		Daftar Member
	</h1>
@endsection

@section('content')
	<div class="tab-content tab-content-basic">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-title d-sm-flex align-items-center justify-content-between">
							<h4>Daftar Member- {{ config('app.name') }}</h4>
							<button onclick="addForm('{{ route('member.store') }}')" class="btn btn-success btn-lg text-white">Tambah
								Data</button>
						</div>

						<div class="table-responsive">
							<table class="table table-stripped">
								<thead>
									<tr>
										<th width="5$">No</th>
										<th>Nama Anggota</th>
										<th>Telepon</th>
										<th>Alamat</th>
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
	@includeIf('member.form')
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
					url: '{{ route('member.data') }}',
				},
				columns: [{
						data: 'DT_RowIndex',
						searchable: false,
						sortable: false
					},
					{
						data: 'nama_member'
					},
					{
						data: 'telepon'
					},
					{
						data: 'alamat'
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
			$('#modal-form .modal-title').text('Tambah Member');

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('post');
			$('#modal-form [name=nama_member]').focus();
		}

		function editForm(url) {
			$('#modal-form').modal('show');
			$('#modal-form .modal-title').text('Edit Member');

			$('#modal-form form')[0].reset();
			$('#modal-form form').attr('action', url);
			$('#modal-form [name=_method]').val('put');
			$('#modal-form [name=nama_member]').focus();

			$.get(url)
				.done((response) => {
					$('#modal-form [name=nama_member]').val(response.nama_member);
					$('#modal-form [name=telepon]').val(response.telepon);
					$('#modal-form [name=alamat]').val(response.alamat);
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
