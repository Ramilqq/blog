jQuery(document).ready(function($){

	$('.panell div').each(function(i){
		$(this).find('div.commentNumber').text('#' + (i));
	});

});