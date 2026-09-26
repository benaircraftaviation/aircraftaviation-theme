<?php
/**
 * Homepage: left, center, and right columns from data/home.json.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$data            = aircraftaviation_data();
$trip_planning   = aircraftaviation_items( $data, 'trip_planning' );
$live_streams    = aircraftaviation_items( $data, 'live_stream_links' );
$aviation_news   = aircraftaviation_items( $data, 'aviation_news' );
$trip_reports    = aircraftaviation_items( $data, 'trip_reports' );
$sidebar_news    = aircraftaviation_items( $data, 'sidebar_news' );
$upcoming_events = aircraftaviation_items( $data, 'upcoming_events' );
$desk            = ( isset( $data['photo_desk'] ) && is_array( $data['photo_desk'] ) ) ? $data['photo_desk'] : array();
$desk_left       = ( isset( $desk['left'] ) && is_array( $desk['left'] ) ) ? $desk['left'] : array();
$desk_right      = ( isset( $desk['right'] ) && is_array( $desk['right'] ) ) ? $desk['right'] : array();
$photo_of_day    = ( isset( $desk['photo_of_the_day'] ) && is_array( $desk['photo_of_the_day'] ) ) ? $desk['photo_of_the_day'] : array();
$newsletter      = ( isset( $data['newsletter'] ) && is_array( $data['newsletter'] ) ) ? $data['newsletter'] : array();
$x_feed          = ( isset( $data['x_feed'] ) && is_array( $data['x_feed'] ) ) ? $data['x_feed'] : array();
$featured        = ( isset( $data['featured_stream'] ) && is_array( $data['featured_stream'] ) ) ? $data['featured_stream'] : array();

/**
 * Print one photo-desk figure.
 *
 * @param array  $photo Photo fields.
 * @param string $class Figure class.
 * @param string $kicker Optional kicker.
 */
