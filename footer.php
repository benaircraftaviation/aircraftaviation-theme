<?php
/**
 * Navy footer: legal links and copyright.
 *
 * @package AircraftAviation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="footer-inner">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/how-we-verify/' ) ); ?>"><?php esc_html_e( 'How We Verify', 'aircraftaviation' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'aircraftaviation' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>"><?php esc_html_e( 'Terms of Service', 'aircraftaviation' ); ?></a></li>
			<li><a href="https://www.linkedin.com/in/benjamin-harris-ab9423431/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Contact', 'aircraftaviation' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog / Newsletter', 'aircraftaviation' ); ?></a></li>
		</ul>
		<p class="copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Aircraft Aviation.</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
