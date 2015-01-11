$(function(){
	//HorosgoatApp
	$(".button").click(function(){
		showsecond();
	});

	function showsecond(){
		//sudden transition: (#first still exists)
		//$(document).scrollTop($(document).height());

		//smooth transition: (#first is no longer displayed)
		/*$("#second").css({
			"display" : "block"
		});*/

		$("#first").animate({
			"height" : "0"
		}, "slow", function(){
			$("#first").css({
				"height" : "100vh"
			});
			$(document).scrollTop($(document).height());
		});
	}

	if($("#third").length > 0){
		$(document).scrollTop($(document).height());
	}

	$(".error").width($(".input").width());
});