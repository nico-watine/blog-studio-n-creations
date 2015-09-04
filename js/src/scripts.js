// $( function() {
// 	/**
// 	 * Tabs.
// 	 */
// 	$( ".tabs-links a" ).on( "click", function( e ) {
// 		e.preventDefault();

// 		// Get the target tab.
// 		var newTab = $( this ).attr( "href" );

// 		// Show the targeted tab content while hiding the rest.
// 		$( newTab ).show().siblings().hide();

// 		// Add the active class to the parent list item while removing it from the rest.
// 		$( this ).parent( "li" ).addClass( "active" ).siblings().removeClass( "active" );
// 	} );
// } );

var navigation = responsiveNav(".nav-collapse");