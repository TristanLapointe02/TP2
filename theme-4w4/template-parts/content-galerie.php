<?php
/**
 * Template part pour afficher les blocs de front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

?>

<article>
    <div class="galerie_interieur">
        <a class="galerie_devant" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
        <div class="galerie_derriere">
            <p><?php the_title() ?></p>
        </div>
    </div>
</article>
