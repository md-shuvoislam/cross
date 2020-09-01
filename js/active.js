(function ($) {
	"use strict";


    $(document).ready(function(){
		
		//var player = fluidPlayer('popup-player');
		
		 const player = new Plyr('#player');

      $("a[href^='#']").click(function(e) {
            e.preventDefault();
            var position = $($(this).attr("href")).offset().top;

            $("body, html").animate({
                scrollTop: position
            });
        });

    });


    var btn = $('#button');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});
	


    $('.navbar .dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

		}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

		});

		$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
	});

	
	$(document).ready(function() {
		
		$('.sppb-magnific-popup').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false
		});
		
	});
	
	
	$(document).ready(function() {
		
		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			},
			gallery: {
				enabled: true
			}

		});
		
	});
	
	$(document).ready(function() {
			$('.popup-youtube').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,

				fixedContentPos: false,
					gallery: {
					enabled: true
				}
				
			});
	});


	
	$(document).ready(function() {
		$('#myTab_21 a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	});

}(jQuery));