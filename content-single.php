<?php
/**
 * @package Times
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ((has_post_thumbnail())) : ?>
		<div class="page-header-title">
			
<div class="page-single-featured-image">
<h1 class="entry-title col-md-12">
					<?php the_title(); ?>
				</h1>	
<header class="entry-header">
		<div class="entry-meta">
			<?php times_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->			
<?php the_post_thumbnail()  ?>
				
			</div>
		</div>
	<?php endif; ?>
	

	
	
	
	<div class="entry-content">
		<?php 
			the_content(); 
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Страницы:', 'times' ),
				'after'  => '</div>',
			) );
		?>
		<?php 
			$sourceName = get_field('post_source_name');
			if ($sourceName != '') {
				$sourceLink = get_field('post_source_link');
				$a = sprintf('
					<div class="post-source">
						<i class="fa fa-link"></i> 
							<a href="%s" target="_blank">Quelle: %s</a>
					</div>', $sourceLink, $sourceName);
				echo $a;
			}
			
		?>
		

	</div><!-- .entry-content -->
</article><!-- #post-## -->
