<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php 
			the_custom_logo(); 
			?>

		</div>


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wl-test-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'зкшьфкн',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		<div class="phone"> <a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a> </div>
	</header>
	<div class="wrap">