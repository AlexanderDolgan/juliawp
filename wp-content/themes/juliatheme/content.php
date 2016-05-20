<!--main article content loop-->
<article class="main-article">
	<header class="main-article-header">
		<?php
		//if single page
		if ( is_single() ) :
			the_title( '<h1 class="main-article-header-h1">', '</h1>' );
		//other pages
		else :
			the_title( sprintf( '<h1 class="main-article-header-h1"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' );

		endif;
?>

		<h3>
			<?php
			foreach ( ( get_the_category() ) as $category ) {
				echo '<a href="' . get_category_link( $category->cat_ID )  . '" class="main-article-header-a">' . $category->cat_name  . '</a> ';
			}
			?>
		</h3>

	</header>
	<section class="main-article-content">
		<?php
		/* translators: %s: Name of current post */
		the_content('');

		?>

		<footer class="main-article-footer">

			<div class="share-btn" data-url="<?php echo get_permalink() ?>" data-title="Юлия Каптелова"
			     data-desc="Блог фотографа Юлии Каптеловой">
				<?php if ( !is_single() ) {
					// Default homepage ?>
					<a href="<?php echo get_permalink(); ?>" class="main-article-readmore">READ MORE ></a>
					<?php
				} else {
					//everything else
				}
				?>

				<ul class="main-article-social-icon">
					<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
					<li>SHARE:</li>
					<li><a class="fb-n" data-desc="Блог фотографа Юлии Каптеловой"
					       data-title="Блог фотографа Юлии Каптеловой" data-id="fb"></a></li>
					<li><a class="vk-n" data-desc="Блог фотографа Юлии Каптеловой"
					       data-title="Блог фотографа Юлии Каптеловой" data-id="vk"></a></li>
					<li>
						<?php if ( !is_single() ) {
							// Default homepage ?>
							<a href="<?php echo get_permalink(); ?>" class="main-article-liveacomment">LEAVE A COMMENT</a>
							<?php
						} else {
							//everything else
						}
						?>
					</li>
				</ul>

			</div>
			<div class="clearfix"></div>
			<div class="article-bot-border"></div>
		</footer>

		<div class="comments">
			<?php comments_template(); ?>
		</div>

	</section>

</article>