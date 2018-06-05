<?php 
function caeithemetwo_script_enqueue(){

	wp_enqueue_style( 'font_001', 'https://fonts.googleapis.com/css?family=Lobster|Bitter|Crete+Round|Oswald|Roboto|Roboto+Slab|PT+Sans' );

	wp_enqueue_style('mainstyle', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', true);

	if( is_home() || is_category() || is_tag() ){
		wp_enqueue_script('loaderjs', get_template_directory_uri().'/js/blog-loading.js', array(), '1.0.0', true);
	}

}
add_action('wp_enqueue_scripts', 'caeithemetwo_script_enqueue');
?>