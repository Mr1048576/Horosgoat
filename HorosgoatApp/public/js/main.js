$(function(){
	//HorosgoatApp
	$(".button").click(function(){
		showsecond();
	});

	function showsecond(){
		$("#second").css({
			"display" : "block"
		});

		$("#first").animate({
			"height" : "0"
		}, "slow", function(){
			$("#first").css({
				"display" : "none"
			});
		});
	}
});