$aircraftaviation_photo = function ( $photo, $class, $kicker = '' ) {
	if ( ! is_array( $photo ) || empty( $photo['src'] ) ) {
		return;
	}
	?>
	<figure class="photo-card <?php echo esc_attr( $class ); ?>">
		<img
			src="<?php echo esc_url( $photo['src'] ); ?>"
			alt="<?php echo esc_attr( isset( $photo['alt'] ) ? $photo['alt'] : '' ); ?>"
			<?php echo 'photo-day' === $class ? '' : 'loading="lazy"'; ?>
			decoding="async"
		>
		<?php if ( $kicker || ! empty( $photo['caption'] ) ) : ?>
			<figcaption>
				<?php if ( $kicker ) : ?>
					<span class="photo-kicker"><?php echo esc_html( $kicker ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $photo['caption'] ) ) : ?>
					<?php echo esc_html( $photo['caption'] ); ?>
				<?php endif; ?>
			</figcaption>
		<?php endif; ?>
	</figure>
	<?php
};
?>
<main id="content" class="home-grid">
	<div class="home-col home-col-left">
		<section class="card" aria-labelledby="trip-planning-title">
			<h2 id="trip-planning-title"><?php esc_html_e( 'Trip Planning', 'aircraftaviation' ); ?></h2>
			<?php if ( $trip_planning ) : ?>
				<ul class="link-list">
					<?php foreach ( $trip_planning as $item ) : ?>
						<?php if ( ! is_array( $item ) ) { continue; } ?>
						<li>
							<?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?>
							<?php if ( ! empty( $item['description'] ) ) : ?>
								<p class="summary"><?php echo esc_html( $item['description'] ); ?></p>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add trip planning links in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="x-feed-title">
			<h2 id="x-feed-title"><?php echo esc_html( ! empty( $x_feed['title'] ) ? $x_feed['title'] : __( 'On X', 'aircraftaviation' ) ); ?></h2>
			<a class="twitter-timeline" data-theme="dark" data-height="420" href="<?php echo esc_url( 'https://x.com/aircraftav?ref_src=twsrc%5Etfw' ); ?>"><?php esc_html_e( 'Posts by aircraftav', 'aircraftaviation' ); ?></a>
		</section>

		<section class="card" aria-labelledby="live-streams-title">
			<h2 id="live-streams-title"><?php esc_html_e( 'Live Stream Links', 'aircraftaviation' ); ?></h2>
			<?php if ( $live_streams ) : ?>
				<ul class="link-list">
					<?php foreach ( $live_streams as $item ) : ?>
						<?php if ( ! is_array( $item ) ) { continue; } ?>
						<li>
							<?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?>
							<?php if ( ! empty( $item['description'] ) ) : ?>
								<p class="summary"><?php echo esc_html( $item['description'] ); ?></p>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add live stream links in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="the-plan-title">
			<h2 id="the-plan-title"><?php esc_html_e( 'The Plan', 'aircraftaviation' ); ?></h2>
			<ul class="link-list">
				<li>
					<?php aircraftaviation_link( 'https://www.google.com/travel/flights', __( 'Google Flights', 'aircraftaviation' ) ); ?>
				</li>
				<li>
					<?php aircraftaviation_link( 'https://www.aerolopa.com/', __( 'AeroLOPA', 'aircraftaviation' ) ); ?>
				</li>
				<li>
					<?php aircraftaviation_link( 'https://www.gcmap.com/', __( 'Great Circle Mapper', 'aircraftaviation' ) ); ?>
				</li>
			</ul>
		</section>
	</div>

	<div class="home-col home-col-center">
		<section class="card" aria-labelledby="photo-desk-title">
			<h2 id="photo-desk-title"><?php esc_html_e( 'Photo Desk', 'aircraftaviation' ); ?></h2>
			<div class="photo-desk">
				<div class="photo-stack">
					<?php foreach ( array_slice( $desk_left, 0, 3 ) as $photo ) : ?>
						<?php $aircraftaviation_photo( $photo, 'photo-side' ); ?>
					<?php endforeach; ?>
				</div>
				<div class="photo-feature">
					<?php $aircraftaviation_photo( $photo_of_day, 'photo-day', __( 'Photo of the Day', 'aircraftaviation' ) ); ?>
				</div>
				<div class="photo-stack">
					<?php foreach ( array_slice( $desk_right, 0, 3 ) as $photo ) : ?>
						<?php $aircraftaviation_photo( $photo, 'photo-side' ); ?>
					<?php endforeach; ?>
				</div>
			</div>
			<?php if ( ! empty( $data['updated'] ) ) : ?>
				<p class="desk-note meta">
					<?php
					/* translators: %s: date the photo desk content was updated. */
					echo esc_html( sprintf( __( 'Desk updated %s', 'aircraftaviation' ), $data['updated'] ) );
					?>
				</p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="aviation-news-title">
			<h2 id="aviation-news-title"><?php esc_html_e( 'Aviation News', 'aircraftaviation' ); ?></h2>
			<?php if ( $aviation_news ) : ?>
				<?php foreach ( $aviation_news as $item ) : ?>
					<?php if ( ! is_array( $item ) ) { continue; } ?>
					<article class="news-item">
						<p class="meta">
							<?php
							$bits = array();
							if ( ! empty( $item['date'] ) ) {
								$bits[] = $item['date'];
							}
							if ( ! empty( $item['source'] ) ) {
								$bits[] = $item['source'];
							}
							echo esc_html( implode( ' · ', $bits ) );
							?>
						</p>
						<h3><?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?></h3>
						<?php if ( ! empty( $item['summary'] ) ) : ?>
							<p class="summary"><?php echo esc_html( $item['summary'] ); ?></p>
						<?php endif; ?>
					</article>
				<?php endforeach; ?>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add aviation news in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="trip-reports-title">
			<h2 id="trip-reports-title"><?php esc_html_e( 'Trip Reports', 'aircraftaviation' ); ?></h2>
			<?php if ( $trip_reports ) : ?>
				<?php foreach ( $trip_reports as $item ) : ?>
					<?php if ( ! is_array( $item ) ) { continue; } ?>
					<article class="report-item">
						<?php if ( ! empty( $item['route'] ) ) : ?>
							<p class="route"><?php echo esc_html( $item['route'] ); ?></p>
						<?php endif; ?>
						<h3><?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?></h3>
						<?php if ( ! empty( $item['summary'] ) ) : ?>
							<p class="summary"><?php echo esc_html( $item['summary'] ); ?></p>
						<?php endif; ?>
					</article>
				<?php endforeach; ?>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add trip reports in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>
	</div>

	<div class="home-col home-col-right">
		<section class="card" aria-labelledby="newsletter-title">
			<h2 id="newsletter-title"><?php echo esc_html( ! empty( $newsletter['title'] ) ? $newsletter['title'] : __( 'Blog / Newsletter', 'aircraftaviation' ) ); ?></h2>
			<?php if ( ! empty( $newsletter['text'] ) ) : ?>
				<p class="summary"><?php echo esc_html( $newsletter['text'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $newsletter['url'] ) ) : ?>
				<?php
				$button_label = ! empty( $newsletter['button'] ) ? $newsletter['button'] : __( 'Blog / Newsletter', 'aircraftaviation' );
				$button_href  = aircraftaviation_href( $newsletter['url'] );
				?>
				<a class="button" href="<?php echo esc_url( $button_href ); ?>"<?php echo aircraftaviation_is_external( $button_href ) ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>>
					<?php echo esc_html( $button_label ); ?>
				</a>
			<?php endif; ?>
		</section>

		<section class="card featured-stream" aria-labelledby="featured-stream-title">
			<h2 id="featured-stream-title"><?php esc_html_e( 'Featured live stream', 'aircraftaviation' ); ?></h2>
			<?php if ( $featured ) : ?>
				<?php if ( ! empty( $featured['status'] ) ) : ?>
					<p class="stream-status"><?php echo esc_html( $featured['status'] ); ?></p>
				<?php endif; ?>
				<h3><?php aircraftaviation_link( isset( $featured['url'] ) ? $featured['url'] : '', isset( $featured['name'] ) ? $featured['name'] : '' ); ?></h3>
				<?php if ( ! empty( $featured['description'] ) ) : ?>
					<p class="summary"><?php echo esc_html( $featured['description'] ); ?></p>
				<?php endif; ?>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add a featured stream in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="sidebar-news-title">
			<h2 id="sidebar-news-title"><?php esc_html_e( 'Sidebar news', 'aircraftaviation' ); ?></h2>
			<?php if ( $sidebar_news ) : ?>
				<?php foreach ( $sidebar_news as $item ) : ?>
					<?php if ( ! is_array( $item ) ) { continue; } ?>
					<article class="news-item">
						<?php if ( ! empty( $item['date'] ) ) : ?>
							<p class="meta"><?php echo esc_html( $item['date'] ); ?></p>
						<?php endif; ?>
						<h3><?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?></h3>
						<?php if ( ! empty( $item['summary'] ) ) : ?>
							<p class="summary"><?php echo esc_html( $item['summary'] ); ?></p>
						<?php endif; ?>
					</article>
				<?php endforeach; ?>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add sidebar news in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="card" aria-labelledby="events-title">
			<h2 id="events-title"><?php esc_html_e( 'Upcoming Events', 'aircraftaviation' ); ?></h2>
			<?php if ( $upcoming_events ) : ?>
				<ul class="event-list">
					<?php foreach ( $upcoming_events as $item ) : ?>
						<?php if ( ! is_array( $item ) ) { continue; } ?>
						<li>
							<?php if ( ! empty( $item['date'] ) ) : ?>
								<p class="event-date"><?php echo esc_html( $item['date'] ); ?></p>
							<?php endif; ?>
							<?php aircraftaviation_link( isset( $item['url'] ) ? $item['url'] : '', isset( $item['title'] ) ? $item['title'] : '' ); ?>
							<?php if ( ! empty( $item['location'] ) ) : ?>
								<p class="summary"><?php echo esc_html( $item['location'] ); ?></p>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php else : ?>
				<p class="empty"><?php esc_html_e( 'Add upcoming events in data/home.json.', 'aircraftaviation' ); ?></p>
			<?php endif; ?>
		</section>
	</div>
</main>
<?php
get_footer();
