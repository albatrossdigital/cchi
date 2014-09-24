(function( $ ){

var $this;
var dates  = new Object;
var months_fetched = new Object;

var settings = {
  'googleUri'         : 'http://www.google.com/calendar/feeds/developer-calendar%40google.com/public/full',
  'drupalUri'         : 'http://albatrossdigital.com/hovercalendar/ajax',
  'feedSource'        : 'google'
};
  
// init function
var hoverCalendar = function(selector, options){
  $this = $(selector);

  $.extend( settings, options );
  
  $this.datepicker({
    beforeShowDay: function(dateobject) {
      return new Array(false, 'ui-datepicker-days-cell', '');
    },
    onChangeMonthYear: function(year, month, inst){
      $this.hoverCalendar('update', year, month);
    }
  });
  
  var date = new Date();
  this.update(date.getFullYear(), date.getMonth() + 1);

}; hoverCalendar.prototype = { 

  update : function( year, month ) {
    $this.addClass('loading');
    var start_date = datetostring(new Date(year, month - 1, 1));
    var end_date = datetostring(new Date(year, month, 0));
    
    if (!months_fetched[start_date]){
      
      if (settings.feedSource == 'google') {
        var uri = settings.googleUri + '?alt=json-in-script&start-min=' + start_date + '&start-max=' + end_date + '&callback=?';
        $.getJSON(uri, function(json){
          // Put all the variables into the dates array
          if (json.feed.entry){
            $.each(json.feed.entry, function(i,entry) {
              if (entry.gd$when){
                var date = entry.gd$when[0].startTime.substring(0, 10);
                if (dates[date]){
                  dates[date].push(entry.title.$t);
                } else {
                  dates[date] = new Array(entry.title.$t);
                }
              }
              
            });
          }
          
          months_fetched[start_date] = true;
          $this.hoverCalendar('attach', year, month);
        });
      
      } else if (settings.feedSource == 'views_datasource' || settings.feedSource == 'drupal') {
        var uri = settings.drupalUri + '/' + start_date.substring(0, 7) + '&callback=?';
        $.getJSON(uri, function(json){
          // Put all the variables into the dates array
          if (json.nodes.length){
            $.each(json.nodes, function(i, item) {
              if (item.node.date_from){
                var date = item.node.date_from.substring(0, 10);
                date = date.substring(6, 10) + '-' + date.substring(0, 2) + '-' + date.substring(3, 5);
                if (dates[date]){
                  dates[date].push(item.node.title);
                } else {
                  dates[date] = new Array(item.node.title);
                }
              }
              
            });
          }
          months_fetched[start_date] = true;
          $this.hoverCalendar('attach', year, month);
        });
      
      } // if settings.feedSource
      
    } else {
      
      $this.animate({ opacity : 1.0 }, 200, function() {
        $this.hoverCalendar('attach', year, month);
      });
      
    }
  },
  
  attach : function( year, month ) { 
    $this.find('.ui-datepicker-days-cell:not(.ui-datepicker-other-month)').each(function(){
      var day = $(this).text();
      var date = dates[datetostring(new Date(year, month - 1, day))];
      if (date){
        var tooltip = '';
        for (i in date){
          tooltip += '<div class="tooltip-event tooltip-event-'+ i +'">' + date[i] + '</div>';
        }
        $(this).addClass('enabled').qtip({
           content: tooltip,
        });
      } else {
        $(this).addClass('disabled');
      }
    });
    
    $this.removeClass('loading');
  }
};

  
function zeropad(num, count){
    var numZeropad = num + '';
    while(numZeropad.length < count) {
    numZeropad = "0" + numZeropad;
  }
  return numZeropad;
}

function datetostring(date){
  return date.getFullYear() +'-'+ zeropad(date.getMonth() + 1, 2) +'-'+ zeropad(date.getDate(), 2);
}

// add it to the jQuery API 
jQuery.addObject('hoverCalendar', hoverCalendar); 

})( jQuery );




