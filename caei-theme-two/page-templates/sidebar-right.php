<?php
/* Template Name: Sidebar Right */
?>
<?php get_header(); ?>
<div class="content-main container">
	<div class="main-column left">
		<?php 
		if(have_posts()){
			the_post();
			the_content();
		}?>		
		<?php ?>
	</div>
	<div class="side-column right">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>