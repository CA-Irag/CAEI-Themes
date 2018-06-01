<?php
/**
 * @package caei-theme
 *
 */?>
 
<?php get_header(); ?>
<div class="content-main <?php echo esc_attr(get_option( 'header_type' )); ?> <?php echo esc_attr(get_option( 'header_content_position' )); ?>">
	<?php if(esc_attr(get_option( 'sidebar_position' )) == 'Left'){ ?>
		<div id="sidebar" class="sidebar-column left">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
	<div class="main-column <?php if(esc_attr(get_option( 'sidebar_position' )) == 'Disable' || esc_attr(get_option( 'sidebar_position' )) == '') echo 'full'; ?>">
		<?php
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<h1><?php if (get_option( 'content_page_title' )=='Show' || get_option( 'content_page_title' )=='') the_title(); ?></h1>

				<?php if(get_option( 'content_post_date' )=='Show' || get_option( 'content_post_date' )=='') { ?>
					<small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small>
				<?php } ?>
				<p><?php the_content(); ?></p>
			<?php endwhile;
		endif;
		?>
	</div>
	<?php if(esc_attr(get_option( 'sidebar_position' )) == 'Right'){ ?>
		<div id="sidebar" class="sidebar-column right">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
</div>
<?php get_footer(); ?>