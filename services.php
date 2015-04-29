
<?php
  /*
  Template Name: Services
  */
  get_header();?>
   <?php 
	$current_url=get_stylesheet_directory_uri();
    $ht_picuture1=get_attachment_url_by_slug('huskytech-about1');
	$ht_picuture2=get_attachment_url_by_slug('huskytech-about2');
	$ht_picuture3=get_attachment_url_by_slug('huskytech-about3');
	
	$aboutpic1=get_attachment_url_by_slug('aboutpic1');
	$aboutpic2=get_attachment_url_by_slug('aboutpic2');
	$aboutpic3=get_attachment_url_by_slug('aboutpic3');
	?>
<script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
   
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve services-row1">
   		<div class="span6 our-services-title"><h2 >Our Services </h2>
        </div>
   </div>
        
   <div class="row-fluid services-row2 ">
        <div class="span12 services-r2c1">
        <h2><span class="our-mission">
			<?php      // Services Top Query
						$the_query = new WP_Query( 'name=SERVICES_TOP' );
						
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo the_content();
							}
						} else {
							echo '<h1>'.error.'</h1>';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?></div>
        
   </div>
   <div class="row-fluid services-row3">
   	   <div class="networking span6">
       
           <div class="span12 row-fluid networking-pic service-cat services-row1">
                <div class="offset5 span4"><h2 >Networking </h2>
                </div>
           </div>
           <div class="span12 networking-info paper-shadow-bottom-z-2 row-fluid">
           				<?php      // Networking Query
						$the_query = new WP_Query( 'name=SERVICES_NETWORKING' );
						
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo the_content();
							}
						} else {
							echo '<h1>'.error.'</h1>';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
           </div>
       </div>
       <div class="software span6">
           <div class="span12 row-fluid software-pic service-cat services-row1">
                <div class="offset5 span4"><h2 >Software </h2>
                </div>
           </div>
           <div class="span12 networking-info paper-shadow-bottom-z-2 row-fluid">
           		<?php      // Software Query
						$the_query = new WP_Query( 'name=SERVICES_SOFTWARE' );
						
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo the_content();
							}
						} else {
							echo '<h1>'.error.'</h1>';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
           </div>
       </div>
              <div class="accounts span6">
           <div class="span12 row-fluid accounts-pic service-cat services-row1">
                <div class="offset5 span4"><h2 >Accounts </h2>
                </div>
           </div>
           <div class="span12 networking-info paper-shadow-bottom-z-2 row-fluid">
           <?php      // Accounts Query
						$the_query = new WP_Query( 'name=SERVICES_ACCOUNTS' );
						
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo the_content();
							}
						} else {
							echo '<h1>'.error.'</h1>';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
           </div>
       </div>
              <div class="computer-mainenance span6">
           <div class="span12 row-fluid computer-m-pic service-cat services-row1">
                <div class="offset3 span9"><h2 >Computer Maintenance </h2>
                </div>
           </div>
           <div class="span12 networking-info paper-shadow-bottom-z-2 row-fluid">
           <?php      // Maintenance Query
						$the_query = new WP_Query( 'name=SERVICES_MAINTENANCE' );
						
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo the_content();
							}
						} else {
							echo '<h1>'.error.'</h1>';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
			?>
           </div>
       </div>
 </div>                
                        
<?php get_footer(); ?>
  