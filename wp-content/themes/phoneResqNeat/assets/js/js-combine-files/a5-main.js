$=jQuery.noConflict();

// Detect browser width
function getWidth() {
	if (self.innerHeight) {
		return self.innerWidth;
	}

	if (document.documentElement && document.documentElement.clientHeight) {
		return document.documentElement.clientWidth;
	}

	if (document.body) {
		return document.body.clientWidth;
	}
}

if( getWidth() < 769 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('#header').addClass('nav-min');
}

// Document ready
$( document ).ready(function() {
	
	// Filter devices from dropdown
	$('.filter-model').on('change', function(){
		// Get value of the selected device from the dropdown
		var getVal = $('.' + $(this).val());
		// Hide all devices with class below
		$('.filter, .row-container .row').fadeOut();
		// Show row of selected device
		getVal.parent('.row-container .row').fadeIn();
		// Show selected device
		getVal.fadeIn();
		// CSS3 transitions when user selects device from dropdown
		$('#repair .row').removeClass('animatedParent');
		getVal.children().removeClass('animated fadeInRight fadeInLeft');

		// Hide parallax divs
		$('.parallax').removeClass('parallax');
		// Reset to show all devices

		if( $(this).val() == 'reset' ) {
			// Remove CSS3 transitions when user resets
			$('.img-holder').removeClass('animated fadeInRight fadeInLeft');
			$('.filter, .row-container .row').fadeIn();			
		}
	});


	//Skrollr initialise
	// if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	//     skrollr.init({
	//         forceHeight: false
	//     });
	// }

	// Tablet on resize width show minified menu
	function resize() {
	    if ($(window).width() < 769) {
	     $('#header, #services').addClass('nav-min');
	    }
	}
    $(window).resize(resize);


	// Show hide value of form inputs and textarea
    $('input, textarea').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('');
                $(this).siblings('span').css({width: '100%'});
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
                $(this).siblings('span').css({width: '0%'});
            }
        });
    });

	// Validate form
	 $("#contact-form").validate();

	 $('#btn-submit').click( function(){
		$('#contact-form').submit();
	 });
	 
	// Mobile icon hamburger show/hide mobile nav
	$('#nav-hamburger, #nav-main li a').click(function(){
		$('#nav-hamburger').toggleClass('open');
		$('#nav-main ul').toggleClass('mobile-dropdown');
	});

	// Minimal nav add active state to show underline
	$('#nav-main a').click( function(){
		$('#nav-main a').removeClass('active');		
		$(this).addClass('active');		
	});

	// Service shake repair products
	$('.repair a, .product a, .product img').hover( function(){
		$(this).parent().find('span, img').addClass('shake');
	}, function() {
		$(this).parent().find('span, img').removeClass();
	});

	//Scroll to sections
	$('a[href^=#]').click(function(){
	    var target = $(this).attr('href');
	    var speed = 600;

	    if (target == '#header') {	   
	      
	      $('html, body').animate({scrollTop : 0}, speed);
	    
	    } else $('html, body').animate({
	   
	        scrollTop: $(target).offset().top - 45
	   
	    }, speed);
	});	


	// Icon mouse show hide intro text only if it hasn't scrolled down
	$('.icon-animate').click( function(){
		if($(document).scrollTop() < 400) {
		    $('html, body').animate({
		        scrollTop: $('#services').offset().top - 45
		    }, 600);
		    
		} else {
			$('#show-hide').slideDown(500);
		}
	});

	$('#repair .two-col img').click( function(){
		$(this).parent().siblings('h2:before').css({width: '100%'});
	});

