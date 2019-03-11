<?php
/**
 * Template Name: Team (Index)
 * Description: The template for displaying the team members index page.
 *
 *
 * @package cabana
 */
get_header( 'inner' ); ?>

	<main>
	
		<section class="content inner">
		
			<div class="container">
			
				<h1><?php the_title(); ?></h1>
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
				<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
				
				<div class="team-section">
					<h3>Consultants</h3>
					<?php
					$args = array(
						'post_type' 	=> array( 'team' ),
						'taxonomy'		=> 'teamgroup',
						'term' 			=> 'consultants',
						'post_status' 	=> 'publish',
						'order'        	=> 'ASC',
						'orderby'      	=> 'menu_order',
						'posts_per_page'=> -1
					);
					$teamquery1 = new WP_Query( $args );
					?>

					<?php if ($teamquery1->have_posts()) : while ($teamquery1->have_posts()) : $teamquery1->the_post(); ?>

						<div class="one-third column">

							<div class="team-member">

								<?php the_post_thumbnail( 'team-member-thumb' ); ?>							

								<h2><?php the_title(); ?></h2>
								<?php if ( get_post_meta( $post->ID, 'gt_member_linkedin', true ) ) { ?>
								<span class="social icon"><a href="<?php echo get_post_meta( $post->ID, 'gt_member_linkedin', true ) ?>" title="<?php _e( 'View Linkedin Profile', 'cabana' ); ?>"><i class="fa fa-linkedin"></i></a></span>
								<?php }  ?>					
								<?php if ( get_post_meta( $post->ID, 'gt_member_role', true ) ) { ?>
								<p class="member-role"><span><?php echo get_post_meta( $post->ID, 'gt_member_role', true ) ?></span></p>
								<?php } ?>

								<?php the_content(); ?>
										
								<div class="clear"></div>

								<?php if ( get_post_meta( $post->ID, 'gt_member_readmore_button_text', true ) ) { ?>
								<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php echo get_post_meta( $post->ID, 'gt_member_readmore_button_text', true ) ?></a>
								<?php } ?>

							</div><!-- end .team-member -->
						</div><!-- end .one-third -->
					<?php endwhile; endif; ?>
				</div><!-- end .team-section -->
				<div class="team-section">
					<h3>Staff</h3>
					<?php
					$args = array(
						'post_type' 	=> array( 'team' ),
						'taxonomy'		=> 'teamgroup',
						'term' 			=> 'staff',
						'post_status' 	=> 'publish',
						'order'        	=> 'ASC',
						'orderby'      	=> 'menu_order',
						'posts_per_page'=> -1
					);
					$teamquery1 = new WP_Query( $args );
					?>

					<?php if ($teamquery1->have_posts()) : while ($teamquery1->have_posts()) : $teamquery1->the_post(); ?>

						<div class="one-third column">

							<div class="team-member">

									<?php the_post_thumbnail( 'team-member-thumb' ); ?>

								<h2><?php the_title(); ?></h2>
								<?php if ( get_post_meta( $post->ID, 'gt_member_linkedin', true ) ) { ?>
								<span class="social icon"><a href="<?php echo get_post_meta( $post->ID, 'gt_member_linkedin', true ) ?>" title="<?php _e( 'View Linkedin Profile', 'cabana' ); ?>"><i class="fa fa-linkedin"></i></a></span>
								<?php }  ?>					
								<?php if ( get_post_meta( $post->ID, 'gt_member_role', true ) ) { ?>
								<p class="member-role"><span><?php echo get_post_meta( $post->ID, 'gt_member_role', true ) ?></span></p>
								<?php } ?>

								<?php the_content(); ?>
										
								<div class="clear"></div>

								<?php if ( get_post_meta( $post->ID, 'gt_member_readmore_button_text', true ) ) { ?>
								<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php echo get_post_meta( $post->ID, 'gt_member_readmore_button_text', true ) ?></a>
								<?php } ?>

							</div><!-- end .team-member -->
						</div><!-- end .one-third -->
					<?php endwhile; endif; ?>
				</div><!-- end .team-section -->
				
				<div class="team-jobs">
				<h3>Open Jobs</h3>
				<div class="bebop-jobs"></div>
				<script id="bebop-embed-loader" async defer src="https://hire.withgoogle.com/s/embed/jobs.js?company=uniquelyhrcom"></script>
				</div>
						
			</div><!-- end .container -->
		
		</section><!-- end .content -->
					
	</main><!-- end main -->
	
<?php get_footer(); ?>