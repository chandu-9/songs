$(function() {
    $(".ac-button-play").on( "click", function() {
    	$(this).hide();
    	$(".ac-button-pause").show();
    });
    $(".ac-button-pause").on( "click", function() {
    	$(this).hide();
    	$(".ac-button-play").show();
    });
});