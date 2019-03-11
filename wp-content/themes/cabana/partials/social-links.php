<?php global $cabana_wp; ?>

	<div class="social-links-container">
	
		<ul class="social-links">
		<?php if ( $cabana_wp['social-twitter'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-twitter']; ?>" title="<?php _e( 'View Twitter Profile', 'cabana' ); ?>">Twitter</a></li>
		<?php } if ( $cabana_wp['social-facebook'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-facebook']; ?>" title="<?php _e( 'View Facebook Profile', 'cabana' ); ?>">Facebook</a></li>
		<?php } if ( $cabana_wp['social-linkedin'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-linkedin']; ?>" title="<?php _e( 'View Linkedin Profile', 'cabana' ); ?>">Linkedin</a></li>
		<?php } if ( $cabana_wp['social-pinterest'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-pinterest']; ?>" title="<?php _e( 'View Pinterest Profile', 'cabana' ); ?>">Pinterest</a></li>
		<?php } if ( $cabana_wp['social-googleplus'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-googleplus']; ?>" title="<?php _e( 'View Google Plus Profile', 'cabana' ); ?>">Google +</a></li>
		<?php } if ( $cabana_wp['social-flickr'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-flickr']; ?>" title="<?php _e( 'View Flickr Profile', 'cabana' ); ?>">Flickr</a></li>
		<?php } if ( $cabana_wp['social-instagram'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-instagram']; ?>" title="<?php _e( 'View Instagram Profile', 'cabana' ); ?>">Instagram</a></li>
		<?php } if ( $cabana_wp['social-dribbble'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-dribbble']; ?>" title="<?php _e( 'View Dribbble Profile', 'cabana' ); ?>">Dribbble</a></li>
		<?php } if ( $cabana_wp['social-youtube'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-youtube']; ?>" title="<?php _e( 'View YouTube Profile', 'cabana' ); ?>">YouTube</a></li>
		<?php } if ( $cabana_wp['social-vimeo'] ) { ?>
			<li><a href="<?php echo $cabana_wp['social-vimeo']; ?>" title="<?php _e( 'View Vimeo Profile', 'cabana' ); ?>">Vimeo</a></li>
		<?php } ?>	
		</ul><!-- end .social-links -->
			
	</div><!-- end .social-links-container -->