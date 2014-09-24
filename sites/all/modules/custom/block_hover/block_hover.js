(function ($) {
  Drupal.behaviors.block_hover = {
    attach: function(context, settings) {
      jQuery.fn.hoverActions = function() {
        if(!this.hasClass('block-hover-processed')) {
          var $blockContent = $('#'+this.attr('id')+' .content:eq(0)');
          this.hover(function() {
            if(!$(this).hasClass('open')) {
              $(this).removeClass('closed').addClass('open');
              $blockContent.slideToggle('fast', function() {
              });
            }
          },
          function() {
            if($(this).hasClass('open')) {
              $(this).removeClass('open').addClass('closed');
              $blockContent.toggle();
            }
          });
          this.addClass('block-hover-processed').addClass('closed');
        }
      }
      $('.block.hover-block-block').each(function() {
        $(this).hoverActions();
      });
    }
  };
})(jQuery);
