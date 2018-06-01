<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="<?php echo esc_attr(get_option( 'header_type' )); ?>">
		<div class="header-main">
			<div class="header header-top"></div>
			<div class="header header-bottom">

				<?php 
				if(esc_attr(get_option( 'header_content_position' )) == 'Logoleft' || esc_attr(get_option( 'header_content_position' )) == '') {
					$logo_class = 'left';
					$menu_class = 'right';
				}else if(esc_attr(get_option( 'header_content_position' )) == 'Logoright'){
					$logo_class = 'right';
					$menu_class = 'left';
				}else{
					$logo_class = 'center';
					$menu_class = 'center';
				}

				?>

				<div class="header-logo <?php echo $logo_class ?>">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php 
						if(get_theme_mod('cto_header_custom_image')) echo get_theme_mod('cto_header_custom_image');
						else echo get_template_directory_uri() . '/images/logo.png';
						?>" height="100px" alt="" />
					</a>
				</div>
				<div class="nav nav-header-main <?php echo $menu_class ?>">
					<?php wp_nav_menu(array('theme_location'=>'header_menu')); ?>
				</div>
			</div>
		</div>
	</header>

