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

    // Bind any events that are required on startup. Common events are 'load', 'deviceready', 'offline', and 'online'
    bind_events: function() {
				
		
    }
};

// Start the main app process
$(document).ready(app.init.bind(app));
