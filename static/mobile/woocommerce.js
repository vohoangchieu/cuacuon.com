// Description: Alterna Theme for WooCommerce
"use strict";
(function($) {
	var alternaWcInit = false;
	var AlternawooJS = function(){
		
		if(alternaWcInit){
			return false;
		}
		
		alternaWcInit = true;
		
		$('a.zoom').fancybox({helpers: {thumbs: {width: 80,height: 80}}});

	};
	
	$.fn.alternawcInit = function(){
		var alternawc = new AlternawooJS();
	};

})(jQuery);
