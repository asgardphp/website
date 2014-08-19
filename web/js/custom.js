/* Add here all your JS customizations */
$(function() {
	$('pre').each(function() {
		var code = $(this).html().replace(/^\s+|\s+$/g, '');
		$(this).html(code);
	});
	$('pre').addClass('prettyprint');
	$('pre.no-pretty, pre.lang-text').removeClass('prettyprint');
	// $(".example").each(function() {
	// 	$(this).find('a').addClass($(this).data('rel'));
	// 	$(this).find('a').colorbox({inline:true, width:"90%", rel:$(this).data('rel'), href:$(this).attr('href'), current: "Example {current} of {total}"});
	// });
	$('.example').colorbox({inline:true, width:"90%", rel:$(this).data('rel'), href:$(this).attr('href'), current: "Example {current} of {total}"});

	if(getCookie('popup') != 'closed') {
		$('body').append('<div style="width:100%;padding:20px 0 20px 0; border-top:5px solid #36456E; font-weight:bold; position:fixed; bottom:0;text-align:center; background-color:#BFD0FF; color:#000;">Please be aware that Asgard is still in active development. If you are interested, <a href="https://github.com/asgardphp/asgard">you can also contribute</a>.<br>\
<a onclick="document.cookie=\'popup=closed\';$(this).parent().remove();" style="cursor:pointer">Close</a></div>');
	}
});

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
	}
	return "";
}