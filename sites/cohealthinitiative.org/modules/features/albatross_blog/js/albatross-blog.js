(function ($) {
  Drupal.behaviors.albatross_blog = {
    attach: function(context, settings) {
      /*if(!$('body').hasClass('albatross-blog-processed')) {
        $('.block .view-display-id-block_2 form input.form-submit').hide();
        $('.block .view-display-id-block_2 form select.ctools-jump-menu-select').change(function() {
          var $option = $(this).find('option:selected');
          if($option.attr('value') != '') {
            window.location.href = $option.attr('value');
          }
        });
        
        $('body').addClass('albatross-blog-processed');
      }*/
    }
  };
})(jQuery);
