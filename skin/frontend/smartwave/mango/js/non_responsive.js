jQuery(function($){
	$(window).scroll(function(){
		var scroll_left = - $(this).scrollLeft();
		$(".header-container.type1.sticky-header,.header-container.type2.sticky-header .header-bottom,.header-container.type3.sticky-header .header-bottom,.header-container.type4.sticky-header .header-bottom,.header-container.type5.sticky-header,.header-container.type6.sticky-header .header-bottom,.header-container.type7.sticky-header .header-bottom,.header-container.type8.sticky-header,.header-container.type9 .header-bottom,.header-container.type11.sticky-header .header-bottom,.header-container.type12.sticky-header .header-bottom").css("cssText", "left: "+ scroll_left + "px !important;");
	});
});