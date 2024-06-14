function selectReplace(element){
	$(element).each(function(){
	   $(this).wrap('<span class="select" id="select-'+$(this).attr('id')+'"></span>');
	});
	$('span.select').each(function(){
	   $(this).prepend('<span class="select-replace"><span class="select-replace-label">'+$(this).children('select').children(':selected').text()+'</span><span class="toggle"></span></span>');
	   var the_options = '<span class="drop-replace">';
	   $(this).children('select').children('option').each(function(){
		   if($(this).val() != '') the_options += '<span class="option-replace" rel="'+$(this).val()+'">'+$(this).text()+'</span>';
	   });
	   the_options += '</span>';
	   $(this).append(the_options);
	});
	$('.drop-replace').hide();
	$('.drop-replace').each(function(){
		if($(this).children('span.option-replace').length < 7) $(this).css('overflow-y', 'hidden');
	});
	$('span.select').each(function(){
		$(this).click(function(e){
			e.stopPropagation();
			toggle = true;
			if( $(this).children('.drop-replace').css('display') == 'none' ) toggle = false;
			$('.drop-replace, #frame-sel-list').hide();
			if( !toggle ) $(this).children('.drop-replace').toggle();
		});
	});
	$('.drop-replace').click(function(e){
		e.stopPropagation();
	});
	$('.drop-replace').siblings('select').click(function(e){
		e.stopPropagation();
	});
	$('.option-replace').each(function(){
		$(this).click(function(){
			$(this).siblings('.option-replace').removeClass('selected');
			$(this).addClass('selected');
			$(this).parent('.drop-replace').hide();
			$(this).parent('.drop-replace').siblings('select').val( $(this).attr('rel') );
			$(this).parent('.drop-replace').siblings('select').change();
			$(this).parent('.drop-replace').siblings('span.select-replace').children('span.select-replace-label').html($(this).text());
		});
	});
	$('body').not('.drop-replace').click(function(){
		$('.drop-replace').hide();
	});
}
function checkboxReplace(element) {
	$(element).each(function(){
		$(this).wrap('<span class="checkbox"></span>');
	});
	$('span.checkbox').each(function(){
		if( $(this).children('input[type=checkbox]').is(':checked') ) $(this).prepend('<span class="checkbox-replace checked"></span>');
		else $(this).prepend('<span class="checkbox-replace"></span>');
		$(this).change(function(){
			if( $(this).children('input[type=checkbox]').is(':checked') ) $(this).children('span.checkbox-replace').addClass('checked');
			else $(this).children('span.checkbox-replace').removeClass('checked');
		});
	});
	$('span.checkbox-replace').each(function(){
		$(this).click(function(){
			$('.drop-replace').slideUp();
			$(this).siblings('input[type=checkbox]').trigger('change');
			if( !$(this).siblings('input[type=checkbox]').prop('checked') ) {
				$(this).addClass('checked');
			}
			else {
				$(this).removeClass('checked');
			}
		});
	});
}
function radioReplace(element) {
	selectReplace($('select'));
	checkboxReplace($('input[type=checkbox]'));
	radioReplace($('input[type=radio]'));
	jQuery(element).each(function(){
		jQuery(this).wrap('<span class="radio"></span>');
	});
	jQuery('span.radio').each(function(){
		if( jQuery(this).children('input[type=radio]').is(':checked') ) jQuery(this).prepend('<span class="radio-replace checked"></span>');
		else jQuery(this).prepend('<span class="radio-replace"></span>');
		jQuery(this).change(function(){
			var radioName = jQuery(this).children('input[type=radio]').attr('name');
			if( jQuery(this).children('input[type=radio]').is(':checked') ){
				jQuery('input[name='+radioName+']').each(function(){
					jQuery(this).siblings('span.radio-replace').removeClass('checked');
				});
				jQuery(this).children('span.radio-replace').addClass('checked');
			}
		});
	});
	jQuery('span.radio-replace').each(function(){
		jQuery(this).click(function(){
			jQuery('.drop-replace').slideUp();
			jQuery(this).siblings('input[type=radio]').trigger('change');
			if( !jQuery(this).siblings('input[type=radio]').prop('checked') ) {
				jQuery(this).addClass('checked');
			}
			else {
				jQuery(this).removeClass('checked');
			}
		});
	});
}


$(document).ready(function($){
	$('#menu-open').click(function(event){
		event.preventDefault();
		$('#mobile-access').addClass('open');
	});
	$('#menu-close').click(function(event){
		event.preventDefault();
		$('#mobile-access').removeClass('open');
	});
	$(window).resize(function(){
		if($(window).width() > 600) $('#mobile-access').removeClass('open');
	});
	$('.greenhouse-job-expand').each(function(){
		$(this).click(function(e){
			e.preventDefault();
			var speed = 750;
			//var target = $(this).data('target');
			//$('.greenhouse-job-expand').show();
			//$('.greenhouse-job-collapse').hide();
			//$(this).hide().siblings('a.greenhouse-job-collapse').show();
			//$('a.greenhouse-job-collapse[data="'+target+'"]').show();
			//$('.greenhouse-job-descrip-inner').removeClass('expanded').animate({'height': '200px'}, {duration: speed});
			//var contentWrapper = $(this).parent('.greenhouse-job-toggle-wrapper').siblings('.greenhouse-job-descrip-inner');
			var contentWrapper = $(this).parent('h4').parent('header').siblings('.greenhouse-job-descrip-outer');
			contentWrapper.slideDown(speed);
//			var newHeight = contentWrapper.children('.greenhouse-job-descrip').height();
//			contentWrapper.animate(
//				{
//					'height': newHeight
//				}, {
//					duration: speed,
//					complete: function(){
//						contentWrapper.addClass('expanded');
////						$([document.documentElement, document.body]).animate({
////							scrollTop: $('#'+target).offset().top
////						}, 100);
//					}
//				}
//			);
		});
	});
	$('.greenhouse-job-collapse').each(function(){
		$(this).click(function(e){
			e.preventDefault();
			var speed = 750;
			// $(this).hide().siblings('a.greenhouse-job-expand').show();
			//$(this).hide();
			var contentWrapper = $(this).parent('.greenhouse-job-toggle-wrapper').parent('.greenhouse-job-descrip-outer');
			contentWrapper.slideUp(speed);
			// contentWrapper.removeClass('expanded').animate({'height': '200px'}, {duration: speed});
		});
	});
	$('#greenhouse-job-dept-filter').change(function(e){
		e.preventDefault();
		if($(this).val() == 'all') $('.greenhouse-department').show();
		else $('.greenhouse-department').show().not('#'+$(this).val()).hide();
	});
	$('#greenhouse-job-office-filter').change(function(e){
		e.preventDefault();
		$('.greenhouse-department').show();
		if($(this).val() == 'all') $('.greenhouse-job').show();
		else {
			$('.greenhouse-job').show().not('.'+$(this).val()).hide();
			$('.greenhouse-department').each(function(){
				if($(this).children('.greenhouse-job-list').children('.greenhouse-job:visible').length < 1) $(this).hide();
			});
		}
	});
});