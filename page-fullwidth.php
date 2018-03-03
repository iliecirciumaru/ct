<?php
/**
 * The template for displaying Full Width pages.
 *
 * Template Name: Full Width (No Sidebar)
 *
 * @package Times
 */

get_header(); ?>
	<?php if ((has_post_thumbnail())) : ?>
		<div class="page-header-title">
			<div class="page-single-featured-image">
				<?php the_post_thumbnail()  ?>
				<h1 class="image-entry-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	<?php endif; ?>
	
<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
