$(document).ready(function() {

initFunctions();

// UBAH ARGUMEN UNTUK DITAMPILKAN PADA WELCOME BAR
// COMMENT BARIS 8 - 15 JIKA TIDAK MAU MENAMPILKAN WELCOME BAR

setWelcomeBar(
	'', // Tipe Bar
	'Telah terbit kebijakan terbaru tentang <b>Kurikulum Merdeka</b>.', // Teks Bar
	'Lihat', // Tombol Bar
	'./pengembangan-kurikulum' // Link Tombol
);

showWelcomeBar();

// TRANSITION HOOKS
barba.use(barbaCss);
barba.init({
	transitions: [
		{
			name: 'fade',
			beforeLeave() {
				$("html, body").animate({scrollTop: 0}, 50);
				$('.menu-drop-down-wrapper').fadeOut('fast');
				menuClose();
				flyoutClose();
				stickElements();
			},
			leave() {
			},
			beforeEnter() {
				checkBoldNav();
				initFunctions();
                showWelcomeBar();
			},
			enter() {
			},
			afterEnter() {
			}
		}
	]
});


// CALL FUNCTIONS
function initFunctions() {
	reinitHandlers();
	updateTitle();
	flyoutExpcol();
	checkBoldNav();
	loadSideMenu();
	loadTabsMenu();
	scrollToTop();
	kurikulumDropDown();
	searchResultModal();
	stickyHeaderCheck();
	stickyHeader();
	hamburgerOpen();
	mobileMenuExpand();
	accordionMechanism();
	carouselMechanism();
	stickElements();
	openModalPopup();
	autoplayVideo();
    filter_data();
    cari_data();
    ajax_rujukan();
	PreviewModal();
    $('.selector').click(function(){ filter_data(); });
    $('.selector2').keyup(function(){ cari_data(); });
}

// REINITIALIZE HTML
function reinitHandlers() {
	$('.expcol').off();
	$('.button-cs').off();
	$('.column.side-menu-item').off();
	$('.column.tabs-menu-item').off();
	$('.acc-heading').off();
	$('.filac-heading').off();
	$('.header .logo .link').off();
	$('.header .hamburger').off();
	$('.header .menu-link').off();
	$('.menu-expand').off();
	$('.bar-close').off();
	$('#tb-search').off();
	$('.modal').off();
	$('.modal-close').off();
	$('.modal-content').off();
	$('a[href*="#mp"]').off();
}

// UPDATE JUDUL DI TITLE BAR
function updateTitle() {
	let pageTitle = $('main').attr('data-page-title');
	if (pageTitle != '') {
		$(document).attr('title', pageTitle + ' | Sistem Informasi Kurikulum Nasional');
	} else {
		$(document).attr('title', 'Sistem Informasi Kurikulum Nasional');
	}
}

// FLYOUT EXPAND-COLLAPSE CLICK
function kurikulumDropDown() {
	if (window.matchMedia('(max-width: 544px)').matches != true) {
		$('.kurikulum.menu-link').hover(
			function() {
				$(this).find('.menu-drop-down-wrapper').fadeIn('fast');
			}, function() {
				$(this).find('.menu-drop-down-wrapper').fadeOut('fast');
			}
		);
	}
}

// INITIALIZE WELCOME BAR
function setWelcomeBar() {
 var barType = document.getElementById("breaking").getAttribute("data-bartype");
 var barText = document.getElementById("breaking").getAttribute("data-bartext");
 var barBtn = document.getElementById("breaking").getAttribute("data-barbtn");
 var barLnk = document.getElementById("breaking").getAttribute("data-barlnk");

	var barTypeCheck;
	switch (barType) {
		case 'default':
			barTypeCheck = '';
			break;
		case 'success':
			barTypeCheck = ' bar-success';
			break;
		case 'error':
			barTypeCheck = ' bar-error';
			break;
		case 'warning':
			barTypeCheck = ' bar-warning';
			break;
		case 'info':
			barTypeCheck = ' bar-info';
			break;
  		default:
			barTypeCheck = '';
	};
	if (barText == '' || barText == undefined) {barText = 'Selamat datang di Sistem Informasi Kurikulum Nasional.'};
	if (barBtn == '' || barBtn == undefined) {barBtn = 'OK'};
	if (barLnk == '' || barLnk == undefined) {barLnk = '#'};
	$('body').prepend('<div class="welcome-bar align items-center content-center' + barTypeCheck + '"><div class="row align items-center content-spbw gap-24"><div class="row align items-center content-flst gap-8"><div class="align left bar-txt">' + barText + '</div><div class="align left bar-btn"><a href="' + barLnk + '">' + barBtn + '</a></div></div><div class="bar-close">close</div></div></div>');
}

// SHOW WELCOME BAR
function showWelcomeBar() {
	if ($('main').attr('data-barba-namespace') == 'home') {
		$('.welcome-bar').animate({height: 60},{duration: 250,specialEasing: {height: "swing"}});
		$("html, body").animate({scrollTop: 0}, 50);
		closeBtnWelcomeBar();
		$('.welcome-bar').addClass('shown');
		$('.header.menu').addClass('shown');
	} else {
		hideWelcomeBar();
	}
}

// HIDE WELCOME BAR
function hideWelcomeBar() {
	$('.welcome-bar').animate({height: 0},{duration: 250,specialEasing: {height: "swing"}});
	$('.welcome-bar').removeClass('shown');
	$('.header.menu').removeClass('shown');
}

// WELCOME BAR CLOSE BUTTON
function closeBtnWelcomeBar() {
	$('.bar-close').on('click',function() {
		hideWelcomeBar();
	});
}

// CAROUSEL MECHANISM
function carouselMechanism() {
	var swiper = new Swiper('.swiper-container', {
		spaceBetween: 30,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	    navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev'
		},
		loop: true,
		lazy: true,
		checkInView: true,
		autoplay: {
			delay: 5000,
		},
		breakpoints: {
			544: {
				slidesPerView: 1
			},
			640: {
				slidesPerView: 3
			}
		}
	});
}

// FLYOUT EXPAND-COLLAPSE CLICK
function flyoutExpcol() {
	$('.expcol').on('click',function() {
		flyoutToggle();
		menuClose();
	});
	$('.button-cs').on('click',function() {
		flyoutClose();
		menuClose();
	});
}

// FLYOUT TOGGLE
function flyoutToggle() {
	if (window.matchMedia('(max-width: 544px)').matches == true) {
		disableScroll();
	}
	$('.flyout-cs').toggleClass('expanded');
	$('.flyout-cs .balloon').toggleClass('expanded');
	$('.flyout-cs .expcol').toggleClass('expanded');
	if ($('html').find('.welcome-bar').length !== 0) {
		$('.welcome-bar').toggleClass('expanded');
	}
}

// FLYOUT COLLAPSE
function flyoutClose() {
	if (window.matchMedia('(max-width: 544px)').matches == true) {
		enableScroll();
	}
	$('.flyout-cs').removeClass('expanded');
	$('.flyout-cs .balloon').removeClass('expanded');
	$('.flyout-cs .expcol').removeClass('expanded');
	if ($('html').find('.welcome-bar').length !== 0) {
		$('.welcome-bar').removeClass('expanded');
	}
}

// MAKE CURRENT NAV ITEM BOLD
function checkBoldNav() {
	$('.menu-link').each(function() {
		$(this).removeClass('active');
	});
		let checkPage = $('main').attr('class').split(/\s+/);
		checkPageClass = checkPage[0];
		$('.menu-link').each(function() {
			let checkNav = $(this).attr('class').split(/\s+/);
			checkNavClass = checkNav[0];
			if (checkPageClass == checkNavClass) {
				$(this).find('a').addClass('active');
		};
	});
}

// LOAD SIDE MENU CONTENT
function loadSideMenu() {
	$('.side-menu-content').each(function() {
		$(this).find('.side-menu-content-wrapper').hide();
		$(this).find('.active').show();
	});
	$('.side-menu-item').on('click',function(){
		let selectedItem = $(this).attr('id');
		let selectedItemGroup = selectedItem.split('-');
		$('.side-menu-content'+'.'+selectedItemGroup[0]).find('.side-menu-content-wrapper').each(function() {
			$(this).hide();
		});
		$('#'+ selectedItem + '-c').fadeIn('fast');
		$(this).parents().find('.side-menu'+'.'+selectedItemGroup[0]+' .side-menu-item').removeClass('active');
		$(this).addClass('active');
		$('.side-menu').sticky('update');
		return false;
	});
}

// LOAD TABS MENU CONTENT
function loadTabsMenu() {
	$('.tabs-menu-content').each(function() {
		$(this).find('.tabs-menu-content-wrapper').hide();
		$(this).find('.active').show();
	});
	$('.tabs-menu-item').on('click',function(){
		let selectedItem = $(this).attr('id');
		let selectedItemGroup = selectedItem.split('-');
		$('.tabs-menu-content'+'.'+selectedItemGroup[0]).find('.tabs-menu-content-wrapper').each(function() {
			$(this).hide();
		});
		$('#'+ selectedItem + '-c').fadeIn('fast');
		$(this).parents().find('.tabs-menu'+'.'+selectedItemGroup[0]+' .tabs-menu-item').removeClass('active');
		$(this).addClass('active');
		return false;
	});
}

// SCROLL TO TOP BUTTON
function scrollToTop() {
	$(document).on('scroll', function() {
		var scrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var rasioGulungan = 0.15;
		if ($(window).scrollTop() / scrollableHeight > rasioGulungan) {
		    $('.scrl-top').removeClass('top-hid');
		} else {
			$('.scrl-top').addClass('top-hid');
		}
	});
	$('.scrl-top').click(function() {
		window.scrollTo({
	    	top: 0,
	    	behavior: "smooth"
	  	});
	});
}

// const sections = $('section[id]');
// const navLi = $('.main-hdr-menu ul li');

// window.addEventListener('scroll', ()=> {
//   let current = '';
//   sections.forEach((section) => {
//     const sectionTop = section.offsetTop;
//     const sectionHeight = section.clientHeight;
//     if(pageYOffset > (sectionTop - sectionHeight / 3)){
//       current = section.getAttribute('id');
//     }
//   })
//   navLi.forEach((li) => {
//     li.classList.remove('menu-active');
//     if(li.classList.contains(current)){
//       li.classList.add('menu-active');
//     }
//   });
// });

// STICKY HEADER CHECK
function stickyHeaderCheck() {
	let sticky = $('.header.wrapper'), scroll = $(window).scrollTop();
	if (scroll > 0) sticky.addClass('sticky');
	else sticky.removeClass('sticky');
}

// STICKY HEADER
function stickyHeader() {
	$(window).scroll(function(){
		let sticky = $('.header.wrapper'), scroll = $(window).scrollTop();
		if (scroll > 0) sticky.addClass('sticky');
		else sticky.removeClass('sticky');
	});
}

// FLYOUT HASIL PENCARIAN
function searchResultModal() {
	$('#myText').on('input', function() {
		event.preventDefault();
		$('.modal-result').fadeIn('fast');
	});
}
// OPEN HAMBURGER MENU ON CLICK
function hamburgerOpen() {
	$('.header .hamburger').on('click',function() {
		menuToggle();
		flyoutClose();
	});
	$('.header .menu-link').on('click',function() {
		menuClose();
		flyoutClose();
	});
	$('.header .logo.link').on('click',function() {
		menuClose();
		flyoutClose();
	});
	$('main.wrapper').on('click',function() {
		menuClose();
		flyoutClose();
	});
}

// TOGGLE MOBILE MENU
function menuToggle() {
	$('.header.menu').toggleClass('opened');
	$('.header.menu .menu-item').toggleClass('opened');
	$('.header.menu .menu-link').toggleClass('opened');
	$('.header.logo .hamburger').toggleClass('opened');
	if ($('.header.logo .hamburger').hasClass('opened')) {
		disableScroll();
	} else {
		enableScroll();
	}
}

// MOBILE MENU EXPAND
function mobileMenuExpand() {
	if (window.matchMedia('(max-width: 544px)').matches == true) {
		$('.menu-drop-down-wrapper').slideDown('fast');
		$('.menu-expand').click(function() {
			$('.menu-drop-down-wrapper').slideToggle('fast');
			$('.menu-drop-down-wrapper').toggleClass('expanded');
			$('.menu-drop-arrow').toggleClass('expanded');
			return false;
		});
	}
}

// CLOSE MOBILE MENU
function menuClose() {
	$('.header.menu').removeClass('opened');
	$('.header.menu .menu-item').removeClass('opened');
	$('.header.menu .menu-link').removeClass('opened');
	$('.header.logo .hamburger').removeClass('opened');
	enableScroll();
}

// STICK ELEMENTS
function stickElements() {
	if ($('html').find('.welcome-bar').length !== 0) {
		welcomeBarHeight = $('.welcome-bar').height();
	} else {
		welcomeBarHeight = 0;
	}
	if ($('html').find('.side-menu').length !== 0) {
		if ($('html').find('#lebihlanjut').length !== 0) {
			$('.side-menu').sticky({
				topSpacing: ($('header').offset().top + 96 + 24 - welcomeBarHeight),
				bottomSpacing: ($('html').height() - $('#lebihlanjut').offset().top + 24),
				zIndex: 999
			});
		} else {
			$('.side-menu').sticky({
				topSpacing: ($('header').offset().top + 96 + 24 - welcomeBarHeight),
				bottomSpacing: ($('html').height() - $('footer.footer').offset().top + 24),
				zIndex: 999
			});
		}
	}
	if ($('html').find('.dropdown-banding').length !== 0) {
		$('.dropdown-banding').sticky({
			topSpacing: ($('header').offset().top + 96 + 24 - welcomeBarHeight),
			bottomSpacing: ($('html').height() - $('#lebihlanjut').offset().top + 24 + 24),
			wrapperClassName: 'banding-pin',
			zIndex: 987
		});
	}
}

// OPEN MODAL POPUP
function openModalPopup() {
	if ($('.modal-content').find('#videoyoutube').length !== 0) {
		origLink = $('.modal-content').find('#videoyoutube').attr('src');
		$('.modal-content').find('#videoyoutube').wrap('<div class="youtube-container"></div>')
	}
	$('.modal-content .button').each(function() {
		if ($(this).attr('href') !== '#') {
			$(this).click(function() {
				window.open($(this).attr('href'));
			});
		}
	});
	$('a[href*="#mp"]').each(function() {
		$(this).click(function() {
			modalName = $(this).attr('href');
			modalName = modalName.substring(0, modalName.length - 2);
			modalName = modalName.substring(4, modalName.length);
			$('#mp-' + modalName).fadeIn('fast');
			$('#mp-' + modalName).removeClass('modal-closed');
			$('#mp-' + modalName).addClass('modal-opened');
			if ($('#mp-' + modalName).find('video').length !== 0) {
				$('#mp-' + modalName).parents().find('.modal-content').addClass('video-content');
				$('#mp-' + modalName).find('video').get(0).currentTime = 0;
				$('#mp-' + modalName).find('video').get(0).play();
				$('html').find('.video-preview').get(0).pause();
			}
			if ($('#mp-' + modalName).find('#videoyoutube').length !== 0) {
				$('#mp-' + modalName).parents().find('.modal-content').addClass('video-content');
				$('#mp-' + modalName).find('#videoyoutube').attr('src', origLink + '&autoplay=1');
				$('html').find('.video-preview').get(0).pause();
			}
			$('body').css('overflow-y', 'hidden');
			disableScroll();
			return false;
		});
		modalName = $(this).attr('href');
		modalName = modalName.substring(0, modalName.length - 2);
		modalName = modalName.substring(4, modalName.length);
		$('.cl-' + modalName).click(function() {
			$('#mp-' + modalName).fadeOut('fast', function() {
				if ($('#mp-' + modalName).find('video').length !== 0) {
					$('#mp-' + modalName).find('video').get(0).pause();
					$('#mp-' + modalName).find('video').get(0).currentTime = 0;
					$('html').find('.video-preview').get(0).play();
				}
				if ($('#mp-' + modalName).find('#videoyoutube').length !== 0) {
				    $('#mp-' + modalName).find('#videoyoutube').attr('src','');
					$('html').find('.video-preview').get(0).play();
				}
				$('#mp-' + modalName).removeClass('modal-opened');
				$('#mp-' + modalName).addClass('modal-closed');
				$('#mp-' + modalName).parents().find('.modal-content').removeClass('video-content');
			});
			$('body').css('overflow-y', 'auto');
			enableScroll();
			return false;
		});
		$('.modal-close-dis').click(function() {
			$('#mp-' + modalName).fadeOut('fast', function() {
				if ($('#mp-' + modalName).find('video').length !== 0) {
					$('#mp-' + modalName).find('video').get(0).pause();
					$('#mp-' + modalName).find('video').get(0).currentTime = 0;
					$('html').find('.video-preview').get(0).play();
				}
				if ($('#mp-' + modalName).find('#videoyoutube').length !== 0) {
				    $('#mp-' + modalName).find('#videoyoutube').attr('src','');
					$('html').find('.video-preview').get(0).play();
				}
				$('#mp-' + modalName).removeClass('modal-opened');
				$('#mp-' + modalName).addClass('modal-closed');
				$('#mp-' + modalName).parents().find('.modal-content').removeClass('video-content');
			});
			$('body').css('overflow-y', 'auto');
			enableScroll();
			return false;
		});
		$('#mp-' + modalName + '.overlay-close').click(function() {
			$('#mp-' + modalName).fadeOut('fast', function() {
				if ($('#mp-' + modalName).find('video').length !== 0) {
					$('#mp-' + modalName).find('video').get(0).pause();
					$('#mp-' + modalName).find('video').get(0).currentTime = 0;
					$('html').find('.video-preview').get(0).play();
				}
				if ($('#mp-' + modalName).find('#videoyoutube').length !== 0) {
				    $('#mp-' + modalName).find('#videoyoutube').attr('src','');
					$('html').find('.video-preview').get(0).play();
				}
				$('#mp-' + modalName).removeClass('modal-opened');
				$('#mp-' + modalName).addClass('modal-closed');
				$('#mp-' + modalName).parents().find('.modal-content').removeClass('video-content');
			});
			$('body').css('overflow-y', 'auto');
			enableScroll();
			return false;
		});
		$('.modal-content').click(function() {
			return false;
		});
	});
}

// AUTOPLAY VIDEO
function autoplayVideo() {
	if ($('html').find('.video-preview').length !== 0) {
		$('html').find('.video-preview').get(0).play();
	}
}

// scrlTop.addEventListener("click", doScrlTop);

// function doScrlTop() {
//   window.scrollTo({
//     top: 0,
//     behavior: "smooth"
//   });
// }

// ACCORDION MECHANISM
function accordionMechanism() {
	$('.acc-heading').click(function(){
	    $('.acc-heading').not(this).removeClass('active');
		$(this).toggleClass('active');
		$('.acc-heading .acc-content').not($(this).find('.acc-content')).slideUp();
		$(this).find('.acc-content').slideToggle();
	});
	$('.acc-heading').first().click();
}

// FILE ACCORDION MECHANISM
function fileAccordionMechanism() {
	$('.viewoption.itemicon .ic-grid').click(function() {
		$(this).toggleClass('active');
		$('.viewoption.itemicon .ic-list').toggleClass('active');
		$('.file-gridview').addClass('active');
		$('.file-listview').removeClass('active');
	});
	$('.viewoption.itemicon .ic-list').click(function() {
		$(this).toggleClass('active');
		$('.viewoption.itemicon .ic-grid').toggleClass('active');
		$('.file-listview').addClass('active');
		$('.file-gridview').removeClass('active');
	});
	$('.file-listview .filac-wrapper').click(function() {
		$(this).find('.filac-heading').toggleClass('active');
		$(this).find('.filac-content').slideToggle();
	});
	$('.file-listview .op-icon.ic-info').click(function() {
		$(this).find('.filac-heading').toggleClass('active');
		$(this).find('.filac-content').slideToggle();
	});
	$('.file-listview .filac-content').click(function() {return false;});
	$('.file-listview .op-icon.ic-download').click(function() {return false;});
	$('.file-listview .op-icon.ic-view').click(function() {return false;});

	$('.image-holder img').each(function() {
		if ($(this).attr('src') == undefined || $(this).attr('src') == '') {
			$(this).attr('src','./images/placeholder-not-available.svg');
		}
	});
	if (window.matchMedia('(max-width: 544px)').matches != true) {
		$('.file-listview .filac-wrapper').first().click();
	}
}

// CANCEL DEFAULT ACTION
function preventDefault(e) {
	e.preventDefault();
}

// SCROLL DISABLE
var keys = {37: 1, 38: 1, 39: 1, 40: 1}; // left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
function preventDefaultForScrollKeys(e) {
	if (keys[e.keyCode]) {
		preventDefault(e);
		return false;
	}
}
var supportsPassive = false;
try {
	window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
		get: function () { supportsPassive = true; } 
}));
} catch(e) {}
var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// CALL TO DISABLE SCROLL
function disableScroll() {
	window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
	window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
	window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
	window.addEventListener('keydown', preventDefaultForScrollKeys, false);

	if ($('html').find('.modal-content').length !== 0) {
		$('html').find('.modal-content').on('DOMMouseScroll', preventDefault, false); // older FF
		$('html').find('.modal-content').on('scroll', preventDefault, wheelOpt); // modern desktop
		$('html').find('.modal-content').on('touchmove', preventDefault, wheelOpt); // mobile
		$('html').find('.modal-content').on('keydown', preventDefaultForScrollKeys, false);
	}
}

