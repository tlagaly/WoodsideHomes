$(document).foundation();


$(document).ready(function() {
	$('.trigger-srch').click(function() {
		$('.menu-over-area .search-main').slideToggle();
	});
	$('.trigger-nav').click(function() {
		$('.right-nav .list-unstyled').slideToggle();
	});
});

