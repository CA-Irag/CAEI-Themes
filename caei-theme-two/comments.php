<?php if( post_password_required() ){ return; } ?>
<div id="comments" class="comments-area">
	<h3>Comments</h3>
	<?php if( have_comments() ): ?>
	<ul class="comment-list">
		<?php
		$comment_args = array(
			'type' 			=> 'comment',
			'style' 		=> 'ul',
			'avatar_size'	=> 70,
			'max_depth'		=> 3
		);
		wp_list_comments($comment_args);
		?>
	</ul>
	<div class="comment-nav">
		<?php paginate_comments_links(); ?> 
	</div>
	<?php else: ?>
		<small>No comments</small>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>