<?php
/**
 * Site banner.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'aircraftaviation' ); ?></a>
<header class="site-banner">
	<div class="banner-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="aa-logo" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/logo.png' ); ?>" alt="Aircraft Aviation">
			<span class="brand-text">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title">Aircraft Aviation</h1>
				<?php else : ?>
					<span class="site-title">Aircraft Aviation</span>
				<?php endif; ?>
				<span class="site-subtitle">THE AVGEEK AVIATION SOURCE</span>
			</span>
		</a>
	</div>
</header>
