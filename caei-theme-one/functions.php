<?php  

function caei_theme_one_setup(){
	add_theme_support('menus');
	register_nav_menu('header_menu', 'Primary Header Menu');
	register_nav_menu('footer_menu', 'Footer Menu');	
}

add_action('init', 'caei_theme_one_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');

require get_template_directory(). '/inc/widgets.php';
require get_template_directory(). '/inc/functions-customize.php';
require get_template_directory(). '/inc/functions-admin.php';
require get_template_directory(). '/inc/enqueues.php';
require get_template_directory(). '/inc/custom-post-type.php';


?>