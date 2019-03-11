<?php global $cabana_wp; ?>

	<footer id="footer-global" role="contentinfo">
		
		<div class="container">
			
			<div class="row">
			
			<div class="one_third first" id="footer_left">
				<ul><?php dynamic_sidebar( 'footer_left' ); ?></ul>
			</div>
			<div class="one_third">
				<?php get_template_part( 'partials/social', 'links' ); ?>
				
				<p class="company-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<p class="footer-contact"><a href="tel:+12063199003">(206) 319-9003</a></p>
				<p class="footer-contact"><a href="mailto:info@uniquelyhr.com">info@uniquelyhr.com</a></p>
				
				<?php if ( $cabana_wp['multi-one-page-chooser'] == '1' ) { ?>
				
				
					<a class="contact-btn" href="/contact/"><?php _e( 'Come say hello', 'cabana' ); ?></a>
				
				
				<?php } else { ?>
				
				<div id="back-to-top">
				
					<a class="back-top-btn" href="#header-global"><?php _e( 'Back to top', 'cabana' ); ?></a>
				
				</div><!-- end #back-to-top -->
				
				<?php } ?>
		  		
		  		<p class="copyright-details">&copy; <?php echo date( 'Y' ) ?> <span><?php echo bloginfo( 'name' ); ?></span> <?php echo $cabana_wp['footer-copyright']; ?></p>
		  	</div>
		  	<div class="one_third last" id="footer_right">
		  		<ul><?php dynamic_sidebar( 'footer_right' ); ?></ul>
			</div>
		  		
		  	</div><!-- end .row -->
	  	
	  	</div><!-- end .container -->
	
	</footer><!-- end #footer-global -->
	
<?php echo $cabana_wp['google-analytics-tracking-code']; ?>

<?php wp_footer(); ?>


<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ProfessionalService",
        "name": "Uniquely HR",
        "url": "http://uniquelyhr.com/",
        "logo": "http://uniquelyhr.com/wp-content/uploads/2015/08/UniquelyScreenLogotypeOnly.png",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Seattle",
          "addressRegion": "WA",
          "postalCode": "98104",
          "streetAddress": "111 S. Jackson St, Suite #227, Seattle"
          },
        "openingHours": "Mo-Fr 08:00-18:00",
        "telephone": "(206) 319-9003",
        "sameAs": ["https://twitter.com/uniquelyhr","https://www.facebook.com/uniquelyHR/","https://www.linkedin.com/company/10151036"]
  }
  </script>

</body>

</html>