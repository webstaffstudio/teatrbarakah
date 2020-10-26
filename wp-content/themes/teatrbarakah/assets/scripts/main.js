// import external dependencies
/* eslint-disable */
import "jquery"
import slick from "slick-carousel";
// Import everything from autoload
import "./autoload/**/*"

$(window).load(function () {
	if ($($('.btn-burger').length >= 1)) {
		let topOnReady = $('.btn-burger').position(),
			leftOnReady = $('.btn-burger').position();
		$('.menu-main-menu-container').css({top: leftOnReady.top, left: topOnReady.left});
	}
});
jQuery(document).ready(() => {
	$('.section-home-slider__block').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
	});


	$(window).resize(function () {
		if ($($('.btn-burger').length >= 1)) {
			let top = $('.btn-burger').position();
			let left = $('.btn-burger').position();
			$('.menu-main-menu-container').css({top: left.top, left: top.left});
		}
	});
	$('.mob-nav .menu-item-has-children').each(function () {
		$(this).append('<button class="button-arrow"></button>')
	});
	$('.btn-burger').on('click', function () {
		$('.menu-main-menu-container').toggleClass('show');
		$(this).toggleClass('open');
	})
	$('.current-menu-parent .dropdown').addClass('show');
	$('.current-menu-parent .button-arrow').addClass('clicked');
	$('.button-arrow').on('click', function () {
		if ($(this).prev('.dropdown').hasClass('show')) {
			$(this).prev('.dropdown').removeClass('show');
			$(this).removeClass('clicked');
		} else {
			$('.dropdown.show').each(function () {
				$(this).removeClass('show');
			});
			$('.clicked').each(function () {
				$(this).removeClass('clicked');
			});
			$(this).addClass('clicked');
			$(this).prev('.dropdown').addClass('show');
		}
	})
});
