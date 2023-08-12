<div class="modal fade show" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
	<div class="modal-dialog modal-lg" role="document">
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
						<div class="form-group row">
							<div class="col">
								<label for="nama_produk">Nama Produk</label>
								<input type="text" name="nama_produk" id="nama_produk" class="form-control" required
									placeholder="Nama Produk" autofocus>
								<span class="help-block with-errors"></span>
							</div>
							<div class="col">
								<label for="kode_produk">Kode_produk</label>
								<input type="text" name="kode_produk" id="kode_produk" class="form-control" required
									placeholder="Kode Produk">
								<span class="help-block with-errors"></span>
							</div>
						</div>
						<div class="form-group row">
							<div class="col">
								<label for="nama_kategori">Nama Kategori</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<option value="">Pilih Kategori</option>
									@foreach ($kategori as $key => $item)
										<option value="{{ $key }}">{{ $item }}</option>
									@endforeach
								</select>
								<span class="help-block with-errors"></span>
							</div>
							<div class="col">
								<label for="merk">Description</label>
								{{-- <textarea name="merk" id="merk" cols="5" rows="10" class="form-control" required
								 placeholder="Descripction">des</textarea> --}}
								<input type="text" name="merk" id="merk" class="form-control" required placeholder="Description">
								<span class="help-block with-errors"></span>
							</div>
						</div>
						<div class="form-group row">
							<div class="col">
								<label for="harga_beli">Harga Beli</label>
								<input type="number" name="harga_beli" id="harga_beli" class="form-control" required placeholder="Harga Beli">
								<span class="help-block with-errors"></span>
							</div>
							<div class="col">
								<label for="harga_jual">Harga Jual</label>
								<input type="number" name="harga_jual" id="harga_jual" class="form-control" required placeholder="Harga Jual">
								<span class="help-block with-errors"></span>
							</div>
						</div>
						<div class="form-group row">
							<div class="col">
								<label for="diskon">Diskon</label>
								<input type="number" name="diskon" id="diskon" class="form-control" value="0" required
									placeholder="Diskon">
								<span class="help-block with-errors"></span>
							</div>
							<div class="col">
								<label for="stok">Stok</label>
								<input type="number" name="stok" id="stok" class="form-control" value="0" required
									placeholder="Stok">
								<span class="help-block with-errors"></span>
							</div>
						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-lg text-white">Submit</button>
					<button type="button" class="btn btn-light btn-lg" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
	</div>
</div>
