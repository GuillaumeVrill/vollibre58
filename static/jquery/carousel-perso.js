$(window).load(function(){
	var $image = $('.carousel-inner .item .img_thumbnail');
	var $body = $('.carousel-inner .item');

	var image_width = $image.width(); 
	var image_height = $image.height();

	var over = image_width / image_height; 
	var under = image_height / image_width;

	var body_width = $body.width(); 
	var body_height = $body.height();

	if (body_width / body_height >= over) { 
		$image.css({ 
			'width': body_width + 'px', 
			'height': Math.ceil(under * body_width) + 'px', 
			'left': '0px', 
			'top': Math.abs((under * body_width) - body_height) / -2 + 'px' 
		}); 
	}  
	else { 
		$image.css({ 
			'width': Math.ceil(over * body_height) + 'px', 
			'height': body_height + 'px', 
			'top': '0px', 
			'left': Math.abs((over * body_height) - body_width) / -2 + 'px' 
		}); 
	}

})

$(window).resize(function(){window.location.href=window.location.href});