<?php
/**
 * Aircraft Aviation theme setup.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports used by the templates.
 */
function aircraftaviation_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
}
add_action( 'after_setup_theme', 'aircraftaviation_setup' );

/**
 * Enqueue style.css.
 */
function aircraftaviation_enqueue_styles() {
	wp_enqueue_style(
		'aircraftaviation-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'aircraftaviation_enqueue_styles' );

/**
 * Favicon and apple touch icon. Header logo is unchanged.
 */
function aircraftaviation_favicon() {
	$uri = get_stylesheet_directory_uri();

	echo '<link rel="icon" type="image/png" href="' . esc_url( $uri . '/assets/favicon-32.png' ) . '">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $uri . '/assets/apple-touch-icon.png' ) . '">' . "\n";
}
add_action( 'wp_head', 'aircraftaviation_favicon' );

/**
 * Open and close the header menu. Desktop shows the links without this.
 */
function aircraftaviation_nav_script() {
	?>
	<script>
	(function () {
		var button = document.querySelector('.nav-toggle');
		var nav = document.getElementById('site-nav');
		if (!button || !nav) {
			return;
		}
		button.addEventListener('click', function () {
			var open = button.getAttribute('aria-expanded') === 'true';
			button.setAttribute('aria-expanded', open ? 'false' : 'true');
			nav.classList.toggle('is-open', !open);
		});
	}());
	</script>
	<?php
}
add_action( 'wp_footer', 'aircraftaviation_nav_script' );

/**
 * Load homepage content from data/home.json.
 *
 * @return array
 */
function aircraftaviation_data() {
	static $data = null;

	if ( null !== $data ) {
		return $data;
	}

	$path = get_template_directory() . '/data/home.json';

	if ( ! is_readable( $path ) ) {
		$data = array();
		return $data;
	}

	$contents = file_get_contents( $path );
	$decoded  = json_decode( $contents, true );
	$data     = is_array( $decoded ) ? $decoded : array();

	return $data;
}

/**
 * List stored at a top-level key in the homepage data.
 *
 * @param array  $data Homepage data.
 * @param string $key  Top-level key.
 * @return array
 */
function aircraftaviation_items( $data, $key ) {
	if ( isset( $data[ $key ] ) && is_array( $data[ $key ] ) ) {
		return $data[ $key ];
	}

	return array();
}

/**
 * Resolve a JSON link. Root-relative paths stay on this site.
 *
 * @param string $url Raw URL or path.
 * @return string
 */
function aircraftaviation_href( $url ) {
	$url = trim( (string) $url );

	if ( '' === $url ) {
		return '';
	}

	if ( '/' === substr( $url, 0, 1 ) ) {
		return home_url( $url );
	}

	return $url;
}

/**
 * Whether a resolved URL leaves this site.
 *
 * @param string $url Resolved URL.
 * @return bool
 */
function aircraftaviation_is_external( $url ) {
	$host = wp_parse_url( $url, PHP_URL_HOST );
	$home = wp_parse_url( home_url(), PHP_URL_HOST );

	if ( ! $host || ! $home ) {
		return false;
	}

	return strtolower( $host ) !== strtolower( $home );
}

/**
 * Print a text link from homepage data.
 *
 * @param string $url   Raw URL or path.
 * @param string $label Visible label.
 */
function aircraftaviation_link( $url, $label ) {
	$href  = aircraftaviation_href( $url );
	$label = trim( (string) $label );

	if ( '' === $href || '' === $label ) {
		return;
	}

	echo '<a href="' . esc_url( $href ) . '"';

	if ( aircraftaviation_is_external( $href ) ) {
		echo ' target="_blank" rel="noopener noreferrer"';
	}

	echo '>' . esc_html( $label ) . '</a>';
}

/**
 * Register the stream and event post types.
 */
function aircraftaviation_register_post_types() {
	register_post_type(
		'stream',
		array(
			'labels'       => array(
				'name'               => __( 'Streams', 'aircraftaviation' ),
				'singular_name'      => __( 'Stream', 'aircraftaviation' ),
				'add_new_item'       => __( 'Add New Stream', 'aircraftaviation' ),
				'edit_item'          => __( 'Edit Stream', 'aircraftaviation' ),
				'new_item'           => __( 'New Stream', 'aircraftaviation' ),
				'view_item'          => __( 'View Stream', 'aircraftaviation' ),
				'search_items'       => __( 'Search Streams', 'aircraftaviation' ),
				'not_found'          => __( 'No streams found.', 'aircraftaviation' ),
				'not_found_in_trash' => __( 'No streams found in Trash.', 'aircraftaviation' ),
				'all_items'          => __( 'All Streams', 'aircraftaviation' ),
				'menu_name'          => __( 'Streams', 'aircraftaviation' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-video-alt3',
			'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
			'rewrite'      => array( 'slug' => 'streams' ),
		)
	);

	register_post_type(
		'event',
		array(
			'labels'       => array(
				'name'               => __( 'Events', 'aircraftaviation' ),
				'singular_name'      => __( 'Event', 'aircraftaviation' ),
				'add_new_item'       => __( 'Add New Event', 'aircraftaviation' ),
				'edit_item'          => __( 'Edit Event', 'aircraftaviation' ),
				'new_item'           => __( 'New Event', 'aircraftaviation' ),
				'view_item'          => __( 'View Event', 'aircraftaviation' ),
				'search_items'       => __( 'Search Events', 'aircraftaviation' ),
				'not_found'          => __( 'No events found.', 'aircraftaviation' ),
				'not_found_in_trash' => __( 'No events found in Trash.', 'aircraftaviation' ),
				'all_items'          => __( 'All Events', 'aircraftaviation' ),
				'menu_name'          => __( 'Events', 'aircraftaviation' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-calendar-alt',
			'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
			'rewrite'      => array( 'slug' => 'events' ),
		)
	);
}
add_action( 'init', 'aircraftaviation_register_post_types' );

/**
 * Flush rewrite rules once so stream and event archives resolve.
 */
function aircraftaviation_flush_rewrites() {
	aircraftaviation_register_post_types();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'aircraftaviation_flush_rewrites' );
