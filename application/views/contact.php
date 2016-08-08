<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				
			</div>
			<div class="col-md-7 contact-left">
				<h4>Informasi</h4>
				<p> Web ini berisi katalog sprei yang ada di toko Mia'r Sprei, jika anda berminat dengan sprei yang ada di toko kami anda bisa menghubungi contact yang ada di website ini atau anda bisa datang ke toko kami langsung dengan alamat yang sudah tertera di website ini. Terimakasih</p>
				<ul class="contact-list">

					<li> <i class="fa fa-map-marker" aria-hidden="true"></i>Gunungputri Bogor, Indonesia</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">miarinda.yulianti@yahoo.co.id</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+021 8493 1311</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="<?php echo base_url('index.php/contact/komentar') ?>" method="post">
								<h5> Komentar </h5>
									<input type="text" value="Nama" name="nama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama';}" required="">
									<textarea name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pesan...';}" required="">Pesan...</textarea>
									<input type="submit" value="Submit" >
								</form>
							</div>
							<div>
								
							</div>
							<div>
								<div class="map-grid">
									<h5>List Komentar</h5>
									<?php foreach($komentar->result() as $r): ?>
									<ul>
										<li><b style="color:green;"><?php echo $r->nama ?></b></li>
										<li><?php echo $r->pesan ?></li>
									</ul>
									<hr style="border:1px solid#000;">
								<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->