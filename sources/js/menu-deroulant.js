$( document ).ready(function() {
	$('.menu-btn').click(function(){
		$('.menu').css('display','block');
	});
	$('.menu').mouseenter(function(){
		$('.menu').css('display','block');
	});
	$('.menu').mouseout(function(info){
		/*console.log(info);
		console.log($(info.relatedTarget).parents('.menu').length, $(info.relatedTarget).hasClass('menu'));*/
		if ($(info.relatedTarget).parents('.menu').length == 0 && $(info.relatedTarget).hasClass('menu') == false)
			$('.menu').css('display','none');
	});
});