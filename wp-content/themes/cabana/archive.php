<?php
/**
 * The template for displaying archive pages.
 *
 *
 * @package cabana
 */
get_header( 'inner' ); ?>

	<main>
	
		<section class="content">
		
			<div class="container">
			
				<?php if ( $cabana_wp['blog-layout'] == '1' ) { ?>
			
				<div class="post-index">
							
				<?php if ( is_category() ) { ?>
					<h1><?php _e( 'Posts in the Category:', 'cabana' ); ?> <strong><?php single_cat_title(); ?></strong></h1>
	
				<?php } elseif ( is_tag() ) { ?> 
					<h1><?php _e( 'Posts Tagged with:', 'cabana' ); ?> <strong><?php single_tag_title(); ?></strong></h1>
					
				<?php } elseif ( is_author() ) { ?>
					<h1><?php _e( 'Posts By:', 'cabana' ); ?> <strong><?php $curauth = get_userdata( get_query_var( 'author' ) );  ?><?php echo $curauth->display_name; ?></strong></h1>
	
				<?php } elseif ( is_day() ) { ?>
					<h1><?php _e( 'Daily Archives:', 'cabana' ); ?> <strong><?php the_time( 'F jS, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_month() ) { ?>
					<h1><?php _e( 'Monthly Archives:', 'cabana' ); ?> <strong><?php the_time( 'F, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_year() ) { ?>
					<h1><?php _e( 'Yearly Archives:', 'cabana' ); ?> <strong><?php the_time( 'Y' ); ?></strong></h1>
							
				<?php } ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
					<article <?php post_class( 'post-excerpt' ); ?>>
					
						<div class="date-stamp">
							<div class="month"><?php the_time( 'M' ); ?></div>
							<div class="day"><?php the_time( 'd' ); ?></div>
						</div>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="meta-details">
							
							<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><a href=""><?php the_category( ' & ' ); ?></a></span></p>
						
						</div><!-- end .meta-details -->
			   
					   	<div class="post-thumbnail">
	
					   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'news-large' ); ?></a>
					   		
					   	</div><!-- end .post-thumbnail -->
					   	
					   <?php the_excerpt(); ?>
					   	
					   	<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php _e( 'Read Article', 'cabana' ); ?></a>
	
					</article><!-- end .post-excerpt -->
						
				<?php endwhile; endif; ?>

				<?php if( function_exists( 'wp_pagenavi' ) ) { ?>
				<?php wp_pagenavi(); ?>   
				<?php } else { ?>      
					<?php posts_nav_link( '&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;' ); ?>
				<?php } ?>
						
				</div><!-- end .post-index -->
				
				<?php } ?>
				
				<?php if ( $cabana_wp['blog-layout'] == '2' ) { ?>
		
				<?php get_sidebar(); ?>
				
				<div class="post-index ten columns offset-by-one omega">
											
				<?php if ( is_category() ) { ?>
					<h1><?php _e( 'Posts in the Category:', 'cabana' ); ?> <strong><?php single_cat_title(); ?></strong></h1>
	
				<?php } elseif ( is_tag() ) { ?> 
					<h1><?php _e( 'Posts Tagged with:', 'cabana' ); ?> <strong><?php single_tag_title(); ?></strong></h1>
					
				<?php } elseif ( is_author() ) { ?>
					<h1><?php _e( 'Posts By:', 'cabana' ); ?> <strong><?php $curauth = get_userdata( get_query_var( 'author' ) );  ?><?php echo $curauth->display_name; ?></strong></h1>
	
				<?php } elseif ( is_day() ) { ?>
					<h1><?php _e( 'Daily Archives:', 'cabana' ); ?> <strong><?php the_time( 'F jS, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_month() ) { ?>
					<h1><?php _e( 'Monthly Archives:', 'cabana' ); ?> <strong><?php the_time( 'F, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_year() ) { ?>
					<h1><?php _e( 'Yearly Archives:', 'cabana' ); ?> <strong><?php the_time( 'Y' ); ?></strong></h1>
							
				<?php } ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
					<article <?php post_class( 'post-excerpt' ); ?>>
					
						<div class="date-stamp">
							<div class="month"><?php the_time( 'M' ); ?></div>
							<div class="day"><?php the_time( 'd' ); ?></div>
						</div>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="meta-details">
							
							<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><a href=""><?php the_category( ' & ' ); ?></a></span></p>
						
						</div><!-- end .meta-details -->
			   
					   	<div class="post-thumbnail">
	
					   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'news-large' ); ?></a>
					   		
					   	</div><!-- end .post-thumbnail -->
					   	
					   <?php the_excerpt(); ?>
					   	
					   	<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php _e( 'Read Article', 'cabana' ); ?></a>
	
					</article><!-- end .post-excerpt -->
						
				<?php endwhile; endif; ?>

				<?php if( function_exists( 'wp_pagenavi' ) ) { ?>
				<?php wp_pagenavi(); ?>   
				<?php } else { ?>      
					<?php posts_nav_link( '&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;' ); ?>
				<?php } ?>
						
				</div><!-- end .post-index -->
				
				<?php } ?>
				
				<?php if ( $cabana_wp['blog-layout'] == '3' ) { ?>
				
				<div class="post-index ten columns alpha">
															
				<?php if ( is_category() ) { ?>
					<h1><?php _e( 'Posts in the Category:', 'cabana' ); ?> <strong><?php single_cat_title(); ?></strong></h1>
	
				<?php } elseif ( is_tag() ) { ?> 
					<h1><?php _e( 'Posts Tagged with:', 'cabana' ); ?> <strong><?php single_tag_title(); ?></strong></h1>
					
				<?php } elseif ( is_author() ) { ?>
					<h1><?php _e( 'Posts By:', 'cabana' ); ?> <strong><?php $curauth = get_userdata( get_query_var( 'author' ) );  ?><?php echo $curauth->display_name; ?></strong></h1>
	
				<?php } elseif ( is_day() ) { ?>
					<h1><?php _e( 'Daily Archives:', 'cabana' ); ?> <strong><?php the_time( 'F jS, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_month() ) { ?>
					<h1><?php _e( 'Monthly Archives:', 'cabana' ); ?> <strong><?php the_time( 'F, Y' ); ?></strong></h1>
	
				<?php } elseif ( is_year() ) { ?>
					<h1><?php _e( 'Yearly Archives:', 'cabana' ); ?> <strong><?php the_time( 'Y' ); ?></strong></h1>
							
				<?php } ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
					<article <?php post_class( 'post-excerpt' ); ?>>
					
						<div class="date-stamp">
							<div class="month"><?php the_time( 'M' ); ?></div>
							<div class="day"><?php the_time( 'd' ); ?></div>
						</div>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="meta-details">
							
							<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><a href=""><?php the_category( ' & ' ); ?></a></span></p>
						
						</div><!-- end .meta-details -->
			   
					   	<div class="post-thumbnail">
	
					   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'news-large' ); ?></a>
					   		
					   	</div><!-- end .post-thumbnail -->
					   	
					   <?php the_excerpt(); ?>
					   	
					   	<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php _e( 'Read Article', 'cabana' ); ?></a>
	
					</article><!-- end .post-excerpt -->
						
				<?php endwhile; endif; ?>

				<?php if( function_exists( 'wp_pagenavi' ) ) { ?>
				<?php wp_pagenavi(); ?>   
				<?php } else { ?>      
					<?php posts_nav_link( '&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;' ); ?>
				<?php } ?>
						
				</div><!-- end .post-index -->
				
				<?php get_sidebar(); ?>
				
				<?php } ?>
						
			</div><!-- end .container -->
		
		</section><!-- end .content -->
					
	</main><!-- end main -->
	
<?php get_footer(); ?>