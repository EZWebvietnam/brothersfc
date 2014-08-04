/*JavaScript Site Function*/

(function($){
	$(function(){
		/*for breadscrum*/
		if(window.icl_lang == 'en')
		{
			$('.cls_breadcrumb_wrapper a.home').html('Home').css('visibility', 'visible');
			$('.cls_breadcrumb_wrapper span.cls_search_for').html('Search results for').css('visibility', 'visible');
		}

		if( $('#pf-site-wrapper.bbpress').length > 0 )
		{
			jQuery('ul.cls_top_menu > li:last-child').addClass('current-menu-item');
		}

		$('.bbp-breadcrumb a.bbp-breadcrumb-home').html('Trang Chủ').parents('.bbp-breadcrumb').css('visibility', 'visible');

		if($('#pf-site-wrapper.home-page').length == 0) //if not homepage
		{
			var objWrapper = $('.cls_layout_wrapper').eq(0); //dirty hack for home page
			var maxHeight = 0;

			objWrapper.find('.cls_layout_inner').each(function(){
				var intHeight = $(this).height()
				if(intHeight > maxHeight)
				{
					maxHeight = intHeight;
				}
			}).css('min-height', maxHeight + 'px');			
		}
	});
})(jQuery);	