// CALL TO ENABLE SCROLL
function enableScroll() {
	window.removeEventListener('DOMMouseScroll', preventDefault, false);
	window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
	window.removeEventListener('touchmove', preventDefault, wheelOpt);
	window.removeEventListener('keydown', preventDefaultForScrollKeys, false);

	if ($('html').find('.modal-content').length !== 0) {
		$('html').find('.modal-content').on('DOMMouseScroll', preventDefault, false); // older FF
		$('html').find('.modal-content').on('scroll', preventDefault, wheelOpt); // modern desktop
		$('html').find('.modal-content').on('touchmove', preventDefault, wheelOpt); // mobile
		$('html').find('.modal-content').on('keydown', preventDefaultForScrollKeys, false);
	}
}


//// ADDITIONAL ////


// PERBANDINGAN KURIKULUM
    function filter_data() {
      if(document.getElementById("filter_data") !== null && document.getElementById("filter_data") !== 'undefined' ) {
        $('.filter_data').html('<div id="loading"></div>');
        var action = 'fetch_data';
        var jenjang = '51';
                    var x = document.getElementsByName("bd-perbandingan-left");
                	var i = x[0].selectedIndex;
                	var kurikulum = x[0].options[i].value;

                    var x = document.getElementsByName("bd-perbandingan-right");
                	var i = x[0].selectedIndex;
                	var kurikulum2 = x[0].options[i].value;
        
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, kurikulum:kurikulum, kurikulum2:kurikulum2, jenjang:jenjang},
            success:function(data){
                $('.filter_data').html(data);
            }
        });

    	$('.dataperbandingan').on(
    	    {
    	        click:function(){
                    $('.filter_data').html('<div id="loading"></div>');
                    var action = 'fetch_data';
            	    var jenjang = $(this).attr('data-bandingan');
                    var x = document.getElementsByName("bd-perbandingan-left");
                	var i = x[0].selectedIndex;
                	var kurikulum = x[0].options[i].value;

                    var x = document.getElementsByName("bd-perbandingan-right");
                	var i = x[0].selectedIndex;
                	var kurikulum2 = x[0].options[i].value;

                    $.ajax({
                        url:"fetch_data.php",
                        method:"POST",
                        data:{action:action, kurikulum:kurikulum, kurikulum2:kurikulum2, jenjang:jenjang},
                        success:function(data){
                            $('.filter_data').html(data);
                            document.getElementById("tb-perbandingan-left").setAttribute("data-jenjang", jenjangsaatini);
                        }
                    });
    	        }
    	    }
    	);
    	$('#tb-perbandingan-left').on(
    	    {
    	        change:function(){
                    $('.filter_data').html('<div id="loading"></div>');
                    var action = 'fetch_data';
            	    var jenjang = document.getElementById("tb-perbandingan-left").getAttribute("data-jenjang");

                    var x = document.getElementsByName("bd-perbandingan-left");
                	var i = x[0].selectedIndex;
                	var kurikulum = x[0].options[i].value;

                    var x = document.getElementsByName("bd-perbandingan-right");
                	var i = x[0].selectedIndex;
                	var kurikulum2 = x[0].options[i].value;


                    $.ajax({
                        url:"fetch_data.php",
                        method:"POST",
                        data:{action:action, kurikulum:kurikulum, kurikulum2:kurikulum2, jenjang:jenjang},
                        success:function(data){
                            $('.filter_data').html(data);
                        }
                    });
    	        }
    	    }
    	);
    	$('#tb-perbandingan-right').on(
    	    {
    	        change:function(){
                    $('.filter_data').html('<div id="loading"></div>');
                    var action = 'fetch_data';
            	    var jenjang = document.getElementById("tb-perbandingan-left").getAttribute("data-jenjang");

                    var x = document.getElementsByName("bd-perbandingan-left");
                	var i = x[0].selectedIndex;
                	var kurikulum = x[0].options[i].value;

                    var x = document.getElementsByName("bd-perbandingan-right");
                	var i = x[0].selectedIndex;
                	var kurikulum2 = x[0].options[i].value;


                    $.ajax({
                        url:"fetch_data.php",
                        method:"POST",
                        data:{action:action, kurikulum:kurikulum, kurikulum2:kurikulum2, jenjang:jenjang},
                        success:function(data){
                            $('.filter_data').html(data);
                        }
                    });
    	        }
    	    }
    	);
      }

    }

    function get_filter(class_name) {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.selector').click(function(){
        filter_data();
    });


