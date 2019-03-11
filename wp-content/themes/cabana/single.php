<?php
/**
 * The template for displaying all single posts.
 *
 * 
 * @package cabana
 */
get_header( 'inner' ); ?>

	<main>
		
		<section class="content">
		
			<div class="container">
			
				<?php if ( $cabana_wp['blog-layout'] == '1' ) { ?>
					
				<section class="post-index">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<article <?php post_class( 'post-single' ); ?>>
	
						<div class="date-stamp">
							<div class="month"><?php the_time( 'M' ); ?></div>
							<div class="day"><?php the_time( 'd' ); ?></div>
						</div>
						
						<h2><?php the_title(); ?></h2>
						
						<div class="meta-details">
							
							<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><?php the_category( ' & ' ); ?></span> </p>
						
						</div><!-- end .meta-details -->
			   
					   	<div class="post-thumbnail">
	
					   		<?php the_post_thumbnail( 'news-large' ); ?>
					   		
					   	</div><!-- end .post-thumbnail -->
					   	
					   	<?php the_content(); ?>
					   	
					   	<div class="post-tags">
					   		<?php the_tags( ' ',' ' ); ?>
					   	</div>
					   	
					   	<?php wp_link_pages(); ?>
	
					</article><!-- end .post-single -->
					
				<?php endwhile; endif; ?>

					<div class="author-bio">
						
						<?php echo get_avatar( get_the_author_meta( 'email' ), '180' ); ?>
						
						<div class="author-info">
							
							<ul class="author-social-icons">
								
								<?php 
									$rss_url = get_the_author_meta( 'rss_url' );
									if ( $rss_url && $rss_url != '' ) {
										echo '<li><a href="' . esc_url($rss_url) . '"><i class="fa fa-rss"></i></a></li>';
									}
									$twitter_profile = get_the_author_meta( 'twitter_profile' );
									if ( $twitter_profile && $twitter_profile != '' ) {
										echo '<li><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
									}
									$facebook_profile = get_the_author_meta( 'facebook_profile' );
									if ( $facebook_profile && $facebook_profile != '' ) {
										echo '<li><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
									}
									$google_profile = get_the_author_meta( 'google_profile' );
									if ( $google_profile && $google_profile != '' ) {
										echo '<li><a href="' . esc_url($google_profile) . '"><i class="fa fa-google-plus"></i></a></li>';
									}
									$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
									if ( $linkedin_profile && $linkedin_profile != '' ) {
										echo '<li><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
									}
									$pinterest_profile = get_the_author_meta( 'pinterest_profile' );
									if ( $pinterest_profile && $pinterest_profile != '' ) {
										echo '<li><a href="' . esc_url($pinterest_profile) . '"><i class="fa fa-pinterest"></i></a></li>';
									}
									$dribbble_profile = get_the_author_meta( 'dribbble_profile' );
									if ( $dribbble_profile && $dribbble_profile != '' ) {
										echo '<li><a href="' . esc_url($dribbble_profile) . '"><i class="fa fa-dribbble"></i></a></li>';
									}
									$flickr_profile = get_the_author_meta( 'flickr_profile' );
									if ( $flickr_profile && $flickr_profile != '' ) {
										echo '<li><a href="' . esc_url($flickr_profile) . '"><i class="fa fa-flickr"></i></a></li>';
									}
									$vimeo_profile = get_the_author_meta( 'vimeo_profile' );
									if ( $vimeo_profile && $vimeo_profile != '' ) {
										echo '<li><a href="' . esc_url($vimeo_profile) . '"><i class="fa fa-vimeo-square"></i></a></li>';
									}
									$youtube_profile = get_the_author_meta( 'youtube_profile' );
									if ( $youtube_profile && $youtube_profile != '' ) {
										echo '<li><a href="' . esc_url($youtube_profile) . '"><i class="fa fa-youtube"></i></a></li>';
									}
								?>
								
							</ul><!-- end .author-social-icons -->
							
							<p class="article-author"><?php _e( 'article written by', 'cabana' ); ?><span><?php the_author_link(); ?></span></p>
							
							<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
						
						</div><!-- end .author-info -->
				
					</div><!-- end .author-bio -->
					
					<?php //comments_template(); ?>
					
					<?php gt_content_nav( 'nav-below' );?>
						
				</section><!-- end .post-index -->
				
				<?php } ?>
				
				<?php if ( $cabana_wp['blog-layout'] == '2' ) { ?>
				
				<?php get_sidebar(); ?>
				
				<section class="post-index ten columns offset-by-one omega">
											
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<article <?php post_class( 'post-single' ); ?>>
		
							<div class="date-stamp">
								<div class="month"><?php the_time( 'M' ); ?></div>
								<div class="day"><?php the_time( 'd' ); ?></div>
							</div>
							
							<h2><?php the_title(); ?></h2>
							
							<div class="meta-details">
								
								<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><a href=""><?php the_category( ' & ' ); ?></a></span></p>
							
							</div><!-- end .meta-details -->
				   
						   	<div class="post-thumbnail">
		
						   		<?php the_post_thumbnail( 'news-large' ); ?>
						   		
						   	</div><!-- end .post-thumbnail -->
						   	
						   	<?php the_content(); ?>
						   	
						   	<div class="post-tags">
						   		<?php the_tags( ' ',' ' ); ?>
						   	</div>
						   	
						   	<?php wp_link_pages(); ?>
		
						</article><!-- end .post-single -->
						
					<?php endwhile; endif; ?>
	
						<div class="author-bio">
							
							<?php echo get_avatar( get_the_author_meta( 'email' ), '180' ); ?>
							
							<div class="author-info">
	
								
								
								<ul class="author-social-icons">
									
									<?php 
										$rss_url = get_the_author_meta( 'rss_url' );
										if ( $rss_url && $rss_url != '' ) {
											echo '<li><a href="' . esc_url($rss_url) . '"><i class="fa fa-rss"></i></a></li>';
										}
										$twitter_profile = get_the_author_meta( 'twitter_profile' );
										if ( $twitter_profile && $twitter_profile != '' ) {
											echo '<li><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
										}
										$facebook_profile = get_the_author_meta( 'facebook_profile' );
										if ( $facebook_profile && $facebook_profile != '' ) {
											echo '<li><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
										}
										$google_profile = get_the_author_meta( 'google_profile' );
										if ( $google_profile && $google_profile != '' ) {
											echo '<li><a href="' . esc_url($google_profile) . '"><i class="fa fa-google-plus"></i></a></li>';
										}
										$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
										if ( $linkedin_profile && $linkedin_profile != '' ) {
											echo '<li><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
										}
										$pinterest_profile = get_the_author_meta( 'pinterest_profile' );
										if ( $pinterest_profile && $pinterest_profile != '' ) {
											echo '<li><a href="' . esc_url($pinterest_profile) . '"><i class="fa fa-pinterest"></i></a></li>';
										}
										$dribbble_profile = get_the_author_meta( 'dribbble_profile' );
										if ( $dribbble_profile && $dribbble_profile != '' ) {
											echo '<li><a href="' . esc_url($dribbble_profile) . '"><i class="fa fa-dribbble"></i></a></li>';
										}
										$flickr_profile = get_the_author_meta( 'flickr_profile' );
										if ( $flickr_profile && $flickr_profile != '' ) {
											echo '<li><a href="' . esc_url($flickr_profile) . '"><i class="fa fa-flickr"></i></a></li>';
										}
										$vimeo_profile = get_the_author_meta( 'vimeo_profile' );
										if ( $vimeo_profile && $vimeo_profile != '' ) {
											echo '<li><a href="' . esc_url($vimeo_profile) . '"><i class="fa fa-vimeo-square"></i></a></li>';
										}
										$youtube_profile = get_the_author_meta( 'youtube_profile' );
										if ( $youtube_profile && $youtube_profile != '' ) {
											echo '<li><a href="' . esc_url($youtube_profile) . '"><i class="fa fa-youtube"></i></a></li>';
										}
									?>
									
								</ul><!-- end .author-social-icons -->
								
								<p class="article-author"><?php _e( 'article written by', 'cabana' ); ?><span><?php the_author_link(); ?></span></p>
								
								<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
							
							</div><!-- end .author-info -->
					
						</div><!-- end .author-bio -->
						
						<?php comments_template(); ?>
						
						<?php gt_content_nav( 'nav-below' );?>
							
					</section><!-- end .post-index -->
				
				<?php } ?>
				
				<?php if ( $cabana_wp['blog-layout'] == '3' ) { ?>
				
				<section class="post-index ten columns alpha">
								
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<article <?php post_class( 'post-single' ); ?>>
		
							<div class="date-stamp">
								<div class="month"><?php the_time( 'M' ); ?></div>
								<div class="day"><?php the_time( 'd' ); ?></div>
							</div>
							
							<h2><?php the_title(); ?></h2>
							
							<div class="meta-details">
								
								<p><?php _e( 'posted on', 'cabana' ); ?> <span><?php the_time( 'F jS Y' ); ?></span> <?php _e( 'in', 'cabana' ); ?> <span><a href=""><?php the_category( ' & ' ); ?></a></span></p>
							
							</div><!-- end .meta-details -->
				   
						   	<div class="post-thumbnail">
		
						   		<?php the_post_thumbnail( 'news-large' ); ?>
						   		
						   	</div><!-- end .post-thumbnail -->
						   	
						   	<?php the_content(); ?>
						   	
						   	<div class="post-tags">
						   		<?php the_tags( ' ',' ' ); ?>
						   	</div>
						   	
						   	<?php wp_link_pages(); ?>
		
						</article><!-- end .post-single -->
						
					<?php endwhile; endif; ?>
	
						<div class="author-bio">
							
							<?php echo get_avatar( get_the_author_meta( 'email' ), '180' ); ?>
							
							<div class="author-info">
	
								
								
								<ul class="author-social-icons">
									
									<?php 
										$rss_url = get_the_author_meta( 'rss_url' );
										if ( $rss_url && $rss_url != '' ) {
											echo '<li><a href="' . esc_url($rss_url) . '"><i class="fa fa-rss"></i></a></li>';
										}
										$twitter_profile = get_the_author_meta( 'twitter_profile' );
										if ( $twitter_profile && $twitter_profile != '' ) {
											echo '<li><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
										}
										$facebook_profile = get_the_author_meta( 'facebook_profile' );
										if ( $facebook_profile && $facebook_profile != '' ) {
											echo '<li><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
										}
										$google_profile = get_the_author_meta( 'google_profile' );
										if ( $google_profile && $google_profile != '' ) {
											echo '<li><a href="' . esc_url($google_profile) . '"><i class="fa fa-google-plus"></i></a></li>';
										}
										$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
										if ( $linkedin_profile && $linkedin_profile != '' ) {
											echo '<li><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
										}
										$pinterest_profile = get_the_author_meta( 'pinterest_profile' );
										if ( $pinterest_profile && $pinterest_profile != '' ) {
											echo '<li><a href="' . esc_url($pinterest_profile) . '"><i class="fa fa-pinterest"></i></a></li>';
										}
										$dribbble_profile = get_the_author_meta( 'dribbble_profile' );
										if ( $dribbble_profile && $dribbble_profile != '' ) {
											echo '<li><a href="' . esc_url($dribbble_profile) . '"><i class="fa fa-dribbble"></i></a></li>';
										}
										$flickr_profile = get_the_author_meta( 'flickr_profile' );
										if ( $flickr_profile && $flickr_profile != '' ) {
											echo '<li><a href="' . esc_url($flickr_profile) . '"><i class="fa fa-flickr"></i></a></li>';
										}
										$instagram_profile = get_the_author_meta( 'instagram_profile' );
										if ( $instagram_profile && $instagram_profile != '' ) {
											echo '<li><a href="' . esc_url($instagram_profile) . '"><i class="fa fa-instagram"></i></a></li>';
										}
										$vimeo_profile = get_the_author_meta( 'vimeo_profile' );
										if ( $vimeo_profile && $vimeo_profile != '' ) {
											echo '<li><a href="' . esc_url($vimeo_profile) . '"><i class="fa fa-vimeo-square"></i></a></li>';
										}
										$youtube_profile = get_the_author_meta( 'youtube_profile' );
										if ( $youtube_profile && $youtube_profile != '' ) {
											echo '<li><a href="' . esc_url($youtube_profile) . '"><i class="fa fa-youtube"></i></a></li>';
										}
									?>
									
								</ul><!-- end .author-social-icons -->
								
								<p class="article-author"><?php _e( 'article written by', 'cabana' ); ?><span><?php the_author_link(); ?></span></p>
								
								<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
							
							</div><!-- end .author-info -->
					
						</div><!-- end .author-bio -->
						
						<?php comments_template(); ?>
						
						<?php gt_content_nav( 'nav-below' ); ?>
							
					</section><!-- end .post-index -->
				
				<?php get_sidebar(); ?>
				
				<?php } ?>
			
			</div><!-- end .container -->
		
		</section><!-- end .content -->
					
	</main><!-- end main -->

<?php get_footer(); ?>