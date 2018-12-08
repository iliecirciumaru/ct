<?php

get_header();
get_sidebar('left'); ?>


		
	<div id="primary" class="content-area col-md-7">
	
		<main id="main" class="site-main" role="main">
		<div class="entry-content">

		<h1><div id="home_h1">Cicerone-trip - die beste lebende Reise-Enzyklopadie</div></h1> 
<p>Cicerone Trip ist ein lebendinger, standig aktualisierter und erganzter Reisefuhrer mit praktischen Informationen fur Touristen. Seine Autoren sind keine Redaktionen oder Journalisten. Die Autoren von "Cicerone Trip" sind Profis, die ihre Richtungen besser kennen als jeder andere.

Auf unserer Website finden Sie alles uber Lander, Stadte, Hotels, Wandermoglichkeiten und etc. Die Webseite ist lebendig und entwickelt sich taglich, hier finden Sie die neuesten Nachrichten, die besten Ticketpreise und detaillierte Informationen zu Landern und Stadten.</p>


			</div>
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row'>" ;
					elseif($count%2 == 0)
						echo "</div><!--.row--><div class='row'>";
					 
					get_template_part( 'content', 'grid4' );
					
					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php times_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>