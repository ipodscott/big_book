<?php
	
function custom_admin_js() {
    wp_enqueue_style( 'admin_mods', get_template_directory_uri() . '/css/admin.css',true,'1.1','all');

}
add_action('admin_footer', 'custom_admin_js');
