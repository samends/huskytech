
<?php
  /*
  Template Name: Location
  */
   get_header();?>
   <?php 
	$current_url=get_stylesheet_directory_uri();
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
<script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
    <link rel="import" href="<?php echo $current_url.'/google-polymer/google-map/google-map.html' ?>">
  <link rel="import" href="<?php echo $current_url.'/google-polymer/google-map/google-map-directions.html' ?>">
  
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve location-row1 about-row1">
   		<div class="span4 offset1"><h2 >Location </h2>
        </div>
   </div>
   
     <div class="paper-shadow-bottom-z-2 row-fluid location-row3"><div class="span6"><p>Main Location: <br>
Math-Science Bdg, Rm M037<br>
196 Auditorium Road<br>
Storrs, CT 06269-1228<br><br>
</p></div>

<div class="span6"><p>Satellite Location: <br>1st Floor Homer Babbidge Library, <br>369 Fairfield Way<br>
Storrs, CT 06269
</p></div>
  </div>
   
   <div class="row-fluid location-row2">
   		<div class="span12 location-r1c1">
    <google-map zoom="16" latitude="41.808513" longitude="-72.254">
        <google-map-marker title="Huskytech" latitude="41.809513" longitude=" -72.256647"><h4>Math-Science Bdg, Rm M037, 196 Auditorium Road, Storrs, CT</h4></google-map-marker>
<google-map-marker title="Huskytech" latitude="41.806831" longitude=" -72.251791"><h4 style="padding:10px;">1st Floor Homer Babbidge Library, 369 Fairfield Way
Storrs, CT 06269</h4></google-map-marker>
  </google-map>
  </div>
  </div>                 
                        
<?php get_footer(); ?>