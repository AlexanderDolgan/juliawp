<section class="right-bar col-md-2">
	<div class="right-bar-cat">

		<!--		Categories -->
		<p class="Categories"></p>
		<ul class="right-bar-cat-name">
			<?php
			$args = array(
				'show_option_all'    => '',
				'orderby'            => 'ID',
				'order'              => 'ASC',
				'style'              => 'list',
				'show_count'         => 0,
				'hide_empty'         => 1,
				'use_desc_for_title' => 0,
				'child_of'           => 0,
				'feed'               => '',
				'feed_type'          => '',
				'feed_image'         => '',
				'exclude'            => '',
				'exclude_tree'       => '',
				'include'            => '',
				'hierarchical'       => 1,
				'title_li'           => __( '' ),
				'show_option_none'   => __( '' ),
				'number'             => null,
				'echo'               => 1,
				'depth'              => 0,
				'current_category'   => 0,
				'pad_counts'         => 0,
				'taxonomy'           => 'category',
				'walker'             => null
			);
			wp_list_categories( $args );
			?>
		</ul>
	</div>
	<?php dynamic_sidebar( 'sidebar1' ); ?>
	<!--Follow me Social links-->
	<div class="right-bar-fol">
		<p class="follow-me"></p>
		<ul class="right-bar-social-links">
			<li><a href="//www.instagram.com/juliakaptelova_photography/" class="ins-n" target="_blank"></a></li>
			<li><a href="//www.facebook.com/juliakaptelova.photography" class="fb-n" target="_blank"></a></li>
			<li><a href="//vk.com/juliakaptelovaphotography" class="vk-n" target="_blank"></a></li>
		</ul>
	</div>

	<div class="right-bar-photo-in">
		<a href="//www.instagram.com/juliakaptelova_photography/">PHOTOGRAPHY INSTAGRAM</a>
		<?php echo do_shortcode("[jr_instagram id=3]"); ?>
	</div>

	<div class="right-bar-photo-per-in">
		<a href="//www.instagram.com/julia_kaptelova/" class="elem-2">PERSONAL<br>INSTAGRAM</a>
		<?php echo do_shortcode("[jr_instagram id=4]"); ?>
		<style>.pllexislider .slides {margin: 15px auto;}</style> <!--fucking plugin-->
	</div>

	<div>
		<a href="http://www.juliakaptelova.com/contact.html" class="right-bar-contact" target="_blank">CONTACT ME</a>
	</div>
	<div>
		<p class="right-bar-search search-img" ></p>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="right-bar-search-input" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
			<p href="#" class="elem-1"></p>
		</form>
	</div>
</section>