//CSS3 Animate-it
$('.animatedParent').appear();
$('.animatedClick').click(function(){
  var target = $(this).attr('data-target');

  
  if($(this).attr('data-sequence') != undefined){
    var firstId = $("."+target+":first").attr('data-id');
    var lastId = $("."+target+":last").attr('data-id');
    var number = firstId;

    //Add or remove the class
    if($("."+target+"[data-id="+ number +"]").hasClass('go')){
      $("."+target+"[data-id="+ number +"]").addClass('goAway');
      $("."+target+"[data-id="+ number +"]").removeClass('go');
    }else{
      $("."+target+"[data-id="+ number +"]").addClass('go');
      $("."+target+"[data-id="+ number +"]").removeClass('goAway');
    }
    number ++;
    delay = Number($(this).attr('data-sequence'));
    $.doTimeout(delay, function(){
      console.log(lastId);
      
      //Add or remove the class
      if($("."+target+"[data-id="+ number +"]").hasClass('go')){
        $("."+target+"[data-id="+ number +"]").addClass('goAway');
        $("."+target+"[data-id="+ number +"]").removeClass('go');
      }else{
        $("."+target+"[data-id="+ number +"]").addClass('go');
        $("."+target+"[data-id="+ number +"]").removeClass('goAway');
      }

      //increment
      ++number;

      //continute looping till reached last ID
      if(number <= lastId){return true;}
    });
  }else{
    if($('.'+target).hasClass('go')){
      $('.'+target).addClass('goAway');
      $('.'+target).removeClass('go');
    }else{
      $('.'+target).addClass('go');
      $('.'+target).removeClass('goAway');
    }
  } 
});

$(document.body).on('appear', '.animatedParent', function(e, $affected){
  var ele = $(this).find('.animated');
  var parent = $(this);
  

  if(parent.attr('data-sequence') != undefined){
    
    var firstId = $(this).find('.animated:first').attr('data-id');
    var number = firstId;
    var lastId = $(this).find('.animated:last').attr('data-id');

    $(parent).find(".animated[data-id="+ number +"]").addClass('go');
    number ++;
    delay = Number(parent.attr('data-sequence'));

    $.doTimeout(delay, function(){
      $(parent).find(".animated[data-id="+ number +"]").addClass('go');
      ++number;
      if(number <= lastId){return true;}
    });
  }else{
    ele.addClass('go');
  }
  
});

 $(document.body).on('disappear', '.animatedParent', function(e, $affected) {
  if(!$(this).hasClass('animateOnce')){
    $(this).find('.animated').removeClass('go');
   }
 });

 $(window).load(function(){
  $.force_appear();
 });

}); //End of document ready



// Document on scroll change nav state
$(document).on('scroll',function(){

	if(getWidth() > 768){
		// On srcoll of 100px activate minified nav
	    if($(document).scrollTop() > 100) {
	        $('#header').addClass('nav-min');
	        $('#services').addClass('nav-min');
	        $('#repair').addClass('nav-min');
	    } else {
	        $('#header').removeClass('nav-min');
	        $('#services').removeClass('nav-min');
	        $('#repair').removeClass('nav-min');
	    }

	    // If scroll top is 400 + show hide intro paragraph
	    if($(document).scrollTop() > 400) {
			$('#show-hide').slideDown(500);
	    } else {
	    	$('#show-hide').slideUp(500);
	    }    
	}

});



// Load Google maps
function initMap() {
	var phoneResq = {lat: 30.670774, lng: -81.456867};

	var map = new google.maps.Map(document.getElementById("map"), {
	zoom: 13,
	center: phoneResq
	});

	var contentString = '<div id="content">'+
	  '<div id="siteNotice">'+
	  '</div>'+
	  '<h1 id="firstHeading" class="firstHeading">Welcome to Phone Resq.</h1>'+
	  '<div id="bodyContent">'+
	  '<p>We repair and improve all of your handheld devices and home computers. ' +
	  'Our hassle-free customer service is centered around your interests and the intention of getting you back online.</p> '+
	  '<p>Website: <a href="https://phoneResq.com/" target="_blank">'+
	  'http://phoneResq.com/</a> <br>'+
	  'Email: <a href="@mailto:phoneresq@gmail.com">'+
	  'phoneresq@gmail.com</a><br>'+
	  'Phone: (904) 310-0059'+	  

	  '</div>'+
	  '</div>';

	var infowindow = new google.maps.InfoWindow({
	content: contentString
	});

	var marker = new google.maps.Marker({
	position: phoneResq,
	map: map,
	title: 'Phone ResQ'
	});

	marker.addListener('click', function() {
	infowindow.open(map, marker);
	});
}


