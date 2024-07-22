/* ===================================================================

    Author          : Valid Theme
    Template Name   : Agrica - Organic Farm Agriculture Template
    Version         : 1.0

* ================================================================= */
(function($) {
	"use strict";

	$(document).ready(function() {

        /* ==================================================
		    # Navbar
		===============================================*/
        $('button.toggle_nav').on('click', function() {
            $('aside.sidebar').toggleClass('extend');
            console.log("here");
        });


	}); // end document ready function



})(jQuery); // End jQuery
