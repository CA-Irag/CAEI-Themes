<?php 

if(get_option( 'activate_message' ) == '1'){
	add_action('init', 'cto_customposttype_message');
	add_filter( 'manage_posts_columns', 'cto_customposttype_message_setcolumns');
	add_action( 'manage_posts_custom_column', 'cto_customposttype_message_setcolumns_value', 10, 2);
	add_action( 'add_meta_boxes', 'cto_messages_add_metabox' );
	add_action( 'save_post', 'cto_save_message_email_data' );
}

function cto_customposttype_message(){
	$labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name' 		=> 'Messages',
		'name_admin_bar' 	=> 'Message'
	);

	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'menu_icon'			=> 'dashicons-email-alt',
		'capabilty_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'supports'			=> array('title', 'editor', 'author')
	);

	register_post_type('cto_message', $args);
}

function cto_customposttype_message_setcolumns( $columns ){
	console.log('this is code');
	$newColumns = array();
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function cto_customposttype_message_setcolumns_value( $column, $post_id ){
	switch ($column) {
		case 'message':
			echo get_the_excerpt();
			break;

		case 'email':
			echo get_post_meta( $post_id, '_cto_message_email_value_key', true );
			break;
	}
}

function cto_messages_add_metabox(){
	add_meta_box('messages_email', 'Email Address', 'cto_message_email', 'cto_message', 'side');
}

function cto_message_email( $post ){
	wp_nonce_field('cto_save_message_email_data','cto_message_email_nonce');
	$value = get_post_meta( $post->ID, '_cto_message_email_value_key', true );
	echo '<input type="email" id="cto_message_email_field" name="cto_message_email_field" value="'. esc_attr($value) .'" size="25" />';
}

function cto_save_message_email_data( $post_id ){
	if( ! isset( $_POST['cto_message_email_nonce'] ) ) return;
	if( ! wp_verify_nonce( $_POST['cto_message_email_nonce'], 'cto_save_message_email_data' ) ) return;
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
	if( ! current_user_can( 'edit_post', $post_id ) ) return;
	if( ! isset( $_POST['cto_message_email_field'] ) ) return;

	$my_data = sanitize_text_field( $_POST[cto_message_email_field] );
	update_post_meta( $post_id,'_cto_message_email_value_key', $my_data );
}
 ?>
