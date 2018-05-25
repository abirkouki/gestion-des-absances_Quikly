
<div class="header">
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						   <a class="navbar-brand" href="index.html"><span>Q</span>uickly</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom active"><a href="index.html">Home</a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.html">About</a></li>
							<li class="hvr-bounce-to-bottom"><a href="Portfolio.html">Portfolio</a></li>
							<li class="hvr-bounce-to-bottom"><a href="Pages.html">Pages</a></li>
							<li class="hvr-bounce-to-bottom"><a href="contact.html">Contact Us</a></li>
						  </ul>
						  <div class="sign-in">
							<ul>
								<li><a href="login.html">Sign In </a>/</li>
								<li><a href="register.html">Register</a></li>
							</ul>
							</div>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
	
			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
			</div>
			<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		
<!-- banner -->
		<div class="banner">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
				  
	<div id"slider" class="nivoslider">
	<img src="wordpress/wp-content/themes/gestion-des-absances_Quikly/images/1.jpg"/>
	<img src="images/14.jpg"/>

</div>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>citations</h3>
								<p>si mon absence ne change rien a ta vie, c'est que ma presence n'avait aucune importance</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>les risque d'absence des etudiant </h3>
								<p>L'absentéisme peut conduire à des sanctions pénales après mise en demeure faite à la famille par le DASEN ainsi qu'à des sanctions disciplinaires
								</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>par qui et quand est_elle rensignée ? <B>MODE D'EMPLOI</B> </h3>
								<p>La saisie de la fiche Avenir est un travail collectif qui concerne l’ensemble de
l’équipe pédagogique. Cette saisie est réalisée en plusieurs étapes articulées
autour du 2e conseil de classe de l’année
</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
<!-- //banner -->
<!-- banner-bottom -->
			<div class="banner-bottom">
				<ul id="flexiselDemo1">			
					<li>
						<div class="banner-bottom-grid">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
<!-- //banner-bottom -->
<!-- blog -->
			
<!-- //blog -->
	</div>
	
			