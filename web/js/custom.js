/* Add here all your JS customizations */
$(function() {
	$('pre').each(function() {
		var code = $(this).html().replace(/^\s+|\s+$/g, '');
		$(this).html(code);
	});
	$('pre').addClass('prettyprint');
	$('pre.no-pretty, pre.lang-text').removeClass('prettyprint');
	$(".example").each(function() {
		$(this).find('a').addClass($(this).data('rel'));
		$(this).find('a').colorbox({inline:true, width:"90%", rel:$(this).data('rel'), href:$(this).attr('href'), current: "Example {current} of {total}"});
	});
});