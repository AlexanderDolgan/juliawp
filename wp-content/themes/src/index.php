<?php get_header(); ?>

	<div class="container">
	<main class="site-main">
		<!--article-->
		<div class="row">
			<div class="left-side col-md-10">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );

				endwhile;
			else :
				get_template_part( 'content', 'none' );

			endif;
			?>
				<!--archive-->
				<section class="archive">
					<header>
						<ul class="archive-header">
							<li>YOU MAY</li>
							<li class="also"></li>
							<li>LIKE:</li>
						</ul>
					</header>
					<div class="archive">
						<div class="archive-item">
							<a href="#"><h3>A&S: RHODES</h3>
								<img src="<?php bloginfo( 'template_directory' ) ?>/img/archive1.jpg" alt="A&S: RHODES"></a>
						</div>
						<div class="archive-item">
							<a href="#"><h3>N&S: RHODES</h3>
								<img src="<?php bloginfo( 'template_directory' ) ?>/img/archive2.jpg" alt="A&S: RHODES"></a>
						</div>
						<div class="archive-item">
							<a href="#"><h3>E&D: SANTORINI</h3>
								<img src="<?php bloginfo( 'template_directory' ) ?>/img/archive3.jpg" alt="A&S: RHODES"></a>
						</div>
						<div class="archive-item">
							<a href="#"><h3>BACK TO BLOG</h3>
								<img src="<?php bloginfo( 'template_directory' ) ?>/img/archive4.jpg" alt="A&S: RHODES"></a>
						</div>

						<div class="archive-item">
							<a href="#"><h3>BACK TO BLOG</h3>
								<img src="<?php bloginfo( 'template_directory' ) ?>/img/archive5.jpg" alt="A&S: RHODES"></a>
						</div>
					</div>

					<nav class="nav-buttons">
						<a href="#" class="newer">NEWER</a>
						<a href="#" class="older">OLDER</a>
					</nav>
					<div class="article-bot-border2"></div>
				</section>
			</div>
			<section class="right-bar col-md-2">
				<div class="right-bar-cat">
					<a class="Categories" href="#"></a>

					<div class="right-bar-cat-name">
						<a>WEDDINGS</a>
						<a>ENGAGEMENTS</a>
						<a>PORTRAITS</a>
						<a>BOUDOIR</a>
						<a>TRAVEL</a>
						<a>PUBLIKATIONS</a>
						<a>ALL POSTS</a>
					</div>
				</div>

				<div class="right-bar-fol">
					<a href="#" class="follow-me"></a>
					<ul class="right-bar-social-links">
						<li><a href="//instagram.com" class="instagram-normal" target="_blank"></a></li>
						<li><a href="//facebook.com" class="facebook-normal" target="_blank"></a></li>
						<li><a href="//vk.com" class="vk-normal" target="_blank"></a></li>
					</ul>
				</div>

				<div class="right-bar-photo-in">
					<a href="#">PHOTOGRAPHY INSTAGRAM</a>
					<a href="#"><img src="<?php bloginfo( 'template_directory' ) ?>/img/inst.jpg" alt="inst-1"></a>
				</div>

				<div class="right-bar-photo-per-in">
					<a href="#" class="elem-2">PERSONAL INSTAGRAM</a>
					<a href="#"><img src="<?php bloginfo( 'template_directory' ) ?>/img/inst-2.jpg" alt="inst-2"></a>
				</div>

				<div>
					<a href="mailto:julia.kaptelova@gmail.com" class="right-bar-contact" target="_blank">CONTACT ME</a>
				</div>

				<div>
					<p href="#" class="right-bar-search search"></p>
					<input type="text" class="right-bar-search-input">

					<p href="#" class="elem-1"></p>
				</div>

			</section>
		</div>

		<!--comments-->
		<div class="row">
			<section class="comments">
			</section>
		</div>
	</main>

<?php get_footer(); ?>