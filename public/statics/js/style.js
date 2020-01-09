$(function() {
	// 悬浮窗口
	$(".yb_conct").hover(function() {
		$(".yb_conct").css("right", "5px");
		$(".yb_bar .yb_ercode").css('height', '200px');
	}, function() {
		$(".yb_conct").css("right", "-127px");
		$(".yb_bar .yb_ercode").css('height', '53px');
	});
	// 返回顶部
	$(".yb_top").click(function() {
		$("html,body").animate({
			'scrollTop': '0px'
		}, 300)
	});
});
$(function() {
	$('#owl-demo').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["上一个", "下一个"],
		autoPlay: true,
		stopOnHover: true
	}).hover(function() {
		$('.owl-buttons').show();
	}, function() {
		$('.owl-buttons').hide();
	});
});
//导航滚动置顶
$(function() {
	var navHeight = $('#nav-header').height();
	$(document).scroll(function() {
		$(window).scrollTop() >= navHeight ? $('#nav-header').addClass('fixed') : $('#nav-header').removeClass('fixed');
	})
});
/*构造滚动对象方法*/
 var roll = new MessageRoll({
    container : document.getElementById("demo02"), // 滚动的容器
    height : 160 + 1 , // 滚动信息条的高度,算上底边框1px,如果没有底边框则不加1
    rollElements : "li" // 滚动元素的html标记名称
   });
   roll.start(200); //开始滚动,每三秒滚动一次
