<?php get_header(); ?>
<div class="content-main container">
	<div class="full-column">
		<?php 
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				the_content();
			endwhile;
		endif;
			?>		
	</div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>