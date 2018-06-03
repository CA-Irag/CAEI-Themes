<?php get_header(); ?>
<div class="content-main container">
	<div class="blog-feature-column">
		<?php the_post_thumbnail( 'full' ); ?>
		<div class="img-overlay-bottom-white"></div>			
	</div>
	<div class="main-column left">
		<div class="post_single">
			<?php 
			if( have_posts() ):
				while( have_posts() ): ?>
					<?php the_post(); ?>
					<h1 class="post_title"><?php the_title(); ?></h1>
					<div class="post_author_date"><small>Posted by <span><?php the_author(); ?></span> &nbsp; on <span><?php the_time('F j, Y');?></span></small></div>
					<div class="post_content"><?php the_content() ?></div>
					<div class="post_filters">
						<div class="post_cats">
							<small><?php if(has_category()){ ?> Categories: <?php the_category(', '); } ?></small>
						</div>
						<div class="post_tags">
							<small><?php the_tags(); ?></small>
						</div>					
					</div>
					<?php			
				endwhile;
			endif;
				?>
		</div>
		<div class="post_comments">
			<hr class="double">
			
			<?php
				if ( comments_open() || get_comments_number() ) comments_template();
			?>
		</div>
		<div class="post_footer_widget">
			<hr class="double">
			<?php dynamic_sidebar('single-post-footer-1'); ?>
		</div>
	</div>
	<div class="side-column right">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>