<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="header">
		<div class="header-main">
			<div class="header header-top">
				<div class="container">
					<div class="navbar-header header-logo">
						<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?> <span><?php bloginfo('name'); ?></span></a>
					</div>
					<div class="nav nav-header-main">
						<?php if ( has_nav_menu( 'header_menu' ) ){ wp_nav_menu(array('theme_location'=>'header_menu')); } ?>
					</div>
				</div>
			</div>
			<div class="header header-bottom">
			</div>
		</div>
	</header>