// LIVE SEARCH
    function cari_data() {
      if(document.getElementById("cari_data") !== null && document.getElementById("cari_data") !== 'undefined' ) {
        var action = 'cari_data';
        if(document.getElementById("myText") !== null && document.getElementById("myText") !== 'undefined' ) {
            if(document.getElementById("myText").value.length > 2) {
                var cari = document.getElementById("myText").value;
            }
            else {
                var cari = '';
            }
        } else {
            var cari = '';
        }

        if(document.getElementById("bagian") !== null && document.getElementById("bagian") !== 'undefined' ) {
            var bagian = document.getElementById("bagian").value;
        } else {
            var bagian = '';
        }

        if(document.getElementById("halaman") !== null && document.getElementById("halaman") !== 'undefined' ) {
            var halaman = document.getElementById("halaman").value;
        } else {
            var halaman = '';
        }
        
        $('.cari_data').html('<div id="loading"></div>');
        
        $.ajax({
            url:"cari_data.php",
            method:"POST",
            data:{action:action, cari:cari, bagian:bagian, halaman:halaman},
            success:function(data){
                $('.cari_data').html(data);
                openModalPopup();
            	accordionMechanism2();
                fileAccordionMechanism2();
            },
            error:function(data){
            }
        });
      }  
    }

    $('.selector2').keyup(function(){
        cari_data();
    });

