<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sisyphus Game</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.min.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#one">About</a></li>
							<li><a href="#work">Media</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="http://forum.sisyphus-game.com/">Forum</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<div id="logo-image-wrapper">
							<img src="images/logo.png" />
						</div>
					</header>
					<footer>
						<p>An Open-world, Story Driven, Survival Experience.</p>
					</footer>
					<video width="60%" controls>
						<source src="https://www.youtube.com/watch?v=f_W5-qcitdQ">
						<source src="media/trailer.webm" type="video/webm">
						<source src="media/trailer.ogg" type="video/ogg">
						<source src="media/trailer.mp4" type="video/mp4">
						Sorry, your browser does not support the <code>video</code> element.
					</video>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 dark fullscreen">
				<div class="content box fLeft style2">
					<header>
						<h2>Our Goal</h2>
					</header>
					<p>Truverity's purpose is purely to innovate with this medium of entertainment to deliver powerful experiences that tell story in such a way as to never take away control from the player.</p>
				</div>
				<div class="content box fRight style2">
					<header>
						<h2>Something About the Game</h2>
					</header>
					<p>Sisyphus is a open-world, survival, story-based horror set in Antarctica, where you play as a young 19 year old, aspiring explorer named Benjamin Miller. The year is 1910 and the South Pole races are in motion; you, Benjamin immediately grasp the opportunity to take up a position in The Sisyphus Expedition, as 'Navigator'. The expedition states that its ethic is to always push forwards, to never give up and use purely man power. Benjamin, despite his lack of experience or knowledge of Antarctic weather conditions, decides to take to the ice wasteland with the expedition team within a month. On the day of the expeditions departure of 1910, Benjamin franticly collects together his maps, compass and general navigational equipment to set off towards the South Pole. 1911, The Sisyphus Expedition land on the barren ice wastelands of Antarctica. Soon after arrival, they progress towards their destination where they set base camp. A week goes by, and the expedition's journey begins. The team step foot out on to the ice as they march towards the pole, but nothing could have prepared them for what was to come...</p>
				</div>				
			</section>
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Media</h2>
					</header>
					
					<!-- Lightbox Gallery  -->
						<div class="container small gallery">
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/01.jpg" title="Antarctic Project - Enviromnent Concept 1" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Antarctic Survival Game - Enviromnent Concept 2" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Benjamin full body (WIP)" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="POV Arms Model" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Benjamin Textured" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="'Framheim' Hut Assembly Concept" alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>

		<!-- Blog -->
			<section id="blog" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Blog</h2>
					</header>
					<ul>
						<?php 
							require($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php'); 
								$args = array(
									'cat' => about, // Only source posts from a specific category
									'posts_per_page' => 1 // Specify how many posts you'd like to display
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