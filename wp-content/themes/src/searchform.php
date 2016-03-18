<!--<div>-->
<!--	<p href="#" class="right-bar-search search"></p>-->
<!--	<input type="text" class="right-bar-search-input">-->
<!---->
<!--	<p href="#" class="elem-1"></p>-->
<!--</div>-->

<form action="/" method="get">
	<label for="search">Search in <?php echo home_url( '/' ); ?></label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>