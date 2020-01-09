// JavaScript Document
$(document).ready(function(){

	var box_width = $(".picbox").outerWidth();
	//console.log(box_width);
	$('.pic_next').click(function(){

		if($('.piclist').is(':animated')){
			$('.piclist').stop(true,true);
		}/* 避免点击事件重复 */

		ml = parseInt($('.piclist').css('left'));
		r = liw - (box_width - ml);  /* 700为外部区块.infopic的宽度，15为li之间的距离，即.piclist li的margin-right的值 */

		if(r<box_width){
			s = r - 15;
			$('.piclist').animate({left: ml - s + 'px'},'slow');
			if(s == 0){
				$('.piclist').animate({left: 0 });
			}

		}else{
			s = box_width;
			$('.piclist').animate({left: ml - s + 'px'},'slow');
		}

	})

	$('.pic_prev').click(function(){

		if($('.piclist').is(':animated')){
			$('.piclist').stop(true,true);
		}/* 避免点击事件重复 */

		ml = parseInt($('.piclist').css('left'));
		console.log(ml);
		if(ml>-box_width){
			s = ml;
			$('.piclist').animate({left: ml - s + 'px'},'slow');
		}else{
			s = -box_width;
			$('.piclist').animate({left: ml - s + 'px'},'slow');
		}

	})

})
//info pic
$(window).load(function(){
	liw = 0;
	$('.piclist li').each(function(){
		liw += $(this).width()+15;
		$(this).css('width',$(this).width()+'px');
	})
	$('.piclist').width( liw + 'px');
})