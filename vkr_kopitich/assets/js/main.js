$(document).ready(function() {
	var imgArr = [
		'bg_pattern_1.svg',
		'bg_pattern_2.svg',
		'bg_pattern_3.svg',
		'bg_pattern_4.svg',
		'bg_pattern_5.svg',
		'bg_pattern_6.svg',
	];
	var rand = Math.round(0 - 0.5 + Math.random() * (5 - 0 + 1))
	var img = imgArr[rand]
	console.log(rand);
	$('body').css('background', 'linear-gradient(rgba(86, 86, 86, 0.4), rgba(86, 86, 86, 0.4)), url(assets/img/'+img+')')
	$('body').css('background-size', '100%')
	$('body').css('background-position-x', '-1.5px')
	$('body').css('background-attachment', 'fixed')

	var colorArr = [
		{
			border: "#1b6787",
			background: "#237da2"
		},
		{
			border: "#08abb5",
			background: "#04d9e6"
		},
		{
			border: "#7dba27",
			background: "#97db37"
		},
		{
			border: "#b54ed7",
			background: "#dd7dfd"
		},
		{
			border: "#d2003f",
			background: "#ff3974"
		},
		{
			border: "#7d11a2",
			background: "#b640de"
		},
	]

	$('.nav_custom ul>li>a').each(function(index, el) {
		if (index === 0) return true;

		$(this).css({
			'border-bottom': '7px solid '+ colorArr[index - 1]['border'],
			'background-color': colorArr[index - 1]['background']
		});
	});

	$('.post').on('click', function(event) {
		var id = $(this).attr('data-target');
		location.replace('./?action=post&id=' + id);
	});

	$('.nav_custom .navbar-toggler').on('click', function(event) {
		event.preventDefault();
		if ($('.nav_custom ul').is(':visible')) {
			$('.nav_custom ul').hide();
		}else{
			$('.nav_custom ul').show();
		}
		
	});
});