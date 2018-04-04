/*----------------------------------------------------
 * Copyright 2014 Pixelized Studio
 * http://www.pixelized.cz
 * Color Switcher
 * color-switcher.js
 *
 * Version 1.0
 * Released: 3.3.2014
 * http://creativecommons.org/licenses/by/2.0/
----------------------------------------------------*/

$(document).ready(function() {
	
	var CSduration = 500;
	
	/* OPENING & CLOSING COLOR SWITCHER*/
	$('#toggle-switcher').click(function(){
		if($(this).hasClass('opened')) {
			$(this).removeClass('opened');
			$(this).find('i').removeClass('fa-times');
			$(this).find('i').addClass('fa-gear');
			$('#color-switcher').animate({'right':'-60px'},CSduration);
		}
		else {
			$(this).addClass('opened');
			$(this).find('i').removeClass('fa-gear');
			$(this).find('i').addClass('fa-times');
			$('#color-switcher').animate({'right':'-10px'},CSduration);
		}
	}); 
	
	/* COLOR SWITCHER - LINKS */
	$('#color-switcher > ul > li#green').click(function() {
		$("body").removeClass();
		$("body").addClass("color-green");
	});
	
	$('#color-switcher > ul > li#red').click(function() {
		$("body").removeClass();
		$("body").addClass("color-red");
	});
	
	$('#color-switcher > ul > li#blue').click(function() {
		$("body").removeClass();
		$("body").addClass("color-blue");
	});
	
	$('#color-switcher > ul > li#orange').click(function() {
		$("body").removeClass();
		$("body").addClass("color-orange");
	});	
});



