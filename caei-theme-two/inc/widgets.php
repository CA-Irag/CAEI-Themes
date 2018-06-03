<?php 

function caeithemetwo_widget_setup(){
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'Main-Sidebar',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Single Post Footer',
			'id' => 'single-post-footer-1',
			'class' => 'Single-Post-Footer-1',
			'description' => 'Widget area under single post section',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_widget( 'relposts_widget' );
	register_widget( 'all_posts_tags_widget' );
}

add_action('widgets_init', 'caeithemetwo_widget_setup');


// WIDGETS

class relposts_widget extends WP_Widget { 
	function __construct() {
		parent::__construct(	 
			// Base ID of your widget
			'relposts_widget', 
		 
			// Widget name will appear in UI
			__('Related Posts', 'relposts_widget_domain'), 
		 
			// Widget description
			array( 'description' => __( 'Widget for related blog posts in single post only', 'relposts_widget_domain' ), ) 
		);
	}
	 
	// Creating widget front-end	 
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];

		// WIDGET CODE

		// CHECK IF SINGLE POST PAGE
		if(is_single()):

			if ( ! empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];
		
			$post_id = '';
			$post_categories = array();
			$post_tags = array();
			$is_post = false;
			$has_related = false;
			$has_tag = false;
			$has_category = false;
			
			// GET CURRENT POST'S DETAILS
			if( have_posts() ):
				while( have_posts() ):
					the_post();
					if( has_category() ){ $post_categories = get_the_category(); $has_category = true; }
					if( has_tag() ){ $post_tags = get_the_tags(); $has_tag = true; }
					$post_id = get_the_ID();
					if(get_post_type()=='post') $is_post = true;
				endwhile;
			endif;
			wp_reset_postdata();
			if($is_post):
				// CONVERT OBJECT TO ARRAY
				$array_post_tag = array();
				$array_post_cat = array();
				if($has_tag){ foreach($post_tags as $post_tag){ array_push($array_post_tag, $post_tag->slug ); } }
				if($has_category){ foreach($post_categories as $post_cat){ array_push($array_post_cat, $post_cat->cat_ID ); } }	

				// QUERY
				$arg = array(
					'post__not_in'  	=> 	array($post_id),
					'post_type'			=>	'post',
					'post_status'		=>	'publish',
					'category__in' 		=> 	$array_post_cat,
					'tag_slug__in' 		=> 	$array_post_tag,
					'posts_per_page' 	=> 	-1
				);
				$related_posts = new WP_Query($arg);

				if($related_posts->found_posts > 0):
					while( $related_posts->have_posts() ):
						$related_posts->the_post(); ?>
						<div class="related_post">
							<span class="related_post_thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
							<span class="related_post_body">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php
								$more_text = '.. <a href="'.get_permalink().'">read more</a>';
								echo wp_trim_words( get_the_content(), 60, $more_text );
								?>
							</span>
							<div class="clear-fix"></div>	
						</div>
						<?php
					endwhile;
				else:
					echo 'No related posts';
				endif;
			endif;
		endif;
		echo $args['after_widget'];
	}
	         
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; }
		else { $title = __( 'Related Posts', 'relposts_widget_domain' ); }
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

class all_posts_tags_widget extends WP_Widget { 
	function __construct() {
		parent::__construct(	 
			// Base ID of your widget
			'all_posts_tags_widget', 
		 
			// Widget name will appear in UI
			__('Tags', 'allpoststags_widget_domain'), 
		 
			// Widget description
			array( 'description' => __( 'Widget for displaying all tags available', 'allpoststags_widget_domain' ), ) 
		);
	}
	 
	// Creating widget front-end	 
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];		
		if ( ! empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];

		$query_args = array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1);
		$wpb_all_query = new WP_Query( $query_args ); ?>
		<ul>
		<?php foreach ( get_tags() as $tag ){	?>
			<li><a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a></li>
		<?php } ?>
		</ul>
		<?php echo $args['after_widget'];
	}
	         
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; }
		else { $title = __( 'Tags', 'allpoststags_widget_domain' ); }
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

 ?>