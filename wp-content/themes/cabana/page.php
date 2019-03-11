<?php
/**
 * The template for displaying standard pages.
 *
 *
 * @package cabana
 */
get_header( 'inner' ); ?>

	<main>
	
		<section class="content inner">
		
			<div class="container">
			
			<?php if ( $cabana_wp['page-layout'] == '1' ) { ?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
				
			<?php endwhile; endif; ?>
			
			<?php } ?>
			
			<?php if ( $cabana_wp['page-layout'] == '2' ) { ?>
			
			<?php get_sidebar(); ?>
			
				<div class="ten columns offset-by-one omega">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
				
				</div>
			
			<?php } ?>
			
			<?php if ( $cabana_wp['page-layout'] == '3' ) { ?>
			
				<div class="ten columns alpha">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
			
				</div>
			
			<?php get_sidebar(); ?>
			
			<?php } ?>
						
			</div><!-- end .container -->
		
		</section><!-- end .content -->
					
	</main><!-- end main -->
	
<?php get_footer(); ?>