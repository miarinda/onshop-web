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

							<form action="<?php echo base_url('index.php/admin/jenis/inputJenis');?>" method="post" class="form-horizontal">
								<div class="hr-dashed"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Jenis Barang</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="jenis" placeholder="Input Jenis Barang" required="true">
									</div>
								</div>
						
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-primary" type="submit">Simpan Data</button>
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
<title><?php echo $title2; ?></title>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><?php echo $title2;?></h4>
						</div>
						<div class="panel-body">
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Barang</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=1; foreach($record->result() as $r): ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $r->jenis ?></td>
										<td><?php echo "<a class='btn btn-primary btn-sm' 
														 href='".base_url('index.php/admin/jenis/edit/'.$r->id_jenis)."'>
														  Ubah</a>
                                           				 <a class='btn btn-danger btn-sm' 
                                           				 href='".base_url('index.php/admin/jenis//hapus/'.$r->id_jenis)."'>
                                           				  Hapus</a>"; ?>
                                           				 	
                                        </td>
									</tr>
									<?php $no++; ?>
								<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
