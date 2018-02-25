<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Times
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3517152121591733",
    enable_page_level_ads: true
  });
</script>

<meta name="B-verify" content="6d44b26dc6aa4793cbb64f6e609b59c55ff931ec" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<meta name="verify-admitad" content="7711bbed3a" />
<meta name="verification" content="9d956507b4c207c4e97d56e4ca428036" />
<!-- Begin TradeTracker SuperTag Code -->
<script type="text/javascript">

    var _TradeTrackerTagOptions = {
        t: 'a',
        s: '296916',
        chk: 'bc2b2f7a372d720c680f8566dcdb77b5',
        overrideOptions: {}
    };

    (function() {var tt = document.createElement('script'), s = document.getElementsByTagName('script')[0]; tt.setAttribute('type', 'text/javascript'); tt.setAttribute('src', (document.location.protocol == 'https:' ? 'https' : 'http') + '://tm.tradetracker.net/tag?t=' + _TradeTrackerTagOptions.t + '&amp;s=' + _TradeTrackerTagOptions.s + '&amp;chk=' + _TradeTrackerTagOptions.chk); s.parentNode.insertBefore(tt, s);})();
</script>
<!-- End TradeTracker SuperTag Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102188090-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="//api.skyscanner.net/api.ashx?key="></script>
<script type="text/javascript">
   skyscanner.load("snippets","2");
   function main(){
       var snippet = new skyscanner.snippets.SearchPanelControl();
       snippet.setShape("box400x400");
       snippet.setCulture("de-DE");
       snippet.setCurrency("EUR");
       snippet.setMarket("DE");
       snippet.setColourScheme("classicbluelight");
       snippet.setProduct("flights","1");

       snippet.draw(document.getElementById("snippet_searchpanel"));
   }
   skyscanner.setOnLoadCallback(main);
</script>
<?php global $option_setting; ?>
<div id="page" class="hfeed site">
<div id="top-bar">
	<div class="container">
			<div class="site-branding">
					<?php if (isset($option_setting['logo']['url'])) : ?>
						<?php if( $option_setting['logo']['url'] != "" ) : ?>
							<div id="site-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
							</div>
						<?php else : ?>	
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php endif; ?>	
					<?php else : ?>	
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>	
			</div>
			<div class="top-navigation">
				<?php  if (has_nav_menu('top'))
						 wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
			</div>
			<div class="top-right-search">
				<div id="search-bar"><?php get_template_part('searchform', 'top'); ?></div>
				<img src="<?php echo get_template_directory_uri()."/assets/images/search.png"?>">
			</div>	
	</div><!--.container-->
</div><!--#top-bar-->

<?php 
if (isset($option_setting['carousel-enable-on-home'])) :
	get_template_part('carousel');
else :	
	get_template_part('carousel','default');
endif;	 ?>


<div id="top-nav" class="container">
	<div id="top-nav-wrapper">
		<div class="container">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'times' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Читать далее', 'times' ); ?></a>
					
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->	
		</div>	
	</div>
</div>
	
	<div id="content" class="site-content">
	<div class="container content-inner">