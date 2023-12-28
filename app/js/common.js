jQuery(document).ready(function ($) {

	// Добавляем стрелочки для пунктов меню в Header, где есть подменю
	$('#headerMenu > ul > li').each(function(){
		let menu = $(this).find('ul')
		let item = $(this)
		
		if ( $(menu).hasClass('submenu') ) {
			$(item).find('span').append('<div class="dropdown"><img src="/app/img/down.svg" alt="Раскрыть меню" /></div>')
		}
		
	})
	
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
	
	
	
	
})