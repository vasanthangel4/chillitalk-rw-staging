$(document).ready(function(){
	var str=location.href.toLowerCase();
	$(".txtgreen  li a").each(function() {
		if (str.indexOf(this.href.toLowerCase()) > -1) {
			$("li.normalactive").removeClass("normalactive");
			$(this).parent().addClass("normalactive");
		}
	});
	
	$("li.normalactive").parents().each(function()
	{
		if ($(this).is("li")){
		$(this).addClass("normalactive");
		}
	});
})
