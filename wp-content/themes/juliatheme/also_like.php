<!--also-like-->
<section class="also-like">
	<header>
		<ul class="also-like-header">
			<li>YOU MAY</li>
			<li class="also"></li>
			<li>LIKE:</li>
		</ul>
	</header>

	<div class="also-like-content">
		<!--you can also like-->
		<?php

		// The Query also like show 5 random posts
		$args = array(

			'orderby' => 'rand',
		);

		$also_like = new WP_Query( $args );
		// The Loop
		if ( $also_like->have_posts() ) {
			while ( $also_like->have_posts() ) {
				$also_like->the_post(); ?>
				<div class="also-like-item">
					<a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail( array( 138, 138 ) ) ?></a>
				</div>
				<?php
			}
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>

	</div>

	<nav class="nav-buttons">
		<ul>
			<li><?php previous_posts_link( '<span class="newer">NEWER<span class="posts-img"></span></span>' ); ?></li>
			<li> <?php next_posts_link( '<span class="older">OLDER<span class="posts-img"></span></span>' ); ?></li>
		</ul>
	</nav>
	<div class="article-bot-border2"></div>
</section>