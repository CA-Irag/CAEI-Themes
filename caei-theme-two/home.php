<?php get_header(); ?>
<div class="content-main container">
	<div class="main-column left">

		<div class="blog_post_holder">			
			<?php
			if( have_posts() ):
			while( have_posts() ):
				the_post();
				if( get_post_type() == 'post' ):
			?>
			<div class="blog_post">
				<div class="blog_post_inner">
					<?php if(has_post_thumbnail()): ?>
					<div class="blog_post_thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
					<?php else: ?>
					<div class="blog_post_thumbnail"><img src="<?php echo get_template_directory_uri() . '/assets/default.jpg'; ?>"></div>
					<?php endif; ?>
					<div class="blog_post_body">
						<h1 class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<small class="blog_post_date">
							Posted on: <?php the_time('F j, Y'); ?>
						</small>
						<div class="blog_post_content">
							<?php
							$more_text = '.. <a href="'.get_permalink().'">read more</a>';
							echo wp_trim_words( get_the_content(), 50, $more_text );
							?>
						</div>				
						<small class="blog_post_filters">
							<div class="blog_post_cat"><?php if(has_category()){ ?> Categories: <?php the_category(', '); } ?></div>
							<div class="blog_post_tag"><?php the_tags(); ?></div>
							<div class="clear-fix"></div>				
						</small>
					</div>
					<div class="clear-fix"></div>
				</div>
			</div>
			<?php endif; endwhile; endif; ?>
		</div>

	</div>
	<div class="side-column right">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>