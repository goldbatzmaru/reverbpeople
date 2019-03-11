<?php global $cabana_wp; ?>
<?php get_template_part( 'partials/head', 'meta' ); ?>

<body <?php body_class(); ?> >

	<?php if ( is_page_template( 'page-templates/template-agency-default.php' ) ) : ?>

    <header id="header-global" role="banner">
	
		<div class="header-top">
				
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
						
					</nav><!-- end .main-navigation -->
					
				</div><!-- end .twelve columns -->
										
			</div><!-- end .container -->
			
		</div><!-- end .header-top -->

		
	
	<?php else : ?>

	<div class="header-image-slideshow"></div>
	
	<header id="header-global" role="banner">
	
		<div class="header-top">
				
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
	
					<?php if ( !is_page_template( 'page-templates/template-one-page-team.php' ) && !is_page_template( 'page-templates/template-one-page-personal.php' ) ) { ?>
					
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
					
					<?php
					$header_menu_args = array(
					    'menu' => 'One Page Navigation',
					    'theme_location' => 'One Header',
					    'container' => false,
					    'menu_id' => 'sf',
					    'menu_class' => 'sf-menu'
					);
					
					wp_nav_menu($header_menu_args);
					?>
					
					<?php } ?>
						
					</nav><!-- end .main-navigation -->
					
				</div><!-- end .twelve columns -->
										
			</div><!-- end .container -->
			
		</div><!-- end .header-top -->

		<div class="container">
	<div class="uber-statement">
		
		<h1><?php echo $cabana_wp['uber-statement']; ?></h1>
	
	</div>
	</div>
	
	<?php endif; ?>
	
	</header><!-- end #header-global -->