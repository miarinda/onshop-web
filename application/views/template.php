<!DOCTYPE html>
<html>
<head>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/move-top.js" />
<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url() ;?>assets/css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="<?php echo base_url() ;?>assets/js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>

<div class="header">

		<div class="container">

			<div class="logo">
				<h1><a href="<?php echo base_url() ;?>index.html"  style="color:#fff;">Catalog Mia'r Sprei<span></span></a></h1>
			</div>
			<div class="head-t">
				<hr>
			</div>
				<div class="nav-top">
					<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<!-- <li class=" active"><a href="<?php echo base_url() ;?>" class="hyper "><span>Beranda</span></a></li>	 -->
							<li><a href="<?php echo base_url() ;?>" class="hyper "><span>Beranda</span></a></li>
							<li><a href="<?php echo base_url('index.php/news'); ?>" class="hyper"><span>Baru<b></b></span></a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Koleksi <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo base_url('index.php/my_love') ;?>"><i class="fa fa-angle-right" aria-hidden="true"></i> My Love </a></li>
												<li><a href="<?php echo base_url('index.php/kintakun') ;?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Kintakun </a></li>
												<li><a href="<?php echo base_url('index.php/santika') ;?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Santika </a></li>
												<li><a href="<?php echo base_url('index.php/beglance') ;?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Beglance </a></li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
							<li><a href="<?php echo base_url('index.php/about'); ?>" class="hyper"><span>Tentang Kami<b></b></span></a></li>
							<li><a href="<?php echo base_url('index.php/contact') ;?>" class="hyper"><span>Hubungi kami</span></a></li>
						</ul>
					</div>
					</nav>
					</div>
				</div>
					<div class="banner-text" data-wow-delay="0.4s">
				<h3>Kami adalah reseller Sprei dan Badcover Terpercaya</h3>
				<p>kami menyediakan berbagai jenis sprei dengan harga yang terjangkau dan layanan terbaik</p>
				</div>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ;?>assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ;?>assets/js/jquery.vide.min.js"></script>

</div>

			<?php echo $contents; ?>
<!--footer-->
<div class="footer">
	<div class="container">

		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="<?php echo base_url() ;?>assets/index.html">Catalog Mia'r Sprei<span></span></a></h2>
				<p class="fo-para"></p>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Komp TWP TNI-AL Blok C2 No 3 Ciangsana Gunungputri Bogor</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>021-84931311 , +6285723136095</p>
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="<?php echo base_url() ;?>assets/mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>miarindayulianti@yahoo.co.id</a></p>
					</div>
					<div class="clearfix"></div>

					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2016 Catalog Mia'r Sprei. All Rights Reserved</p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="<?php echo base_url() ;?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url() ;?>assets/js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>


</body>
</html>
