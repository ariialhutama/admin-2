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
							<label for="nama_kategori">Nama Kategori</label>
							<input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required
								placeholder="Username">
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



{{-- <div class="d-flex justify-content-center">
				<div class="col-lg-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-sm-flex align-items-center justify-content-between">
								<div class="card-title"></div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">X</span>
								</button>
							</div>

							<form class="forms-sample">
								<div class="form-group">
									<label for="nama_kategori">Username</label>
									<input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required
										placeholder="Username">
									<span class="help-block with-errors"></span>
								</div>

								<button type="submit" class="btn btn-primary text-white me-2">Submit</button>
								<button type="button" class="btn btn-light" data-bs-dismis="modal">Cancel</button>

							</form>
						</div>
					</div>
				</div>


			</div> --}}
