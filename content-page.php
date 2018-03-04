<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Times
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<!--<h1 class="entry-title col-md-12">
				<?php the_title(); ?>
			</h1>-->
	<div class="entry-content">
		<?php
			$content = get_the_content();

			$pattern = "/<h(2|3)>(.*?)<\/h(?:2|3)>/";
			$matches = array();
			preg_match_all($pattern, $content, $matches);

			// if there are some h2 and h3
			// generate content-table
			if (count($matches) != 0 && array_key_exists(1, $matches) && count($matches[1]) != 0) {
				$oglavlenie = "<ul class='content-table'>";
				$oglavlenie .= "<h6 class='content-table-header'>Inhaltsangabe</h6>";
				$first = true;
				$previous = 0;
				foreach ($matches[1] as $key => $level) {
					$title = trim($matches[2][$key], chr(0xC2).chr(0xA0));
					$oglavlenie .= sprintf("<li class='content-table-%s'><a href='#%s'>%s</a></li>", $level, $title, $title);
				}

				$oglavlenie .= "</ul>";
				echo $oglavlenie;
				$content = preg_replace("/<h(\d{1})>(.*?)<\/h(\d{1})>/", '<h$1 id="$2">$2</h$3>', $content);
			}
		?>

		<?php echo $content; ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Страницы:', 'times' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
