// JavaScript Document
$(document).ready(function(){
	$('.galimg li a').click(function(event){
		event.preventDefault();
		var tmp = $(this).attr('href');
		var s = tmp.split("#");
		$('.mygallery .large img').fadeOut(500);
		$('.mygallery .large img#large'+s[1]).fadeIn(500);
	});
});