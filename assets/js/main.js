jQuery( document ).ready(function($) {
	
	var controller = new ScrollMagic.Controller();
	
	$(document).on('click', 'button.navbar-toggle', function() {
		$('button.navbar-toggle').toggleClass('clicked');
	});

// 	Moon animations
	if($('#moon').length){
		
		var hp_moon_tl = new TimelineMax();
		var $space = $('#space');
		var $moonWrap = $('#moon-wrap');
		var $moon = $('#moon-wrap img');

		
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
		
		
		
		var hp_pin_space_scene = new ScrollMagic.Scene({
		        triggerElement: '.pinned-space-wrap',
		        triggerHook: "onLeave",
		        offset: 0,
		        duration: 700
		})		
		.setPin('.pinned-space-wrap')
		.addTo(controller);	
				
	};
	
	
// 	Select Work
	if($('.projects-wrap').length){
		
		var stagger_projects = new TimelineMax();
		
		stagger_projects
		.staggerFromTo(".projects-wrap .single-project", 1, {y: 70, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: Back.easeOut}, 0.15);
		
		var scene = new ScrollMagic.Scene({
        triggerElement: '.projects-wrap',
        triggerHook: "onCenter",
		})
		.setTween(stagger_projects)
		.addTo(controller);
		
		
	};
	

});