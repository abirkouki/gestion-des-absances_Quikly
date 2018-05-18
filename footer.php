<?php add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'produit', array('label'=> array('name' =>__('Produit'),'singular_name' =>__('produit' )
),
'public' => true
)
);
register_taxonomy( 'couleur', 'produit', array( 'hierarchical' => true, 'label' => 'couleur')
}
?>
<?php add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts(£query){
	if (is_home() )
		£query->set('post_type',array( 'produit' ) );
	return £query;
}
?>







<!DOCTYPE html>
<html>
<head>
<title>Quickly a Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/css/style.css"
rel="stylesheet">


<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>cumque nihil impedit</h3>
					<div class="footer-grd-left">
						<img src="images/11.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd-left">
						<p>Nam libero tempore, cum 
							soluta nobis est eligendi optio cumque nihil impedit quo minus 
							id quod maxime placeat facere possimus, omnis voluptas assumenda 
							est, omnis dolor repellendus</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>voluptas assumenda</h3>
					<ul>
						<li><a href="#">doloribus asperiores</a></li>
						<li><a href="#">Itaque earum rerum</a></li>
						<li><a href="#">deserunt mollitia</a></li>
						<li><a href="#">facilis est et expedita</a></li>
						<li><a href="#">occaecati cupiditate</a></li>
						<li><a href="#">deserunt mollitia laborum</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>deserunt mollitia</h3>
					<ul>
						<li><a href="#">doloribus asperiores</a></li>
						<li><a href="#">Itaque earum rerum</a></li>
						<li><a href="#">deserunt mollitia</a></li>
						<li><a href="#">facilis est et expedita</a></li>
						<li><a href="#">occaecati cupiditate</a></li>
						<li><a href="#">deserunt mollitia laborum</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Flckr Posts</h3>
					<div class="footer-grd">
						<img src="images/7.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="images/8.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="images/9.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="clearfix"> </div>
					<div class="footer-grd">
						<img src="images/10.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="images/7.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="images/8.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<p>© 2015 Quickly. All rights reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
	 <?php wp_footer(); ?> 
	</body>
	</html>