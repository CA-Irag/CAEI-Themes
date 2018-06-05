<?php 

add_action('wp_ajax_nopriv_caeithemetwo_load_more', 'caeithemetwo_load_more');
add_action('wp_ajax_caeithemetwo_load_more', 'caeithemetwo_load_more');

function caeithemetwo_load_more(){
	$paged = $_POST["page"]+1;
	$query_type = $_POST["query"];
	$query_identifier = $_POST["query_id"];
	
	if($query_type=='all') $query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ));
	else if($query_type=='cat') $query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged, 'category__in' => $query_identifier ));
	else if($query_type=='tag') $query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged, 'tag_slug__in' => $query_identifier ));
	else $query = '';

	sleep(2);

	if( $query->have_posts() ): 
		while( $query->have_posts() ):
			$query->the_post();
			if( get_post_type() == 'post' ): ?>

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

				<?php 
			endif;
		endwhile;
	endif;

	wp_reset_postdata();
	die();
}

 ?>