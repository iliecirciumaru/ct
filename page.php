<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Times
 */

get_header();?>


				
		<?php if ((has_post_thumbnail())) : ?>
		<div class="header-title col-md-12">
		<div class="single-featured-image">
			<?php the_post_thumbnail()  ?>
			<h1 class="image-entry-title col-md-12">
				<?php the_title(); ?>
			</h1>
		</div>
		</div>
	<?php else : ?>
	
		
			
	<?php endif; ?>
	
	
	
	
	<?php
get_sidebar('left') ?>

	<div id="primary-mono" class="content-area col-md-7">
		<main id="main" class="site-main" role="main">
<?php
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	}
?>	
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
