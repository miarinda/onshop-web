<?php foreach($record->result() as $r): ?>
	<title><?php echo $r->nama_barang ?></title>
<div class="single">
	<div class="container">
		<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   			<div class="single-w3agile">

					<div id="picture-frame">
						<img src="<?php echo base_url('upload/'.$r->image_name) ;?>" data-src="images/si-1.jpg" alt="" class="img-responsive"/>
					</div>
					<script src="<?php echo base_url()?>assets/js/jquery.zoomtoo.js"></script>
					<script>
						$(function() {
							$("#picture-frame").zoomToo({
								magnify: 1
							});
						});
					</script>
				</div>
			</div>
			<div class="col-md-7 single-top-left ">
				<div class="single-right">
					<h3><?php echo $r->nama_barang?></h3>
					<div class="pr-single">
					  	<p class="reduced ">Rp. <?php echo number_format($r->harga,2,',',',') ?></p>
					</div>
					<div class="block block-w3">
						<!-- <div class="starbox small ghosting"> </div> -->
					</div>
					<p class="in-pa"> <?php echo $r->keterangan?> </p>


						<div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
	    </div>
	</div>
</div>
<?php endforeach ?>
