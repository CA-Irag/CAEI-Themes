<?php // ADMIN PAGE

function cto_add_adminpage(){
	add_menu_page('CAEI Theme Options', 'CAEI Options', 'manage_options', 'cto_caei', 'cto_generate_generalpage', get_template_directory_uri().'/images/caei-admin-icon.png', 110);

	// Sub Pages
	add_submenu_page( 'cto_caei', 'General Options', 'General', 'manage_options', 'cto_caei', 'cto_generate_generalpage');
	add_submenu_page( 'cto_caei', 'Feature Options', 'Features', 'manage_options', 'cto_caei_features', 'cto_generate_featurespage');

	// General Settings
	add_action('admin_init', 'cto_generate_general_settings');

	// Feature Settings
	add_action('admin_init', 'cto_generate_feature_settings');

}
add_action('admin_menu', 'cto_add_adminpage');

function cto_generate_generalpage(){
	require_once( get_template_directory(). '/inc/admin-templates/general-options.php');
}

function cto_generate_featurespage(){
	require_once( get_template_directory(). '/inc/admin-templates/feature-options.php');
}

function cto_generate_general_settings(){
	register_setting('cto-group-settings','sidebar_position');
	register_setting('cto-group-settings','header_type');
	register_setting('cto-group-settings','header_content_position');
	register_setting('cto-group-settings','footer_column_number');
	register_setting('cto-group-settings','footer_text_alignment');
	register_setting('cto-group-settings','content_page_title');
	register_setting('cto-group-settings','content_post_date');

	//content
	add_settings_section('cto-content-options', 'Content', 'cto_content_options', 'cto_caei');
	add_settings_field('content-page-title','Page Title','cto_content_page_title_field','cto_caei','cto-content-options');
	add_settings_field('content-page-postdate','Post Date','cto_content_post_date_field','cto_caei','cto-content-options');

	//header
	add_settings_section('cto-header-options', 'Header', 'cto_header_options', 'cto_caei');
	add_settings_field('header-type','Header Type','cto_header_field','cto_caei','cto-header-options');
	add_settings_field('header-content-position','Header Content Position','cto_header_contpos_field','cto_caei','cto-header-options');

	//sidebar
	add_settings_section('cto-sidebar-options', 'Sidebar', 'cto_sidebar_options', 'cto_caei');
	add_settings_field('sidebar-option','Sidebar Position','cto_sidebar_field','cto_caei','cto-sidebar-options');

	//footer
	add_settings_section('cto-footer-options', 'Footer', 'cto_footer_options', 'cto_caei');
	add_settings_field('footer-column','Number of Columns','cto_footer_cols_field','cto_caei','cto-footer-options');
	add_settings_field('footer-text-alignment','Text Alignment','cto_footer_ta_field','cto_caei','cto-footer-options');
}	

// SECTIONS CALLBACK
function cto_content_options(){
	//echo '<p class="description">Configure Content options</p>';
	echo '';
}
function cto_header_options(){
	echo '';
}
function cto_sidebar_options(){
	echo '';
}
function cto_footer_options(){
	echo '';
}

