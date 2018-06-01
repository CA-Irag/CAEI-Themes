<?php 

function caei_theme_one_widget_setup(){
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'Main-Sidebar',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Top Left Column',
			'id' => 'footer-widget-1',
			'class' => 'footerwidget1',
			'description' => 'Footer Top Widgets Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Top Center Column',
			'id' => 'footer-widget-2',
			'class' => 'footerwidget2',
			'description' => 'Footer Top Widgets Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Top Right Column',
			'id' => 'footer-widget-3',
			'class' => 'footerwidget3',
			'description' => 'Footer Top Widgets Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);
}

add_action('widgets_init', 'caei_theme_one_widget_setup');

 ?>