jQuery(function($) {

	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});

	//#main-slider
	var slideHeight = $(window).height();
	$('#home-slider .item').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#home-slider .item').css('height',slideHeight);
	});
	
	//Scroll Menu
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>slideHeight ){
			$('.main-nav').addClass('navbar-fixed-top');
		} else {
			$('.main-nav').removeClass('navbar-fixed-top');
		}
	});
	
	// Navigation Scroll
	$(window).scroll(function(event) {
		Scroll();
	});

	$('.navbar-collapse ul li a').on('click', function() {  
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});

	// User define function
	function Scroll() {
		var contentTop      =   [];
		var contentBottom   =   [];
		var winTop      =   $(window).scrollTop();
		var rangeTop    =   200;
		var rangeBottom =   500;
		$('.navbar-collapse').find('.scroll a').each(function(){
			contentTop.push( $( $(this).attr('href') ).offset().top);
			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
		})
		$.each( contentTop, function(i){
			if ( winTop > contentTop[i] - rangeTop ){
				$('.navbar-collapse li.scroll')
				.removeClass('active')
				.eq(i).addClass('active');			
			}
		})
	};

	$('#tohash').on('click', function(){
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();

	//Google Map
	var latitude = $('#google-map').data('latitude')
	var longitude = $('#google-map').data('longitude')
	function initialize_map() {
		var myLatlng = new google.maps.LatLng(latitude,longitude);
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			center: myLatlng
		};
		var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
		var contentString = '';
		var infowindow = new google.maps.InfoWindow({
			content: '<div class="map-content"><ul class="address">' + $('.address').html() + '</ul></div>'
		});
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize_map);
	
});

/*tabs de los mapas*/
/*Slider de aprende*/
 
$('video').on('play', function (e) { 
    $("#myCarousel").carousel('pause'); 
}); 
$('video').on('stop pause ended', function (e) { 
    $("#myCarousel").carousel(); 
}); 


/*imagenes de cursos*/


$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);


/*Circulo con cosas*/


$(document).ready(function() {
  var previous = document.getElementById("centro"); 
  var original = "menu"; 
  var toOpen = ""; 
  var over; 

  var delay = function (elem, callback) { 
    var timeout = null;
    timeout = setTimeout(function() { 
      if(over) {
        callback(elem);
      }
    }, 150);

    $(elem).mouseout(function() {
      over = false; 
      clearTimeout(timeout); 
    });
  };

  $(".over").mouseenter(function(event) { 
    over = true; 
    delay(document.getElementById(event.target.id), function(context) {
      toOpen = document.getElementById(original.concat(context.id));
      openMenu(toOpen); 
      previous = toOpen;
    });
  });

  $(".clicky").click(function() {
    openMenu(document.getElementById("centro"));
    previous = document.getElementById("centro");
  });

  function openMenu(context) { 
    closeMenu(previous);
    $(context).toggleClass("visible"); 
    $(context).toggleClass("hidden");
  }

  function closeMenu(context) {
    $(context).toggleClass("visible");
    $(context).toggleClass("hidden");
  }
});