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
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Страницы:', 'times' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer footer-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'times' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'times' ) );

			if ( ! times_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="fa fa-tags"></i> %2$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Ссылка</a>', 'times' );
				} else {
					$meta_text = __( '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Link</a>', 'times' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="fa fa-folder-open"></i> %1$s <i class="fa fa-tags"></i> %2$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Ссылка</a>', 'times' );
				} else {
					$meta_text = __( '<i class="fa fa-folder-open"></i> %1$s <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">Link</a>', 'times' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( '<i class="fa fa-edit"></i> Редактировать', 'times' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
