$(document).ready(function() {
	

	$('nav a').click(function(e) {
		e.preventDefault();
		var view = $(this).data('attr');
		$(this).parent('li').addClass('active').siblings('li').removeClass('active');
		$('.' + view + '-container').addClass('active').siblings().removeClass('active');
	});

	$('a.menu-bars').click(function(e) {
		e.preventDefault();
		$('.sidebar').addClass('active');
	});

	$('a.close-menu').click(function(e) {
		e.preventDefault();
		$(this).parents('.sidebar').removeClass('active');
	});


});