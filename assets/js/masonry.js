jQuery(document).ready(function () {
        
		var $container = jQuery("#contentholder");
		
		$container.imagesLoaded( function() {
			
		 
		  
		  $container.masonry({
			itemSelector: '#contentholder div[class^="col-"]',
			"stamp": ".stamp",
		});
		});

});
