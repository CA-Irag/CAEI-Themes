var	loading = false;

jQuery(document).ready( function($){

	$(window).on('scroll', function() {
		var hT = $('.footer-main').offset().top;
		var hH = 0;
		var wH = $(window).height();
		var wS = $(this).scrollTop();
		var cS = hT+hH-wH;

		if(wS > cS && cS > 0 || hT < wH){
			load_new_posts($);
		}
	});
});


function load_new_posts($){
	if( !loading ){
		loading = true;
		var loader = $('.blog_loading_animation .loader').show();;
		var loading_info = $('.blog_loading_animation');
		var page = loading_info.data('page');
		var newpage = page+1;
		var ajaxurl = loading_info.data('url');

		$('body').addClass('loading');
		$.ajax({
			url		: ajaxurl,
			type	: 'post',
			data	: {
				page		: page,
				query		: $('#query_identifier').data('querytype'),
				query_id	: $('#query_identifier').html().trim(),
				action		: 'caeithemetwo_load_more'
			},
			error : function( response ){
				console.log(response);
			},
			success : function( response ){	
					$('.blog_post_holder').append( response );
					loading_info.data('page', newpage);
					$('body').removeClass('loading');
					loader.hide();
				if(response!='') loading = false;
			}
		});
	}
}