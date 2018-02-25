<?php
/*
Template Name: pagehotel
*/
?>
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
		<ins class="bookingaff" data-aid="1438922" data-target_aid="1438922" data-prod="sbp" data-width="1100" data-height="290" data-lang="de" data-currency="EUR" data-cc1="es" data-df_num_properties="3">
    <!-- Anything inside will go away once widget is loaded. -->
    <a href="//www.booking.com?aid=1438922">Booking.com</a>
</ins>
<script type="text/javascript">
    (function(d, sc, u) {
      var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
      s.type = 'text/javascript';
      s.async = true;
      s.src = u + '?v=' + (+new Date());
      p.parentNode.insertBefore(s,p);
      })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
</script>
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
