<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-ex2
 */

get_header();
?>
/////////////// FRONT-PAGE.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

           <section class = "liste-cours">
			<?php
			/* Start the Loop */
            $precedent= "XXXXXXX";

			while ( have_posts() ) :
				the_post();
                $titre_grand = get_the_title();
				$session = substr($titre_grand, 4,1);
				$nbHeure = substr($titre_grand,-4,3);
				$titre = substr($titre_grand,8, -6);
				$sigle = substr($titre_grand,0, 7);
				$typecours = get_field('type de cours'); 
				if ($precedent != $typecours): ?>
				<?php if($precedent != "XXXXXXX"): ?>
				</section>
				<?php endif ?>
                <section>
				<?php endif
				?>
				<h2> <?php echo $typecours; ?> <h2>
				<article>
				<p> <?php echo $sigle .  " - " . $nbHeure . " - " . $typecours; ?></p>
				<a href = "<?php echo get_permalink(); ?>"><?php echo $titre; ?></a>
				<p> <?php echo $session; ?></p>
				</article>
				<?php
				$precedent = $typecours;
			endwhile; ?>
			</section>
			
        <?php
		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
