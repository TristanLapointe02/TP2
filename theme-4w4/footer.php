<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- LE FOOTER A ÉTÉ SIMPLIÉ, EN ENLEVANT LE TEXTE PAR DÉFAUT -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://cmaisonneuve.qc.ca', 'Collège de Maisonneuve' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'theme-4w4' ), 'WordPress' );
				?>
			</a>
			<span class="sep"></span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Nom du thème: %1$s, %2$s.', 'theme-4w4' ), 'theme-4w4', 'Tristan Lapointe');
				?>
			<a class="lien" href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/">TIM</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
