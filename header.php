<?php
/**
 * Site banner.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$aircraftaviation_nav = array(
	array(
		'label'   => __( 'Dashboard', 'aircraftaviation' ),
		'url'     => home_url( '/' ),
		'current' => is_front_page(),
	),
	array(
		'label'   => __( 'News', 'aircraftaviation' ),
		'url'     => home_url( '/news/' ),
		'current' => is_page( 'news' ),
	),
	array(
		'label'   => __( 'Blog', 'aircraftaviation' ),
		'url'     => home_url( '/blog/' ),
		'current' => is_page( 'blog' ) || ( is_home() && ! is_front_page() ),
	),
	array(
		'label'   => __( 'Streams', 'aircraftaviation' ),
		'url'     => home_url( '/streams/' ),
		'current' => is_post_type_archive( 'stream' ) || is_singular( 'stream' ),
	),
	array(
		'label'   => __( 'How We Verify', 'aircraftaviation' ),
		'url'     => home_url( '/how-we-verify/' ),
		'current' => is_page( 'how-we-verify' ),
	),
	array(
		'label'    => __( 'Contact', 'aircraftaviation' ),
		'url'      => 'https://www.linkedin.com/in/benjamin-harris-ab9423431/',
		'current'  => false,
		'external' => true,
	),
);
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
		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
			<span class="nav-toggle-bars" aria-hidden="true"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'aircraftaviation' ); ?></span>
		</button>
		<nav id="site-nav" class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'aircraftaviation' ); ?>">
			<ul>
				<?php foreach ( $aircraftaviation_nav as $item ) : ?>
					<li>
						<a href="<?php echo esc_url( $item['url'] ); ?>"<?php echo $item['current'] ? ' aria-current="page"' : ''; ?><?php echo ! empty( $item['external'] ) ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>>
							<?php echo esc_html( $item['label'] ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</div>
</header>
