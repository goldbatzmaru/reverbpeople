<?php global $cabana_wp; ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

	<title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
	
	<!-- Meta
	================================================== -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- <meta name="description" content="<?php /* bloginfo( 'description' ); */ ?>" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS2 Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- Favicons
	================================================== -->
	
	<link rel="icon" type="image/png" href="<?php echo $cabana_wp['header-custom-favicon']['url']; ?>" />
	<link rel="apple-touch-icon" href="<?php echo $cabana_wp['header-apple-touch-icon-iphone']['url']; ?>" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $cabana_wp['header-apple-touch-icon-ipad']['url']; ?>" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $cabana_wp['header-apple-touch-icon-iphone-retina']['url']; ?>" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $cabana_wp['header-apple-touch-icon-ipad-retina']['url']; ?>" />
	
<?php wp_head(); ?>

</head>