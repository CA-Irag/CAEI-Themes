<?php
/* Template Name: Sidebar Left */
?>
<?php get_header(); ?>
<div class="content-main container">
	<div class="side-column left">
		<?php get_sidebar(); ?>
	</div>
	<div class="main-column right">
		<?php 
		if(have_posts()){
			the_post();
			the_content();
		}?>		
		<?php ?>
	</div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>