<?php global $cabana_wp; ?>
<?php get_template_part( 'partials/head', 'meta' ); ?>

<body <?php body_class(); ?> >
	
	<header id="header-global-inner" role="banner">
	
		<div class="header-top-inner">

			<div class="container">
							
				<div class="logo four columns alpha">
				
					<?php if ( $cabana_wp['header-text-logo'] ) { ?>
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php } elseif ( $cabana_wp['header-logo'] ) { ?>
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo $cabana_wp['header-logo']['url']; ?>" alt="Header Logo" /></a>
					<?php } ?>
					
				</div><!-- end .logo -->
				
				<div class="twelve columns omega">
					<div class="above-menu">
						<?php get_template_part( 'partials/social', 'icons' ); ?>
						<p class="header-cta"><a href="/contact/">Free Consultation</a></p>
					</div>
					<div class="clearfix"></div>
				
					<nav class="main-navigation" role="navigation">
					
					<?php if ( $cabana_wp['multi-one-page-chooser'] == '1' ) { ?>
					
					<?php
					$header_menu_args = array(
					    'menu' => 'Multi Navigation',
					    'theme_location' => 'Multi Header',
					    'container' => false,
					    'menu_id' => 'sf',
					    'menu_class' => 'sf-menu'
					);
					
					wp_nav_menu($header_menu_args);
					?>
					
					<?php } else { ?>
					
					<ul id="sf" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>"><?php _e( 'Back to home', 'cabana' ); ?></a></li>
					</ul>
					
					<?php } ?>
						
					</nav><!-- end .main-navigation -->
		
				</div><!-- end .twelve columns -->

			</div><!-- end .container -->
			
		</div><!-- end .header-top-inner -->
	
	</header><!-- end #header-global-inner -->