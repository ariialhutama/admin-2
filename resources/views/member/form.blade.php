<div class="modal fade show" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
	<div class="modal-dialog" role="document">
		<form action="" method="post" class="form-horizontal">
			@csrf
			@method('post')

			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title"></div>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="nama_member">Nama Member</label>
							<input type="text" name="nama_member" id="nama_member" class="form-control" required
								placeholder="Nama Member">
							<span class="help-block with-errors"></span>
						</div>
						<div class="form-group">
							<label for="telepon">Nomor Telepon</label>
							<input type="number" name="telepon" id="telepon" class="form-control" required placeholder="No Telepon">
							<span class="help-block with-errors"></span>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea type="text" name="alamat" id="alamat" cols="33" rows="3" class="form-control-lg" required></textarea>
							{{-- <input type="text" name="alamat" id="alamat" class="form-control" required
								placeholder="alamat"> --}}
							<span class="help-block with-errors"></span>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-lg text-white">Submit</button>
					<button type="button" class="btn btn-light btn-lg" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>
