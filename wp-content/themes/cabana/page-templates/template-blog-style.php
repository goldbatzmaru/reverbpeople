<?php
/**
 * Template Name: Homepage (Blog Style)
 * Description: The template for displaying the custom homepage.
 *
 *
 * @package cabana
 */
get_header(); ?>

	<main>
	
		<section id="homepage-about">
		
			<div class="container">
			
				<header class="homepage-section-header">
				
					<div class="icon-holder about">
						<?php echo do_shortcode( stripslashes( $cabana_wp['about-icon'] ) ); ?>
					</div>
					
					<h1><?php echo $cabana_wp['about-title']; ?></h1>
					
					<div class="homepage-section-intro">
						
						<?php echo $cabana_wp['about-introduction']; ?>
						
					</div><!-- end .homepage-section-intro -->
					
					<?php if ( $cabana_wp['about-button-url-select'] ) { ?>
						<a class="read-more-btn" href="<?php echo get_permalink($cabana_wp['about-button-url-select']); ?>"><?php echo $cabana_wp['about-button-copy']; ?></a>
					<?php } ?>
				 
				</header><!-- end .homepage-section-header -->
				
			</div><!-- end .container -->
		
		</section><!-- end #homepage-about -->
	
		<section id="homepage-news">

			<div class="news-items">
			
				<?php
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query( 'showposts=5' . '&paged='.$paged );
				while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				
				<article <?php post_class( 'post-excerpt' ); ?>>
				
					<div class="container">
	
						<div class="date-stamp">
							<div class="month"><?php the_time( 'M' ); ?></div>
							<div class="day"><?php the_time( 'd' ); ?></div>
						</div>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="meta-details">
							
							<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><?php the_category( ' & ' ); ?></span> </p>
						
						</div><!-- end .meta-details -->
						
						<br />
			   
					   	<div class="news-thumbnail">

					   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'news-large' ); ?></a>
					   		
					   	</div><!-- end .news-thumbnail -->
					   	
					   	<?php the_excerpt(); ?>
					   		
					   	<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php _e( 'Read Article', 'cabana' ); ?></a>
				   	
				   	</div><!-- end .container -->
	
				</article><!-- end .post-excerpt -->
				
				<?php endwhile; ?>
	
			</div><!-- end .news-items -->
			
			<div class="container">
			
				<?php if( function_exists( 'wp_pagenavi' ) ) { ?>
				<?php wp_pagenavi(); ?>   
				<?php } else { ?>      
					<?php posts_nav_link( '&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;' ); ?>
				<?php } ?>
			
			</div><!-- end .container -->
			
			<?php wp_reset_postdata(); ?>

		</section><!-- end .homepage-news -->
					
	</main><!-- end main -->

<?php get_footer(); ?>