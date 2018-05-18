<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
<!-- header -->
			
<!-- //header -->
<!-- header-bottom -->
	<?php get_header(); ?> 
	<div class="row">  
	<div class="col-sm-8 blog-main">  
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'content', get_post_format() ); endwhile; endif; ?> 
	</div> 
	<!-- /.blog-main --> 
	<?php get_sidebar(); ?>
	</div> <!-- /.row --> 
	<?php get_footer(); ?> 
<!-- //header-bottom -->
		</div>
	</div>
	<p>  <label for="your_fields[text]">Input Text</label>  <br>  <input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text" value="<?php echo $meta['text']; ?>" > </p> 
<!-- //banner-body -->
<!-- footer -->
	
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>