// RUJUKAN
    function ajax_rujukan() {
        if(document.getElementById("ajax_rujukan") !== null && document.getElementById("ajax_rujukan") !== 'undefined' ) {
            $('.ajax_rujukan').html('<div id="loading"></div>');
            var action = 'ajax_rujukan';
            var kat = document.getElementById("tb-sort").getAttribute("data-rujukan");
    	    var susun = 'tanggal_rilis DESC';

            $.ajax({
                url:"ajax_rujukan.php",
                method:"POST",
                data:{action:action, kat:kat, susun:susun},
                success:function(data){
                    $('.ajax_rujukan').html(data);
                	fileAccordionMechanism();
                    openModalPopup();
                },
                error:function(data){
                }
            });

        	$('.datarujukan').on(
        	    {
    	        click:function(){
                    $('.ajax_rujukan').html('<div id="loading"></div>');
                    var action = 'ajax_rujukan';
            	    var kat = $(this).attr('data-rujukan');
            	    var susun = 'tanggal_rilis DESC';
                    $.ajax({
                        url:"ajax_rujukan.php",
                        method:"POST",
                        data:{action:action, kat:kat, susun:susun},
                        success:function(data){
                            $('.ajax_rujukan').html(data);
                            document.getElementById("tb-sort").setAttribute("data-rujukan", katsaatini);
                            $('#tb-sort').prop('selectedIndex',0);
                        	fileAccordionMechanism();
                            openModalPopup();
                        },
                        error:function(data){
                        }
                    });
    	        }
        	    }
        	);

        	$('.datarujukan2').on(
        	    {
        	        change:function(){
                        $('.ajax_rujukan').html('<div id="loading"></div>');
                        var action = 'ajax_rujukan';
                        var kat = document.getElementById("tb-sort").getAttribute("data-rujukan");
                    	var x = document.getElementsByName("rj-sort");
                    	var i = x[0].selectedIndex;
                    	var susun = x[0].options[i].value;
    
                        $.ajax({
                            url:"ajax_rujukan.php",
                            method:"POST",
                            data:{action:action, kat:kat, susun:susun},
                            success:function(data){
                                $('.ajax_rujukan').html(data);
                            	fileAccordionMechanism();
                                openModalPopup();
                            },
                            error:function(data){
                            }
            
                        });
        	        }
        	    }
        	);
        }
    }

