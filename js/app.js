$(document).foundation();


$(document).ready(function() {
	$('.trigger-srch').click(function() {
		$('.menu-over-area .search-main').slideToggle();
	});
	$('.trigger-nav').click(function() {
		$('.right-nav .list-unstyled').slideToggle();
	});
	

	// $(window).resize(function() {
 	
	// });

}); /*document ready ends*/


	/*sticky navigation*/
	
	$(window).scroll(function() {
    if ($(this).scrollTop() > 112) 
    	{
        $('.sticky-container').addClass('stick-top');
    	}
    else
    	{
			$('.sticky-container').removeClass('stick-top');
		}

	});


		


