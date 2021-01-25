$(window).load(function() {
	$("img[name='picautozoom']").each(function() {
		if (this.complete) {
			var smallWidth = $(this).width();
			var smallHeight = $(this).height();
			$(this).width(smallWidth).css("height", "auto");
			if ($(this).height() > smallHeight) {
				$(this).height(smallHeight).css("width", "auto");				
			} else {				
			}
		}
	});
});