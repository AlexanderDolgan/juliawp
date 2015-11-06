<article class="main-article">
	<header class="main-article-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="main-article-header-h1">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="main-article-header-h1"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
		?>

		<h3 class="main-article-header-h3">CATEGORY: WEDDINGS</h3>
	</header>
	<section class="main-article-content">
		<p class="main-article-content-p">Эта потрясающая поездка навсегда останется у меня в памяти, хотя и
			было немало негативных моментов, которые, к счастью, стираются из памяти, оставляя место лишь
			хорошим воспоминаняим.</p>
		<img class="main-article-content-img" src="<?php bloginfo('template_directory')?>/img/art_photo1.jpg" alt="article photo">
		<img class="main-article-content-img" src="<?php bloginfo('template_directory')?>/img/art_photo2.jpg" alt="article photo">
		<img class="main-article-content-img" src="<?php bloginfo('template_directory')?>/img/art_photo3.jpg" alt="article photo">
		<img class="main-article-content-img" src="<?php bloginfo('template_directory')?>/img/art_photo4.jpg" alt="article photo">
		<img class="main-article-content-img" src="<?php bloginfo('template_directory')?>/img/art_photo5.jpg" alt="article photo">
	</section>
	<footer class="main-article-footer">
		<ul class="main-article-social-icon">
			<li><a href="#" class="fb-like"></a></li>
			<li>SHARE:</li>
			<li><a href="//facebook.com" class="facebook-normal" target="_blank"></a></li>
			<li><a href="//vk.com" class="vk-normal" target="_blank"></a></li>
			<li><a href="//pinterest.com" class="pi-normal" target="_blank"></a></li>
		</ul>
		<a href="#" class="main-article-liveacomment">LIVE A COMMENT</a>

		<div class="clearfix"></div>
		<div class="article-bot-border"></div>
	</footer>
</article>