<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<title><?php bloginfo( 'name' ); ?></title>

</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
	<header class="row site-header">
		<nav class="header-nav">
			<a href="<?php echo get_home_url(); ?>" class="logo"><img
					src="<?php bloginfo( 'template_directory' ) ?>/img/assets/logo.jpg" alt="logo"></a>
			<ul class="site-nav">
				<li><a class="Gallery_button" href="//www.juliakaptelova.com/gallery.html">Gallery</a></li>
				<li><a class="About_button" href="//www.juliakaptelova.com/about.html">About</a></li>
				<li><a class="Contact_button" href="//www.juliakaptelova.com/contact.html">Contact</a></li>
				<li><a href="<?php echo get_home_url(); ?>" class="blog-pic"></a></li>
			</ul>
		</nav>
	</header>


</div>