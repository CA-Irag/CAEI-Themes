<?php  

function caeithemetwo_setup(){
	add_theme_support('menus');
	register_nav_menu('header_menu', 'Primary Header Menu');
	register_nav_menu('footer_menu', 'Footer Menu');	
}
add_action('init', 'caeithemetwo_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('comment-list', 'comment-form'));

require get_template_directory(). '/inc/enqueues.php';
require get_template_directory(). '/inc/widgets.php';
require get_template_directory(). '/inc/ajax.php';

?>