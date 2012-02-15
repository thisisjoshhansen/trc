// JavaScript Document

$(document).ready(function(e) {
		
	$("a[href]").each(function () {
		var href = $(this).attr("href");
		if (href.indexOf('?!=') == 0)
			$(this).attr("href",'#'+href.substring(3));
	});
	
	
	$.address.change(function (event) {
		var loc = event.value.substring(1);
		if (loc == "")
			loc = "lorem-ipsum";
		
		$("#main div.content").addClass("hold-children");
		$("body").addClass("loading").removeClass("error");
		
		canLaunch = false;
		setTimeout('canLaunch = true', 300);
		
		$.ajax({
			url: "content/"+loc+".php",
			success: function (data) {
				qData = data;
				showPage();
			},
			error: function (e) {
				$("body").removeClass("loading").addClass("error");
				console.log(e);
			}
		});
		
		
	});
	
	
});

var qData = "";
var canLaunch = true;
function showPage ()
{
	if (canLaunch)
	{
		$("#main div.content").remove();
		$("#main").prepend('<div class="content hold-children">'+qData+'</div>');
		$("body").removeClass("loading");
		setTimeout('$("#main > div.content:eq(0)").removeClass("hold-children")', 10);
	} else {
		setTimeout('showPage()', 100);
	}
}