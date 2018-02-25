<?php

get_header();
get_sidebar('left'); ?>


		
	<div id="primary" class="content-area col-md-7">
	
		<main id="main" class="site-main" role="main">
		<div class="entry-content">

		<h4>Cicerone-trip - die weltweit beste lebende Reise-Enzyklopadie</h4> 
<p>Warum das Beste? Lesen Sie unsere Seiten und uberzeugen Sie sich selbst. 
Hier erfahren Sie mehr uber Lander, Resorts und Hotels aus den ersten Quellen.
Warum lebende? Denn hier kommt jeden Tag etwas Neues hinzu - echte Tourismusprofis, die alles uber die Feinheiten des Tourismus wissen und personliche Erfahrungen grosszugig teilen.
</p>


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