// FIELDS CALLBACK
function cto_content_page_title_field(){
	$content_page_title = esc_attr( get_option( 'content_page_title' ) );

	echo '<span><input type="radio" name="content_page_title" value="Show" ';
	if($content_page_title == 'Show' || $content_page_title == '') echo 'checked="checked"'; 
	echo '> Show</span>';
	echo '<span style="margin-left: 3em;" ><input type="radio" name="content_page_title" value="Hide" ';
	if($content_page_title == 'Hide') echo 'checked="checked"'; 
	echo '> Hide</span>';
}
function cto_content_post_date_field(){
	$content_post_date = esc_attr( get_option( 'content_post_date' ) );

	echo '<span><input type="radio" name="content_post_date" value="Show" ';
	if($content_post_date == 'Show' || $content_post_date == '') echo 'checked="checked"'; 
	echo '> Show</span>';
	echo '<span style="margin-left: 3em;" ><input type="radio" name="content_post_date" value="Hide" ';
	if($content_post_date == 'Hide') echo 'checked="checked"'; 
	echo '> Hide</span>';
}
function cto_header_field(){
	$header_type = esc_attr( get_option( 'header_type' ) );

	echo '<span><input type="radio" name="header_type" value="Regular" ';
	if($header_type == 'Regular' || $header_type == '') echo 'checked="checked"'; 
	echo '> Regular</span>';
	echo '<span style="margin-left: 3em;" ><input type="radio" name="header_type" value="Fixed" ';
	if($header_type == 'Fixed') echo 'checked="checked"'; 
	echo '> Fixed</span>';
}
function cto_header_contpos_field(){
	$header_content_position = esc_attr( get_option( 'header_content_position' ) );

	echo '<span><input type="radio" name="header_content_position" value="Logoleft" ';
	if($header_content_position == 'Logoleft' || $header_content_position == '') echo 'checked="checked"'; 
	echo '> Logo Left : Menu Right (Default)</span><br>';
	echo '<span style="line-height: 35px;" ><input type="radio" name="header_content_position" value="Logoright" ';
	if($header_content_position == 'Logoright') echo 'checked="checked"'; 
	echo '> Menu Left : Logo Right</span><br>';
	echo '<span><input type="radio" name="header_content_position" value="Logocenter" ';
	if($header_content_position == 'Logocenter') echo 'checked="checked"'; 
	echo '> Logo Center : Menu Center</span>';
}
function cto_sidebar_field(){
	$sidebar_position = esc_attr( get_option( 'sidebar_position' ) );

	echo '<span><input type="radio" name="sidebar_position" value="Disable" ';
	if($sidebar_position == 'Disable' || $sidebar_position == '') echo 'checked="checked"'; 
	echo '> Disable</span><br>';
	echo '<span style="line-height: 35px;" ><input type="radio" name="sidebar_position" value="Right" ';
	if($sidebar_position == 'Right') echo 'checked="checked"'; 
	echo '> Right</span><br>';
	echo '<span><input type="radio" name="sidebar_position" value="Left" ';
	if($sidebar_position == 'Left') echo 'checked="checked"'; 
	echo '> Left</span>';
}
function cto_footer_cols_field(){
	$footer_column_number = esc_attr( get_option( 'footer_column_number' ) );

	echo '<select name="footer_column_number">
		<option value="1"';
		if($footer_column_number=='1') echo ' selected';
	echo'>One</option>
		<option value="2"'; 
		if($footer_column_number=='2') echo ' selected';
	echo '>Two</option>
		<option value="3"'; 
		if($footer_column_number=='3') echo ' selected';
	echo '>Three</option></select>';
}
function cto_footer_ta_field(){
	$footer_text_alignment = esc_attr( get_option( 'footer_text_alignment' ) );

	echo '<select name="footer_text_alignment">
		<option value="Left"';
		if($footer_text_alignment=='Left') echo ' selected';
	echo'>Left</option>
		<option value="Center"'; 
		if($footer_text_alignment=='Center') echo ' selected';
	echo '>Center</option>
		<option value="Right"'; 
		if($footer_text_alignment=='Right') echo ' selected';
	echo '>Right</option></select>';
}


function cto_generate_feature_settings(){
	register_setting('cto-feature-settings','activate_message');
	register_setting('cto-feature-settings','activate_widgets');

	//admin_features
	add_settings_section('cto-admin-feat-options', 'Admin Features', 'cto_admin_feat_options', 'cto_caei_features');
	add_settings_field('admin-messages','Enable Admin Messages','cto_activate_message_field','cto_caei_features','cto-admin-feat-options');

	//widgets_features
	add_settings_section('cto-widget-feat-options', 'Widget Features', 'cto_widget_feat_options', 'cto_caei_features');
	add_settings_field('admin-widgets','Enable Widgets','cto_activate_widgets_field','cto_caei_features','cto-widget-feat-options');
}

// SECTIONS CALLBACK
function cto_admin_feat_options(){
	echo '';
}
function cto_widget_feat_options(){
	echo '';
}

// FIELDS CALLBACK
function cto_activate_message_field(){
	if(get_option( 'activate_message' ) == '1') $activate_message = 'checked' ;
	echo '<input type="checkbox" name="activate_message" value="1" '. $activate_message .'>';	
	echo ' <span class="description">Enables the feature containing a form for newsletters and contacts.</span>';
}
function cto_activate_widgets_field(){
	if(get_option( 'activate_widgets' ) == '1') $activate_widgets = 'checked' ;
	echo '<input type="checkbox" name="activate_widgets" value="1" '. $activate_widgets .'>';	
}
 ?>
