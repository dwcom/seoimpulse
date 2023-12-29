jQuery(document).ready(function ($) {
	
	// Добавляем функционал для кнопок скрыть и показать фильтр
	$('#filterShow').on('click',function(){
		$('#filterForm').slideDown(500)
		$('#filterShow').css('display', 'none')
	})
	
	$('#filterHide').on('click',function(){
		$('#filterForm').slideUp(500)
		$('#filterShow').css('display', 'grid')
	})
	
	// Скрытие и Раскрытие спойлеров с описанием
	$('.toggle').each(function(){
		let title = $(this).find('.toggleTitle')
		let content = $(this).find('.toggleContent')
		$(title).on('click',function(){
			$(content).slideToggle(500)
			$(this).toggleClass('active')
		})
	})
	
	$(window).each(function(){
		let width = $(this).width()
		if ( width <= 768 ) {
			$('#header').before('<div class="header__bar fs-24" id="headerBar"><img src="/app/img/menu.svg" /><span>Меню</span></div>')
			
			$('body').on('click', '#headerBar', function(){
				$('#headerMenu').toggleClass('active')
			})
			
			// Добавляем стрелочки для пунктов меню в Header, где есть подменю
			$('#headerMenu ul li').each(function(){
				let menu = $(this).find('.submenu')
				
				if ( $(menu).hasClass('submenu') ) {
					$(this).children('a').children('span').append('<div class="dropdown"><img src="/app/img/down.svg" alt="Раскрыть меню" /></div>')
				}
				
				$('.dropdown').off('click').on('click', function(){
					let menu = $(this).parent('span').parent('a').siblings('.submenu');
					$(menu).slideToggle();
					$(this).toggleClass('active')
				});
				
				
			})
			
		} else {
			// Добавляем стрелочки для пунктов меню в Header, где есть подменю
			$('#headerMenu > ul > li').each(function(){
				let menu = $(this).find('.submenu')
				
				if ( $(menu).hasClass('submenu') ) {
					$(this).children('a').children('span').append('<div class="dropdown"><img src="/app/img/down.svg" alt="Раскрыть меню" /></div>')
				}
				
			})
		}
	})
	
})