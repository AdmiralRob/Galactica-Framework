/*
*	This is the Javascript initiliazation script. It's pulled into footer.php.
*/ 


jQuery(document).ready(function($) {

	// Mean Menu Initialization
	jQuery('.mainnav').meanmenu( {
		meanScreenWidth: "650",
		meanRevealPosition: "center",   	
	});

	// Skrollr Initialization
	var s = skrollr.init({forceHeight: false});
});

