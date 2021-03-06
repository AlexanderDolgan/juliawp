<?php get_header(); ?>

	<div class="container">
	<main class="site-main">
		<!--article-->
		<div class="row">
			<div class="left-side col-md-10">
				<?php

				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );

					endwhile;
				else :
					?>
						<div class="empty-result">
							<h1>По вашему запросу <?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?> ничего не найдено</h1>
						</div>
					<?php
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
						<ul>
							<li><?php previous_posts_link( '<span class="newer">NEWER<span class="posts-img"></span></span>' ); ?></li>
							<li> <?php next_posts_link( '<span class="older">OLDER<span class="posts-img"></span></span>' ); ?></li>
						</ul>
					</nav>
					<div class="article-bot-border2"></div>
				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</main>

<?php get_footer(); ?>