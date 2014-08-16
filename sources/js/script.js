function displayUrl(url)
{
	$('#image').animate({
		opacity:0
	}, 200, function()
	{
		$('#image').attr('src', url);
		$('#image').animate({
			opacity:1
		}, 200);
	});
}

function init()
{
	var list = new Array("sources/images/slider/slider02.png", "sources/images/slider/slider01.png");
	var current = 0;
	var interval;
	$('#next').on('click', function()
	{
		current++;
		if (current >= list.length)
			current = 0;
		displayUrl(list[current]);
	});

	$('#previous').on('click', function()
	{
		current--;
		if (current < 0)
			current = list.length - 1;
		displayUrl(list[current]);
	});

	$('#image').on('mouseenter',function()
	{
		clearInterval(interval);
	});

	$('#image').on('mouseout',function(){
		interval = setInterval(function()
		{
			current++;
			if (current >= list.length)
				current = 0;
			displayUrl(list[current]);
		}, 4000);
	})

	$('body').on('keyup', function(info)
	{
		if (info.keyCode == 39 || info.keyCode == 37)
		{
			if (info.keyCode == 39)
				$('#next').trigger('click');
			if (info.keyCode == 37)
				$('#previous').trigger('click');
			clearInterval(interval);
			$('#image').trigger('mouseout');
		}
		
	});
	$('#image').trigger('mouseout');
}

init();