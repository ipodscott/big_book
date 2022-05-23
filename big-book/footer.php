
   		
		
		</div><!-- /container --> 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/dragdealer.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mods.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/js/dragdealer.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/dragslideshow.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/mods.js"></script>
		
		<?php wp_footer();?>
		<script>
			
			
			/* Rest Reload iOS desktop version*/
			
			function poll(poll_url, poll_timeout) {
			
			    setInterval( function() {
			
			        $.ajax({
			        	dataType: "json",
			        	url: poll_url,
			        	success: function (data){
			
				       	if(data.modified != date_modified){
				       		if(!date_modified){
				       			date_modified = data.modified;
				       		}
				       		else{
				       			location.reload();
				       		}
				       	}
				       	
			
			        	}
			        });
			    }, poll_timeout);
			}
			
			
				var date_modified = null; poll("<?php echo site_url() ?>/wp-json/wp/v2/<?php echo $post->post_type ?>s/<?php echo $post->ID ?>", 3000);

			
			
			(function() {

				var overlay = document.getElementById( 'overlay' ),
					overlayClose = overlay.querySelector( 'button' ),
					header = document.getElementById( 'header' )
					switchBtnn = header.querySelector( 'button.slider-switch' ),
					toggleBtnn = function() {
						if( slideshow.isFullscreen ) {
							classie.add( switchBtnn, 'view-maxi' );
						}
						else {
							classie.remove( switchBtnn, 'view-maxi' );
						}
					},
					toggleCtrls = function() {
						if( !slideshow.isContent ) {
							classie.add( header, 'hide' );
						}
					},
					toggleCompleteCtrls = function() {
						if( !slideshow.isContent ) {
							classie.remove( header, 'hide' );
						}
					},
					slideshow = new DragSlideshow( document.getElementById( 'slideshow' ), { 
						// toggle between fullscreen and minimized slideshow
						onToggle : toggleBtnn,
						// toggle the main image and the content view
						onToggleContent : toggleCtrls,
						// toggle the main image and the content view (triggered after the animation ends)
						onToggleContentComplete : toggleCompleteCtrls
					}),
					toggleSlideshow = function() {
						slideshow.toggle();
						toggleBtnn();
					},
					closeOverlay = function() {
						classie.add( overlay, 'hide' );
					};

				// toggle between fullscreen and small slideshow
				switchBtnn.addEventListener( 'click', toggleSlideshow );
				// close overlay
				overlayClose.addEventListener( 'click', closeOverlay );

			}());
			
			/* Refresh on Update*/
			
			function poll(poll_url, poll_timeout) {
			
			    setInterval( function() {
			
			        $.ajax({
			        	dataType: "json",
			        	url: poll_url,
			        	success: function (data){
			
				       	if(data.modified != date_modified){
				       		if(!date_modified){
				       			date_modified = data.modified;
				       		}
				       		else{
				       			location.reload();
				       		}
				       	}
				       	
			
			        	}
			        });
			    }, poll_timeout);
			}
			
			
				var date_modified = null; poll("<?php echo site_url() ?>/wp-json/wp/v2/<?php echo $post->post_type ?>s/<?php echo $post->ID ?>", 3000);
			
						
		</script>
		
		
		
		
	</body>
</html>