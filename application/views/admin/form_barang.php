<title><?php echo $title; ?></title>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-11">
			<div class="row">
				<div class="col-md-10">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><?php echo $title; ?></h4>
						</div>
						<div class="panel-body">

							<form action="<?php echo base_url('index.php/admin/barang/inputbarang');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="hr-dashed"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama Barang</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="nama_barang" placeholder="Input Nama Barang" required="true">
									</div>
								</div>
								
								<div class="form-group">

									<label class="col-sm-2 control-label">Jenis Barang</label>
									<div class="col-sm-10">
									
										<select name="jenis" class="form-control">
										<?php foreach($record->result() as $r): ?>
											<option value="<?php echo $r->id_jenis; ?>"><?php echo $r->jenis; ?></option>
											<?php endforeach ?>
										</select>
									</div>
								
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Ukuran</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="ukuran" placeholder="Input Ukuran" required="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Harga</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="harga" placeholder="Input Harga" required="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-10">
										<textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Gambar</label>
									<div class="col-sm-10">
										<input type="file" name="userfile" class="form-control" cols="30" rows="10">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-primary" type="submit" name="submit">Simpan Data</button>
										<button class="btn btn-default" type="reset">Batal</button>
									</div>
								</div>
							<form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>