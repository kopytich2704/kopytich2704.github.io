/* a Pen by DIACO : twitter.com/Diaco_ml || codepen.io/MAW
powered by GSAP : https://www.greensock.com/
*/
jQuery(document).ready(function($) {
	var slider = $('.slider');
	var slides = slider.find('div:not(:first-child)');
	var firstSlide = slider.find('div:first-child'); 
	var tl = new TimelineMax({repeat:-1}).staggerFrom(slides,3,{xPercent:-100},14,4).fromTo(firstSlide,2,{xPercent:-100},{xPercent:0,zIndex:20,immediateRender:false},'+=2');
});


// a Pen by DIACO : twitter.com/Diaco_ml || codepen.io/MAW 