<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coolmat' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-inner container">
		<div class="site-branding">
		<img src="<?php bloginfo('template_url');	?>/assets/coolmat_logo.svg"
		class="logo">
		</div>
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation"> </nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

	<div class="language-select">
		KOR | ENG
		<div/>
	</header><!-- #masthead -->
