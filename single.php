<?php
/**
 * Single post, stream, or event.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="content" class="content-page">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article <?php post_class( 'card' ); ?>>
			<?php
			$post_type = get_post_type();
			$object    = get_post_type_object( $post_type );
			if ( $object && ! in_array( $post_type, array( 'post', 'page' ), true ) ) :
				?>
				<p class="post-kicker"><?php echo esc_html( $object->labels->singular_name ); ?></p>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<p class="meta"><?php echo esc_html( get_the_date() ); ?></p>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
