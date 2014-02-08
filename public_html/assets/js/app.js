/*
 * Crypt 2014 Feb
 * Author: David Rugendyke
 * Main App Controller
 */
 
 
 
var app = {
	
    // Application Constructor
    init: function() {
		
		
		// Set our main event listeners
        this.bind_events();
    },

    // Bind any events that are required on startup
    bind_events: function() {
		
		// Stick the header to the top of the screen
		$('header').stickUp();	
		// Animate bootstraps dropdown menu
		//$('.dropdown-toggle').click(function() { $(this).next('.dropdown-menu').slideToggle(250); });
		

    }
};


jQuery(function($) {
	// Start the main app process
	$(document).ready(app.init.bind(app));
});
