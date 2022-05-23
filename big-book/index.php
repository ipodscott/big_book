<?php get_header();?>

			<div id="slideshow" class="dragslider" style="background-image: url(<?php the_field('slide_background_image');?>);">
				<section class="img-dragger img-dragger-large dragdealer">
					<div class="handle">
						
						
					
				<?php 
				    $blocks = parse_blocks($post->post_content);
					    foreach ($blocks as $block) {
							if ($block['blockName'] == 'acf/big-book') 
							 {
								 $block_name = $block['attrs']['data']['block_id'];
								 $block_slug = '' . sanitize_title( $block_name ) . '';
								 $main_image = $block['attrs']['data']['main_image'];
								 $title = $block['attrs']['data']['title'];
								 $sub_title = $block['attrs']['data']['sub_title'];
								 $img_atts = wp_get_attachment_image_src($main_image, 'full');
								 $image_attributes = wp_get_attachment_image_src( $main_image, 'full' );
							 ?>
							 	
							 	<div class="slide" data-content="<?php echo $block_slug; ?>">
								 	<div style="background-image: url(<?php echo $image_attributes[0]; ?>)" class="img-wrap"><img src="https://bigbook.hazzardlabs.com/wp-content/themes/big-book/img/trans.png" alt="Camera"/></div>
									<h2><?php echo $title; ?><span><?php echo $sub_title ?></span></h2>
									<button class="content-switch">Read more</button>
								</div>
							 		
							<?php } 
					}
					
				?>						
										
																			
						
						
					</div>
				</section><!-- /img-dragger-->
				<!-- Content section -->
				<section class="pages">
					
		
							<?php the_content(); ?>								
								
						
							
								
						 
																
				</section>
			</div>

<?php get_footer();?>









