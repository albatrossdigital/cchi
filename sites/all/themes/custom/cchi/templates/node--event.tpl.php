<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if ($teaser): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php else: ?>
      <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
    <?php endif; ?>
    
    <div class="node-left">
      <?php if ($event_map): ?>
        <div class="event-map"><?php print $event_map; ?></div>
      <?php endif; ?>
    </div>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

  	<div class="content">
  	  <div class="content-left">
        <div class="event-date-day-wrapper">
          <div class="event-date-day"><?php print $event_date_day; ?></div>
        </div>
        <div class="event-date-month-wrapper">
          <div class="event-date-month"><?php print $event_date_month; ?></div>
        </div>
      </div>
      <div class="content-right">
    	  <div class="event-date-wrapper">
    	    <div class="event-date-label">When:</div>
    	    <div class="event-date-content"><?php print render($content['field_date']); ?></div>
    	  </div>
    	  <div class="event-location-wrapper">
    	    <div class="event-location-label">Where:</div>
    	    <div class="event-location-content"><?php print render($content['field_location']); ?></div>
    	  </div>
    	  <?php 
    	    // We hide the comments and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          hide($content['field_date']);
          hide($content['field_location']);
          print render($content);
         ?>
    	</div>
  	</div>
    <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
        
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<?php print render($content['comments']); ?>
