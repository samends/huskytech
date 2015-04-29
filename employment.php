
<?php
  /*
  Template Name: Employment
  */
   get_header();?>
   <?php 
	$current_url=get_stylesheet_directory_uri();
    $ht_picuture1=get_attachment_url_by_slug('huskytech-main1');
	$ht_picuture2=get_attachment_url_by_slug('huskytech-main2');
	$ht_picuture3=get_attachment_url_by_slug('huskytech-main3');
	
	$employment_pic1=get_attachment_url_by_slug('employment-pic1');
	$employment_pic2=get_attachment_url_by_slug('employment-pic2');
	$employment_pic3=get_attachment_url_by_slug('employment-pic3');
	
	$x_icon=get_attachment_url_by_slug('x-icon');
	$check_icon=get_attachment_url_by_slug('check-icon');
	?>
<script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>

  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
    

   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve employment-row1 about-row1">
   		<div class="span4 offset1 employment-title"><h2 >Employment </h2>
        </div>
   </div>
   
   <div class="mobile-none row-fluid employment-row2">
   		<div class="span4">
        
        
        	<div class="row-fluid"><img src="<?php echo $employment_pic1 ?>" alt="employment1">
            </div>
            
            <div class="row-fluid"><h1>Work at HuskyTech</h1>
            </div>
            
            <div class="row-fluid employment-1"><p> <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_1' );

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
?></p>
            </div>
            
        </div>
        
        <div class="span4">
        
            <div class="row-fluid offset1"><img src="<?php echo $employment_pic2 ?>" alt="employment2">
            </div>
            
            <div class="row-fluid offset1"><h1>Create Your Own Skillset</h1>
            </div>
            
            <div class="row-fluid employment-2 offset1"><p> <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_2' );

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
?></p>
            </div>
        
        </div>
        
        <div class="span4">
        
            <div class="row-fluid employment-3"><img src="<?php echo $employment_pic3 ?>" alt="employment3">
            </div>
            
            <div class="row-fluid employment-3"><h1>Build Your Future</h1>
            </div>
            
            <div class="row-fluid employment-3"><p><?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_3' );

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
?></p>
            </div>
        
        </div>
   		
   </div>
   
   <div id="carousel-employ" class="employment-row2-mobile  desktop-none carousel slide" data-ride="carousel" data-interval="7000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-employ" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-employ" data-slide-to="1"></li>
    <li data-target="#carousel-employ" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="row-fluid"><img src="<?php echo $employment_pic1 ?>" alt="employment1">
                          </div>
                          
                          <div class="row-fluid"><h1>Create Your Own Skillset</h1>
                          </div>
                          
                          <div class="row-fluid"><p> <?php
// The Query
$the_query = new WP_Query( 'name=employment_1' );

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
   </p>
                          
    </div>
    </div>
    <div class="item">
                       <div class="row-fluid"><img src="<?php echo $employment_pic2 ?>" alt="employment2">
                            </div>
                            
                            <div class="row-fluid"><h1>Build Your Future</h1>
                            </div>
                            
                            <div class="row-fluid"><p> <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_2' );

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
?></p>
                            </div>
    </div>
    <div class="item">
  <div class="row-fluid"><img src="<?php echo $employment_pic3 ?>" alt="employment3">
                          </div>
                          
                          <div class="row-fluid"><h1>Start a successful career</h1>
                          </div>
                          
                          <div class="row-fluid"><p><?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_3' );

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
?></p>
                          </div>
                          </div>
  
  
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-employ" role="button" data-slide="prev">
   
  </a>
  <a class="right carousel-control" href="#carousel-employ" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> 
   
   
   <div class="row-fluid employment-row3">
   	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseQualifications">
          Job Qualifications
        </a>
      </h4>
    </div>
    <div id="collapseQualifications" class="panel-collapse collapse">
      <div class="panel-body"><br><div class="job-qualification">
        <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_JOB_QUALIFICATION' );

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
    </div>
  </div>
  </div>
  	
   </div>
   
   
   <div class="row-fluid employment-row4">
          	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsePositions">
          Entry Level Positions
        </a>
      </h4>
    </div>
    <div id="collapsePositions" class="panel-collapse collapse">
      <div class="panel-body"><br>
        <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_ENTRY_LEVEL_POSITIONS' );

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
  </div> 
                
   </div>
   
   <div class="row-fluid employment-row5">
   <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_HIRING' );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo the_content();
	}
} else {
	
}
/* Restore original Post Data */
wp_reset_postdata();
?>

<?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_NOT_HIRING' );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo the_content();
	}
} else {
	
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>
<br>
   
   <div class="row-fluid employment-row7">
       <div class="span12">
           <a href="https://uconn.studentemployment.ngwebsolutions.com/Cmx_Content.aspx?cpId=4" target="_blank"><paper-button raisedButton class="colored" label="Apply Now"></paper-button></a>
       </div>
   </div>
   
   <div class="row-fluid employment-row8">
       <div class="dark-grey span10">
           <?php
// The Query
$the_query = new WP_Query( 'name=EMPLOYMENT_BOTTOM_TEXT' );

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