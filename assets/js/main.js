jQuery( document ).ready(function($) {
	
	var controller = new ScrollMagic.Controller();
	
// Top Bar

	$(document).on('click', '#top-bar-alert button', function() {
		$('#top-bar-alert').slideUp(500);
		
		document.cookie = "topbar_cookie=closed; Max-Age=3600; path=/";
		
	});
	
	
	 //get cookie 
	var topbar_cookie = getCookie("topbar_cookie");

	$(window).on("load", function(){
		
		function topAlert(){
		
			if (topbar_cookie != "closed") {
		
				$('#top-bar-alert').slideDown(500);	
				
			};
		
		}
		setTimeout(topAlert, 500);

		
	});	

	//function getCookie        
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for (var i = 0; i < ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' ') c = c.substring(1);
	        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
	    }
	    return "";
	}
	
// Popup Close on conversion
    $(document).ready(function() {
		$(document).on('gform_confirmation_loaded', function(event, formId){
				console.log("closed");
				
	// 			WPPopups.hidePopup($(this), true);
				
	// 			WPPopups.hidePopup($(this), conversion);
	
				const $popup_id = 1596, $conversion = true;
// 				SPU.hide($popup_id, $conversion);
				
				
// 				WPPopups.hidePopup($($popup_id), $conversion);
				
				
				
				
		});
	});
	
// Main Nav Toggle
	$(document).on('click', 'button.navbar-toggle', function() {
		$('button.navbar-toggle').toggleClass('clicked');
	});
	
	

// 	Moon animations
	if($('#moon').length){
		
		var hp_moon_tl = new TimelineMax();
		var $space = $('#space');
		var $moonWrap = $('#moon-wrap');
		var $moon = $('#moon-wrap img');

		$(window).on("load", function(){
			
			hp_moon_tl
			.to($space, 10, { backgroundPosition: '0% 50%', scaleX: 1, scaleY: 1, ease: "expo.out"},0)
			.to($moon, 10, { x: 50, scaleX: 1, scaleY: 1, ease: "expo.out"},0)
			
			var hp_moon_scene = new ScrollMagic.Scene({
			        triggerElement: '.pinned-space-wrap',
			        triggerHook: "onLeave",
			        offset: 0,
			})		
			.setTween(hp_moon_tl)
			.reverse(false)
			.addTo(controller);
		
		});
		
		
		
		var hp_pin_space_scene = new ScrollMagic.Scene({
		        triggerElement: '.pinned-space-wrap',
		        triggerHook: "onLeave",
		        offset: 0,
		        duration: 700
		})		
		.setPin('.pinned-space-wrap')
		.addTo(controller);	
				
	};

// 	Download Button
	if($('a.download-link').length){
	
		$(document).on('click', 'a.download-link', function() {
			$('a.download-link').addClass('clicked');
		});
	
	};
	
// 	Select Work
	if($('.projects-wrap').length){
		
		var stagger_projects = new TimelineMax();
		
		stagger_projects
		.staggerFromTo(".projects-wrap .single-project", 1, {y: 70, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: Back.easeOut}, 0.15);
		
		var scene = new ScrollMagic.Scene({
        triggerElement: '.projects-wrap',
        triggerHook: "onEnter",
        offset: 200
		})
		.setTween(stagger_projects)
		.addTo(controller);
		
		
	};
	

});