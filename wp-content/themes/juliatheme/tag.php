<?php get_header(); ?>

	<div class="container">
	<main class="site-main">
		<!--article-->
		<div class="row">
			<div class="left-side col-md-10">

<!--				--><?php
//				echo '<h1>' . single_tag_title( 'Currently browsing ' ) . '</h1>'
//				?>

				<?php

				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );

					endwhile;
				else :
					get_template_part( 'content', 'none' );

				endif;

				?>
				<!--also like-->
				<?php get_template_part( 'also_like', 'none' ) ?>

			</div>
			<?php get_sidebar(); ?>

		</div>
	</main>

<?php get_footer(); ?>