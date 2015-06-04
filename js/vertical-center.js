(function($) {
	$(document).ready(verticalCenter);
	$(window).resize(verticalCenter);
	
	function verticalCenter() {
		$('.vertical-center-xs, .vertical-center-md, .vertical-center-lg, .vertical-center-xl').each(function(i, e) {
			$(e).css('top', ($(e).closest('.row').height() / 2) - ($(e).height() / 2));
		});
	}
	
})(jQuery);