<?php
/**
 * Template Name: Contact
 * Description: The template for displaying the contact page.
 *
 *
 * @package cabana
 */
get_header( 'inner' ); ?>

	<main>
	
		<section class="content">
		
			<script>
			jQuery(document).ready(function($) {
				"use strict";
			    var map;
			    map = new GMaps({
			        div: '#map',
			        lat: <?php echo $cabana_wp['map-latitude']; ?>,
			        lng: <?php echo $cabana_wp['map-longitude']; ?>,
			        scrollwheel: false, // Remove this line if you would like to enable zooming of the map via mousewheel/touchpad.
			        draggable: false, // Remove this line if you would like to enable dragging of the map via mouse/touchpad.
			        disableDefaultUI: true,
			    });
			    map.drawOverlay({
			        lat: map.getCenter().lat(),
			        lng: map.getCenter().lng(),
			        content: '<i class="fa fa-map-marker"></i>',
			        verticalAlign: 'top',
			        horizontalAlign: 'center'
			    });
			    // The styles below present your map in Monochrome. If you would like to use a normal coloured map with your theme, then please remove the code below.
			    var styles = [{
			        stylers: [{
			            hue: "#8A8E7D"
			        }, {
			            saturation: -60
			        }]
			    }, {
			        featureType: "road",
			        elementType: "geometry",
			        stylers: [{
			            lightness: 100
			        }, {
			            visibility: "simplified"
			        }]
			    }, {
			        featureType: "road",
			        elementType: "labels",
			        stylers: [{
			            visibility: "off"
			        }]
			    }];
			
			    map.setOptions({
			        styles: styles
			    });
			});
			</script>
				
			<div id="map"></div><!-- This is where your Google Map will be inserted (Please read the docs about setting up your Google Map) -->
			
			<div class="container">

				<h1><?php the_title(); ?></h1>
			
				<div class="nine columns alpha">
											
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								
						<?php the_content(); ?>
						
					<?php endwhile; endif; ?>
					
				</div>	
				<div class="six columns offset-by-one omega">
				
					<div class="contact-info">
				
					<?php if ( $cabana_wp['contact-title'] ) { ?>
						<h2><?php echo $cabana_wp['contact-title']; ?></h2>
					<?php } ?>
						
						<address class="contact-details-standard">
						    
						    <ul>
						    	<li><strong>Address</strong>:<br/><?php echo $cabana_wp['contact-address']; ?></li>
						        <li><strong>Telephone</strong>:<br/> <?php echo $cabana_wp['contact-telephone']; ?></li>
							<li><strong>Email</strong>:<br/><a href="mailto:<?php echo $cabana_wp['contact-email']; ?>"><?php echo $cabana_wp['contact-email']; ?></a></li>
						    </ul>
						
						</address>
						
					</div><!-- end .contact-info -->
				
				</div>
			
			</div><!-- end .container -->
		
		</section><!-- end .content -->
					
	</main><!-- end main -->
	
<?php get_footer(); ?>