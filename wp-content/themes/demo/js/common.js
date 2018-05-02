function deviceIs(o){
	"use strict";
	
	var dv = o;
	var ua = navigator.userAgent.toLowerCase();
	var rt = false;
	var re;

	for (var i = 0; i < dv.length; ++i) {
		re = new RegExp(dv[i]);
		rt = re.test(ua);

		if (rt) {
			break;
		}
	}

	return rt;
}

$(function(){
	'use strict';
	
	var $window = $(window);
	var $body = $('body');
	var $header = $('#header');
	var $btMenu = $('#btMenu');
	var $btPageTop = $('#btPageTop');
	var mobile = false;
	
	/* ---------- common ---------- */
	
	// device type
	if (deviceIs(['iphone', 'ipod', 'ipad', 'android'])) { // mobile device
		mobile = true;
	}
	
	// header size and pagetop btn
	var headerSmall01, headerSmall02 = false;
	
	var headerSize = function(){
		if (headerSmall01 || headerSmall02 || mobile) {
			$header.addClass('small');
		} else {
			$header.removeClass('small');
		}
	};
	
	$window.on('scroll', function(){
		if ($window.scrollTop() >= 80) {
			headerSmall01 = true;
			$btPageTop.removeClass('off');
		} else {
			headerSmall01 = false;
			$btPageTop.addClass('off');
		}
		headerSize();
	}).on('resize', function(){
		if ($window.innerWidth() <= 1200) {
			headerSmall02 = true;
		} else {
			headerSmall02 = false;
		}
		headerSize();
	}).trigger('scroll').trigger('resize');
	
	// pc search
	$('#header .search a').on('click', function(ev){
		ev.preventDefault();
		$('#searchBox').toggleClass('active');
	});
	
	
	// sp menu
	$btMenu.on('click', function(ev){
		ev.preventDefault();
		$(this).toggleClass('active');
		$('#gNav').toggleClass('active');
	});
	
	$('#sNav dt').on('click', function(ev){
		if ($btMenu.is(':visible')) {
			ev.preventDefault();
			$(this).toggleClass('active');
		}
	});
	
	// slider
	
	$('.banner.slider .image').bxSlider({
		slideMargin: 36,
		prevText: '',
		nextText: '',
		pager: false,
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 376
	});
	
	// smooth scroll
	$('a[href^=#]').smoothScroll();

	/* ---------- top ---------- */
	
	var visited = $.cookie("visited");
	if (visited === 'true') {
		$body.addClass('visited');
	}
	$.cookie("visited", "true", { expires: 30 });
	
	
	$('#top #mainImage .slider').bxSlider({
		auto: true,
		pager: false,
		controls: false,
		onSlideBefore: function(el,oi,ni){
			$('#top #mainImage .catch02 li').removeClass('active old').eq(ni).addClass('active').end().eq(oi).addClass('old');
		}
	});
	
	var $ftrBanner = $('#top #ftrBanner .list');
	var ftrBannerCounter = 0;
	
	$('#top #ftrBanner .prev').on('click', function(ev){
		ev.preventDefault();
		ftrBannerCounter = Math.max(--ftrBannerCounter, 0);
		$ftrBanner.css('transform', 'translateX(' + (ftrBannerCounter * -50) + '%)');
	});
	
	$('#top #ftrBanner .next').on('click', function(ev){
		ev.preventDefault();
		ftrBannerCounter = Math.min(++ftrBannerCounter, 1);
		$ftrBanner.css('transform', 'translateX(' + (ftrBannerCounter * -50) + '%)');
	});
	
	/* ---------- contact ---------- */
	
	// set preferredDate option
	var $select = $('#contact select.preferredDate');
	
	if ($select.length > 0) {
		var dt = new Date();
		dt.setDate(dt.getDate() + 4);
		
		for (var i = 0; i < 60; ++i) {
			dt.setDate(dt.getDate() + 1);
			var date = dt.getFullYear() + '/' + (dt.getMonth() + 1) + '/' + dt.getDate();
			var html = '<option value="' + date + '">' + date + '</option>';
			$(html).appendTo($select);
		}
	}
	
	// check input error
	$('#contact .checkError').on('change', function(){
		var $this = $(this);
		var val = $this.val();
		$this.removeClass('error');
		
		if (val !== "") {
			if ($this.hasClass('checkKatakana')) {
				if(!val.match(/^[ァ-ヶー　]*$/)){
					$this.addClass('error');
				}
			} else if ($this.hasClass('checkNumber')) {
				if(!val.match(/^\d*$/)){
					$this.addClass('error');
				}
			} else if ($this.hasClass('checkEmail')) {
				if(!val.match(/.+@.+\..+/) || !val.match(/^[a-zA-Z0-9!-/:-@¥[-`{-~]+$/)){
					$this.addClass('error');
				}
			}
		}
		
		var val01 = $('.email01 input').val();
		var val02 = $('.email02 input').val();
		
		if (val02 !== "" && val01 !== val02) {
			$('.email02 input').addClass('error2');
		} else {
			$('.email02 input').removeClass('error2');
		}
		
		if ($('.checkError.error, .checkError.error2').length > 0) {
			$('.submit input').addClass('off');
		} else {
			$('.submit input').removeClass('off');
		}
	});
	
	$('#contact .submit input').on('click', function(ev){
		if ($(this).hasClass('off')) {
			ev.preventDefault();
		}
	});
});