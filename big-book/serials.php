<?php get_header();
	
	/*Template Name: Serials */
?>

			<div id="slideshow" class="dragslider" style="background-image: url(<?php the_field('background_image');?>);">
				<section class="img-dragger img-dragger-large dragdealer">
					<div class="handle">
						
					<!-- Display Custom Post Type -->
					
				    <?php $args = array('post_type' => "serials", 'posts_per_page' => -1, 'orderby'=>"name", 'order'=>"ASC");
				        $postType = new WP_Query( $args );
				            if( $postType->have_posts() ) {
							    while( $postType->have_posts() ) {
									$postType->the_post();
									    ?>
										
										   	<div class="slide" data-content="<?php the_field('serial_id');?>">
											   	
													<div style="background-image: url(<?php the_field('main_image');?>)" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/trans.png" alt="<?php the_sub_field('img_alt');?>"/></div>
													<h2 class="big-title"><?php the_title();?></h2>
													<button class="content-switch">Read more</button>
												</div>
				
														
											<?php
												}
											}
										wp_reset_query();	
					?>
						
					</div>
				</section><!-- /img-dragger-->
				<!-- Content section -->
				<section class="pages serial-page">
					
					 <?php $args = array('post_type' => "serials", 'posts_per_page' => -1, 'orderby'=>"name", 'order'=>"DESC");
				        $postType = new WP_Query( $args );
				            if( $postType->have_posts() ) {
							    while( $postType->have_posts() ) {
									$postType->the_post();
									    ?>
										
										   	<div class="content" data-content="<?php the_field('serial_id');?>">
									
									<div class="main-copy">
										<h4><?php the_title();?></h4>
										<?php the_content();?>
									</div>
								</div>
				
														
											<?php
												}
											}
										wp_reset_query();	
					?>
					
					
												
								
						 
						
									
				</section>
			</div>

<?php get_footer();?>









