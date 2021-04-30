<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			
				<?php
				single_cat_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<h2 class="archive-description">', '</h2>' );
				?>
			</header><!-- .page-header -->

			<section class="galerie">
			<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					
					get_template_part( 'template-parts/content', 'galerie-personnelle' );

				endwhile;?>
			</section>

		<?php endif;
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
