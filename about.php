  <?php
  /*
  Template Name: About
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
   
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve about-row1">
   		<div class="offset1 span4"><h2 >About </h2>
        </div>
   </div>
   
   <div class="desktop-none row-fluid about-row2-mobile ">
        <div class="span6 about-r2c1-mobile">
        <h2><span class="our-mission">Our Mission</span><br><br><p>Providing innovative technological support and education to the University of Connecticut through evolving customer service strategies</p></h2></div>
        </div>
        
   <div class="mobile-none row-fluid about-row2 ">
        <div class="span6 paper-shadow-bottom-z-3 about-r2c1 mobile-two">
        <h2><span class="our-mission">Our Mission<br></span>Providing innovative technological support and education to the University of Connecticut through evolving customer service strategies.</h2></div>
        
        <div class="span6 paper-shadow-bottom-z-2 about-r2c2 image-slider mobile-two">
              <img class="top-picture" src="<?php echo $ht_picuture3 ?>" alt="Huskytech Main Image 3">
        </div>
   </div>
   
   <div class="paper-shadow-bottom-z-1 row-fluid about-row">
		
   </div>
   <div class="row-fluid about-row3">
   		<div class="span2 mobile-one">
		<img class="top-picture" src="<?php echo $aboutpic1 ?>" alt="Huskytech Main Image 1">
        </div>
        <div class="span7 mobile-three">
                                       <?php
		// The Query
		$the_query = new WP_Query( 'name=about-vision' );
		
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
   
   <div class="paper-shadow-bottom-z-1 row-fluid about-row">
		
   </div>
   
   <div class="row-fluid about-row4">
        <div class="span7 mobile-three">
         <?php
		// The Query
		$the_query = new WP_Query( 'name=about-who' );
		
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
        <div class="span2 offset1 mobile-one">
		<img class="top-picture" src="<?php echo $aboutpic2 ?>" alt="Huskytech Main Image 1">
        </div>
   </div>
                
      <div class="paper-shadow-bottom-z-1 row-fluid about-row">
		
   </div>
   
   <div class="row-fluid about-row5">
        <?php if($aboutpic3){ ?>
        <div class="span2 mobile-one">
		<img class="top-picture" src="<?php echo $aboutpic3 ?>" alt="Huskytech Main Image 1">
        </div>
        <div class="span7 mobile-three">
        <?php } 
		else{ ?>
        <div class="span12 mobile-four">
        <?php } ?> 
                                       <?php
		// The Query
		$the_query = new WP_Query( 'name=about-what' );
		
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
   
                      
                        
                        
<?php get_footer(); ?>
  
                
                