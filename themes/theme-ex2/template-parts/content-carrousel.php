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

				<article class="slide__conteneur">
		        <div class="slide">
				<img src="http://localhost/ex2/wp-content/uploads/2021/03/3.jpg" alt="">
				<div class="slide__info">
		        <p> 582-4W4 - 90h - </p>
				<a href="http://localhost/ex2/2020/10/07/582-4w4-conception-dinterfaces-et-developpement-web/">Conception d’interfaces et développement Web</a>
				<p> Session: 4</p>
				</div>
				</div>
		</article>