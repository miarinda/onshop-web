<title><?php echo $title; ?></title>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
				<a class="btn btn-primary" style="margin-bottom:20px;" href="<?php  echo base_url('index.php/admin/barang/input_barang') ?>"> Input Data Barang</a>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><?php echo $title;?></h4>
						</div>

						<div class="panel-body">
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Barang</th>
										<th>Jenis Barang</th>
										<th>Ukuran</th>
										<th>Harga</th>
										<th>Keterangan</th>
										<th>Input Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=1; foreach($record->result() as $r): ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $r->nama_barang; ?></td>
										<td><?php echo $r->jenis ?></td>
										<td><?php echo $r->ukuran; ?></td>
										<td><?php echo $r->harga; ?></td>
										<td><?php echo $r->keterangan; ?></td>
										<td><a class='btn btn-primary btn-sm' href="<?php echo base_url('index.php/admin/barang/upload/'.$r->id_barang) ?>">Input Gambar</a></td>
										<td><?php echo "<a class='btn btn-primary btn-sm' 
														 href='".base_url('index.php/admin/barang/edit/'.$r->id_barang)."'>
														  Ubah</a>
                                           				 <a class='btn btn-danger btn-sm' 
                                           				 href='".base_url('index.php/admin/barang/hapus/'.$r->id_barang)."'>
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
