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
			</header><!-- .page-header -->
			
			<section class="list-cours">
			<section id="annonce"></section>
				<?php
				/* Start the Loop */
				/* BOUCLE AFFICHANT LA LISTE DE COURS AVEC DIVERS INFORMATIONS */
				$precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					
					convertir_tableau($tPropriété);
					if ($precedent != $tPropriété['typeCours']): ?>
						<?php if($precedent != "XXXXXX"): ?>
							</section>
						
						<?php endif; ?>
						<?php if(in_array($precedent, ['Web', 'Jeu', 'Spécifique'])): ?>
							<section class="ctrl-carrousel">
								<?php echo $ctrl_radio;
								$ctrl_radio = '';
								?>
							</section>
						<?php endif; ?>
						<h1><p><?php echo $tPropriété['typeCours'] ?></p></h1>
						<section <?php echo class_composent($tPropriété['typeCours'])?>>
						
					<?php endif; ?>
				<?php 
				if(in_array($tPropriété['typeCours'], ['Web', 'Jeu', 'Spécifique'])): 
					get_template_part( 'template-parts/content', 'carrousel' );
					$ctrl_radio .= '<input type="radio" name="rad-'. $tPropriété['typeCours'] .'">';
					elseif ($tPropriété['typeCours'] == 'Projet'):
						get_template_part( 'template-parts/content', 'galerie-personnelle' );
				
				else:
				get_template_part( 'template-parts/content', 'bloc' );
				
				endif;
				
				$precedent = $tPropriété['typeCours'];
				endwhile; ?> 
			</section>
		<?php endif; ?>

		<section class="admin-rapide">
				<h2>Ajouter un article de catégorie « Nouvelles »</h2>
				<input type="text" name="title" placeholder="Titre">
				<textarea name="content" placeholder="Contenu de l'article"></textarea>
				<button id="bout-rapide">Créer une nouvelle</button>
		</section>


		<section class="nouvelles">
				<!-- <button id="bout_nouvelles">Afficher les 3 dernières nouvelles</button>-->
				<section></section>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

function convertir_tableau(&$tPropriété) {
	$titre_grand = get_the_title();
	$tPropriété['session'] = substr($titre_grand, 4, 1);
	$tPropriété['nbHeure'] = substr($titre_grand, -4, 3);
	$tPropriété['titre'] = substr($titre_grand, 8, -6);
	$tPropriété['sigle'] = substr($titre_grand, 0, 7);
	$tPropriété['typeCours'] = get_field('type_de_cours'); 
					
}

function class_composent($typeCours) {
	if (in_array($typeCours, ['Web', 'Jeu', 'Spécifique'])) {
		return 'class="carrousel-2"';
	}

	elseif ($typeCours == "Projet") {
		return 'class="galerie"';
	}

	else {
		return 'class="bloc"';
	}
}