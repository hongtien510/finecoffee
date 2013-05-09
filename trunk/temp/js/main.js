$(document).ready(function(){

	$("img.img_logo").mouseover(function() {
		$(".img_logo").animate({width:"230px", height:"230px"});

	});
	$("img.img_logo").mouseout(function() {
		$(".img_logo").animate({width:"225px", height:"225px"});

	});
	
	
	$("img.img_name_cty").mouseover(function() {
		$(".img_name_cty").animate({width:"417px", height:"50px"});
		$(".name_cty").animate({"margin-top":"28px"})
	});
	$("img.img_name_cty").mouseout(function() {
		$(".img_name_cty").animate({width:"410px", height:"45px"});
		$(".name_cty").animate({"margin-top":"30px"})	
	});
	
	
	/*
	$("li.li_lmenu_menu").mouseover(function() {$("li.li_lmenu_menu").animate({width:"285px"});});
	$("li.li_lmenu_menu").mouseout(function() {$("li.li_lmenu_menu").animate({width:"275px"});});
	*/
});