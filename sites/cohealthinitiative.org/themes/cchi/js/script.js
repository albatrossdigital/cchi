/*
 *
 * Copyright (c) 2010 Jeff Lyon, Albatross Digital
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 *//**
 * Custom JS for STARTERKIT theme
 */

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.cchi = {
  attach: function(context, settings) { //new attach function
    $("a").filter(function() {
      return this.hostname &&
             this.hostname.replace(/^www\./, '') !==
                location.hostname.replace(/^www\./, '');
    }).each(function() {
       if($(this).attr('href').indexOf('cohealthinitiative.org/') == -1) { 
         $(this).attr({
             target: "_blank"
          }); //             title: "Visit " + this.href + " (click to open in a new window)"
        }
    });
  
    if ($('.view-providers').length) {
      if ($('.view-header').length) {
        $('.view-filters').hide();
        $('.view-header a', context).once(function(){
          $(this).click(function(){
            $('.view-filters').slideToggle();
            return false;
          });
        });
      } else {
        $('.view .attachment').hide();
      }
    }
    
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);

