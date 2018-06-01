<?php 

function caei_theme_one_script_enqueue(){
	wp_enqueue_style('mainstyle', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/caei-theme-one.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/caei-theme-one.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'caei_theme_one_script_enqueue');

function caei_theme_one_admin_script_enqueue( $hook ){
	if($hook == 'toplevel_page_cto_caei'){
		wp_register_style('customstyle-admin', get_template_directory_uri().'/css/caei-theme-one-admin.css', array(), '1.0.0', 'all');
		wp_enqueue_style('customstyle-admin');
	}
}
add_action('admin_enqueue_scripts','caei_theme_one_admin_script_enqueue');

function caei_theme_one_customize_control_enqueue(){
	wp_enqueue_script('customizecontroljs', get_template_directory_uri().'/js/wp-customize.js', array('jquery','customize-controls'), '1.0.0', true);
}
add_action('customize_controls_enqueue_scripts','caei_theme_one_customize_control_enqueue');

 ?>