(function ($) {
  Drupal.behaviors.block_hover = {
    attach: function(context, settings) {
      $("#hovercalendar").hoverCalendar({
        'googleUri' : Drupal.settings.hovercalendar.google_uri,
        'drupalUri' : Drupal.settings.hovercalendar.drupal_uri,
        'feedSource': Drupal.settings.hovercalendar.source
      });
    }
  };
})(jQuery);
