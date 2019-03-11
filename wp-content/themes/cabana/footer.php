<?php global $cabana_wp; ?>

	<footer id="footer-global" role="contentinfo">
		
		<div class="container">
			
			<div class="row">
			
				<?php get_template_part( 'partials/social', 'links' ); ?>
				
				<p class="company-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				
				<?php if ( $cabana_wp['multi-one-page-chooser'] == '1' ) { ?>
				
				<?php if ( $cabana_wp['contact-email'] ) { ?>
					<a class="contact-btn" href="mailto:<?php echo $cabana_wp['contact-email']; ?>"><?php _e( 'Come say hello', 'cabana' ); ?></a>
				<?php } ?>
				
				<?php } else { ?>
				
				<div id="back-to-top">
				
					<a class="back-top-btn" href="#header-global"><?php _e( 'Back to top', 'cabana' ); ?></a>
				
				</div><!-- end #back-to-top -->
				
				<?php } ?>
		  		
		  		<p class="copyright-details">&copy; <?php echo date( 'Y' ) ?> <span><?php echo bloginfo( 'name' ); ?></span> <?php echo $cabana_wp['footer-copyright']; ?></p>
		  		
		  	</div><!-- end .row -->
	  	
	  	</div><!-- end .container -->
	
	</footer><!-- end #footer-global -->
	
<?php echo $cabana_wp['google-analytics-tracking-code']; ?>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68565956-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>