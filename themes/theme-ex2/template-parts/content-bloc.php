<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-ex2
 */
global $tPropriete;
?>

                <article>
				<?php	the_post_thumbnail( 'thumbnail'); ?>
				<p> <?php echo $tPropriete['sigle'] .  " - " . $tPropriete['nbHeure'] . " - " . $tPropriete['typeCours']; ?></p>
				<a href = "<?php echo get_permalink(); ?>"><?php echo $tPropriete['titre']; ?></a>
				<p> Session: <?php echo $tPropriete['session']; ?></p>
				</article>