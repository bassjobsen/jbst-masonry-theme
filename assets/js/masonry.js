    var duh = function abc()
    {
		return 100;
		var t =  parseInt(((jQuery("#contentholder").innerWidth()-30)/4)-1);
		alert(t);
		return t;
	}	

    
    jQuery(document).ready(function () {
        
		var $container = jQuery("#contentholder");
		
		$container.imagesLoaded( function() {
			
		 
		  
		  $container.masonry({
			itemSelector: '#contentholder div[class^="col-"]',
			"stamp": ".stamp",
			// set columnWidth a fraction of the container width
		    //columnWidth: '.col-lg-3',
		    //"isFitWidth": true
		});
		// jQuery("#contentholder div[class^='col-']:first-child").css('width','600px'); 
		//$container.masonry();
		// $container.masonry( 'layoutItems', items, isStill )
		 //$container.masonry('reloadItems');
		});

});
