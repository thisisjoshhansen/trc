// JavaScript Document

$(document).ready(function(e) {
	
	$("a[href]").each(function () {
		var href = $(this).attr("href");
		if (href.charAt(0) == '/')
			$(this).attr("href",'#'+href.substring(1));
	});
	
	$.address.change(function (event) {
		var loc = event.value.substring(1);
		
		$.ajax({
			url: "content/"+loc+".php",
			success: function (data) {
				$("#main").html(data);
			}
		});
		
	});
	
});