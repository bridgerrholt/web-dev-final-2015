var resizeBody = function() {
	var footerWrapperHeight = $("#tooplate_footer_wrapper").height();
	var copyrightWrapperHeight = $("#tooplate_copyright_wrapper").height();
	var viewportHeight = $(window).height();
	$("#tooplate_body_wrapper").css("min-height", viewportHeight-footerWrapperHeight/*-copyrightWrapperHeight*/);
};