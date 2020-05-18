$(document).ready(function(){

	$("body").on("click", '.nav-item', function(e) {
		$('.nav-item').toggleClass("open");
		$('.rmm').toggleClass("open");
	});

});