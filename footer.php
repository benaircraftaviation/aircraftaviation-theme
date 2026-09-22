<?php
/**
 * Navy footer: Aircraft Aviation, Watch, Plan, Follow, copyright.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$data = function_exists( 'aircraftaviation_data' ) ? aircraftaviation_data() : array();
$x    = ( isset( $data['x_feed'] ) && is_array( $data['x_feed'] ) ) ? $data['x_feed'] : array();
?>
<footer class="site-footer">
	<div class="footer-inner">
		<div class="footer-grid">
			<section>
				<h2><?php esc_html_e( 'Aircraft Aviation', 'aircraftaviation' ); ?></h2>
				<p><?php esc_html_e( 'The avgeek aviation source for routes, photos, and live airport streams.', 'aircraftaviation' ); ?></p>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Dashboard', 'aircraftaviation' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/how-we-verify/' ) ); ?>"><?php esc_html_e( 'How We Verify', 'aircraftaviation' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'aircraftaviation' ); ?></a></li>
				</ul>
			</section>
			<section>
				<h2><?php esc_html_e( 'Watch', 'aircraftaviation' ); ?></h2>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/streams/' ) ); ?>"><?php esc_html_e( 'Streams', 'aircraftaviation' ); ?></a></li>
					<li><a href="https://www.youtube.com/@AIRLINEVIDEOS" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Airline Videos Live', 'aircraftaviation' ); ?></a></li>
					<li><a href="https://www.nycaviation.com/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'NYC Aviation', 'aircraftaviation' ); ?></a></li>
					<li><a href="https://www.youtube.com/@L.A.FLIGHTS" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'LA Flights', 'aircraftaviation' ); ?></a></li>
				</ul>
			</section>
			<section>
				<h2><?php esc_html_e( 'Plan', 'aircraftaviation' ); ?></h2>
				<ul>
					<li><a href="https://www.google.com/travel/flights" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Google Flights', 'aircraftaviation' ); ?></a></li>
					<li><a href="https://www.aerolopa.com/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'AeroLOPA', 'aircraftaviation' ); ?></a></li>
					<li><a href="https://www.gcmap.com/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Great Circle Mapper', 'aircraftaviation' ); ?></a></li>
				</ul>
			</section>
			<section>
				<h2><?php esc_html_e( 'Follow', 'aircraftaviation' ); ?></h2>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog / Newsletter', 'aircraftaviation' ); ?></a></li>
					<?php if ( ! empty( $x['url'] ) ) : ?>
						<li><?php aircraftaviation_link( $x['url'], ! empty( $x['handle'] ) ? $x['handle'] : __( 'X', 'aircraftaviation' ) ); ?></li>
					<?php else : ?>
						<li><?php esc_html_e( 'X feed coming soon', 'aircraftaviation' ); ?></li>
					<?php endif; ?>
				</ul>
			</section>
		</div>
		<p class="copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Aircraft Aviation. All rights reserved.', 'aircraftaviation' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
