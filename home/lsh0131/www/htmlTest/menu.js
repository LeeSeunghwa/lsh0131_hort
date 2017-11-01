$(document).ready(function(){

	var topBar = $("#topBar").offset();

	$(window).scroll(function(){

	var docScrollY = $(document).scrollTop()
	var barThis = $("#topBar")
	var barThis2 = $("#centerBar")
	var fixNext = $("#fixNextTag")
	var fixNext2 = $("#fixCenter")

	if(docScrollY <= 500 ) {
		barThis.fadeIn(500);
		barThis.addClass("top_bar_fix");
		fixNext2.addClass("pd_top_80");
		fixNext.removeClass("pd_top_80");
		$('.center_fix_zone').css('display','none');
	}else{
		barThis.fadeOut(500);
		barThis.removeClass("top_bar_fix");
		barThis2.fadeIn(500);
		fixNext2.removeClass("pd_top_80");
		}

	});

})