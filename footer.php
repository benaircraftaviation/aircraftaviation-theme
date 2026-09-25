<?php
/**
 * Navy footer: Contact, Blog / Newsletter, copyright.
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
			<li><a href="https://www.linkedin.com/in/benjamin-harris-ab9423431/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Contact', 'aircraftaviation' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog / Newsletter', 'aircraftaviation' ); ?></a></li>
		</ul>
		<p class="copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Aircraft Aviation.</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
