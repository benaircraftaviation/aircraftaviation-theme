<?php
/**
 * Fallback loop for the blog and other archives.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="content" class="content-page">
	<?php if ( have_posts() ) : ?>
		<ul class="entry-list">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<li>
					<article <?php post_class( 'card' ); ?>>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta"><?php echo esc_html( get_the_date() ); ?></p>
						<div class="entry-content"><?php the_excerpt(); ?></div>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<article class="card">
			<h1><?php esc_html_e( 'Nothing published yet', 'aircraftaviation' ); ?></h1>
			<p><?php esc_html_e( 'Posts will show up here.', 'aircraftaviation' ); ?></p>
		</article>
	<?php endif; ?>
</main>
<?php
get_footer();
