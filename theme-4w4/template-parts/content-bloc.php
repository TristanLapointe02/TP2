<?php
/**
 * Template part pour afficher les blocs de front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

global $tPropriété;
?>

<article class="<?php echo $tPropriété['typeCours'] ?>">
	
	<a href="<?php echo get_permalink(); ?>"><?php echo $tPropriété['titre']; ?></a>
	<p><?php echo $tPropriété['sigle'] . " - " . $tPropriété['nbHeure'] . " - " . $tPropriété['typeCours']; ?></p>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>
