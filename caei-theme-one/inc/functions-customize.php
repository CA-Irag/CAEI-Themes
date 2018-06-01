
<?php // ****** WP CUSTOMIZE

function caei_theme_one_customize($wp_customize){

	$wp_customize->remove_section('colors');

	// ****** PANELS

	$wp_customize->add_panel('cto_theme_content_panel', array(
		'title' => __('CAEI Theme Options', 'CAEI Theme One'),
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'description' => 'CAEI description',
	));

	// ****** SECTIONS

	$wp_customize->add_section('cto_theme_gen_section', array(
		'title' => __('General', 'CAEI Theme One'),
		'priority' => 10,
		'panel' => 'cto_theme_content_panel',
	));

	$wp_customize->add_section('cto_theme_header_section', array(
		'title' => __('Header', 'CAEI Theme One'),
		'priority' => 20,
		'panel' => 'cto_theme_content_panel',
	));	

	$wp_customize->add_section('cto_theme_main_section', array(
		'title' => __('Main', 'CAEI Theme One'),
		'priority' => 30,
		'panel' => 'cto_theme_content_panel',
	));

	$wp_customize->add_section('cto_theme_sidebar_section', array(
		'title' => __('Sidebar', 'CAEI Theme One'),
		'priority' => 40,
		'panel' => 'cto_theme_content_panel',
	));

	$wp_customize->add_section('cto_theme_footer_section', array(
		'title' => __('Footer', 'CAEI Theme One'),
		'priority' => 50,
		'panel' => 'cto_theme_content_panel',
	));

	// ****** SETTINGS $ CONTROLS

	// *** GENERAL

	// Background Color
	$wp_customize->add_setting('cto_my_background_color', array(
		'default' => '#e5e5e5',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_my_background_color_control', array(
		'label' => __('Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_my_background_color',
	)));

	// Background Content Color
	$wp_customize->add_setting('cto_my_background_content_color', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_my_background_content_color_control', array(
		'label' => __('Content Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_my_background_content_color',
	)));

	// Text Font
	$wp_customize->add_setting('cto_text_font', array(
		'default' => 'Helvetica',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Control($wp_customize,'cto_text_font_control', array(
		'label' => __('Text Font', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_text_font',
		'type' => 'select',
        'choices'  => array(
            'Arial'   => __( 'Arial' ),            
            'Calibri'  => __( 'Calibri' ),
            'Comic Sans MS'  => __( 'Comic Sans MS' ),            
            'Garamond'  => __( 'Garamond' ),
            'Helvetica'  => __( 'Helvetica' ),
            'Myriad Pro' => __( 'Myriad Pro' ),
            'Oswald Light'  => __( 'Oswald Light' ),
            'Tahoma'  => __( 'Tahoma' ),
            'Times New Roman'  => __( 'Times New Roman' ),
            'Trebuchet MS'  => __( 'Trebuchet MS' ),
            'Verdana'  => __( 'Verdana' ),
        ),            
	)));

	// Text Color
	$wp_customize->add_setting('cto_text_color', array(
		'default' => '#000',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_text_color_control', array(
		'label' => __('Text Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_text_color',
	)));

	// Text Heading Font
	$wp_customize->add_setting('cto_text_heading_font', array(
		'default' => 'Myriad Pro',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Control($wp_customize,'cto_text_heading_font_control', array(
		'label' => __('Text Heading Font', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_text_heading_font',
		'type' => 'select',
        'choices'  => array(
            'Arial'   => __( 'Arial' ),            
            'Calibri'  => __( 'Calibri' ),
            'Comic Sans MS'  => __( 'Comic Sans MS' ),            
            'Garamond'  => __( 'Garamond' ),
            'Helvetica'  => __( 'Helvetica' ),
            'Myriad Pro' => __( 'Myriad Pro' ),
            'Oswald Light'  => __( 'Oswald Light' ),
            'Tahoma'  => __( 'Tahoma' ),
            'Times New Roman'  => __( 'Times New Roman' ),
            'Trebuchet MS'  => __( 'Trebuchet MS' ),
            'Verdana'  => __( 'Verdana' ),
        ),            
	)));


	// Text Heading Color
	$wp_customize->add_setting('cto_headingtext_color', array(
		'default' => '#0c1e5a',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_headingtext_color_control', array(
		'label' => __('Text Heading Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_headingtext_color',
	)));

	// Link Color
	$wp_customize->add_setting('cto_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_link_color_control', array(
		'label' => __('Link Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_link_color',
	)));

	// Link Hover Color
	$wp_customize->add_setting('cto_link_hover_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_link_hover_color_control', array(
		'label' => __('Link Hover Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_link_hover_color',
	)));

	// Menu Link Font
	$wp_customize->add_setting('cto_text_menulink_font', array(
		'default' => 'Myriad Pro',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Control($wp_customize,'cto_text_menulink_font_control', array(
		'label' => __('Menu Link Font', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_text_menulink_font',
		'type' => 'select',
        'choices'  => array(
            'Arial'   => __( 'Arial' ),            
            'Calibri'  => __( 'Calibri' ),
            'Comic Sans MS'  => __( 'Comic Sans MS' ),            
            'Garamond'  => __( 'Garamond' ),
            'Helvetica'  => __( 'Helvetica' ),
            'Myriad Pro' => __( 'Myriad Pro' ),
            'Oswald Light'  => __( 'Oswald Light' ),
            'Tahoma'  => __( 'Tahoma' ),
            'Times New Roman'  => __( 'Times New Roman' ),
            'Trebuchet MS'  => __( 'Trebuchet MS' ),
            'Verdana'  => __( 'Verdana' ),
        ),            
	)));

	// Menu Link Color
	$wp_customize->add_setting('cto_menulink_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_menulink_color_control', array(
		'label' => __('Menu Link Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_menulink_color',
	)));

	// Menu Hover Link Color
	$wp_customize->add_setting('cto_menulink_hover_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_menulink_hover_color_control', array(
		'label' => __('Menu Hover Link Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_menulink_hover_color',
	)));

	// Button Color
	$wp_customize->add_setting('cto_button_color', array(
		'default' => '#ffd200',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_button_color_control', array(
		'label' => __('Button Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_button_color',
	)));

	// Button Hover Color
	$wp_customize->add_setting('cto_button_hover_color', array(
		'default' => '#d7b100',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_button_hover_color_control', array(
		'label' => __('Button Hover Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_button_hover_color',
	)));

	// Button Text Color
	$wp_customize->add_setting('cto_buttontext_color', array(
		'default' => '#000',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_buttontext_color_control', array(
		'label' => __('Button Text Color', 'CAEI Theme One'),
		'section' => 'cto_theme_gen_section',
		'settings' => 'cto_buttontext_color',
	)));

	// *** HEADER

	// Header Image
	$wp_customize->add_setting('cto_header_custom_image', array(
		'default' => get_template_directory_uri() . '/images/logo.png',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new wp_Customize_Image_Control($wp_customize,'cto_header_custom_image_control', array(
		'label' => __('Header Image', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_custom_image',
	)));

	// Header Background type
	$wp_customize->add_setting('cto_header_background_type', array(
		'default' => 'Plain',
		'transport' => '',
	));

	$wp_customize->add_control( new wp_Customize_Control($wp_customize,'cto_header_background_type_control', array(
		'label' => __('Background Type', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_background_type',
		'type'           => 'select',
		'choices'  => array(
			'Plain'  => __( 'Plain' ),
			'Gradient' => __( 'Gradient' ),
		),
	)));

	// Header Background color
	$wp_customize->add_setting('cto_header_background_color', array(
		'default' => '#454e93',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_header_background_color_control', array(
		'label' => __('Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_background_color',
	)));

	// Header Gradient Background Primary color
	$wp_customize->add_setting('cto_header_background_ggolor_one', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_header_background_ggolor_one_control', array(
		'label' => __('Background Color Primary', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_background_ggolor_one',
		'show_opacity' => true,
	)));
	// Header Gradient Background Secondary color
	$wp_customize->add_setting('cto_header_background_ggolor_two', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_header_background_ggolor_two_control', array(
		'label' => __('Background Color Secondary', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_background_ggolor_two',
		'show_opacity' => true,
	)));

	// Header Border Bottom
	$wp_customize->add_setting('cto_header_shadow', array(
		'default' => '1',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new wp_Customize_Image_Control($wp_customize,'cto_header_shadow_control', array(
		'label' => __('Border Bottom Shadow', 'CAEI Theme One'),
		'section' => 'cto_theme_header_section',
		'settings' => 'cto_header_shadow',
		'type'           => 'checkbox',
	)));

	// *** Main

	// Content Background Color
	$wp_customize->add_setting('cto_my_background_main_color', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_my_background_main_color_control', array(
		'label' => __('Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_main_section',
		'settings' => 'cto_my_background_main_color',
	)));

	// *** Sidebar

	// Sidebar Background Color
	$wp_customize->add_setting('cto_my_background_sidebar_color', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_my_background_sidebar_color_control', array(
		'label' => __('Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_sidebar_section',
		'settings' => 'cto_my_background_sidebar_color',
	)));

	// *** FOOTER

	// Footer Background Color
	$wp_customize->add_setting('cto_footer_background_color', array(
		'default' => '#454e93',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_background_color_control', array(
		'label' => __('Footer Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_background_color',
	)));

	// Footer Text Color
	$wp_customize->add_setting('cto_footer_text_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_text_color_control', array(
		'label' => __('Footer Text Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_text_color',
	)));

	// Footer Heading Text Color
	$wp_customize->add_setting('cto_footer_head_text_color', array(
		'default' => '#0c1e5a',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_head_text_color_control', array(
		'label' => __('Footer Heading Text Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_head_text_color',
	)));

	// Footer Link Color
	$wp_customize->add_setting('cto_footer_link_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_link_hover_control', array(
		'label' => __('Footer Link Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_link_color',
	)));

	// Footer Link Hover Color
	$wp_customize->add_setting('cto_footer_link_hover_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_link_hover_color_control', array(
		'label' => __('Footer Link Hover Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_link_hover_color',
	)));

	// Footer Bottom Background Color
	$wp_customize->add_setting('cto_footer_bottom_background_color', array(
		'default' => '#0c1e5a',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_bottom_background_color_control', array(
		'label' => __('Footer Bottom Background Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_bottom_background_color',
	)));

	// Footer Bottom text
	$wp_customize->add_setting('cto_footer_bottom_text', array(
		'default' => 'CAEI Theme One by CA Irag. All Rights Reserved.',
	));
	$wp_customize->add_control( new wp_Customize_Control($wp_customize,'cto_footer_bottom_text', array(
		'label' => __('Footer Bottom Text', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_bottom_text',
	)));

	// Footer Bottom Text Color
	$wp_customize->add_setting('cto_footer_bottom_text_color', array(
		'default' => '#FFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control( new wp_Customize_Color_Control($wp_customize,'cto_footer_bottom_text_color', array(
		'label' => __('Footer Bottom Text Color', 'CAEI Theme One'),
		'section' => 'cto_theme_footer_section',
		'settings' => 'cto_footer_bottom_text_color',
	)));	
}

add_action('customize_register','caei_theme_one_customize');

function caei_theme_one_customize_css(){ ?>

<style type="text/css">
	html{
		background-color: <?php echo get_theme_mod('cto_my_background_color') ?>;
		color: <?php echo get_theme_mod('cto_text_color') ?>;
		font-family: <?php echo get_theme_mod('cto_text_font') ?>;
	}
	h5,h4,h3,h2,h1{
		color: <?php echo get_theme_mod('cto_headingtext_color') ?>;
		font-family: <?php echo get_theme_mod('cto_text_heading_font') ?>;
	}
	header{ background: <?php if(get_theme_mod('cto_header_background_type')=='Plain') echo get_theme_mod('cto_header_background_color'); else if(get_theme_mod('cto_header_background_type')=='Gradient') echo 'linear-gradient('.get_theme_mod('cto_header_background_ggolor_one').','.get_theme_mod('cto_header_background_ggolor_two').')'; ?>; }

	<?php 	if(get_theme_mod('cto_header_shadow')) echo 'header{ box-shadow: 0px 1px 5px; }'; else echo 'header{ box-shadow: none; }';	?>
	

	a:link,
	a:visited{ color: <?php echo get_theme_mod('cto_link_color') ?>; }
	a:hover{ color: <?php echo get_theme_mod('cto_link_hover_color') ?>; }

	.nav .menu li a{
		color: <?php echo get_theme_mod('cto_menulink_color') ?>;
		font-family: <?php echo get_theme_mod('cto_text_menulink_font') ?>;
	}
	.nav .menu li a:hover{ color: <?php echo get_theme_mod('cto_menulink_hover_color') ?>; }

	button, input[type=submit], input[type=button], .btn{ 
	 	background-color: <?php echo get_theme_mod('cto_button_color') ?>;
	 	color: <?php echo get_theme_mod('cto_buttontext_color') ?>;
	 }
	button:hover, input[type=submit]:hover, input[type=button]:hover, .btn:hover{
		background-color: <?php echo get_theme_mod('cto_button_hover_color') ?>;
	}
	button a, .btn a, input[type=submit] a, input[type=button] a{ 
		color: <?php echo get_theme_mod('cto_buttontext_color') ?>; 
	}

	.content-main {
		background-color: <?php echo get_theme_mod('cto_my_background_content_color') ?>;
	}

	.main-column {
		background-color: <?php echo get_theme_mod('cto_my_background_main_color') ?>;
	}

	#sidebar{
		background-color: <?php echo get_theme_mod('cto_my_background_sidebar_color') ?>;
	}


	footer{
		background-color: <?php echo get_theme_mod('cto_footer_background_color') ?>;
		color: <?php echo get_theme_mod('cto_footer_text_color') ?>;
	}
	.footer.footer-bottom{ 
		background-color: <?php echo get_theme_mod('cto_footer_bottom_background_color') ?>;
		color: <?php echo get_theme_mod('cto_footer_bottom_text_color') ?>;
	}
	footer h5, footer h4, footer h3, footer h2,	footer h1{ 
		color: <?php echo get_theme_mod('cto_footer_head_text_color') ?> ;
	}
	.footer-top-widget-area{
		color: <?php echo get_theme_mod('cto_footer_text_color') ?>;
	}
	.footer-top-widget-area a,
	.footer-top-widget-area a:link,
	.footer-top-widget-area a:visited{
		color: <?php echo get_theme_mod('cto_footer_link_color') ?>;
	}
	.footer-top-widget-area a:hover{
		color: <?php echo get_theme_mod('cto_footer_link_hover_color') ?>;
	}
</style>

<?php } add_action('wp_head','caei_theme_one_customize_css'); ?>