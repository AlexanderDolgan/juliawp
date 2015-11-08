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
	<?php dynamic_sidebar('sidebar1'); ?>
<!--Follow me Social links-->
	<div class="right-bar-fol">
		<p class="follow-me"></p>
		<ul class="right-bar-social-links">
			<li><a href="//instagram.com/julia_kaptelova/" class="instagram-normal" target="_blank"></a></li>
			<li><a href="//www.facebook.com/juliakaptelova.photography" class="facebook-normal" target="_blank"></a></li>
			<li><a href="//vk.com/juliakaptelovaphotography" class="vk-normal" target="_blank"></a></li>
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