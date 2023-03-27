	$(function(){

	$('.fly-to-basket').on('click', function (e) {
  
		var elements = {
			flyer  : $( $(this).attr('data-fly-to-basket') ), // get element to fly
			basket : $('#basket') // get destination
		};

		var options = {
			position : {
				origin: {
          	// get initial position on document
					initial: elements.flyer.offset(),
          	// amout of pixels to move the cloned element from the original before flying to the basket
					offset: { x: 1, y: 15 }
				},
				destination: {
          	// get initial position on document
					initial: elements.basket.offset()
				}
			}
		};

		if ( elements.flyer.length && elements.basket.length )
		{
			// allow only 1 cloned element
			if ( $('#fly-to-basket').length )
			{
				$('#fly-to-basket').remove();
			}

			// clone original element and set initial position
			elements.flyer
			.clone()
			.attr('id','fly-to-basket')
			.appendTo('body')
			.css('size','20px')
			.css('box-shadow','0px 1px 10px 5px rgba(0,0,0,.15)')
			.css('position','absolute')
			.css('top',options.position.origin.initial.top)
			.css('left',options.position.origin.initial.left);

			// make it fly!
			$('#fly-to-basket').animate(
				{ top: options.position.origin.initial.top - options.position.origin.offset.y, left: options.position.origin.initial.left - options.position.origin.offset.x }, 50,
				function(){
					$('#fly-to-basket').delay(50).animate(
						{ top: options.position.destination.initial.top, left: options.position.destination.initial.left, width: '10px', height: '10px' }, 1400, 'easeInOutExpo',
						function(){
							$('#fly-to-basket').fadeOut(500, function(){
								elements.basket.effect( "bounce", "slow" );
							});
						}
					);
				}
			);
		}
	});
});
