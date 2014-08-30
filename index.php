<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sisyphus - Home</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo">Sisyphus</h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#one">Blog</a></li>
							<li><a href="#two">Forum</a></li>
							<li><a href="#work">My Work</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>Sisyphus</h2>
					</header>
					<p>Short description or slogan here</p>
					<footer>
						<a href="#work" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
				
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<!--<header>
						<h2>My Work</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
						Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis 
						arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.</p>
					</header>
					
					<!-- Lightbox Gallery
						<div class="container small gallery">
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>
					-->
					<ul>
						<?php 
							require($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php'); 
							$args = array(
								'cat' => about, // Only source posts from a specific category
								'posts_per_page' => 2 // Specify how many posts you'd like to display
							);
							$latest_posts = new WP_Query( $args ); 	
							if ( $latest_posts->have_posts() ) {
								while ( $latest_posts->have_posts() ) {
								$latest_posts->the_post(); 
						?>
								<li>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
									<?php if ( has_post_thumbnail() ) { ?>
										<span class="post_thumbnail"><?php the_post_thumbnail(); ?></span>
									<?php } ?>
									<span class="post_title"><?php the_title(); ?></span>
									</a>
									<?php the_excerpt(); ?>
								</li>	
						<?php } 
							} else {
								echo '<p>There are no posts available</p>';
							}
							wp_reset_postdata();
						?>
				</ul>
			</div>
		</section>
						
		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; <?php echo date("Y") ?> Truverity</li><li>Design: Truverity web team and <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
			
			</footer>

	</body>
</html>