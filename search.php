<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Times
 */

get_header(); ?>
	<div class="header-title col-md-12">
		
		<div class="single-featured-image">
			<img src="wp-content/uploads/2017/07/suchen.jpg" alt="">
			<h1 class="image-entry-title col-md-12">
				<?php printf( __( 'Suchergebnisse für: %s', 'times' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</div>
	
			
	
		
		
		
		
		<h1 class="page-title"></h1>
	</div>
	<?php get_sidebar('left'); ?>
	<section id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php $count = 0; ?>
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
	</section><!-- #primary -->

<?php get_footer(); ?>