//// MODAL PREVIEW
    function PreviewModal() {
    	$('#prevpdf').on('click', function() {
    		event.preventDefault();
    		$('.modal-preview').fadeIn('fast');
    	});
    }

// FILE ACCORDION MECHANISM 2
function fileAccordionMechanism2() {
	$('.viewoption2.itemicon2 .ic-grid2').click(function() {
		$(this).toggleClass('active');
		$('.viewoption2.itemicon2 .ic-list2').toggleClass('active');
		$('.file-gridview2').addClass('active');
		$('.file-listview2').removeClass('active');
	});
	$('.viewoption2.itemicon2 .ic-list2').click(function() {
		$(this).toggleClass('active');
		$('.viewoption2.itemicon2 .ic-grid2').toggleClass('active');
		$('.file-listview2').addClass('active');
		$('.file-gridview2').removeClass('active');
	});
	$('.file-listview2 .filac-wrapper2').click(function() {
		$(this).find('.filac-heading2').toggleClass('active');
		$(this).find('.filac-content2').slideToggle();
	});
	$('.file-listview2 .op-icon2.ic-info2').click(function() {
		$(this).find('.filac-heading2').toggleClass('active');
		$(this).find('.filac-content2').slideToggle();
	});
	$('.file-listview2 .filac-content2').click(function() {return false;});
	$('.file-listview2 .op-icon2.ic-download2').click(function() {return false;});
	$('.file-listview2 .op-icon2.ic-view2').click(function() {return false;});

	$('.image-holder2 img2').each(function() {
		if ($(this).attr('src') == undefined || $(this).attr('src') == '') {
			$(this).attr('src','./images/placeholder-not-available.svg');
		}
	});
	if (window.matchMedia('(max-width: 544px)').matches != true) {
		$('.file-listview2 .filac-wrapper2').first().click();
	}
}

// ACORDION 2
function accordionMechanism2() {
	$('.acc-heading2').click(function(){
	    $('.acc-heading2').not(this).removeClass('active');
		$(this).toggleClass('active');
		$('.acc-heading2 .acc-content2').not($(this).find('.acc-content2')).slideUp();
		$(this).find('.acc-content2').slideToggle();
	});
	$('.acc-heading2').first().click();
}


});