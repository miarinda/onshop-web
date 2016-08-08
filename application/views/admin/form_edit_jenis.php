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

							<form action="<?php echo base_url('index.php/admin/jenis/edit');?>" method="post" class="form-horizontal">
							<?php foreach($record->result() as $r): ?>
								<input type="hidden" name="id" value="<?php echo $r->id_jenis; ?>">
								<div class="hr-dashed"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Jenis Barang</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="jenis" value="<?php echo $r->jenis; ?>" required="true">
									</div>
								</div>
							<?php endforeach ?>
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-primary" type="submit" name="submit">Ubah</button>
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