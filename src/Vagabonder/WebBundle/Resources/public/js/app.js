function labelAlign() {
	var max = 0;
    $("#new-trip-form div label").each(function(){
        if ($(this).width() > max)
            max = $(this).width();   
    });
    $("#new-trip-form div label").width(max);
    $('#new-trip-form #trip-submit').css('margin-left', max + 40);
}

$(function() {
	
	$(".welcome-grid li:nth-child(4)").hover(function(){
		$(".welcome-grid li:nth-child(5)").css("width", "8%");
		$(".welcome-grid li:nth-child(5) h3").addClass("hide");
		$(".welcome-grid li:nth-child(4)").css("width", "90%");
		$(".welcome-grid li:nth-child(4) p").removeClass("hide");
	}, function() {
		$(".welcome-grid li:nth-child(5)").css("width", "42%");
		$(".welcome-grid li:nth-child(5) h3").removeClass("hide");
		$(".welcome-grid li:nth-child(4)").css("width", "56%");		
		$(".welcome-grid li:nth-child(4) p").addClass("hide");
	});

	$(".welcome-grid li:nth-child(5)").hover(function(){
		$(".welcome-grid li:nth-child(4)").css("width", "8%");
		$(".welcome-grid li:nth-child(4) h3").addClass("hide");
		$(".welcome-grid li:nth-child(5)").css("width", "90%");
		$(".welcome-grid li:nth-child(5) p").removeClass("hide");
	}, function() {
		$(".welcome-grid li:nth-child(4)").css("width", "56%");
		$(".welcome-grid li:nth-child(4) h3").removeClass("hide");
		$(".welcome-grid li:nth-child(5)").css("width", "42%");
		$(".welcome-grid li:nth-child(5) p").addClass("hide");
	});	

	$(".welcome-grid li:nth-child(6)").hover(function(){
		$(".welcome-grid li:nth-child(7)").css("width", "8%");
		$(".welcome-grid li:nth-child(7) h3").addClass("hide");
		$(".welcome-grid li:nth-child(6)").css("width", "90%");
		$(".welcome-grid li:nth-child(6) p").removeClass("hide");
	}, function() {
		$(".welcome-grid li:nth-child(7)").css("width", "56%");
		$(".welcome-grid li:nth-child(7) h3").removeClass("hide");
		$(".welcome-grid li:nth-child(6)").css("width", "42%");		
		$(".welcome-grid li:nth-child(6) p").addClass("hide");
	});

	$(".welcome-grid li:nth-child(7)").hover(function(){
		$(".welcome-grid li:nth-child(6)").css("width", "8%");
		$(".welcome-grid li:nth-child(6) h3").addClass("hide");
		$(".welcome-grid li:nth-child(7)").css("width", "90%");
		$(".welcome-grid li:nth-child(7) p").removeClass("hide");
	}, function() {
		$(".welcome-grid li:nth-child(6)").css("width", "42%");
		$(".welcome-grid li:nth-child(6) h3").removeClass("hide");
		$(".welcome-grid li:nth-child(7)").css("width", "56%");
		$(".welcome-grid li:nth-child(7) p").addClass("hide");
	});	

	$(".welcome-grid li:nth-child(8)").hover(function(){
		$(".welcome-grid li:nth-child(8) p").removeClass("hide");
	}, function() {
		$(".welcome-grid li:nth-child(8) p").addClass("hide");
	});

	labelAlign();
});