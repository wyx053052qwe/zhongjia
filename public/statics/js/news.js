$(function() {

	if($(".szph-box")[0]) {
		$('.szph-box ul li').bind('mouseover', function() {
			var index = $(this).index();
			$(this).parent().parent().find('ul li').removeClass('active');
			$(this).addClass('active');
		});
	}

	


});
$(function() {
		$('.bar-box').each(function(i, o) {
			var title = $(o).find('.title a').text();
			$('.index-menu ul').append('<li><a href="javascript:;">' + title + '<i></i></a></li>');
		});
		$('.index-menu ul li').click(function() {
			$('html,body').animate({
				scrollTop: $('.bar-box').eq($(this).index()).offset().top
			}, 1000);
		});

		var length = $('.index-menu ul li').length;
		var s = false
		var w = $(window).height();
		var t = $('.bar-box').first().offset().top;
		var b = $('.bar-box').last().parent().offset().top + $('.bar-box').last().parent().height() - 20;
		$(window).scroll(function() {
			var position = $(window).scrollTop();
			if(position + w / 2 < t || position > b) {
				if(s) {
					$('.index-menu').fadeOut().find('li').removeClass('hover');
					s = false;
				}
			} else {
				if(!s) {
					$('.index-menu').fadeIn();
					s = true;
				}
				for(var i = 0; i < length; i++) {
					var top = $('.bar-box').eq(length - i - 1).offset().top;
					if(position + w / 2 >= top) {
						$('.index-menu ul li').removeClass('hover').eq(length - i - 1).addClass('hover');
						break;
					}
				}
			}
		});
	});