<?php
/*
Template Name: Contact Us
 */
//load site option 
$wope_main_option = get_option('wope-main');
$wope_sidebar_options = get_option('wope-sidebar');
$wope_header_option = get_option('wope-header');

//load page builder data
global $wope_pb_option;
$wope_pb_option 	= get_post_meta($post->ID, 'page-builder', true);
if(!empty($wope_pb_option['total_section'])){
	if($wope_pb_option['total_section'] > 0){
		foreach($wope_pb_option as $key => $value){
			if(is_array($wope_pb_option[$key])){
				foreach($wope_pb_option[$key] as $key2 => $value2){
					$wope_pb_option[$key][$key2] = htmlspecialchars($value2);
				}
			}else{
				$wope_pb_option[$key] = htmlspecialchars($value);
			}
		}
	}
}

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';
$sidebar_selector		= -1;
$heading_setting 		= 1;

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

//get new page setting from verison 2.0
$page_setting = get_post_meta( $post->ID, 'page_setting', true );

//check for version 2.0
if(isset($page_setting['sidebar_selector'] )){
	$sidebar_selector		= $page_setting['sidebar_selector'];
	$heading_setting 		= $page_setting['heading_setting'];

	//if use custom layout for this page only
	if($page_setting['custom_layout'] == 1){
		$header_style  			= $page_setting['header_style'];
		$heading_align  		= $page_setting['heading_align'];
	}
}

//process style,class
if($header_style == 'white'){ 
	$heading_class = 'heading-gray';
}else{
	$heading_style = $header_style;
	$heading_class = 'heading-'.$heading_style;
}

$heading_align_class = 'heading-align-'.$heading_align;

//ACF
$embedCode = null;
$addressText = null;
$formShortCode = get_field('gravity_form_short_code', false, false);
$addressInfo = get_field('contact_page_address');
if($addressInfo){
	$addressInfoEnabled = $addressInfo['enable_contact_page_address_section'];
	if($addressInfoEnabled != false){
		$embedCode = $addressInfo['iframe_embed_code'];
		$addressText = $addressInfo['address'];
	}
}

get_header(); 
?>
	<?php if ( have_posts() ) { ?>
		<?php /* Start the Loop */ ?>
		<?php the_post(); ?>	
				<?php if($heading_setting == 1){ //display page title?>
					<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
						<div class="wrap">
							<div id="page-heading-left">
								<h1 id="page-title">
									<?php the_title(); ?>
								</h1>
							</div>
							<div id="breadcrumb">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a>
								<?php 
									$wope_post_parent = $post->post_parent;
									$wope_parent_array = wope_page_breadcrumb($wope_post_parent);
									if(count($wope_parent_array) > 0 ){
										foreach($wope_parent_array as $wope_each_array){
											?>
											/ <a href="<?php echo esc_url(get_permalink($wope_each_array['id']));?>"><?php echo esc_html($wope_each_array['post_title']); ?></a>
											<?php
										}
									}
								?>
								/ <span><?php the_title(); ?></span>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				<?php }?>
				</div><!-- End Header Content -->
			</div> <!-- end Header -->
		<div class="cleared"></div>
		
		<?php
		if(!empty($wope_pb_option['current-editor'])){
			if($wope_pb_option['current-editor'] == 0){
				$wope_use_pagebuilder = false;
			}else{
				$wope_use_pagebuilder = true;
			}
		}else{
			$wope_use_pagebuilder = false;
		}
		?>
		<?php if($wope_use_pagebuilder == true){ //use page builder?>
				<div id="body">
					<?php get_template_part('page_builder');?>
				</div>
		<?php }else{ //default content editor?>

			<?php if($sidebar_selector == '-1'){ //fullwidth ?>

				<div id="body" class="content-page contact">
					<div class="wrap">
						<div class="page-entry-content content">
							<?php the_content(); ?>
							<?php if($formShortCode != null): ?>
						      <div id="contact-form"<?php if($addressInfoEnabled):?> class="embed-map-active"<?php endif;?>>
						        <?php echo do_shortcode($formShortCode); ?>
						      </div>
							<?php endif;?>
							<?php if($addressInfoEnabled):?>
							  <div id="contact-embed-iframe">
								<?php echo $embedCode; ?>
								<?php if($addressText):?>
								  <div class="address-info">
									<div class="line-one"><?php echo $addressText['line_one']?></div>
									<?php if($addressText['line_two']):?>
									  <div class="line-two"><?php echo $addressText['line_two']?></div>
									<?php endif;?>
									<div class="city-state-zip"><?php echo $addressText['city'] . ', ' . $addressText['state'] . ' ' . $addressText['zip'] ?></div>
								  </div>
								<?php endif;?>
							  </div>
							<?php endif;?>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			
			<?php }else{ //sidebar ?>
				<div id="body" class="content-page">
					<div class="wrap">
						<div class="big-column left">
							<?php if ( has_post_thumbnail() ) {?>
								<div class="page-entry-thumb">
									<?php the_post_thumbnail();?>
								</div>
							<?php }?>
							<div class="page-entry-content content">
								<?php the_content(); ?>
							</div>
							<div class="cleared"></div>

							<?php 
								wp_link_pages();
								comments_template( '', true ); 
							?>
						</div>
						<!-- End Big Column -->
			
						<div class="small-column right">
							<?php if( $sidebar_selector == '0'){?>
								<?php dynamic_sidebar( $wope_sidebar_options['page-sidebar'] );?>
							<?php }else{ ?>
								<?php dynamic_sidebar( $sidebar_selector );?>
							<?php }?>
						</div><!-- End Small Column -->
						<div class="cleared"></div>

					</div>
				</div><!-- End Body-->
			<?php } ?>	
		<?php }?>
	<?php }?>	
		
<?php get_footer(); ?>