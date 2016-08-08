


<!--content-->
	<div class="product">
		<div class="container">

			<div class="spec ">
				<h3>Santika</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
				<?php foreach($record->result() as $r){ ?>
					<div class="col-md-3 pro-1">
						<div class="col-m">
							<a href="<?php echo base_url('upload/'.$r->image_name); ?>" data-toggle="modal" data-target="#myModal17" class="offer-img">
								<img src="<?php echo base_url('upload/'.$r->image_name) ;?>" class="img-responsive" alt="">
							</a>
							<div class="mid-1">
								<div class="women">
									<h6><a href="single.html"><?php echo $r->nama_barang ?></a> <?php echo $r->ukuran ?></h6>
								</div>
								<div class="mid-2">
									<p ><em class="item_price">Rp. <?php echo number_format($r->harga,2,',',',') ?></em></p>
									 <div class="block">
										<!-- <div class="starbox small ghosting"> </div> -->
								</div>
									<div class="clearfix"></div>
								</div>
								<div class="add add-2">
									<a href="<?php echo base_url('index.php/home/baca/'.$r->id_barang) ?>" class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Detail</a>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>
				<div class="clearfix"></div>

			</div>

		</div>
	</div>
